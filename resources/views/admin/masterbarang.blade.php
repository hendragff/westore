@extends('admin.app')
@section('SB ADMIN' , 'Pegawai')
@section('title' , 'Master Barang')
@section('content-title', 'Master Barang')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>#</th>                         
                        <th>Category</th>
                        <th>Name</th>
                        <th>Stock</th>
                        <th>Price</th>
                    </thead>
                    <tbody>
    
                        @foreach ($data as $item)
                        <tr>
                            <th>{{$loop->iteration}}</th>                             
                            <td>{{$item->category_id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->stock}}</td>
                            <td>{{$item->price}}</td>
                            <td>
                                <a href="masterbarang/{{$item->id}}/edit" class="btn btn-warning btn-circle btn-sm"> <i class="fas fa-edit"></i></a>    
                                <a href="" class="btn btn-danger btn-circle btn-sm"> <i class="fas fa-trash"></i></a>    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>                  
                </table>
            </div>
        </div>
    </div>
</div>

@endsection