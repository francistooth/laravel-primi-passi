<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    $name = 'Ezio Auditore';
    $job = 'Assassin';
    $age = 26;
    $desc = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum laborum nisi distinctio iure veritatis suscipit enim perferendis! Similique laboriosam optio incidunt, ipsum nulla a neque aperiam cupiditate sapiente expedita quas!';

    return view('home', compact('name', 'job', 'age', 'desc'));

    // , compact('')
});
