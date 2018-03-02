<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Manufacturer;

class ProductController extends Controller
{

    public function create() {

        $categories = Category::all();
        $manufacturers = Manufacturer::all();

        return view('product/create',
        [
            'categories' => $categories,
            'manufacturers' => $manufacturers
        ]);
    }

    public function destroy(Request $request) {
        // echo "destroy";
        $product = Product::find($request->id);
        $product->delete();

        return redirect()->route('home');
    }

    private function validation(Request $request) {

        $request->validate([
            'title' => 'required|max:300',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|digits_between:0,10',
            'description' => 'required|max:1000',
            'category' => 'nullable',
            'manufacturer' => 'required'
        ], [
            // Perašys visas required taisykles
            // :attribute inputo vardas
            'required' => 'Laukelis :attribute privalomas.',
            // Perašys tik title inputo required taisyklę
            'title.required' => 'Antraštės laukelis yra privalomas',
        ]);

        // return $request;
    }

    public function store(Request $request) {

        $this->validation($request);

        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->category = $request->category;
        $product->manufacturer = $request->manufacturer;
        $product->save();

        return redirect()->route('products.show', $product->id);

    }

    public function edit(Request $request) {

        $categories = Category::all();
        $manufacturers = Manufacturer::all();
        $product = Product::find($request->id);

        return view('product/edit', [
            'categories' => $categories,
            'manufacturers' => $manufacturers,
            'product' => $product
        ]);
    }

    public function update(Request $request) {

        $this->validation($request);

        $product = Product::find($request->id);
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->category = $request->category;
        $product->manufacturer = $request->manufacturer;
        $product->save();

        return redirect()->route('products.show', $product->id);
    }

    public function show(Request $request) {

        /* SELECT * FROM products WHERE id = $id */
        $product = Product::findOrFail($request->id);

        return view('product/show', ['product' => $product]);

    }
}
