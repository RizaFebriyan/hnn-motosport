<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        // Ambil 6 motor terbaru
        $recent_vehicles = Vehicle::with(['brand', 'category'])->latest()->take(6)->get();
        $categories = Category::all();
        return view('welcome', compact('recent_vehicles', 'categories'));
    }

    public function stok()
    {
        return view('pages.stok');
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function jual()
    {
        return view('pages.jual');
    }
}
