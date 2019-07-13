<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rate;
use App\Bureau;
use App\Currency;
use App\Mode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConvertCurrencyController extends Controller
{
    public function convertCurrency()
    {
        $bureaus = DB::table('bureaus')->select('bureaus.id', 'bureaus.name')->get();;
        $modes = DB::table('modes')->select('modes.id', 'modes.mode')->get(); 
        $currencies = DB::table('currencies')->select('currencies.id', 'currencies.currency')->get(); 
        $rates = DB::table('rates')->select('rates.id', 'rates.rate')->get(); 

        return view('convert.convert_currency',['bureaus'=>$bureaus,'modes'=>$modes,'currencies'=>$currencies,'rates'=> $rates]);
    }
}
