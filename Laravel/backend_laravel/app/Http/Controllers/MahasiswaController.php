<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        try {
            $mahasiswa = Mahasiswa::get();
            return response()->json(['data' => $mahasiswa, 'message' => 'success', 'status' => true], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error occurred', 'error' => $e->getMessage(), 'status' => false], 500);
        }
    }
}
