<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
    //return view('welcome');

//});
Route::get('/home',[HomeController::class,'cb'])->name('home');
// Thêm sản phẩm
Route::get('/create',[HomeController::class,'create'])->name('sanpham');
Route::post('/create',[HomeController::class,'create']);
// Hiện sản phẩm
Route::get('/index',[HomeController::class,'index'])->name('index');
//Route::get('/about',[HomeController::class,'menu']);
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/elements',[HomeController::class,'elements'])->name('elements');
//Route::get('/login',[HomeController::class,'login']);
//Route::get('/register/{name1?}/{name2?}/{email?}/{password?}/{password1?}',[HomeController::class,'register']);
Route::get('/register',[LogController::class,'register']);
//Route::get('/login/{password?},{email?}',[LogController::class,'login']);
Route::get('/login',[LogController::class,'login']);
Route::get('/password',[LogController::class,'password']);
//Route::get('/password/{email}',[LogController::class,'password']);
Route::post('/login',[LogController::class,'login']);
Route::post('/password',[LogController::class,'password']);
Route::post('/register',[LogController::class,'register']);
Route::get('/dangky',[UserController::class, 'dangky'])->name('register');
Route::post('/dangky',[UserController::class, 'dangky']);
Route::get('/dangnhap',[UserController::class, 'dangnhap'])->name('login');
Route::post('/dangnhap',[UserController::class, 'dangnhap']);
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function(){
        Route::get('/',[HomeController::class,'index']);
        Route::get('/create',[HomeController::class,'create'])->name('sanpham');
        Route::post('/create',[HomeController::class,'create']);
    });
});
//Route::get('chi-tiet-sanpham/{id}',['as'=>'chitietsanpham','uses'=>'ProductController@getChitiet']);
Route::get('chi-tiet-sanpham/{id}',[ProductController::class,'getChitiet'])->name('chitietsanpham');
?>
