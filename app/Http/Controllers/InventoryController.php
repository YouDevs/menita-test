<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Inventory;
use App\Models\Sku;

class InventoryController extends Controller
{
    public function index()
    {
        $products = Inventory::all();
        $skus = Sku::all();
        return view('inventory.index', [
            'products' => $products,
            'skus' => $skus,
        ]);
    }

    public function create(Request $request)
    {
        // Validación de campos:
        $rules = [
            "new_sku" => "required_without:sku",
            "sku" => "required_without:new_sku",
            "product" => "required",
            "list_price" => "required",
        ];

        $messsages = [
            'new_sku.required_if' => 'Es necesario Agregar o seleccionar un sku',
            'sku.required_if' => 'Es necesario Agregar o seleccionar un sku',
            'product.required' => 'El nombre del producto es obligatorio',
            'list_price.required' => 'El precio de ista es obligatorio'
        ];

        $validator = Validator::make($request->all(), $rules, $messsages);

        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();

        // Valida si la sku que viene en la request existe en la bd o hay que crearla:
        if($request->has('new_sku') && !is_null($request->new_sku)) {
            $sku = new Sku();
            $sku->sku = $request->new_sku;
            $sku->save();
        } else {
            $sku = Sku::find($request->sku);
        }

        // Crea producto en BD:
        $new_product = new Inventory();
        $new_product->sku_id = $sku->id;
        $new_product->product = $request->product;
        $new_product->list_price = $request->list_price;
        $new_product->wholesale_price = $request->wholesale_price;
        $new_product->retail_price = $request->retail_price;
        $new_product->quantity = $request->quantity;
        $new_product->save();
        return redirect()->back();
    }

    public function output(Request $request, $id)
    {
        $product = Inventory::find($id);
        if($request->has('quantity') && !is_null($request->quantity)){
            $product->quantity = $product->quantity -= $request->output;
            $product->save();
        }

        return redirect()->back();
    }
}
