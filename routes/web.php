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
    $cards = [
        [
            'src' => 'https://avatarfiles.alphacoders.com/233/thumb-1920-233330.jpg',
            'name' => 'Ezio Auditore',
            'job' => 'Assassin',
            'age' => 26,
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum laborum nisi distinctio iure veritatis suscipit enim perferendis! Similique laboriosam optio incidunt, ipsum nulla a neque aperiam cupiditate sapiente expedita quas!',
        ],
        [
            'src' => 'https://fbi.cults3d.com/uploaders/14684840/illustration-file/e52ddf50-dd29-45fc-b7a6-5fca62a84f18/jett-avatar.jpg',
            'name' => 'Sunwoo "Jett" Han',
            'job' => 'Duelist',
            'age' => 18,
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum laborum nisi distinctio iure veritatis suscipit enim perferendis! Similique laboriosam optio incidunt, ipsum nulla a neque aperiam cupiditate sapiente expedita quas!',
        ],
    ];

    $boolean = true;

    $boolcard = [
        'src' => 'https://yt3.googleusercontent.com/UXFC9eFKxjbOcUeEiIFqpywdInXJijIrh5bkfUMPlKhCLKaO6rrTfh5O5IzNTS_2Wap2yBk1J44=s900-c-k-c0x00ffffff-no-rj',
        'name' => 'Boolean S.R.C.',
        'job' => 'Programming School',
        'age' => 'x',
        'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum laborum nisi distinctio iure veritatis suscipit enim perferendis! Similique laboriosam optio incidunt, ipsum nulla a neque aperiam cupiditate sapiente expedita quas!',
    ];

    return view('home', compact('cards', 'boolean', 'boolcard'));

    // , compact('')
});
