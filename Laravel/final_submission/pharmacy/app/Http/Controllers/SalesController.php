<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sales::all();
        return response()->json(['sales' => $sales], 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Define your validation rules for storing sales here
        ]);

        // Implement logic for storing sales

        return response()->json(['message' => 'Sales stored successfully'], 201);
    }

    public function show($id)
    {
        $sales = Sales::findOrFail($id);
        return response()->json(['sales' => $sales], 200);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            // Define your validation rules for updating sales here
        ]);

        // Implement logic for updating sales

        return response()->json(['message' => 'Sales updated successfully'], 200);
    }

    public function destroy($id)
    {
        $sales = Sales::findOrFail($id);
        $sales->delete();

        return response()->json(['message' => 'Sales deleted successfully'], 200);
    }
}
