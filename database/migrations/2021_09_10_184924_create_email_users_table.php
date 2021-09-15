<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('email_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('cus_ids')->nullable()->comment('stores customer ids');
            $table->string('cus_sub')->nullable()->comment('stores customer subject');
            $table->text('cus_msg')->nullable()->comment('stores customer message');
            $table->text('cus_img')->default("https://cdn2.iconfinder.com/data/icons/e-commerce-line-4-1/1024/open_box4-512.png")->comment('stores customer image');
            $table->timestamp('cus_dt')->useCurrent()->comment('stores customer date');
            $table->timestamp('created_at')->useCurrent()->comment('stores created at');
            $table->timestamp('updated_at')->useCurrent()->comment('stores updated at');
            $table->string('created_by')->nullable()->comment('Stores created by');
            $table->string('updated_by')->nullable()->comment('Stores updated by');
            $table->softDeletes()->comment('stores deleted at timestamp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_users');
    }
}
