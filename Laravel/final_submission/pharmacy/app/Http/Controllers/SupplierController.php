<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return response()->json(['suppliers' => $suppliers], 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email|unique:suppliers,email',
        ]);

        $supplier = Supplier::create($validatedData);

        return response()->json(['supplier' => $supplier], 201);
    }

    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return response()->json(['supplier' => $supplier], 200);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'address' => 'string',
            'phone_number' => 'string',
            'email' => 'email|unique:suppliers,email,' . $id,
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->update($validatedData);

        return response()->json(['supplier' => $supplier], 200);
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return response()->json(['message' => 'Supplier deleted successfully'], 200);
    }
}
