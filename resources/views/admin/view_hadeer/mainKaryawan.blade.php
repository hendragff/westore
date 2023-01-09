@include('admin/head')
@section('SB ADMIN' , 'Pegawai Page')
@section('title' , 'Pegawai')
@section('content-title', 'Pegawai')
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
                <div class="container-fluid">
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
                <div class="card-header">{{ __('Master Karyawan') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-responsive table-striped">
                        <thead>
                            <td>#</td>
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>Email</td>
                            <td>Nomor Telepon</td>
                            <td>Action</td>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>Ferdian</td>
                            <td>Wonokromo</td>
                            <td>ferdian@gmail.com</td>
                            <td>300023940329</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning text-light">Edit</a>
                                <a href="" class="btn btn-sm btn-danger text-light">Hapus</a>
                            </td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Achmad</td>
                            <td>Kenjeran</td>
                            <td>achmad@gmail.com</td>
                            <td>598347599090</td>
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
                <div class="card-header">{{__('Add Karyawan')}}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <form action="">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="Stock" id="" style="margin-bottom: 5px;">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="Stock" id="" style="margin-bottom: 5px;">
                        </div>
                        <div class="form-group">
                            <label for="">No. Telepon</label>
                            <input type="number" class="form-control" name="" id="" style="margin-bottom: 5px;">
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