<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        // Menampilkan semua data movie
        $movies = Movie::all();
        return response()->json($movies);
    }

    public function show($id)
    {
        // Menampilkan detail movie berdasarkan ID
        $movie = Movie::findOrFail($id);
        return response()->json($movie);
    }

    public function store(Request $request)
    {
        // Menyimpan data movie baru
        $movie = Movie::create($request->all());
        return response()->json($movie, 201);
    }

    public function update(Request $request, $id)
    {
        // Mengupdate data movie berdasarkan ID
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return response()->json($movie, 200);
    }

    public function destroy($id)
    {
        // Menghapus data movie berdasarkan ID
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return response()->json(null, 204);
    }
}
