<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.admin-products-component', ['products' => $products])->layout('layouts.base');
    }
}
