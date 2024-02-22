@extends('layouts.index')

@section('category', 'tambah-category')

@section('content')
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">tabel</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="nama" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kategory">kategory</label>
                            <select name="kategory">
                                <option value="1">FIKSI</option>
                                <option value="2">NONFIKSI</option>
                                <option value="3">LEGENDA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">descripsi</label>
                            <br>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10">des</textarea>
                        </div>
                        <button class="btn btn-success float-right">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
