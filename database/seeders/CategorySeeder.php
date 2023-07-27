<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        $category = ['none', 'novel', 'komik', 'buku anak'];

        foreach ($category as $value) {
            Category::create([
                'name' => $value,
                'slug' => Str::slug($value)
            ]);
        }
    }
}
