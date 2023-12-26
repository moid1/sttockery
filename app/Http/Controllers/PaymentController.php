<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\CardException;
use Stripe\StripeClient;

class PaymentController extends Controller
{
    private $stripe;
    public function __construct()
    {
        $this->stripe = new StripeClient(config('stripe.api_keys.secret_key'));
    }

    public function index()
    {
        return view('website.payment');
    }

    public function payment(Request $request)
    {
        try {
            $upload = Upload::find($request->product_id);
            $convertedValue = intval($upload->price);
            if ($convertedValue === 0 && $upload->price !== "0") {
                // Conversion failed, $convertedValue is null
                return null;
            }

            // Check if the converted value is 0, then return null
            if ($convertedValue === 0) {
                return null;
            }

            if ($upload) {
                $stripe = new StripeClient(env('STRIPE_SECRET_KEY'));
                $paymentIntent = $stripe->paymentIntents->create([
                    'amount' => $upload->price * 100,
                    'currency' => 'usd',
                    'payment_method' => $request->payment_method,
                    'description' => $upload->description,
                    'confirm' => true,
                    'receipt_email' => Auth::user()->email,
                    'return_url' => 'http://goole.co'
                ]);

                // $stripe->accounts->update(
                //     'acct_1ORGWQPnHwmFyGib',
                //     [
                //         'tos_acceptance' => [
                //             'date' => 1609798905,
                //             'ip' => '8.8.8.8',
                //         ],
                //     ]
                // );
                // dd($paymentIntent);
                \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

                // $transfer = \Stripe\Transfer::create([
                //     "amount" => (12 * 100),
                //     'source_transaction' => $paymentIntent->latest_charge, // this did the trick for me and also resolve the Insufficient fund issue
                //     "destination" => 'acct_1ORGWQPnHwmFyGib',
                //     "currency" => "ron",
                // ]);

            }
        } catch (Exception $th) {
            dd($th);
            throw new Exception("There was a problem processing your payment", 1);
        }

        return back()->withSuccess('Payment done.');
    }
}
