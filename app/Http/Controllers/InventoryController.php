<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
        $products = Inventory::all();
        return view('inventory.index', ['products' => $products]);
    }

    public function create(Request $request)
    {
        $new_product = new Inventory();
        $new_product->sku = $request->new_sku;
        $new_product->product = $request->product;
        $new_product->list_price = $request->list_price;
        $new_product->wholesale_price = $request->wholesale_price;
        $new_product->retail_price = $request->retail_price;
        $new_product->quantity = $request->quantity;
        $new_product->save();
        return redirect()->back();
    }
}
