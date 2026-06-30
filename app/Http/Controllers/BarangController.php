<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Services\ItemService;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    private ItemService $itemService;

    public function __construct(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);

         $this->itemService->store($validated);

        return redirect('/data');
    }

    public function index(){
        $data = Item::get();

        return view('/data', compact(('data')));
    }
}
