<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleBreaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_breaks', function (Blueprint $table) {
            $table->bigIncrements('id')->comment='Stores id of schedule breaks table';
            $table->unsignedBigInteger('provider_id')->nullable()->comment='Stores Provider id of schedule breaks table';
            $table->foreign('provider_id')->references('id')->on('users');
            $table->integer('week_id')->nullable()->comment='Stores week id';
            $table->integer('weekday_id')->nullable()->comment='Stores weekday id';
            $table->timestamp('break_start')->nullable()->comment='Stores break start time';
            $table->timestamp('break_end')->nullable()->comment='Stores break end time';
            $table->softDeletes()->nullable()->comment('stores deleted at time and date'); 
            $table->string('created_by')->nullable()->comment('stores name of person who created');
            $table->string('updated_by')->nullable()->comment('stores name of person who updated');
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
        Schema::dropIfExists('schedule_breaks');
    }
}
