<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::all();
        return view('foods.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('foods.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nutrition_fact' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        try {
            DB::beginTransaction();

            Food::create([
                'name' => $request->name,
                'nutrition_fact' => $request->nutrition_fact,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category_id,
            ]);

            DB::commit();

            return redirect()->route('foods.index')->with('success', 'Food created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()
                ->route('foods.create')
                ->with('error', 'An error occurred while creating the food: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        //
    }
}
