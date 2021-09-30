<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceAddon;
use Illuminate\Database\Eloquent\Model;

class ServiceAddonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addon1 = new ServiceAddon;
        $addon1->id=15;
        // $addon1->user_id=1;
        $addon1->service_id=9;
        $addon1->service_name="Fridge Cleaning";
        $addon1->base_price="5";
        $addon1->max_quantity=5;
        $addon1->multiple_quantity="Y";
        $addon1->position=0;
        $addon1->predefine_image="ct-icon-fridge.png";
        $addon1->predefine_image_title="";
        $addon1->addon_description="";
        $addon1->duration=30;
        $addon1->slug="fridge-cleaning";
        $addon1->save();

        $addon2 = new ServiceAddon;
        $addon2->id=16;
        // $addon2->user_id=2;
        $addon2->service_id=9;
        $addon2->service_name="Oven Cleaning";
        $addon2->base_price="5";
        $addon2->max_quantity=5;
        $addon2->multiple_quantity="N";
        $addon2->position=0;
        $addon2->predefine_image="ct-icon-oven.png";
        $addon2->predefine_image_title="";
        $addon2->addon_description="";
        $addon2->duration=30;
        $addon2->slug="oven-cleaning";
        $addon2->save();

        $addon3 = new ServiceAddon;
        $addon3->id=17;
        // $addon3->user_id=3;
        $addon3->service_id=9;
        $addon3->service_name="Inside Window Cleaning";
        $addon3->base_price="5";
        $addon3->max_quantity=10;
        $addon3->multiple_quantity="N";
        $addon3->position=0;
        $addon3->predefine_image="ct-icon-inside-window.png";
        $addon3->predefine_image_title="";
        $addon3->addon_description="";
        $addon3->duration=30;
        $addon3->slug="inside-window-cleaning";
        $addon3->save();

        $addon4 = new ServiceAddon;
        $addon4->id=18;
        // $addon4->user_id=4;
        $addon4->service_id=11;
        $addon4->service_name="Damaged flooring";
        $addon4->base_price="10";
        $addon4->max_quantity=5;
        $addon4->multiple_quantity="N";
        $addon4->position=0;
        $addon4->predefine_image="ct-damaged-flooring.png";
        $addon4->predefine_image_title="";
        $addon4->addon_description="";
        $addon4->duration=30;
        $addon4->slug="damaged-flooring";
        $addon4->save();

        $addon5 = new ServiceAddon;
        $addon5->id=19;
        // $addon5->user_id=5;
        $addon5->service_id=11;
        $addon5->service_name="Door jams";
        $addon5->base_price="10";
        $addon5->max_quantity=3;
        $addon5->multiple_quantity="N";
        $addon5->position=0;
        $addon5->predefine_image="ct-door-jam.png";
        $addon5->predefine_image_title="";
        $addon5->addon_description="";
        $addon5->duration=60;
        $addon5->slug="door-jams";
        $addon5->save();

        $addon6 = new ServiceAddon;
        $addon6->id=20;
        // $addon6->user_id=6;
        $addon6->service_id=12;
        $addon6->service_name="Parking Cleaning";
        $addon6->base_price="20";
        $addon6->max_quantity=3;
        $addon6->multiple_quantity="N";
        $addon6->position=0;
        $addon6->predefine_image="ct-parking-cleaning.png";
        $addon6->predefine_image_title="";
        $addon6->addon_description="";
        $addon6->duration=30;
        $addon6->slug="parking-cleaning";
        $addon6->save();

        $addon7 = new ServiceAddon;
        $addon7->id=21;
        // $addon7->user_id=7;
        $addon7->service_id=12;
        $addon7->service_name="Storeroom Cleaning";
        $addon7->base_price="10";
        $addon7->max_quantity=5;
        $addon7->multiple_quantity="Y";
        $addon7->position=0;
        $addon7->predefine_image="ct-icon-basement.png";
        $addon7->predefine_image_title="";
        $addon7->addon_description="";
        $addon7->duration=30;
        $addon7->slug="storeroom-cleaning";
        $addon7->save();
    }
}
