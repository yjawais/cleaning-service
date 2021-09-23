<?php



use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service1 = new Service;
        $service1->id=9;
        // $service1->user_id=1;
        $service1->title="House Cleaning";
        $service1->description="House Cleaners work in residential settings where they are expected to keep houses clean and well-organized.";
        $service1->color="#00a87e";
        $service1->position=0;
        $service1->save();

        $service2 = new Service;
        // $service2->user_id=2;
        $service2->id=10;
        $service2->title="Plumbing Services";
        $service2->description="We are ready to provide Plumbing Services you can trust!";
        $service2->color="#006999";
        $service2->position=1;
        $service2->save();

        $service3 = new Service;
        $service3->id=11;
        // $service3->user_id=3;
        $service3->title="Carpenter Services";
        $service3->description="We are ready to provide Carpenter Services you can trust!";
        $service3->color="#996600";
        $service3->position=2;
        $service3->save();

        $service4 = new Service;
        $service4->id=12;
        // $service4->user_id=4;
        $service4->title="Office Cleaning";
        $service4->description="Office/Commercial Cleaners clean offices, industrial work areas, and other premises using heavy duty cleaning equipment.";
        $service4->color="#800080";
        $service4->position=3;
        $service4->save();
    }
}
