<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

  
 /*
|--------------------------------------------------------------------------
| Web Routes
|----------------------------------- --------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/new',function(){
    return redirect()->route('sample');
});

Route::get('/new/welcome', function() {
    return "<h1>User  value</h1>";
})->name('sample');



Route::get("/settings",function(){
    return "Settings Page";
});


Route::get('/employee',[EmployeeController::class,'index']);