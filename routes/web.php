<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum metus leo, rutrum at nibh vitae, vehicula elementum urna. Duis viverra vehicula turpis, quis molestie mauris congue faucibus. Donec vel erat justo. Etiam id faucibus erat. In hac habitasse platea dictumst. Vestibulum elementum nulla id fermentum viverra. Curabitur libero risus, malesuada at diam id, molestie tincidunt nunc.'
            ],
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum metus leo, rutrum at nibh vitae, vehicula elementum urna. Duis viverra vehicula turpis, quis molestie mauris congue faucibus. Donec vel erat justo. Etiam id faucibus erat. In hac habitasse platea dictumst. Vestibulum elementum nulla id fermentum viverra. Curabitur libero risus, malesuada at diam id, molestie tincidunt nunc.'
        ]
    ]
    ]);
});

