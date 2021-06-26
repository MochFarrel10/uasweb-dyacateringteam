@extends('layouts.adminmaster')
@section('title', 'Add Menu')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tambakan Menu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                            <li class="breadcrumb-item active">Manage Menu</li>
                            <li class="breadcrumb-item active">Add Menu</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="/admin/addmenu" method="POST" enctype="multipart/form-data">
                                    @CSRF
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="title">Judul</label>
                                                    <input type="text" name="title" class="form-control @error('name')
                                                    is-invalid @enderror" placeholder="Masukkan Judul" >
                                                    <small class="text-danger">@error('title') {{$message}} @enderror</small>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="thumbnail">Thumbnail</label>
                                                    <input type="url" name="thumbnail" class="form-control @error('name')
                                                    is-invalid @enderror" placeholder="Masukkan Link Tambar" >
                                                    <small class="text-danger">@error('thumbnail') {{$message}} @enderror</small>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="sinopsis">Keterangan</label>
                                                    <textarea name="description" class="form-control @error('content') is-invalid @enderror" placeholder="Keterangan" rows="4" ></textarea>
                                                    <small class="text-danger">@error('sinopsis') {{$message}} @enderror</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-end">
                                            <a href="" class="m-1 btn btn-outlinedanger">Back</a>
                                            <button type="submit" class="m-1 btn btn-success">Tambahkan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection