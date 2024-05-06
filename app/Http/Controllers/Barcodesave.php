<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Picqer\Barcode\BarcodeGeneratorHTML;

class Barcodesave extends Controller
{
    public function generateBarcode(Request $request)
    {

        $id = $request->input('id');

        // You can use any method to generate a unique barcode based on the ID
        $barcodeString = $id; // For example, prefixing ID to the ID value

        $generatorPNG = new BarcodeGeneratorHTML();
        $image = $generatorPNG->getBarcode($barcodeString, $generatorPNG::TYPE_CODE_128);

        return view('barcode-save', compact('image'));
    }
}
