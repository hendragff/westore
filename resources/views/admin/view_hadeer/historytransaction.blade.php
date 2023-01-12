@extends('admin.view_hadeer.mainAdmin')
@section('SB ADMIN' , 'Transaction History Page')
@section('title' , 'Transaction History')
@section('content-title', 'Transaction History')
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
                        <tr>
                            <td>1</td>
                            <td>22-02-2022</td>
                            <td>Jaki</td>
                            <td>150000</td>
                            <td>150000</td>
                            <td>
                                <a href="/transaction/1" class="btn btn-primary">Details</a>
                            </td>
                        </tr>
                    </table>
                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection