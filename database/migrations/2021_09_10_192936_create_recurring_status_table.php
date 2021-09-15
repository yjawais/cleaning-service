<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurringStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurring_status', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('recurring_id')->comment('stores the recurring id');
            $table->enum('status',['Accepted','Decline','Pending'])->default('Pending')->comment('stores the recurring status');
            $table->timestamp('created_at')->nullable()->comment('stores created at');
            $table->timestamp('updated_at')->nullable()->comment('stores updated at');
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
        Schema::dropIfExists('recurring_status');
    }
}
