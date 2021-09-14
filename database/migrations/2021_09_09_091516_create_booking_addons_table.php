<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingAddonsTable extends Migration
{
    /**
     * Run the migrations.
     * Created by Awais
     * @return void
     */
    public function up()
    {
        Schema::create('booking_addons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->comment='Order id';
            $table->unsignedBigInteger('service_id')->unsigned()->nullable()->comment = 'foreign key of serviceid';
            $table->foreign('service_id')->references('id')->on('services');
            $table->integer('addons_service_id')->comment='stores Addon Service id';
            $table->integer('addons_service_qty')->comment=' stores Addon Service quantity';
            $table->double('addons_service_rate')->comment='stores Addon Service rate';
            $table->string('created_by')->nullable()->comment='Stores username who created';
            $table->string('updated_by')->nullable()->comment='Stores username who updated';
            $table->softDeletes()->comment='Add Deleted at timestamp';
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
        Schema::dropIfExists('booking_addons');
    }
}
