<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\StripeController;

use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
    return view('welcome');
});

Route::get('contact-us', function () {
    return view('contactus');
})->name('contact-us');

Route::get('about-us', function () {
    return view('aboutus');
})->name('about-us');

Route::get('causes', function () {
    return view('causes');
})->name('causes');

Route::get('events', function () {
    return view('events');
})->name('events');

Route::get('galery', function () {
    return view('galery');
})->name('galery');


Route::get('home', function () {
    return view('welcome');
})->name('home');


Route::get('login', function () {
    $email = 'test@example.com';
    $password = 'password'; // Ensure this matches your user's credentials
    
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        return redirect('home');
    }
    
    return 'not logged in'; // Handle unsuccessful login
})->name('login'); // Add a name to the route



Route::middleware(['auth'])->get('/checkout', function (Request $request) {
    $stripePriceId = 'price_1QWJqwAGR4GKrYkv9mdUjoIt';
    $quantity = 1;

    return $request->user()->checkout([
        $stripePriceId => $quantity,
    ], [
        'success_url' => route('checkout-success'),
        'cancel_url' => route('checkout-cancel'),
    ]);
})->name('checkout');

Route::get('/checkout/success', function () {
    return 'Success page';
})->name('checkout-success');

Route::get('/checkout/cancel', function () {
    return 'Cancel page';
})->name('checkout-cancel');


Route::get('/checkout/success-handler', function () {
    // Add a custom success message or log payment info
    session()->flash('success', 'Thank you for your purchase! Your payment was successful.');

    // Redirect to the homepage
    return redirect('/');
})->name('checkout-success-handler');



Route::get('/donate', [StripeController::class, 'index']);  // Route for the donation form page
Route::post('/stripe-charge', [StripeController::class, 'createCheckoutSession'])->name('stripe.createCheckoutSession');  // Route for handling Stripe payment

// Optional success and cancel routes for Stripe
Route::get('/payment/success', [StripeController::class, 'success'])->name('payment.success');
Route::get('/payment/cancel', [StripeController::class, 'cancel'])->name('payment.cancel');
