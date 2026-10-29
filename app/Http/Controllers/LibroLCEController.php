<?php

namespace App\Http\Controllers;

use App\Models\LibroLCE;

class LibroLCEController extends Controller
{
    public function index()
    {
        $libros = LibroLCE::all();

        return view('libros.index', compact('libros'));
    }
}