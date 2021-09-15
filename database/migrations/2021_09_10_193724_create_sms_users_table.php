<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('cus_ids')->comment('stores the id of the customer');
            $table->text('cus_msg')->comment('stores the customer message');
            $table->timestamp('cus_dt')->useCurrent()->comment('stores the date');
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
        Schema::dropIfExists('sms_users');
    }
}
