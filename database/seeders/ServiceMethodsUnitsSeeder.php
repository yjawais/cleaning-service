<?php

namespace Database\Seeders;

use App\Models\ServiceMethodsUnit;
use Illuminate\Database\Seeder;

class ServiceMethodsUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new ServiceMethodsUnit;
        $user1->id = "27";
        $user1->service_id = "9";
        $user1->methods_id = "15";
        $user1->units_title = "Bedroom(s)";
        $user1->base_price = "10";
        $user1->min_limit = "1";
        $user1->max_limit = "10";
        $user1->status = "E";
        $user1->position = "0";
        $user1->limit_title = "Select Bedroom(s)";
        $user1->unit_symbol = " ";
        $user1->half_section= "D";
        $user1->uduration = "30";
        $user1->slug = "bedroom(s)";
        $user1->save();

        $user2 = new ServiceMethodsUnit;
        $user2->id = "28";
        $user2->service_id = "9";
        $user2->methods_id = "15";
        $user2->units_title = "Bedroom(s)";
        $user2->base_price = "12";
        $user2->min_limit = "1";
        $user2->max_limit = "8";
        $user2->status = "E";
        $user2->position = "0";
        $user2->limit_title = "Select Bedroom(s)";
        $user2->unit_symbol = " ";
        $user2->half_section= "D";
        $user2->uduration = "30";
        $user2->slug = "Bedroom(s)";
        $user2->save();

        $user3 = new ServiceMethodsUnit;
        $user3->id = "29";
        $user3->service_id = "10";
        $user3->methods_id = "16";
        $user3->units_title = "Water Line Repairs";
        $user3->base_price = "5";
        $user3->min_limit = "1";
        $user3->max_limit = "2";
        $user3->status = "E";
        $user3->position = "0";
        $user3->limit_title = " ";
        $user3->unit_symbol = " ";
        $user3->half_section= "D";
        $user3->uduration = "30";
        $user3->slug = "water-line-repairs";
        $user3->save();

        $user4 = new ServiceMethodsUnit;
        $user4->id = "30";
        $user4->service_id = "10";
        $user4->methods_id = "16";
        $user4->units_title = "Frozen\/Leaking Pipes";
        $user4->base_price = "10";
        $user4->min_limit = "1";
        $user4->max_limit = "4";
        $user4->status = "E";
        $user4->position = "0";
        $user4->limit_title = " ";
        $user4->unit_symbol = " ";
        $user4->half_section= "D";
        $user4->uduration = "30";
        $user4->slug = "frozen\/leaking-pipes";
        $user4->save();

        $user5 = new ServiceMethodsUnit;
        $user5->id = "31";
        $user5->service_id = "10";
        $user5->methods_id = "17";
        $user5->units_title = "Clogged Drains";
        $user5->base_price = "4";
        $user5->min_limit = "1";
        $user5->max_limit = "4";
        $user5->status = "E";
        $user5->position = "0";
        $user5->limit_title = " ";
        $user5->unit_symbol = " ";
        $user5->half_section= "D";
        $user5->uduration = "30";
        $user5->slug = "clogged-drains";
        $user5->save();

        $user6 = new ServiceMethodsUnit;
        $user6->id = "32";
        $user6->service_id = "10";
        $user6->methods_id = "17";
        $user6->units_title = "Water Heater Repairs";
        $user6->base_price = "10";
        $user6->min_limit = "2";
        $user6->max_limit = "5";
        $user6->status = "E";
        $user6->position = "0";
        $user6->limit_title = " ";
        $user6->unit_symbol = " ";
        $user6->half_section= "D";
        $user6->uduration = "30";
        $user6->slug = "water-heater-repairs";
        $user6->save();

        $user7 = new ServiceMethodsUnit;
        $user7->id = "33";
        $user7->service_id = "11";
        $user7->methods_id = "18";
        $user7->units_title = "Build walls";
        $user7->base_price = "5";
        $user7->min_limit = "1";
        $user7->max_limit = "5";
        $user7->status = "E";
        $user7->position = "0";
        $user7->limit_title = " ";
        $user7->unit_symbol = " ";
        $user7->half_section= "D";
        $user7->uduration = "30";
        $user7->slug = "build-walls";
        $user7->save();

        $user8 = new ServiceMethodsUnit;
        $user8->id = "34";
        $user8->service_id = "11";
        $user8->methods_id = "18";
        $user8->units_title = "Build doorways";
        $user8->base_price = "4";
        $user8->min_limit = "1";
        $user8->max_limit = "5";
        $user8->status = "E";
        $user8->position = "0";
        $user8->limit_title = " ";
        $user8->unit_symbol = " ";
        $user8->half_section= "D";
        $user8->uduration = "30";
        $user8->slug = "build-doorways";
        $user8->save();

        $user9 = new ServiceMethodsUnit;
        $user9->id = "35";
        $user9->service_id = "11";
        $user9->methods_id = "18";
        $user9->units_title = "Build windows";
        $user9->base_price = "3";
        $user9->min_limit = "2";
        $user9->max_limit = "5";
        $user9->status = "E";
        $user9->position = "0";
        $user9->limit_title = " ";
        $user9->unit_symbol = " ";
        $user9->half_section= "D";
        $user9->uduration = "30";
        $user9->slug = "build-windows";
        $user9->save();

        $user10 = new ServiceMethodsUnit;
        $user10->id = "36";
        $user10->service_id = "11";
        $user10->methods_id = "19";
        $user10->units_title = "Remodeling or enhancing existing structures ";
        $user10->base_price = "2";
        $user10->min_limit = "100";
        $user10->max_limit = "1000";
        $user10->status = "E";
        $user10->position = "0";
        $user10->limit_title = "Enter Area of Cleaning";
        $user10->unit_symbol = "sq. ft.";
        $user10->half_section= "D";
        $user10->uduration = "30";
        $user10->slug = "remodeling-or-enhancing-existing-structures-";
        $user10->save();

        $user11 = new ServiceMethodsUnit;
        $user11->id = "37";
        $user11->service_id = "12";
        $user11->methods_id = "20";
        $user11->units_title = "Swiping With Desk Cleaning";
        $user11->base_price = "5";
        $user11->min_limit = "1";
        $user11->max_limit = "5";
        $user11->status = "E";
        $user11->position = "0";
        $user11->limit_title = " ";
        $user11->unit_symbol = " ";
        $user11->half_section= "D";
        $user11->uduration = "30";
        $user11->slug = "swiping-with-desk-cleaning";
        $user11->save();

        $user12 = new ServiceMethodsUnit;
        $user12->id = "38";
        $user12->service_id = "12";
        $user12->methods_id = "20";
        $user12->units_title = "Doors And Window Cleaning";
        $user12->base_price = "4";
        $user12->min_limit = "1";
        $user12->max_limit = "5";
        $user12->status = "E";
        $user12->position = "0";
        $user12->limit_title = " ";
        $user12->unit_symbol = " ";
        $user12->half_section= "D";
        $user12->uduration = "30";
        $user12->slug = "doors-and-window-cleaning";
        $user12->save();

        $user13 = new ServiceMethodsUnit;
        $user13->id = "39";
        $user13->service_id = "12";
        $user13->methods_id = "21";
        $user13->units_title = "Floor Cleaning";
        $user13->base_price = "2";
        $user13->min_limit = "200";
        $user13->max_limit = "1000";
        $user13->status = "E";
        $user13->position = "0";
        $user13->limit_title = "Enter Area of Cleaning";
        $user13->unit_symbol = "sq. ft.";
        $user13->half_section= "D";
        $user13->uduration = "30";
        $user13->slug = "floor-cleaning";
        $user13->save();
    }
}
