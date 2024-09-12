<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardProduct extends Component
{
    public $paketId;
    public $image;
    public $discount;
    public $name;
    public $category;
    public $type;
    public $price;

    public function __construct($id, $image, $discount, $name, $category, $type, $price)
    {
        $this->paketId = $id;
        $this->image = $image;
        $this->discount = $discount;
        $this->name = $name;
        $this->category = $category;
        $this->type = $type;
        $this->price = $price;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
