<div class="row">
    <div class="col-12">

        @include('admin-1/flash')

        @include('petugas/book/create')
        {{-- @include('petugas/book/edit') --}}
        {{-- @include('petugas/book/delete') --}}
        {{-- @include('petugas/book/show') --}}

        <div class="card">
            <div class="card-header">
                <span wire:click="create" class="btn btn-sm btn-primary">Tambah</span>
            </div>
            <!-- /.card-header -->
            {{-- @if ($book->isNotEmpty()) --}}
            @if ($book->isNotEmpty())
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th>Sampul</th>
                                <th>Judul</th>
                                <th>Author</th>
                                <th>Kategori</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($book as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="/storage/{{ $item->image }}" alt="{{ $item->judul }}" width="60"
                                            height="80"></td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <span wire:click="show({{ $item->id }})"
                                                class="btn btn-sm btn-success mr-2">Lihat</span>
                                            <span wire:click="edit({{ $item->id }})"
                                                class="btn btn-sm btn-primary mr-2">Edit</span>
                                            <span wire:click="delete({{ $item->id }})"
                                                class="btn btn-sm btn-danger">Hapus</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            @endif
        </div>
        <!-- /.card -->

        {{-- <div class="row justify-content-center">
            {{ $buku->links() }}
        </div> --}}

        @if ($book->isEmpty())
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-warning">
                        Anda tidak memiliki data
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>
<!-- /.row -->
