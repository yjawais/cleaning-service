<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Offday;
use Illuminate\Database\Eloquent\Model;

class OffdaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offday1=new Offday;
        $offday1->id="1";
        $offday1->user_id="1";
        $offday1->off_date="2021-07-21";
        $offday1->status="0";
        $offday1->created_by = "1";
        $offday1->last_modify="2021-07-11 13:38:50";
        $offday1->updated_by = "1";
        $offday1->save();

        $offday2=new Offday;
        $offday2->id="2";
        $offday2->user_id="2";
        $offday2->off_date="2021-07-22";
        $offday2->status="0";
        $offday2->last_modify="2021-07-16 13:38:50";
        $offday2->created_by = "2";
        $offday2->updated_by = "2";
        $offday2->save();

        $offday3=new Offday;
        $offday3->id="3";
        $offday3->user_id="3";
        $offday3->off_date="2021-07-23";
        $offday3->status="0";
        $offday3->last_modify="2021-07-17 13:38:50";
        $offday3->created_by = "3";
        $offday3->updated_by = "3";
        $offday3->save();

        $offday4=new Offday;
        $offday4->id="4";
        $offday4->user_id="4";
        $offday4->off_date="2021-07-24";
        $offday4->status="0";
        $offday4->last_modify="2021-07-19 13:38:50";
        $offday4->created_by = "4";
        $offday4->updated_by = "4";
        $offday4->save();

        $offday5=new Offday;
        $offday5->id="5";
        $offday5->user_id="5";
        $offday5->off_date="2021-07-25";
        $offday5->status="0";
        $offday5->last_modify="2021-07-19 13:38:50";
        $offday5->created_by = "5";
        $offday5->updated_by = "5";
        $offday5->save();

        $offday6=new Offday;
        $offday6->id="6";
        $offday6->user_id="6";
        $offday6->off_date="2021-07-20";
        $offday6->status="0";
        $offday6->created_by = "6";
        $offday6->updated_by = "6";
        $offday6->save();

        $offday7=new Offday;
        $offday7->id="7";
        $offday7->user_id="7";
        $offday7->off_date="2021-07-27";
        $offday7->status="0";
        $offday7->last_modify="2021-07-20 13:38:50";
        $offday7->created_by = "7";
        $offday7->updated_by = "7";
        $offday7->save();

        $offday8=new Offday;
        $offday8->id="8";
        $offday8->user_id="8";
        $offday8->off_date="2021-07-28";
        $offday8->status="0";
        $offday8->last_modify="2021-07-21 13:38:50";
        $offday8->created_by = "8";
        $offday8->updated_by = "8";
        $offday8->save();

        $offday9=new Offday;
        $offday9->id="9";
        $offday9->user_id="9";
        $offday9->off_date="2021-07-29";
        $offday9->status="0";
        $offday9->last_modify="2021-07-27 13:38:50";
        $offday9->created_by = "9";
        $offday9->updated_by = "9";
        $offday9->save();

        $offday10=new Offday;
        $offday10->id="10";
        $offday10->user_id="10";
        $offday10->off_date="2021-07-28";
        $offday10->status="0";
        $offday10->last_modify="2021-07-25 13:38:50";
        $offday10->created_by = "10";
        $offday10->updated_by = "10";
        $offday10->save();
    }
}
