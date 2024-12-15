<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



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


Route::get('/checkout', function (Request $request) {
    $stripePriceId = 'price_1QWJqwAGR4GKrYkv9mdUjoIt';
 
    $quantity = 1;
 
    return $request->user()->checkout([$stripePriceId => $quantity], [
        'success_url' => route('checkout-success'),
        'cancel_url' => route('checkout-cancel'),
    ]);
})->name('checkout');

   $email = 'test@example.com';
   $password = 'password';
   if (Auth::attempt(['email' => $email, 'password' => $password])){

return redirect('/home');

   }
   dd('not loged in');


 
Route::get('/checkout/success',function(){

    return 'success page';
})->name('checkout-success');
Route::get('/checkout/cancel', function(){
      return 'checkout.cancel';

})->name('checkout-cancel');



