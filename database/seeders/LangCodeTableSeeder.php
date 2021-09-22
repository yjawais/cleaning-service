<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\LangCode;
class LangCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lang = new LangCode();
        $lang->name="lang_en";
        $lang->description="lang_en";
        $lang->save();
    }
}
