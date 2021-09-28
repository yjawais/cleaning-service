<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user3 = new Payment;
        $user3->id = "3";
        $user3->order_id = "999";
        $user3->payment_method = "Pay At Venue";
        $user3->transaction_id = "";
        $user3->amount = "55";
        $user3->discount = "0";
        $user3->taxes = "10";
        $user3->partial_amount = "0";
        $user3->payment_date = "2021-06-13";
        $user3->net_amount = "65";
        $user3->lastmodify = "2021-06-13 11:38:50";
        $user3->frequently_discount = "1";
        $user3->frequently_discount_amount = "0";
        $user3->recurrence_status = "N";
        $user3->payment_status = "Pending";
        $user3->created_by = "3";
        $user3->updated_by = "3";
        $user3->save();

        $user4 = new Payment;
        $user4->id = "4";
        $user4->order_id = "1000";
        $user4->payment_method = "Pay At Venue";
        $user4->transaction_id = "";
        $user4->amount = "74";
        $user4->discount = "0";
        $user4->taxes = "10";
        $user4->partial_amount = "0";
        $user4->payment_date = "2021-08-26";
        $user4->net_amount = "84";
        $user4->lastmodify = "2021-08-26 08:33:06";
        $user4->frequently_discount = "1";
        $user4->frequently_discount_amount = "0";
        $user4->recurrence_status = "N";
        $user4->payment_status = "Pending";
        $user4->created_by = "4";
        $user4->updated_by = "4";
        $user4->save();
    }
}
