<?php

namespace Database\Seeders;

use App\Models\ServicesMethod;
use Illuminate\Database\Seeder;

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
        $user1->method_title = "Property Based";
        $user1->position = "0";
        $user1->slug = "Property-Based";
        $user1->created_at = "2021-01-01 10:10:11";
        $user1->updated_at = "2021-01-02 11:12:11";
        $user1->deleted_at = "2021-01-03 11:13:11";     
        $user1->created_by = "1";
        $user1->updated_by = "1";
        $user1->save();

        $user2 = new ServicesMethod;
        $user2->id = "16";
        $user2->method_title = "Residential Services";
        $user2->position = "0";
        $user2->slug = "Residential-Services";
        $user2->created_at = "2021-02-01 10:10:21";
        $user2->updated_at = "2021-02-02 11:12:21";
        $user2->deleted_at = "2021-02-03 11:13:21";     
        $user2->created_by = "1";
        $user2->updated_by = "2";
        $user2->save();

        $user3 = new ServicesMethod;
        $user3->id = "17";
        $user3->method_title = "Commercial Services";
        $user3->position = "0";
        $user3->slug = "Commercial-Services";
        $user3->created_at = "2021-01-01 10:10:31";
        $user3->updated_at = "2021-01-02 11:12:31";
        $user3->deleted_at = "2021-01-03 11:13:31";     
        $user3->created_by = "1";
        $user3->updated_by = "3";
        $user3->save();

        $user4 = new ServicesMethod;
        $user4->id = "18";
        $user4->method_title = "Property Based";
        $user4->position = "0";
        $user4->slug = "Property-Based";
        $user4->created_at = "2021-01-01 10:10:41";
        $user4->updated_at = "2021-01-02 11:12:41";
        $user4->deleted_at = "2021-01-03 11:13:41";     
        $user4->created_by = "1";
        $user4->updated_by = "4";
        $user4->save();

        $user5 = new ServicesMethod;
        $user5->id = "19";
        $user5->method_title = "Area Based (Feet)";
        $user5->position = "0";
        $user5->slug = "Area-Based-(Feet)";
        $user5->created_at = "2021-01-01 10:10:51";
        $user5->updated_at = "2021-01-02 11:12:51";
        $user5->deleted_at = "2021-01-03 11:13:51";     
        $user5->created_by = "1";
        $user5->updated_by = "5";
        $user5->save();

        $user6 = new ServicesMethod;
        $user6->id = "20";
        $user6->method_title = "Property Based";
        $user6->position = "0";
        $user6->slug = "Property-Based";
        $user6->created_at = "2021-01-06 10:10:11";
        $user6->updated_at = "2021-01-02 11:12:11";
        $user6->deleted_at = "2021-01-03 11:13:11";     
        $user6->created_by = "1";
        $user6->updated_by = "6";
        $user6->save();

        $user7 = new ServicesMethod;
        $user7->id = "21";
        $user7->method_title = "Area Based (Feet)";
        $user7->position = "0";
        $user7->slug = "Area-Based-(Feet)";
        $user7->created_at = "2021-07-01 10:10:11";
        $user7->updated_at = "2021-07-02 11:12:11";
        $user7->deleted_at = "2021-07-03 11:13:11";     
        $user7->created_by = "1";
        $user7->updated_by = "7";
        $user7->save();
    }
}
