<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeekDayAvailablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('week_day_availables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('provider_id')->comment('stores the provider id');
            $table->integer('week_id')->comment('stores week id');
            $table->integer('weekday_id')->comment('stores the weekday id');
            $table->time('day_start_time')->nullable()->comment('stores the day start time');
            $table->time('day_end_time')->nullable()->comment('stores the day end time');
            $table->string('off_day')->comment('stores the status of the off day');
            $table->string('provider_schedule_type')->nullable()->comment('stores the schedule type of provider');
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
        Schema::dropIfExists('week_day_availables');
    }
}
