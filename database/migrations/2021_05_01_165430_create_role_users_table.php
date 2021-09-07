<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');            
            $table->unsignedBigInteger('role_id')->unsigned()->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->softDeletes()->nullable()->comment('stores deleted at time and date of user');
            $table->boolean('is_verify')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->boolean('is_activate')->default(true);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_users');
    }
}
