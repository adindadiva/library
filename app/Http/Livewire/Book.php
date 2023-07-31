<?php

namespace App\Http\Livewire;

use App\Models\Book as ModelsBook;
use Livewire\Component;
use Illuminate\Support\Str;

class Book extends Component
{
    public $create, $judul, $author, $penerbit, $category, $category_id, $penerbit_id;

    protected $rules = [
        'judul' => 'required',
        'author' => 'required',
        'category_id'=>'required',
        'penerbit_id'=>'required',
    ];
    protected $validationAttributes = [
        'category_id' => 'category',
        'penerbit_id' => 'penerbit',
    ];

    public function create(){
        $this->format();
        $this->create = true;

        // $this->category = Category::all();
        // $this->penerbit = Penerbit::all();
    }

    public function store(){
        $this->validate();

        ModelsBook::create([
            'judul' => $this->judul,
            'author' => $this->author,
            'category_id' => $this->category_id,
            'penerbit' =>$this->penerbit_id,
            'slug'=> Str::slug($this->judul)
        ]);

        session()->flash('sukses', 'Data berhasil ditambahkan.');
        $this->format();
    }
    
    public function render()
    {
        
        return view('livewire.book', [
            'book'=> ModelsBook::latest()->paginate(5)
        ]);
    }

    public function format(){
        unset($this->create);
        unset($this->judul);
        unset($this->author);
        unset($this->category);
        unset($this->penerbit);
        unset($this->penerbit_id);
        unset($this->category_id);


    }
    
}