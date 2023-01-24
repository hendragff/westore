@include('admin/head')
@section('SB ADMIN' , 'Items Page')
@section('title' , 'Items')
@section('content-title', 'Items')
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
                <div class="card-header">{{ __('Item') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-responsive-striped">
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
                            @foreach ($data as $item)
                            <td>{{$i++}}</td>
                            <td>{{$item->category_id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->stock}}</td>
                            <td>{{$item->price}}</td>
                            <td>
                                <a href="masteritem/{{$item->id}}/edit" class="btn btn-sm btn-warning text-light">Edit</a>
                                <a href="" class="btn btn-sm btn-danger text-light">Hapus</a>
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
                <div class="card-header">{{__('Add Item')}}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <form method="POST" enctype="multipart/form-data" action="{{route('masteritem.store')}}">
                        @csrf
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
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" class="form-control" name="stock" id="" style="margin-bottom: 5px;">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price" id="" style="margin-bottom: 5px;">
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
