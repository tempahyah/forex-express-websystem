<?php

namespace App\Http\Controllers;

use App\Bureau;
use App\Rate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BureausController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bureaus = Bureau::all();

        return view('bureaus.index',['bureaus'=> $bureaus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bureaus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
               
            'name'=> 'required',
            'description'=> 'nullable',
        ]);
        // Create Bureau
        $bureau = new Bureau();
        $bureau->name = $request->input('name');
        $bureau->description = $request->input('description');
        $bureau->user_id = Auth::user()->id;
        $bureau->save();

        return redirect('/bureaus')->with('success','Bureau Successfully created');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
    public function show(Bureau $bureau)
    {
        $bureau = Bureau::find($bureau->id);
        $rates = DB::table('rates')
            ->join('bureaus', 'rates.bureau_id', '=', 'bureaus.id')
            ->join('currencies', 'rates.currency_id', '=', 'currencies.id')
            ->join('modes', 'rates.mode_id', '=', 'modes.id')
            ->select('rates.rate', 'bureaus.id','bureaus.name', 'modes.mode','currencies.currency')
            ->get();

        return view('bureaus.show',['bureau'=> $bureau, 'rates'=>$rates]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
    public function edit(Bureau $bureau)
    {
        $bureau = Bureau::find($bureau->id);
        //Check for correct user
        if (auth()->user()->id != $bureau->user_id ) {
            return redirect('/bureaus')->with('error','Unauthorised');

        }

        return view('bureaus.edit',['bureau'=> $bureau]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bureau $bureau)
    {
        $this->validate($request,[
               
            'name'=> 'required',
            'description'=> 'nullable',
        ]);
        // Create Bureau
        $bureau = Bureau::find($bureau->id);
        $bureau->name = $request->input('name');
        $bureau->description = $request->input('description');
        $bureau->user_id = Auth::user()->id;
        $bureau->save();

        return redirect('/bureaus')->with('success','Bureau Details Successfully Updated');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bureau $bureau)
    {
        $findBureau = Bureau::find($bureau->id);
        if (auth()->user()->id != $bureau->user_id ) {
            return redirect('/bureaus')->with('error','Unauthorised');
        } else {
            if($findBureau->delete()){
                return redirect('/bureaus')->with('success','Forex Bureau Successfully Deleted');
    
            }
            return back()->withInput()->with('error','Bureau Could not be Deleted');
        }
        
        
    }
}
