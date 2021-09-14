<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_details', function (Blueprint $table) {
            $table->BigIncrements('id')->comment='Stores id of staff table';
            $table->unsignedBigInteger('user_id')->nullable()->comment('foregin key');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('address_id')->unsigned()->nullable()->comment = 'forign key of address';
            $table->foreign('address_id')->references('id')->on('address_details');
            $table->string('role', 20)->nullable()->comment('stores role of admin');
            $table->string('description', 320)->nullable()->comment='Stores Description';
            $table->enum('enable_booking',['Y','N'])->nullable()->comment='Stores enable booking value';
            $table->enum('service_commission',['F','P'])->nullable()->comment='Stores service commission value';
            $table->double('commision_value')->nullable()->comment='stores commission value';
            $table->enum('schedule_type',['M','W'])->nullable()->comment='Stores schedule type value';
            $table->string('image', 250)->default("https://cdn2.iconfinder.com/data/icons/e-commerce-line-4-1/1024/open_box4-512.png")->comment="Stores Images";
            $table->string('service_ids', 255)->nullable()->comment = 'stores service id';
            $table->integer('staff_wallet_amount')->nullable()->comment='Stores staff wallet amount';
            $table->unsignedBigInteger('staff_account_id')->unsigned()->nullable()->comment = 'forign key of staff account detail';
            $table->foreign('staff_account_id')->references('id')->on('staff_account_details');
            $table->string('created_by')->nullable()->comment('stores name of person who created');
            $table->string('updated_by')->nullable()->comment('stores name of person who updated');
            $table->softDeletes()->nullable()->comment('stores deleted at time and date'); 
            $table->timestamp('created_at')->nullable()->comment='Stores created at time';
            $table->timestamp('updated_at')->nullable()->comment='Stores updated at time';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_infos');
    }
}
