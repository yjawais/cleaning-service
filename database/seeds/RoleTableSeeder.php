<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name="admin";
        $role_admin->description="ROLE_ADMIN";
        $role_admin->route_path="role.admin.home";
        $role_admin->slug="admin";
        $role_admin->save();

        $role_user = new Role();
        $role_user->name="user";
        $role_user->description="ROLE_USER";
        $role_user->route_path="role.user.home";
        $role_user->slug="user";
        $role_user->save();

        $role_staff = new Role();
        $role_staff->name="staff";
        $role_staff->description="ROLE_STAFF";
        $role_staff->route_path="role.staff.home";
        $role_staff->slug="staff";
        $role_staff->save();
    }
}
