@extends('layouts.adminmaster')
@section('title', 'Dya Catering')


@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Manage Profile Company</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Profile Company</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                
                                <h4 class="card-title">Dya Catering</h4>
                                @foreach ($profile as $item)
                                <p class="card-text">{{$item->description}}</p>
                                <a href="/admin/{{$item -> id}}/updatecompany" class="btn btn-success">Update</a>
                                @endforeach
                        </div>
                    </div>
                </main>
@endsection