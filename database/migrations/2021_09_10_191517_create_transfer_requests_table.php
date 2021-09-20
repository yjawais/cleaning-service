<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('request_id');
            $table->integer('staff_id')->comment('stores the staff id');
            $table->string('email_id')->nullable()->comment('stores the email id');
            $table->double('request_amount')->comment('stores the requested amount');
            $table->boolean('is_active')->default(true)->comment('stores the status');
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
        Schema::dropIfExists('transfer_requests');
    }
}
