<?php

namespace Database\Seeders;

use App\Models\ServiceMethodsDesign;
use Illuminate\Database\Seeder;

class ServiceMethodsDesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new ServiceMethodsDesign;
        $user1->id = "15";
        //$user1->service_methods_id = "15";
        $user1->design = "2";
        $user1->created_at = "2021-01-01 10:10:11";
        $user1->updated_at = "2021-01-02 11:12:11";
        $user1->deleted_at = "2021-01-03 11:13:11";     
        $user1->created_by = "1";
        $user1->updated_by = "1";
        $user1->save();

        $user2 = new ServiceMethodsDesign;
        $user2->id = "16";
        //$user2->service_methods_id = "16";
        $user2->design = "3";
        $user2->created_at = "2021-02-01 10:10:11";
        $user2->updated_at = "2021-02-02 11:12:11";
        $user2->deleted_at = "2021-02-03 11:13:11";     
        $user2->created_by = "1";
        $user2->updated_by = "2";
        $user2->save();

        $user3 = new ServiceMethodsDesign;
        $user3->id = "17";
        //$user3->service_methods_id = "17";
        $user3->design = "3";
        $user3->created_at = "2021-03-01 10:10:11";
        $user3->updated_at = "2021-03-02 11:12:11";
        $user3->deleted_at = "2021-03-03 11:13:11";     
        $user3->created_by = "1";
        $user3->updated_by = "3";
        $user3->save();

        $user4 = new ServiceMethodsDesign;
        $user4->id = "18";
        //$user4->service_methods_id = "18";
        $user4->design = "4";
        $user4->created_at = "2021-04-01 10:10:11";
        $user4->updated_at = "2021-04-02 11:12:11";
        $user4->deleted_at = "2021-04-03 11:13:11";     
        $user4->created_by = "1";
        $user4->updated_by = "4";
        $user4->save();

        $user5 = new ServiceMethodsDesign;
        $user5->id = "19";
        //$user5->service_methods_id = "19";
        $user5->design = "5";
        $user5->created_at = "2021-05-01 10:10:11";
        $user5->updated_at = "2021-05-02 11:12:11";
        $user5->deleted_at = "2021-05-03 11:13:11";     
        $user5->created_by = "1";
        $user5->updated_by = "5";
        $user5->save();

        $user6 = new ServiceMethodsDesign;
        $user6->id = "20";
        //$user6->service_methods_id = "20";
        $user6->design = "4";
        $user6->created_at = "2021-06-01 10:10:11";
        $user6->updated_at = "2021-06-02 11:12:11";
        $user6->deleted_at = "2021-06-03 11:13:11";     
        $user6->created_by = "1";
        $user6->updated_by = "6";
        $user6->save();

        $user7 = new ServiceMethodsDesign;
        $user7->id = "21";
        //$user7->service_methods_id = "21";
        $user7->design = "5";
        $user7->created_at = "2021-07-01 10:10:11";
        $user7->updated_at = "2021-07-02 11:12:11";
        $user7->deleted_at = "2021-07-03 11:13:11";     
        $user7->created_by = "1";
        $user7->updated_by = "7";
        $user7->save();
    }
}
