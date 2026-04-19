<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Category;
use App\Models\Brand;
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

    public function stok(Request $request)
    {
        $query = Vehicle::query();

        // Category filter
        if ($request->has('category') && $request->category != '') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Brand filter
        if ($request->filled('brand')) {
            $query->where('brand_id', $request->brand);
        }

        // Price filter
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        $vehicles = $query->with(['brand', 'category'])->latest()->paginate(9);
        $categories = Category::all();
        $brands = Brand::all();

        return view('stok', compact('vehicles', 'categories', 'brands'));
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
