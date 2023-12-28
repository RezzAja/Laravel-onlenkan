<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products = Product::all();
        
        return view('pages.products.index', [
            'products' => $products,
            'title' => 'Semua Data Produk'
        ]);
            

    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.products.create', [
            'title' => 'Tambah Data Baru'
        ]);
            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('products' , 'public');

        Product::create($data);
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $product = Product::findOrFail($id);

        return view('pages.product.edit', [
            'title' => 'Edit Data Baru',
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        if(!empty($data['image'])){
            $data['image'] = $request->file('image')->store('products' , 'public');
        }else{
            unset($data['image']);
        }


        Product::findOrFail($id)->update($data);
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product= Product::findOrFail($id);
        Storage::delete($product->image);
        $product->delete();

        return redirect()->back();
    }
}
