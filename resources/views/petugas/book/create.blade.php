@if ($create)
    <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Buku</h4>
                    <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input wire:model="judul" type="text" class="form-control" id="judul">
                        @error('judul')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input wire:model="author" type="text" class="form-control" id="author">
                                @error('author')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="category">Kategori</label>
                                <select wire:model="category_id" wire:click="pilihKategori" class="form-control"
                                    id="category">
                                    <option selected value="">Pilih Kategori</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <select wire:model="penerbit_id" class="form-control" id="penerbit">
                                    <option selected value="">Pilih Penerbit</option>
                                    @foreach ($penerbit as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                @error('penerbit_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="modal-footer justify-content-between">
                    <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Batal</span>
                    <span type="button" wire:click="store" class="btn btn-success">Simpan</span>
                </div>
            </div>
        </div>
    </div>
@endif
