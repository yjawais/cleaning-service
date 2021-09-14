<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        //$this->call(UserDetailSeeder::class);
        $this->call(LangCodeTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(ServiceAddonTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        }
}
