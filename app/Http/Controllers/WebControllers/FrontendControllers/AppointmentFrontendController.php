<?php

namespace App\Http\Controllers\WebControllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\Models\Booking;

class AppointmentFrontendController extends Controller
{
    public function index()
    {
      return view('booking');
    }

    public function store(Request $request){
      $booking = new Booking;
      $booking->pincode=request('pincode');
      $booking->service_id=request('service_id');
      $booking->booking_duration=request('booking_duration');
      $booking->booking_date_time=request('booking_date_time');
      $booking->save();
      return redirect()->back()->with('success','Appointment Booked!');
  }
}
