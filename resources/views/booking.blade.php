@extends('layouts.user.appointment')
@section('content')

<div class='container mt-5' >
<form action="{{route('booking.store')}}" method="POST" enctype="multipart/form-data"> 
@csrf
    <h1 style="text-align:center">Book Your Appointment</h1><br />
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="row">
        <div class="col-sm-7 mx-auto">
            <div class="form-group" style="text-align:center">
              <label class="form-control-label" for="example4cols1Input">Where would you like us to provide service?</label><br />
              <input style="text-align:center" type="text" class="form-control" placeholder="Pincode" id="pincode" name="pincode"><br />
            </div>
            </div>
            <div class="col-sm-7 mx-auto">
            <div class="form-group" style="text-align:center">
              <label class="form-control-label" for="example4cols1Input">Choose Service</label><br />
                <select class="selectpicker" name="service_id" id="service_id" data-style="form-control">
                        <option disabled selected> Choose Service</option>
                        <option value="9">House Cleaning</option>
                        <option value="10">Plumbing Services</option>
                        <option value="11">Carpenter Services</option>
                        <option value="12">Office Cleaning</option>
                </select>
            </div><br />
            </div>
            <div class="col-sm-6 mx-auto">
            <div class="form-group" style="text-align:center">
              <label class="form-control-label" for="example4cols1Input">How often would you like us to provide service?</label><br />
                <select class="selectpicker" name="booking_duration" id="booking_duration" data-style="form-control">
                        <option disabled selected> Choose Duration</option>
                        <option value="Once">Once</option>
                        <option value="Weekly">Weekly</option>
                        <option value="Monthly">Monthly</option>
                        <option value="Quaterly">Quaterly</option>
                        <option value="Yearly">Yearly</option>
                </select>
            </div><br />
            </div>
            <div class="col-sm-7 mx-auto">
            <div class="form-group" style="text-align:center">
              <label class="form-control-label" for="example4cols1Input">When would you like us to come?</label><br />
              <input type="datetime-local" class="form-control" id="booking_date_time" name="booking_date_time"><br />
            </div>
            </div>
            <div class="col-sm-7 mx-auto">
            <div class="form-group" style="text-align:center">
            <button style="background:#2CA8FF" class="btn btn-primary btn-round" type="submit">Book</button>
            </div>
            </div>


</div>

</form>
<div>

@endsection