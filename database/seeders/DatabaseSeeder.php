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
        $this->call(OffdaySeeder::class);
        $this->call(PaymentTransactionSeeder::class); 
        $this->call(ServiceTableSeeder::class);
      //  $this->call(ServiceAddonTableSeeder::class);
      //  $this->call(BookingSeeder::class);
       // $this->call(BookingAddonSeeder::class);
      
           
       
        $this->call(SettingTableSeeder::class);
        
    }
}
