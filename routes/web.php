<?php

use App\Http\Controllers\Barcodesave;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('barcode', function () {
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
    $image = $generatorPNG->getBarcode('9678758423456789', $generatorPNG::TYPE_CODE_128);

    return response($image)->header('Content-type','image/png');
});

Route::match(['get', 'post'], '/barcode-save', [Barcodesave::class, 'generateBarcode'])->name('generateBarcode');
