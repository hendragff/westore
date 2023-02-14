@extends('admin.app')
@section('SB ADMIN' , 'Transaction')
@section('title' , 'Master Transaction')
@section('main')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Master Transaction') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-responsive">
                        <thead>
                            <td>#</td>
                            <td>Date</td>
                            <td>Served By</td>
                            <td>Grand Total</td>
                            <td>Paytotal</td>
                            <td>Action</td>
                        </thead>
                        @foreach($history as $hst)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{date('d - F - Y' , strtotime($hst->created_at))}}</td>
                            <td>{{$hst->user->name}}</td>
                            <td>{{number_format($hst->total)}}</td>
                            <td>{{number_format($hst->pay_total)}}</td>
                            <td>
                                <a href="/mastertransaction/{{$hst->id}}" class="btn btn-primary">Details</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection