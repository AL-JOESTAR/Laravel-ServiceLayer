<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function store (Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);
        
        $pajak = 2500;

        $validated['price'] = $validated['price'] + $pajak;

        Item::create($validated);


        return redirect('/data');
    }

    public function index(){
        $data = Item::get();

        return view('/data', compact(('data')));
    }
}
