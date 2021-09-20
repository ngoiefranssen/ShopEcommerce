<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Backend\CartController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'connexion']);

Route::get('/register', [RegisterController::class, 'register_section'])->name('register');
Route::post('/register', [RegisterController::class, 'save_user']);
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
Route::resource('products', ProductController::class);
Route::resource('cart', CartController::class);
Route::get('/orders/capture', function () {
    if (Session::has('cart')) {
        foreach (Session::get('cart') as $key => $cart) {
            Product::find($cart['id'])->update([
                'quantity' => $cart['quantity'] - $cart['qty_panier']
            ]);
        }
    }

    Session::flush();

    return <<<EOF
    <div class="max-w-[30rem] mx-auto mt-12">

        <div class="text-2xl">Merci d'avoir acheté nos produits. Vous pouvez vous diriger vers le <a class="italic underline" href="{{ route('products.catalogue') }}">catalogue</a> pour explorer d'autres chaussures.</div>

   </div>
EOF;
})->name('orders.capture');
