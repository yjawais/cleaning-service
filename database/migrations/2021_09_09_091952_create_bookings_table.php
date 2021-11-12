<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     * Created by Awais
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->comment='Order id';
            $table->unsignedBigInteger('client_id')->unsigned()->nullable()->comment = 'foreign key of client id';
            $table->integer('pincode')->nullable()->comment='Pincode';
            $table->foreign('client_id')->references('id')->on('users');
            $table->date('order_date')->default(Carbon::now())->comment='date of order';
            $table->string('booking_duration')->nullable()->comment='booking duation';
            $table->dateTime('booking_date_time')->comment='date and time of booking';
            $table->unsignedBigInteger('service_id')->unsigned()->nullable()->comment = 'foreign key of serviceid';
            $table->foreign('service_id')->references('id')->on('services');
            $table->integer('method_id')->nullable()->comment='method Id';
            $table->integer('method_unit_id')->nullable()->comment='method unit Id';
            $table->double('method_unit_qty')->nullable()->comment='method unit quantity';
            $table->double('method_unit_qty_rate')->nullable()->comment='method unit quantity rate';
            $table->enum('booking_status',array('A','C','R','CC'))->comment='booking status Accept  Cancelled Reject Cancalled by Customer';
            $table->string('reject_reason', 200)->nullable()->comment='reject reason';
            //$table->enum('reminder_status',array('0','1'))->comment='reminder status';
            $table->boolean('reminder_status')->default(true)->nullable()->comment='reminder status';
            $table->timestamp('last_modify')->comment='last modified at';
            //$table->enum('read_status',array('R','U'))->comment='read status';
            $table->boolean('read_status')->default(true)->nullable()->comment='read status';
            $table->string('staff_detail_ids', 160)->nullable()->comment='staff details id';
            $table->string('gc_event_id', 255)->nullable()->comment='gc event id';
            $table->string('gc_staff_event_id', 255)->nullable()->comment='gc staff event id';
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
        Schema::dropIfExists('bookings');
    }
}
