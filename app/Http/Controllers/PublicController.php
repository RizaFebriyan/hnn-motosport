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

        // Filter Pencarian (Search) - Berdasarkan judul unit
        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Filter Kategori
        if ($request->has('category') && $request->category != '') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Filter Brand
        if ($request->has('brand') && $request->brand != '') {
            $query->where('brand_id', $request->brand);
        }

        // Filter Model
        if ($request->filled('model')) {
            $query->where('title', $request->model);
        }

        // Filter Tahun
        if ($request->has('year') && $request->year != '') {
            $query->where('year', $request->year);
        }

        // Filter Harga
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        $vehicles = $query->latest()->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();
        $models = Vehicle::select('title')->distinct()->orderBy('title', 'asc')->pluck('title');
        $years = Vehicle::select('year')->distinct()->orderBy('year', 'desc')->pluck('year');

        return view('stok', compact('vehicles', 'categories', 'brands', 'models', 'years'));
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
