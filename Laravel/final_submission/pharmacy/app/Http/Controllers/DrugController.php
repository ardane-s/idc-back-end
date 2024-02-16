<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    public function index()
    {
        $drugs = Drug::all();
        return response()->json(['drugs' => $drugs], 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $drug = Drug::create($validatedData);

        return response()->json(['drug' => $drug], 201);
    }

    public function show($id)
    {
        $drug = Drug::findOrFail($id);
        return response()->json(['drug' => $drug], 200);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'description' => 'string',
            'price' => 'numeric',
            'stock' => 'integer',
        ]);

        $drug = Drug::findOrFail($id);
        $drug->update($validatedData);

        return response()->json(['drug' => $drug], 200);
    }

    public function destroy($id)
    {
        $drug = Drug::findOrFail($id);
        $drug->delete();

        return response()->json(['message' => 'Drug deleted successfully'], 200);
    }
}
