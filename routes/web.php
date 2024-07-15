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

Route::get('/', function () {
    $footerSites = [
        [
            'id'=> 1,
            'title'=>'DC',
            'url'=>'#',
        ],
        [
            'id'=> 2,
            'title'=>'MAD Magazine',
            'url'=>'#',
        ],
        [
            'id'=> 3,
            'title'=>'DC Kids',
            'url'=>'#',
        ],
        [
            'id'=> 4,
            'title' =>'DC Universe',
            'url'=> '#',
        ],
        [
            'id'=> 5,
            'title'=>'DC Power Visa',
            'url'=>'#',
        ]
        ];

    return view('home', compact('footerSites'));
});
