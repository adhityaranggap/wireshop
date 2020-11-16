<?php

namespace App\Http\Livewire\Shop;
use App\Facades\Cart as FacedesCart;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = FacedesCart::get();
    }
    public function render()
    {
        return view('livewire.shop.cart');
    }

    public function removeFromCart($id)
    {
        FacedesCart::remove($id);
        $this->cart = FacedesCart::get();
        $this->emit('removeFromCart');
    }
}
