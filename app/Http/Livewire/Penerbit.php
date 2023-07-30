<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\Penerbit as ModelsPenerbit;
use Livewire\Component;
use Illuminate\Support\Str;

class Penerbit extends Component
{
    public $create, $nama, $edit, $penerbit_id, $delete;
    protected $rules = [
        'nama' => 'required|min:5',
    ];
    public function create()
    {
        $this->format();
        
        $this->create = true;
    }
    public function store()
    {
        $this->validate();

        ModelsPenerbit::create([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama)
        ]);

        session()->flash('sukses', 'Data berhasil ditambahkan');
        $this->format();

    }

    public function edit(ModelsPenerbit $penerbit)
    {
        $this->format();

        $this->edit = true;
        $this->nama = $penerbit->nama;
        $this->penerbit_id = $penerbit->id;
    }

    public function update(ModelsPenerbit $penerbit)
    {
        $this->validate();

        $penerbit->update([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama)
        ]);

        session()->flash('sukses', 'Data berhasil diubah');

        $this->format();
    }

    public function delete($id)
    {
        $this->format();

        $this->delete = true;
        $this->penerbit_id = $id;
    }

    public function destroy(ModelsPenerbit $penerbit)
    {
        $book = Book::where('penerbit_id', $penerbit->id)->get();
        foreach ($book as $key => $value) {
            $value->update([
                'penerbit_id' => 1
            ]);
        }

        $penerbit->delete();

        session()->flash('sukses', 'Data berhasil dihapus');

        $this->format();    
    }
    public function render()
    {
        return view('livewire.penerbit', [
            'penerbit' => ModelsPenerbit::latest()->paginate(5)
        ]);
    }
    public function format(){
        unset($this->nama);
        unset($this->create);
        unset($this->edit);
        unset($this->penerbit_id);
        unset($this->delete);
    }
}