<?php

namespace App\Services;

use App\Models\Item;

class ItemService
{
    public function store(array $data){
        $pajak = 2500;

        $data['price'] = $this->tax($data['price'], $pajak);

        return Item::create($data);
    }

    public function tax($price, $tax){
        return $price + $tax;
    }
}