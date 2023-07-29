@if ($edit)
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Kategori</label>
                <input wire:model="name" type="text" class="form-control" id="name" name="name">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <span wire:click="update({{ $category_id }})" class="btn btn-sm btn-success">Update</span>
        </div>
    </div>
@endif
