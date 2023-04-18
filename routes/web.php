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

Route::get('/students', function () {
    $arr=[
        'students' => [
            [
            'id' => '1',
            'name' => 'Fatma Ahmed'
            ],

            [
                'id' => '2',
                'name' => 'Mohamed Taher'
            ],

            [
                'id' => '3',
                'name' => 'Rahim Ahmed'
            ],

            [
                'id' => '4',
                'name' => 'Yaser Montaser'
            ],
            [
                'id' => '5',
                'name' => 'Mohamed Eldeep'
            ],
            [
                'id' => '6',
                'name' => 'Nada khaled'
            ],
            
        ]
    ];
    
    
    return view('list', $arr);
});
