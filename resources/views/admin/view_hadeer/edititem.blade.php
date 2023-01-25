@include('admin/head')
@section('SB ADMIN' , 'Items Page')
@section('title' , 'Items')
@section('content-title', 'Items')
@section('main')

<!DOCTYPE html>
<html lang="en">
<body id="page-top">
    
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('admin/view_hadeer/sidebarAdmin')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class=" flex-column">
        
            <!-- Main Content -->
            <div id="content">
            @include('admin/topbar')
                <!-- Begin Page Content -->
                <div class="container">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Admin @yield('content-title') Page</h1>
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Item') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('masteritem.update' , ['masteritem' => $data->id] )}}">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label for="inputGroupSelect01" class="input-group-text"></label>
                            </div>
                            <select name="category_id" id="inputGroupSelect01" class="custom-select">
                                <option selected>-</option>                    
                                @foreach ($category as $ctg)
                                <option value="{{$ctg->id}}">{{$ctg->name}}</option>
                                @endforeach                   
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Item</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" >
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" value="{{$data->stock}}" >
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{$data->price}}" >
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="simpan">
                            <a href="{{route('masterbarang.index')}}" class="btn btn-danger">Batal</a>
                        </div>
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

    <!-- Bootstrap core JavaScript-->
    <script src={{ asset('template/vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ asset('template/js/sb-admin-2.min.js') }}></script>
    <Style>
        html{
            scroll-behavior: smooth;
        }
    </Style>
</body>

</html>