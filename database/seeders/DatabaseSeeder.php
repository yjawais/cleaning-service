<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
        $this->call(UserDetailSeeder::class);
        $this->call(LangCodeTableSeeder::class);
        $this->call(ServiceTableSeeder::class);      
        $this->call(ServiceAddonTableSeeder::class);
        $this->call(OffdaySeeder::class);
        $this->call(SettingTableSeeder::class);
       $this->call(FrequentlyDiscountSeeder::class);
       $this->call(PaymentSeeder::class); 
        $this->call(WeekDayAvailableSeeder::class);
        // $this->call(ServicesMethodSeeder::class);
        // $this->call(ServiceMethodsUnitsSeeder::class);
        // $this->call(ServiceMethodsDesignSeeder::class);
        $this->call(BookingSeeder::class);
        $this->call(BookingAddonSeeder::class);

        }
     
}
