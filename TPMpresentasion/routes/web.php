<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;



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
    // dd(request('search'));
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    $blog_about = [

            "title"=> "Mengenai Shoppil",
            "author" => "Rifian Fernando",
            "body" => "halo nama saya Rifian fernando, saya merupakan orang yang
            membuat web ini, saya membuat web ini dari tgl 16 bulan desember 2021
            dan ternyata terasa menyenangkan untuk dapat mmebuat web ini sehingga
             penjualan di web kami dapat berguna untuk kalian semua"

    ];
    return view( 'about', [
        "title" => "About Us",
        "posts" => $blog_about
    ]);
});

// Route::get('/cart', function () {
//     return view('cart', [
//         'title' => 'Cart'
//     ]);
// });

Route::get('/checkout', function () {
    return view('checkout', [
        'title' => 'checkout'
    ]);
});

Route::get('/login', function () {
    return view('fiturlogin.login');
});

Route::get('/register', function () {
    return view('fiturlogin.register');
});

Route::post('/rstpw', function () {
    return view('fiturlogin.forgetpw');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/rstpw', function () {
    return view('fiturlogin.forgetpw');
});


//controller
Route::get('/cart', [ProductController::class, 'index']);
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
