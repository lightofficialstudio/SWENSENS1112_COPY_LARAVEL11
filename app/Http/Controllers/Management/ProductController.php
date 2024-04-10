<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('back-end.pages.product.index', compact('products'));
    }

    public function create()
    {
        $categorys = Category::all();
        return view('back-end.pages.product.form', compact('categorys'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categorys = Category::all();
        return view('back-end.pages.product.form', compact('product', 'categorys'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'status' => 'required'
        ]);
        try {
            DB::beginTransaction();
            if ($request->id) {
                Product::find($request->id)
                    ->update($request->all());
            } else {
                Product::create($request->all());
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }


        return redirect()->route('backend.product.index');
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('backend.product.index');
    }


}
