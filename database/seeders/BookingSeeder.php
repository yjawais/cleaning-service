<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booking1=new Booking;
        $booking1->id="3";
        $booking1->order_id="999";
        $booking1->client_id="3";
        $booking1->order_date="2021-06-13";
        $booking1->booking_date_time="2021-06-16 13:00:00";
        $booking1->service_id="9";
        $booking1->method_id="15";
        $booking1->method_unit_id="27";
        $booking1->method_unit_qty="3";
        $booking1->method_unit_qty_rate="30";
        $booking1->booking_status="A";
        $booking1->reject_reason="";
        $booking1->reminder_status="0";
        $booking1->last_modify="2021-06-13 11:38:50";
        $booking1->read_status="U";
        $booking1->staff_detail_ids="3";
        $booking1->gc_event_id="";
        $booking1->gc_staff_event_id="";
        $booking1->save();

        $booking2=new Booking;
        $booking2->id="4";
        $booking2->order_id="1000";
        $booking2->client_id="4";
        $booking2->order_date="2021-06-14";
        $booking2->booking_date_time="2021-06-16 14:00:00";
        $booking2->service_id="11";
        $booking2->method_id="15";
        $booking2->method_unit_id="28";
        $booking2->method_unit_qty="2";
        $booking2->method_unit_qty_rate="24";
        $booking2->booking_status="C";
        $booking2->reject_reason="";
        $booking2->reminder_status="0";
        $booking2->last_modify="2021-06-14 12:38:50";
        $booking2->read_status="U";
        $booking2->staff_detail_ids="4";
        $booking2->gc_event_id="";
        $booking2->gc_staff_event_id="";
        $booking2->save();

        $booking3=new Booking;
        $booking3->id="5";
        $booking3->order_id="1001";
        $booking3->client_id="5";
        $booking3->order_date="2021-06-15";
        $booking3->booking_date_time="2021-06-16 15:00:00";
        $booking3->service_id="9";
        $booking3->method_id="15";
        $booking3->method_unit_id="23";
        $booking3->method_unit_qty="3";
        $booking3->method_unit_qty_rate="27";
        $booking3->booking_status="A";
        $booking3->reject_reason="";
        $booking3->reminder_status="0";
        $booking3->last_modify="2021-06-15 11:38:50";
        $booking3->read_status="R";
        $booking3->staff_detail_ids="5";
        $booking3->gc_event_id="";
        $booking3->gc_staff_event_id="";
        $booking3->save();

        $booking4=new Booking;
        $booking4->id="6";
        $booking4->order_id="1002";
        $booking4->client_id="6";
        $booking4->order_date="2021-06-16";
        $booking4->booking_date_time="2021-06-17 12:00:00";
        $booking4->service_id="12";
        $booking4->method_id="15";
        $booking4->method_unit_id="27";
        $booking4->method_unit_qty="3";
        $booking4->method_unit_qty_rate="30";
        $booking4->booking_status="A";
        $booking4->reject_reason="";
        $booking4->reminder_status="0";
        $booking4->last_modify="2021-06-16 11:38:50";
        $booking4->read_status="U";
        $booking4->staff_detail_ids="6";
        $booking4->gc_event_id="";
        $booking4->gc_staff_event_id="";
        $booking4->save();

        $booking5=new Booking;
        $booking5->id="7";
        $booking5->order_id="1003";
        $booking5->client_id="7";
        $booking5->order_date="2021-06-13";
        $booking5->booking_date_time="2021-06-17 13:00:00";
        $booking5->service_id="11";
        $booking5->method_id="17";
        $booking5->method_unit_id="25";
        $booking5->method_unit_qty="3";
        $booking5->method_unit_qty_rate="32";
        $booking5->booking_status="C";
        $booking5->reject_reason="";
        $booking5->reminder_status="0";
        $booking5->last_modify="2021-06-17 17:38:50";
        $booking5->read_status="U";
        $booking5->staff_detail_ids="7";
        $booking5->gc_event_id="";
        $booking5->gc_staff_event_id="";
        $booking5->save();

        $booking6=new Booking;
        $booking6->id="8";
        $booking6->order_id="1004";
        $booking6->client_id="8";
        $booking6->order_date="2021-06-15";
        $booking6->booking_date_time="2021-06-18 13:00:00";
        $booking6->service_id="12";
        $booking6->method_id="18";
        $booking6->method_unit_id="28";
        $booking6->method_unit_qty="2";
        $booking6->method_unit_qty_rate="29";
        $booking6->booking_status="A";
        $booking6->reject_reason="";
        $booking6->reminder_status="1";
        $booking6->last_modify="2021-06-15 11:38:50";
        $booking6->read_status="R";
        $booking6->staff_detail_ids="8";
        $booking6->gc_event_id="";
        $booking6->gc_staff_event_id="";
        $booking6->save();

        $booking7=new Booking;
        $booking7->id="9";
        $booking7->order_id="1005";
        $booking7->client_id="9";
        $booking7->order_date="2021-06-18";
        $booking7->booking_date_time="2021-06-19 17:00:00";
        $booking7->service_id="9";
        $booking7->method_id="13";
        $booking7->method_unit_id="25";
        $booking7->method_unit_qty="3";
        $booking7->method_unit_qty_rate="20";
        $booking7->booking_status="C";
        $booking7->reject_reason="";
        $booking7->reminder_status="0";
        $booking7->last_modify="2021-06-18 11:38:50";
        $booking7->read_status="U";
        $booking7->staff_detail_ids="9";
        $booking7->gc_event_id="";
        $booking7->gc_staff_event_id="";
        $booking7->save();

        $booking8=new Booking;
        $booking8->id="10";
        $booking8->order_id="1006";
        $booking8->client_id="10";
        $booking8->order_date="2021-06-18";
        $booking8->booking_date_time="2021-06-19 13:00:00";
        $booking8->service_id="11";
        $booking8->method_id="16";
        $booking8->method_unit_id="28";
        $booking8->method_unit_qty="4";
        $booking8->method_unit_qty_rate="25";
        $booking8->booking_status="A";
        $booking8->reject_reason="";
        $booking8->reminder_status="1";
        $booking8->last_modify="2021-06-18 11:38:50";
        $booking8->read_status="R";
        $booking8->staff_detail_ids="10";
        $booking8->gc_event_id="";
        $booking8->gc_staff_event_id="";
        $booking8->save();

        $booking9=new Booking;
        $booking9->id="11";
        $booking9->order_id="1007";
        $booking9->client_id="11";
        $booking9->order_date="2021-06-19";
        $booking9->booking_date_time="2021-06-19 13:00:00";
        $booking9->service_id="9";
        $booking9->method_id="15";
        $booking9->method_unit_id="27";
        $booking9->method_unit_qty="3";
        $booking9->method_unit_qty_rate="27";
        $booking9->booking_status="A";
        $booking9->reject_reason="";
        $booking9->reminder_status="0";
        $booking9->last_modify="2021-06-19 11:38:50";
        $booking9->read_status="U";
        $booking9->staff_detail_ids="10";
        $booking9->gc_event_id="";
        $booking9->gc_staff_event_id="";
        $booking9->save();

        $booking10=new Booking;
        $booking10->id="12";
        $booking10->order_id="1008";
        $booking10->client_id="12";
        $booking10->order_date="2021-06-19";
        $booking10->booking_date_time="2021-06-20 13:00:00";
        $booking10->service_id="12";
        $booking10->method_id="16";
        $booking10->method_unit_id="24";
        $booking10->method_unit_qty="2";
        $booking10->method_unit_qty_rate="25";
        $booking10->booking_status="A";
        $booking10->reject_reason="";
        $booking10->reminder_status="0";
        $booking10->last_modify="2021-06-19 13:38:50";
        $booking10->read_status="U";
        $booking10->staff_detail_ids="11";
        $booking10->gc_event_id="";
        $booking10->gc_staff_event_id="";
        $booking10->save();
    }
}
