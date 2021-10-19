<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\ServicesMethod;
class ServicesMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new ServicesMethod;
        $user1->id = "15";
        $user1->service_id = "9";
        $user1->method_title = "Property Based";
        $user1->position = "0";
        $user1->slug = "property-based";
        $user1->save();

        $user2 = new ServicesMethod;
        $user2->id = "16";
        $user2->service_id = "10";
        $user2->method_title = "Residential Services";
        $user2->position = "0";
        $user2->slug = "residential-services";
        $user2->save();

        $user3 = new ServicesMethod;
        $user3->id = "17";
        $user3->service_id = "10";
        $user3->method_title = "Commercial Services";
        $user3->position = "0";
        $user3->slug = "commercial-services";
        $user3->save();

        $user4 = new ServicesMethod;
        $user4->id = "18";
        $user4->service_id = "11";
        $user4->method_title = "Property Based";
        $user4->position = "0";
        $user4->slug = "property-based";
        $user4->save();

        $user5 = new ServicesMethod;
        $user5->id = "19";
        $user5->service_id = "11";
        $user5->method_title = "Area Based (Feet)";
        $user5->position = "0";
        $user5->slug = "area-based-(feet)";
        $user5->save();

        $user6 = new ServicesMethod;
        $user6->id = "20";
        $user6->service_id = "";
        $user6->method_title = "Property Based";
        $user6->position = "0";
        $user6->slug = "property-based";
        $user6->save();

        $user7 = new ServicesMethod;
        $user7->id = "21";
        $user7->service_id = "";
        $user7->method_title = "Area Based (Feet)";
        $user7->position = "0";
        $user7->slug = "area-based-(feet)";
        $user7->save();
    }
}
