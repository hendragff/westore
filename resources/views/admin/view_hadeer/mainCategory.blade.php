@extends('admin.app')
@section('SB ADMIN' , 'Pegawai')
@section('title' , 'Master Categroy')
@section('content-title', 'Master Category')
@section('main')

    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="flex-column">        
            <!-- Main Content -->
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Master Category') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-responsive-striped">
                        <thead>
                            <td>#</td>
                            <td>Category Name</td>
                            <td>Action</td>
                        </thead>
                        @foreach ($category as $ctg)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$ctg->name}}</td>
                            <td>
                                <a href="mastercategory/{{$ctg->id}}/edit" class="btn btn-sm btn-warning text-light">Edit</a>
                            <form action="{{route('mastercategory.destroy',$ctg->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger text-light">Hapus</button>
                            </form>
                            </td>
                            </tr>
                            @endforeach
                    </table>
                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{__('Add Category')}}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <form action="{{route('mastercategory.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" class="form-control" name="name" id="" value="{{old('nama')}}">
                        </div>
                        <input type="submit" class="btn btn-sm text-light btn-success" value="Submit">
                        <input type="submit" class="btn btn-sm text-light btn-danger" value="Batal">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            <!-- End of Main Content -->
            

        </div>
        <!-- End of Content Wrapper -->
        
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda ingin keluar dari aplikasi? Klik Logout jika ingin
                </div>
                <div class="modal-footer">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Logout"></input>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection