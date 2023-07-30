<div class="row">

    <div class="col-md-12">
        @include('admin-1/flash')

        <!-- @include('petugas/penerbit/create')
        @include('petugas/penerbit/edit')
        @include('petugas/penerbit/delete') -->

        <div class="card">
            <div class="card-header">
                <strong class="card-title">Penerbit</strong>
                <span wire:click="create" class="btn btn-sm btn-primary">Tambah</span>
            </div>
            @if ($penerbit->isNotEmpty())
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th>Penerbit</th>
                                <th width='15%'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penerbit as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
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

            @if ($penerbit->isEmpty())
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