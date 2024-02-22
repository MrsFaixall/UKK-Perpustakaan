@extends('layouts.index')
@section('title', 'category')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header justify-content-between">
            <div class="form-group">
                <h6 class="m-0 font-weight-bold text-primary">Tabel buku</h6>
                <p><a href="{{ route('post.create') }}" class="btn btn-primary">tambah</a></p>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 57px;">Nama Buku
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 61px;">Cetegory Buku</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 49px;">Deskripsi</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 49px;">action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr class="even">
                                        <td></td>
                                        <td>asd</td>
                                        <td>asd</td>
                                        <td>
                                            <a href="{{ route('post.edit') }}" class="btn btn-warning btn-circle">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    {{-- @foreach ($category as $item)

                                    <tr class="even">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <a href="category/{{ $item->id }}/edit" class="brn btn.sm btn-primary"><! class="fa fa-edit"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
