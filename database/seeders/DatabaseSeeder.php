<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    // Admin
    public function run(): void
    {
        User::create([
            'name' => 'Admin HNN',
            'email' => 'riza.febriyan.73@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // kategori
        $categories = ['Sport', 'Matic', 'Bebek', 'Naked', 'Touring', 'Mobil'];
        foreach ($categories as $cat) {
            Category::create(['name' => $cat, 'slug' => Str::slug($cat)]);
        }

        // brand
        $brands = ['Yamaha', 'Honda', 'Suzuki', 'Kawasaki', 'Mitsubishi', 'Honda Mobil'];
        foreach ($brands as $brand) {
            Brand::create(['name' => $brand]);
        }

        // vehicle
        Vehicle::create([
            'category_id' => 1,
            'brand_id' => 4,
            'title' => 'Kawasaki Ninja ZX-25R ABS 2023',
            'cc' => 250,
            'model' => 'ZX-25R',
            'year' => 2023,
            'price' => 125000000,
            'description' => 'Kondisi mulus, low KM, pajak panjang, unit gres seperti baru.',
            'status' => 'Tersedia',
        ]);

        Vehicle::create([
            'category_id' => 2,
            'brand_id' => 2,
            'title' => 'Honda Beat',
            'cc' => 110,
            'model' => 'Beat',
            'year' => 2018,
            'price' => 11000000,
            'description' => 'Masih standard pabrik, cat orisinil, siap gas pool.',
            'status' => 'Tersedia',
        ]);

    }
}
