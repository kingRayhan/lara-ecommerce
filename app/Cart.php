<?php
namespace App;

class Cart
{
    public $items = [];
    public $totalQty = 0;
    public $totalprice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalprice = $oldCart->totalprice;
        }
    }

    public function remove($id)
    {
        $this->totalprice -= $this->items[$id]['price'];
        unset($this->items[$id]);
        $this->totalQty--;
    }

    public function add($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        $itemExists = false;
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
                $itemExists = true;
            }
        }

        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        if (!$itemExists) {
            $this->totalQty++;
            $this->totalprice += $storedItem['price'];
        } else {
            $this->totalprice += $item->price;
        }
    }

}
