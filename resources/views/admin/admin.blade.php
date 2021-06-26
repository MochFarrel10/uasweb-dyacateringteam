@extends('layouts.adminmaster')
@section('title', 'Dya Catering')


@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Manage Menu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Manage Menu</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a href="/admin/addmenu" class="btn btn-success">Tambahkan Data</a>
                            </div> 
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Thumbnail</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($menu as $item)
                                            <tbody>
                                                <tr>
                                                <td>{{$loop->iteration}} </td>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->description}} </td>
                                                <td>{{$item->thumbnail}}</td>
                                                <td>
                                                    <a class="btn btn-warning" href="/admin/{{$item->id}}/updatemenu">Update</a>
                                                    <a class="btn btn-danger my-3"  href="/admin/delete/{{$item->id}}">Delete</a>
                                                </td>
                                                </tr>
                                            
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection