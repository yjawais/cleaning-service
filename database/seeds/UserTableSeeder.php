<?php

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
        $role_user->email_verified_at = "2021-08-24 13:16:57";
        $role_user->save();
        $role_user->roles()->attach($role_user);
    }
}
