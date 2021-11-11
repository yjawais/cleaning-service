@extends('layouts.dashboard')


@section('sidebar')
  @include('include.dashboard.role.admin.sidebar')
@endsection

@section('content')
<div class="header bg-secondary pb-6">
      <div class="container-fluid">
        <div class="header-body"> 
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6"> 
      <!-- Table -->
      <div class="row">
        <div class="col">
         
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h1 class="mb-0">Payment</h1>
              
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>Sr.No</th>
                    <th>Order Id</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                    <th>Payment Status</th>
                    <th>Action</th>
                    <th></th>
                  </tr>
                </thead>
                
                <tbody>
               @foreach($payment_details as $payment)
                  <tr>
                    <td>{{$sr=$sr+1}}</td>
                    <td>{{$payment['order_id']}}</td>
                    <td>{{$payment['payment_method']}}</td>
                    <td>{{$payment['amount']}}</td>
                    <td>{{$payment['payment_status']}}</td>
                    <td>
                                    <a href="{{route('payment.show',$payment['id'])}}"><button type="button" class="btn btn-success btn-icon-only rounded-circle">

                                            <i class="ni ni-album-2"></i>
                                        </button></a>

                        
                                    <a href="{{route('payment.destroy',$payment['id'])}}"><button type="button" class="btn btn-danger btn-icon-only rounded-circle">
                                            <i class="ni ni-scissors" style="color:white"></i>
                                        </button>
                                    </a>
                                </td>
                  </tr>
             @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
@endsection