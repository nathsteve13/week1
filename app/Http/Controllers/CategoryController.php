<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function showTotalFood() {
        $categories = Category::all()
            ->map(function ($category) {
            return [
                'id' => $category['id'],
                'name' => $category['name'],
                'image' => $category['image'],
            ];
            })
            ->toArray();

        return view('category.totalfood', compact('categories'));
    }

    public function showListFoods()
    {
        $category = Category::find($_POST['idcat']);
        $name = $category->name;
        $data = $category->food;
        return response()->json(array(
                'status' => 'oke',
                'title' => $name.' Food List',
                'body' => view('category.showListFood', compact('name', 'data'))->render()
              ), 200);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        try {
            DB::beginTransaction();

            $data = new Category();
            $data->name = $request->get('name');
            $data->save();

            DB::commit();

            return redirect()->route('category.totalfood')->with('success', 'Category created successfully!');
        } catch(Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create category. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
