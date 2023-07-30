<?php

namespace App\Http\Livewire;

use App\Models\Book as ModelsBook;
use Livewire\Component;

class Book extends Component
{
    public function render()
    {
        return view('livewire.book', [
            'book' => ModelsBook::latest()->paginate(5)
        ]);
    }
}
