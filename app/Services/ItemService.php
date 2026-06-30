<?php

namespace App\Services;

use App\Models\Item;

class ItemService
{
    Public function getall(){
        return Item::get();
    }

       public function create(array $data)
    {
        return Item::create($data);
    }

    public function update(Item $item, array $data)
    {
        $item->update($data);

        return $item;
    }

    public function delete(Item $item)
    {
        return $item->delete();
    }
}