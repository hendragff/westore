@extends('admin.app')
@section('SB ADMIN' , 'Transaction')
@section('title' , 'Master Transaction')
@section('main')


    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Transaction') }}</div>
                <div class="card-body">
                    <table class="table table-responsive-striped">
                        <thead>
                            <td>#</td>  
                            <td>Category</td>
                            <td>Name</td>
                            <td>Stock</td>
                            <td>Price</td>
                            <td>Action</td>
                        </thead>
                        @if($item->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">There is no Item</td>
                            </tr>
                        @else
                        @foreach( $item as $data )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->Category->name}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->stock}}</td>
                            <td>{{$data->price}}</td>  
                            <form action="{{route('mastertransaction.store')}}" method="POST">
                            @csrf
                            <td>
                                <input type="hidden" name="item_id" value="{{$data->id}}">
                                <input type="hidden" name="qtt" value="1"> 
                                <button type="submit" class="btn btn-success">Add to Cart</button>
                            </td>
                            </form>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{_('Cart')}}</div>
                <div class="card-body">
                    <table class="table table-responsive-striped">
                        <thead>
                            <td>#</td>  
                            <td>Name</td>   
                            <td>Qty</td>    
                            <td>Subtotal</td>
                            <td>Action</td>
                        </thead>

                    <tr>
                        @if($carts->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">There is no item on the chart</td>
                            </tr>
                        @else
                        @foreach ($carts as $cart)
                                <td>{{$loop->iteration}}</td>
                                <td>{{$cart->name}}</td>
                                <form action="{{route('mastertransaction.update', $cart->cart->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <td>
                                        <input class="form-control" type="number" name="qtt" id="qtt" min="1" max="{{$cart->stock + $cart->cart->qtt}}" value="{{$cart->cart->qtt}}" onchange="ubah{{$loop->iteration}}()" >
                                    </td>
                                    <script>
                                        function ubah{{$loop->iteration}}(){
                                            document.getElementById("update{{$loop->iteration}}").style.display="inline";
                                            document.getElementById("hapus{{$loop->iteration}}").style.display="none";
                                        }
                                    </script>
                                    <td>{{number_format($cart->price*$cart->cart->qtt)}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-sm btn-primary text-light" id="update{{$loop->iteration}}" style="display :none">Update</button>
                                 
                                </form>
                                <form  method="POST" action="{{route('mastertransaction.destroy', $cart->cart->id)}}">
                                @csrf
                                @method('delete')
                                
                                    <button type="submit" class="btn btn-sm btn-danger text-light" id="hapus{{$loop->iteration}}" >Hapus</button>
                                </td>
                                </form>
                           
                        
                    </tr>
                    @endforeach
                        @endif

                    <form action="{{route('transaction.checkout')}}" method="POST">
                    @csrf
                    <tr>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" id="">
                        <td colspan="3">Total :</td>
                        <td colspan="2"><input class="form-control" readonly type="number" name="total" value="{{$carts->sum(function ($item){
                            return $item->price * $item->cart->qtt;
                        })}}" ></td>
                    </tr>
                    <tr>
                        <td colspan="3">Payment :</td>
                        <td colspan="2"><input class="form-control" type="number"  name="pay_total" value="" required ></td>
                    </tr>

                    <tr>
                        <td><input type="submit" class="btn btn-primary" value="Checkout"></td>
                      
                        <td><a type="reset" class="btn btn-danger" value="" href="">Reset</a></td>
                    </tr>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection