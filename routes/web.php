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
        "menu" => ["Home", "About", "Template", "Contact"],
        "title_header" => "Scopri su Canva",
        "title_main" => "Canva. La progettazione accessibile a tutti.",
        "paragrafo" => "Crea con modelli personalizzati e progetta insieme al tuo team. Condividi i progetti ovunque ti trovi e stampali in qualità professionale in qualsiasi momento.",
        "link_home" => "Clicca qui per un saluto"
    ];
    return view('home', $data);
});

Route::get('/welcome', function () {
    $data = [
        "title" => "Benvenuto sulla nostra pagina :)"
    ];
    return view('benvenuto', $data);
})->name("benvenuto");
