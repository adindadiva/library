<div class="row">

    <div class="col-md-12">
        @include('admin-1/flash')

        @include('petugas/category/create')
        @include('petugas/category/edit')
        @include('petugas/category/delete')

        <div class="card">
            <div class="card-header">
                <strong class="card-title">Categories</strong>
                <span wire:click="create" class="btn btn-sm btn-primary">Tambah</span>
            </div>
            @if ($category->isNotEmpty())
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th>Category</th>
                                <th width='15%'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <div class="btn-group">
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
            @endif

            @if ($category->isEmpty())
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


</div>
