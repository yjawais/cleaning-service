<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_commissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('staff_id')->unsigned()->nullable();
            $table->foreign('staff_id')->references('id')->on('staff_details');
            $table->string('order_id')->comment('stores the id of the order');
            $table->double('amt_payable')->comment('stores the payable amount');
            $table->double('advance_paid')->comment('stores the advance paid by the customer');
            $table->double('net_total')->comment('stores the total of the amount');
            $table->string('payment_method')->comment('stores the method the payment');
            $table->string('transaction_id')->comment('stores the transaction id');
            $table->string('payment_date')->comment('stores the date of the payment');
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
        Schema::dropIfExists('staff_commissions');
    }
}
