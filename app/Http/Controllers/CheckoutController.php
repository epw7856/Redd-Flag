<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class CheckoutController extends Controller
{


    public function charge(Request $request)
    {
    	$amount = $request->amountInCents;
        
        try {
		    Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

		    $customer = Customer::create(array(
		        'email' => $request->stripeEmail,
		        'source' => $request->stripeToken
		    ));

		    $charge = Charge::create(array(
		        'customer' => $customer->id,
		        'amount' => $amount,
		        'currency' => 'usd'
		    ));

		    return view('thankyou');
		} catch (\Exception $ex) {
		    return back()->with('error', 'Payment unsuccessful! Please try again');
		}
    }

}
