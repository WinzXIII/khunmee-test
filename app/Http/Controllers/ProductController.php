<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductEditLog;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $oldName = $product->name;
        $product->name = $request->name;
        $product->save();

        ProductEditLog::create([
            'product_id' => $product->id,
            'user_id' => Auth::id(),
            'old_name' => $oldName,
            'new_name' => $request->name,
            'edited_at' => now()
        ]);

        return redirect()->route('products.index')->with('success', 'แก้ไขชื่อสินค้าเรียบร้อยแล้ว');
    }
}
