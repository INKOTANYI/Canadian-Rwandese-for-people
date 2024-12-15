<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



// use App\Http\Controllers\PaymentController;

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

// Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
// Route::post('/payment', [PaymentController::class, 'processPayment'])->name('payment.process');
// Route::get('/payment-success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');

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
