@extends('layouts.adminmaster')
@section('title', 'DyaCatering')


@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Manage Profile</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Admin</a></li>
                <li class="breadcrumb-item">Profil Company</a></li>
                <li class="breadcrumb-item active"> Update Profile Company</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="/admin/{{$profile->id}}/updatecompany" method="POST" enctype="multipart/form-data">
                        @CSRF
                        @method('patch')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="description">Deskripsi profile</label>
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"  rows="12" >{{$profile->description}}</textarea>
                                        <small class="text-danger">@error('description') {{$message}} @enderror</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                <a href="{{url('admin/profilecompany')}}" class="m-1 btn btn-outlinedanger">Back</a>
                                <button type="submit" class="m-1 btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>        
               
@endsection