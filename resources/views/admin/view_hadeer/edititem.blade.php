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
        <div id="content-wrapper" class="d-flex flex-column">
        
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Item') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-responsive table-striped">
                        <thead>
                            <td>#</td>
                            <td>Kategori</td>
                            <td>Item</td>
                            <td>Stock</td>
                            <td>Price</td>
                            <td>Action</td>
                        </thead>
                        <tr>
                            <?php $i = 1 ?>
                           
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="masteritem/edit" class="btn btn-sm btn-warning text-light">Edit</a>
                                <a href="" class="btn btn-sm btn-danger text-light">Hapus</a>
                            </td>
                            </tr>
                       
                    </table>
                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
            <!-- End of Main Content -->
            
            @include('admin/footer')

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