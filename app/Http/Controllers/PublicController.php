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

    public function stok(Request $request)
    {
        $query = Vehicle::query();

        // Filter
        if ($request->has('category') && $request->category != '') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        if ($request->has('brand') && $request->brand != '') {
            $query->where('brand_id', $request->brand);
        }

        $vehicles = $query->latest()->paginate(9);
        $categories = Catergory::all();
        $brands = brand::all();

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
