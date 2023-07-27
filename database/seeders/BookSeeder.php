<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
