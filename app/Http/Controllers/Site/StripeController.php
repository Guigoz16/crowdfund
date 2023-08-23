<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Stripe;

class StripeController extends Controller
{
    //
    public function stripe(){

    return view('stripe');
}
public function stripePost(Request $request)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose"
        ]);
        if($payment['status']== 'succeeded'){
            Session::flash('success', 'Payment successful!');
            Donation::create([
                'donate_name' => $request->donate_name,
                'donate_email' => $request->donate_email,
                'donate_amount'=> $request->donate_amount,
                'cause_id' =>$id
            ]);
        }
   
       
           
        return redirect()->route(route:'cause')->width('success', 'payment succesfull, thanks for supporting us')

        
    };
}
