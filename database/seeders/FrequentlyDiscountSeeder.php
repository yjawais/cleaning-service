<?php

namespace Database\Seeders;

use App\Models\FrequentlyDiscount;
use Illuminate\Database\Seeder;

class FrequentlyDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new FrequentlyDiscount;
        $user1->id = "1";
        $user1->discount_typename = "Once";
        $user1->days = "0";
        $user1->d_type = "P";
        $user1->rates = "0";
        $user1->labels = "ZERO";
        $user1->booking_count = "0";
        $user1->stripe_plan_id = "null";
        $user1->is_activate = "True";
        $user1->created_by = "1";
        $user1->updated_by = "1";
        $user1->save();

        $user2 = new FrequentlyDiscount;
        $user2->id = "2";
        $user2->discount_typename = "Weekly";
        $user2->days = "7";
        $user2->d_type = "P";
        $user2->rates = "15";
        $user2->labels = "Save 15%";
        $user2->booking_count = "14";
        $user2->stripe_plan_id = "null";
        $user2->is_activate = "True";
        $user2->created_by = "2";
        $user2->updated_by = "2";
        $user2->save();

        $user3 = new FrequentlyDiscount;
        $user3->id = "3";
        $user3->discount_typename = "Bi-Weekly";
        $user3->days = "3";
        $user3->d_type = "P";
        $user3->rates = "12.5";
        $user3->labels = "Save 12.5%";
        $user3->booking_count = "31";
        $user3->stripe_plan_id = "null";
        $user3->is_activate = "True";
        $user3->created_by = "3";
        $user3->updated_by = "3";
        $user3->save();

        $user4 = new FrequentlyDiscount;
        $user4->id = "4";
        $user4->discount_typename = "Monthly";
        $user4->days = "30";
        $user4->d_type = "P";
        $user4->rates = "10";
        $user4->labels = "Save 10%";
        $user4->booking_count = "4";
        $user4->stripe_plan_id = "null";
        $user4->is_activate = "True";
        $user4->created_by = "4";
        $user4->updated_by = "4";
        $user4->save();
    }
}
