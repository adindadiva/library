<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class Category extends Component
{
    public $create, $name, $edit, $category_id, $delete;
    protected $rules = [
        'name' => 'required|min:5',
    ];
    public function create()
    {
        $this->format();
        $this->create = true;
    }
    public function store()
    {
        $this->validate();

        ModelsCategory::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name)
        ]);

        session()->flash('sukses', 'Data berhasil ditambahkan');
        $this->format();

    }

    public function edit(ModelsCategory $category)
    {
        $this->format();

        $this->edit = true;
        $this->name = $category->name;
        $this->category_id = $category->id;
    }

    public function update(ModelsCategory $category)
    {
        $this->validate();

        $category->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name)
        ]);

        session()->flash('sukses', 'Data berhasil diubah');

        $this->format();
    }

    public function delete($id)
    {
        $this->format();

        $this->delete = true;
        $this->category_id = $id;
    }

    public function destroy(ModelsCategory $category)
    {
        $book = Book::where('category_id', $category->id)->get();
        foreach ($book as $key => $value) {
            $value->update([
                'category_id' => 1
            ]);
        }

        $category->delete();

        session()->flash('sukses', 'Data berhasil dihapus');

        $this->format();    
    }
    public function render()
    {
        return view('livewire.category', [
            'category' => ModelsCategory::latest()->paginate(5)
        ]);
    }
    public function format(){
        unset($this->name);
        unset($this->create);
        unset($this->edit);
        unset($this->kategori_id);
        unset($this->delete);
    }
}