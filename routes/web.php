<?php

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
    $data = [
        'comics' => config('db.comics'),
        'navbar' => config('db.navbar'),
        'items' => config('db.items'),
        'dcComics' => config('footer.dcComics'),
        'shop' => config('footer.shop'),
        'dc' => config('footer.dc'),
        'sites' => config('footer.sites'),
        'socials' => config('footer.socials')
    ];
    return view('comics', $data);
})->name('comics');

Route::get('/comics/{id}', function($id) {
    $data = [
        'comics' => config('db.comics'),
        'navbar' => config('db.navbar'),
        'items' => config('db.items'),
        'dcComics' => config('footer.dcComics'),
        'shop' => config('footer.shop'),
        'dc' => config('footer.dc'),
        'sites' => config('footer.sites'),
        'socials' => config('footer.socials')
    ];
    $comics = config('db.comics');
    if ($id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        return view('comic.showComic', compact('comic'), $data);
    } else {
        abort('404');
    }
})->name('comic.show');
