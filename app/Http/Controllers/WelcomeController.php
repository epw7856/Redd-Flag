<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class WelcomeController extends Controller
{
    
    public function root()
    {
    	if (Auth::check()){
			return Redirect::to('/home');

		}
		else{

			$total = Self::calcTotal();
			$percentage = round($total / 15000.00 * 100.00);
        	return view('welcome', ['total' => $total, 'percentage' => $percentage]);
		}

        
    }

    public function welcome()
    {
		$total = Self::calcTotal();
		$percentage = round($total / 15000.00 * 100.00);
        return view('welcome', ['total' => $total, 'percentage' => $percentage]);
    }


    public static function calcTotal(){

        $donations = DB::table('donations')
            ->select('*')
            ->get();

	    $total = 0.00; 
	    if (!is_null($donations)){
	            
	        foreach ($donations as $item){
	            $total += $item->saleamt;
	        }
	    }
	    else {
	        $total = 0.00;
	    }

        return $total;
    
    }
}
