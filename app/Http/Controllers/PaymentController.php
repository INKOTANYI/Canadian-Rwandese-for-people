<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{

    public function showPaymentForm()
    {
        return view('payment.form'); // Create a form in 'resources/views/payment/form.blade.php'
    }

    // Process the payment
    public function processPayment(Request $request)
    {
        try {
            // Set Stripe API key
            Stripe::setApiKey(config('services.stripe.secret'));

            // Create the charge
            $charge = Charge::create([
                'amount' => $request->amount * 100, // Amount in cents
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Test Payment',
            ]);

            return redirect()->route('payment.success')->with('success', 'Payment successful!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    // Payment success page
    public function paymentSuccess()
    {
        return view('payment.success'); // Create 'resources/views/payment/success.blade.php'
    }
}
