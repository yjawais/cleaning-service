<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where("name", "admin")->first();
        $role_admin = new User();
        $role_admin->fname = "Admin";
        $role_admin->lname = "Panel";
        $role_admin->email = "admin@kaliba.in";
        $role_admin->password = bcrypt("123456789");
        $role_admin->email_verified_at = "2021-08-24 13:16:57";
        $role_admin->save();
        $role_admin->roles()->attach($role_admin);

        $role_user = Role::where("name", "user")->first();
        $role_user = new User();
        $role_user->fname = "User";
        $role_user->lname = "Panel";
        $role_user->email = "user@kaliba.in";
        $role_user->password = bcrypt("123456789");
        $role_user->email_verified_at = "2021-08-24 13:16:58";
        $role_user->save();
        $role_user->roles()->attach($role_user);

        $role_staff = Role::where("name", "staff")->first();
        $role_staff = new User();
        $role_staff->fname = "Staff";
        $role_staff->lname = "Panel";
        $role_staff->email = "staff@kaliba.in";
        $role_staff->password = bcrypt("123456789");
        $role_staff->email_verified_at = "2021-08-24 13:20:57";
        $role_staff->save();
        $role_staff->roles()->attach($role_staff);


        $role_user1 = new User();
        $role_user1->fname = "Ram";
        $role_user1->lname = "Davis";
        $role_user1->email = "ram@gmail.com";
        $role_user1->password = bcrypt("123456789");
        $role_user1->email_verified_at = "2021-08-24 13:16:59";
        $role_user1->save();
        $role_user1->roles()->attach($role_user);

        $role_user2 = new User();
        $role_user2->fname = "Shyam";
        $role_user2->lname = "Jones";
        $role_user2->email = "shyam@gmail.com";
        $role_user2->password = bcrypt("123456789");
        $role_user2->email_verified_at = "2021-08-24 13:16:00";
        $role_user2->save();
        $role_user2->roles()->attach($role_user);

        $role_user3 = new User();
        $role_user3->fname = "Sita";
        $role_user3->lname = "Smith";
        $role_user3->email = "sita@gmail.com";
        $role_user3->password = bcrypt("123456789");
        $role_user3->email_verified_at = "2021-08-24 13:17:57";
        $role_user3->save();
        $role_user3->roles()->attach($role_user);

        $role_user4 = new User();
        $role_user4->fname = "Gita";
        $role_user4->lname = "Grange";
        $role_user4->email = "gita@gmail.com";
        $role_user4->password = bcrypt("123456789");
        $role_user4->email_verified_at = "2021-08-24 13:18:57";
        $role_user4->save();
        $role_user4->roles()->attach($role_user);

        $role_user5 = new User();
        $role_user5->fname = "Thomas";
        $role_user5->lname = "Hubert";
        $role_user5->email = "thomas@gmail.com";
        $role_user5->password = bcrypt("123456789");
        $role_user5->email_verified_at = "2021-08-24 13:19:57";
        $role_user5->save();
        $role_user5->roles()->attach($role_user);

        $role_staff1 = new User();
        $role_staff1->fname = "Alvaro";
        $role_staff1->lname = "Trevino";
        $role_staff1->email = "alvaro@gmail.com";
        $role_staff1->password = bcrypt("123456789");
        $role_staff1->email_verified_at = "2021-08-24 13:21:57";
        $role_staff1->save();
        $role_staff1->roles()->attach($role_staff);

        $role_staff2 = new User();
        $role_staff2->fname = "Olive";
        $role_staff2->lname = "Stuart";
        $role_staff2->email = "olive@gmail.com";
        $role_staff2->password = bcrypt("123456789");
        $role_staff2->email_verified_at = "2021-08-24 13:22:57";
        $role_staff2->save();
        $role_staff2->roles()->attach($role_staff);

        $role_staff3 = new User();
        $role_staff3->fname = "Peg";
        $role_staff3->lname = "Hamilton";
        $role_staff3->email = "peg@gmail.com";
        $role_staff3->password = bcrypt("123456789");
        $role_staff3->email_verified_at = "2021-08-24 13:23:57";
        $role_staff3->save();
        $role_staff3->roles()->attach($role_staff);

        $role_staff4 = new User();
        $role_staff4->fname = "Jaspin";
        $role_staff4->lname = "lege";
        $role_staff4->email = "jaspin@gmail.com";
        $role_staff4->password = bcrypt("123456789");
        $role_staff4->email_verified_at = "2021-08-24 13:24:57";
        $role_staff4->save();
        $role_staff4->roles()->attach($role_staff);

        $role_staff5 = new User();
        $role_staff5->fname = "Lucinda";
        $role_staff5->lname = "Roach";
        $role_staff5->email = "lucinda@gmail.com";
        $role_staff5->password = bcrypt("123456789");
        $role_staff5->email_verified_at = "2021-08-24 13:25:57";
        $role_staff5->save();
        $role_staff5->roles()->attach($role_staff);
    }
}
