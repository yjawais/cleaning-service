<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookingAddon;
use Illuminate\Database\Eloquent\Model;

class BookingAddonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addon1= new BookingAddon;
        $addon1->id="10";
        $addon1->order_id="999";
        $addon1->service_id="9";
        $addon1->addons_service_id="15";
        $addon1->addons_service_qty="5";
        $addon1->addons_service_rate="25";
        $addon1->save();

        $addon2= new BookingAddon;
        $addon2->id="11";
        $addon2->order_id="1000";
        $addon2->service_id="9";
        $addon2->addons_service_id="16";
        $addon2->addons_service_qty="5";
        $addon2->addons_service_rate="20";
        $addon2->save();

        $addon3= new BookingAddon;
        $addon3->id="12";
        $addon3->order_id="1001";
        $addon3->service_id="9";
        $addon3->addons_service_id="15";
        $addon3->addons_service_qty="4";
        $addon3->addons_service_rate="26";
        $addon3->save();

        $addon4= new BookingAddon;
        $addon4->id="13";
        $addon4->order_id="1002";
        $addon4->service_id="11";
        $addon4->addons_service_id="17";
        $addon4->addons_service_qty="5";
        $addon4->addons_service_rate="25";
        $addon4->save();

        $addon5= new BookingAddon;
        $addon5->id="14";
        $addon5->order_id="1003";
        $addon5->service_id="9";
        $addon5->addons_service_id="16";
        $addon5->addons_service_qty="4";
        $addon5->addons_service_rate="25";
        $addon5->save();

        $addon6= new BookingAddon;
        $addon6->id="15";
        $addon6->order_id="1004";
        $addon6->service_id="9";
        $addon6->addons_service_id="15";
        $addon6->addons_service_qty="5";
        $addon6->addons_service_rate="20";
        $addon6->save();

        $addon7= new BookingAddon;
        $addon7->id="16";
        $addon7->order_id="1005";
        $addon7->service_id="12";
        $addon7->addons_service_id="16";
        $addon7->addons_service_qty="5";
        $addon7->addons_service_rate="24";
        $addon7->save();

        $addon8= new BookingAddon;
        $addon8->id="17";
        $addon8->order_id="1006";
        $addon8->service_id="12";
        $addon8->addons_service_id="15";
        $addon8->addons_service_qty="3";
        $addon8->addons_service_rate="25";
        $addon8->save();

        $addon9= new BookingAddon;
        $addon9->id="18";
        $addon9->order_id="1007";
        $addon9->service_id="9";
        $addon9->addons_service_id="16";
        $addon9->addons_service_qty="6";
        $addon9->addons_service_rate="24";
        $addon9->save();

        $addon10= new BookingAddon;
        $addon10->id="19";
        $addon10->order_id="1008";
        $addon10->service_id="11";
        $addon10->addons_service_id="15";
        $addon10->addons_service_qty="5";
        $addon10->addons_service_rate="25";
        $addon10->save();
    }
}
