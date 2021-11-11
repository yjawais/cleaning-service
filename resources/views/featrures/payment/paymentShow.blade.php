@extends('layouts.dashboard')

@section('sidebar')
  @include('include.dashboard.role.admin.sidebar')
@endsection
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

@section('content')
<div class="header bg-secondary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            </div>
            <div class="col-lg-6 col-5 text-right">
             <a href="{{route('payment.index')}}" class="btn btn-md btn-default">Back</a> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h1 class="title">Payment</h1>
        </div>
       
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
          <form role="form">
          <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Order Id</label>
              <input type="text" class="form-control" id="order_id" name="order_id" readonly value="{{$payment['order_id']}}">
            </div>
            </div>
            <div class="col-md-8"> 
            <div class="form-group">
                <label class="form-control-label" for="example4cols1Input">Payment Method</label>
                <input type="text" class="form-control" id="payment_method" name="payment_method" readonly value="{{$payment['payment_method']}}">
            </div>
            </div>
            <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Amount</label>
              <input type="text" class="form-control" id="amount" name="amount" readonly value="{{$payment['amount']}}">
            </div>
            </div>
            <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Payment Status</label>
              <input type="text" class="form-control" id="payment_status" name="payment_status" readonly value="{{$payment['payment_status']}}">
            </div>
            </div>
            <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Discount</label>
              <input type="text" class="form-control" id="discount" name="discount"  readonly value="{{$payment['discount']}}">
            </div>
            </div>
            <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Taxes</label>
              <input type="text" class="form-control" id="taxes" name="taxes"  readonly value="{{$payment['taxes']}}">
            </div>
            </div>
            <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Net Amount</label>
              <input type="text" class="form-control" id="net_amount" name="net_amount"  readonly value="{{$payment['net_amount']}}">
            </div>
            </div>
            <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Partial Amount</label>
              <input type="text" class="form-control" id="partial_amount" name="partial_amount"  readonly value="{{$payment['partial_amount']}}">
            </div>
            </div>
            <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Payment Date</label>
              <input type="text" class="form-control" id="payment_date" name="payment_date"  readonly value="{{$payment['payment_date']}}">
            </div>
            </div>

        </div>        
          </div>
         </form>
        </div>

@endsection
