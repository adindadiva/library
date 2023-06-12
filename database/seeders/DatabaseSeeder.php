<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'Cerita Anak',
            'slug' => 'cerita-anak'
        ]);

        Category::create([
            'name' => 'Fiksi',
            'slug' => 'fiksi'
        ]);

        Book::create([
            'category_id' => 1,
            'judul' => 'Kancil dan Buaya',
            'author' => 'Wahid',
            'penerbit' => 'Asrul',
            'jumlah_halaman' => '200 halaman',
            'deskripsi' => '
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas sequi illum obcaecati? Nemo et cum suscipit repellat nulla architecto ipsa aliquam tempore, quos aperiam sequi sed impedit nobis velit exercitationem, nisi commodi quibusdam earum? Minima modi aut sint sed repellendus.',
            'tahun' => 2014,
            'image' => 'https://picsum.photos/400/300'

        ]);

        Book::create([
            'category_id' => 2,
            'judul' => 'Mahika',
            'author' => 'Aya',
            'penerbit' => 'Asrul',
            'jumlah_halaman' => '200 halaman',
            'deskripsi' => '
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas sequi illum obcaecati? Nemo et cum suscipit repellat nulla architecto ipsa aliquam tempore, quos aperiam sequi sed impedit nobis velit exercitationem, nisi commodi quibusdam earum? Minima modi aut sint sed repellendus.',
            'tahun' => 2020,
            'image' => 'https://picsum.photos/400/300'

        ]);

        Book::create([
            'category_id' => 2,
            'judul' => 'Dikta & Hukum',
            'author' => 'Diva',
            'penerbit' => 'Asrul',
            'jumlah_halaman' => '200 halaman',
            'deskripsi' => '
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas sequi illum obcaecati? Nemo et cum suscipit repellat nulla architecto ipsa aliquam tempore, quos aperiam sequi sed impedit nobis velit exercitationem, nisi commodi quibusdam earum? Minima modi aut sint sed repellendus.',
            'tahun' => 2019,
            'image' => 'https://picsum.photos/400/300'
        ]);

        User::create([
            'first_name' => 'Jeon',
            'last_name' => 'Jungkook',
            'email' => 'jeonjungkook@gmail.com',
            'password' => '12345',
        ]);

        User::create([
            'first_name' => 'Noel',
            'last_name' => 'Abian',
            'email' => 'noelabian@gmail.com',
            'password' => '12345',
        ]);

        User::create([
            'first_name' => 'Sabrina',
            'last_name' => 'Zahra',
            'email' => 'sabrinazhra@gmail.com',
            'password' => '12345',
        ]);
    }
}
