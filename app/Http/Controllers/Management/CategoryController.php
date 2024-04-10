<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::all();
        return view('back-end.pages.category.index', compact('categorys'));
    }

    public function create()
    {
        return view('back-end.pages.category.form', );
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('back-end.pages.category.form', compact('category'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);
        try {
            DB::beginTransaction();
            if ($request->id) {
                Category::find($request->id)
                    ->update($request->all());
            } else {
                Category::create($request->all());
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }


        return redirect()->route('backend.category.index');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('backend.category.index');
    }
}
