@extends('admin.view_hadeer.mainAdmin')
@section('SB ADMIN' , 'Kategori Page')
@section('title' , 'Kategori')
@section('content-title', 'Kategori')
@section('main')

<!DOCTYPE html>
<html lang="en">
<body id="">
    
    <!-- Page Wrapper -->
    <div id="wrapper">
        
        @include('admin/view_hadeer/sidebarAdmin')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class=" flex-column">
        
            <!-- Main Content -->
            <div id="content">
            @include('admin/topbar')
            </div>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>@foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kategori') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-responsive-striped">
                        <thead>
                            <td>#</td>
                            <td>Nama</td>
                        </thead>
                        <tr>
                            <?php $i = 1 ?>
                            <td>1</td>
                            <td>sdffafasdf</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning text-light">Edit</a>
                                <a href="" class="btn btn-sm btn-danger text-light">Hapus</a>
                            </td>
                            </tr>
                    </table>
                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{__('Add Kategori')}}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <form method="POST" enctype="multipart/form-data" action="">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label for="inputGroupSelect01" class="input-group-text"></label>
                            </div>
                            <select name="category_id" id="inputGroupSelect01" class="custom-select">
                                <option selected>-</option>                    
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="">
                        </div>
                        <input type="submit" class="btn btn-sm text-light btn-success" value="Submit">
                        <input type="submit" class="btn btn-sm text-light btn-danger" value="Batal">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection