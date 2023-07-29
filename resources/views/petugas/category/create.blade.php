@if ($create)
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Kategori</label>
                <input wire:model="name" type="text" class="form-control" id="name" name="name">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <span wire:click="store" class="btn btn-sm btn-success">Simpan</span>
        </div>
    </div>
@endif
