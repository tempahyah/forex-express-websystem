<?php

namespace App\Http\Controllers;

use App\Rate;
use App\Bureau;
use App\Currency;
use App\Mode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rates = DB::table('rates')
            ->join('bureaus', 'rates.bureau_id', '=', 'bureaus.id')
            ->join('modes', 'rates.mode_id', '=', 'modes.id')
            ->join('currencies', 'rates.currency_id', '=', 'currencies.id')
            ->select('rates.rate','rates.id', 'bureaus.name', 'currencies.currency','modes.mode')
            ->get();   

        return view('rates.index',['rates'=> $rates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $bureaus = DB::table('bureaus')->select('bureaus.id', 'bureaus.name')->get();;
            $modes = DB::table('modes')->select('modes.id', 'modes.mode')->get(); 
            $currencies = DB::table('currencies')->select('currencies.id', 'currencies.currency')->get(); 
            return view('rates.create',['bureaus'=>$bureaus,'modes'=>$modes, 'currencies'=>$currencies]); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $rate = Rate::create([
                'rate'=>$request->input('rate'),
                'bureau_id' =>$request->input('bureau_id'),
                'mode_id'=>$request->input('mode_id'),
                'currency_id'=>$request->input('currency_id'),
                'user_id'=>Auth::user()->id
            ]);
    
            if($rate){
                return redirect()->route('rates.index')->
                with('success','Forex Rate Added Successfully');
            }
        }
        return back()->withInput()->with('errors','Error Creating New rate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function show(Rate $rate)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function edit(Rate $rate)
    {
        $rate = Rate::find($rate->id);
        $rates = DB::table('rates')
        ->join('bureaus', 'rates.bureau_id', '=', 'bureaus.id')
        ->join('modes', 'rates.mode_id', '=', 'modes.id')
        ->join('currencies', 'rates.currency_id', '=', 'currencies.id')
        ->select('rates.rate','rates.id', 'bureaus.name', 'currencies.currency','modes.mode')
        ->get();   

    return view('rates.edit',['rate'=>$rate,'rates'=> $rates]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rate $rate)
    {
        $this->validate($request,[
               
            'rate'=> 'required',
        
        ]);
        //save data 
        $rateUpdate = Rate::where('id',$rate->id)->update([
            
            'bureau_id' => $request->input('bureau_id'),
            'currency_id' => $request->input('currency_id'),
            'mode_id' => $request->input('mode_id'),
            'rate' => $request->input('rate'),
        ]);
        //Redirect User to bureaus page with a success Message

        if($rateUpdate){
            return redirect()->route('rates.index')->with('success','Rate Successfully Updated'); 
        }
        return back()->withInput();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rate $rate)
    {
        

        $findRate = Rate::find($rate->id);
        if($findRate->delete()){
            return redirect()->route('rates.index')->with('success','Rate deleted Successfully');

        }
        return back()->withInput()->with('error','Rate Could not be Deleted');
    }
}
