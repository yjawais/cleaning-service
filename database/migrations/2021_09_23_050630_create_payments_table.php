<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id')->nullable()->comment='Order Id';
            $table->string('payment_method', 200)->nullable()->comment='method of payment';
            $table->string('transaction_id', 300)->nullable()->comment='transaction id ';
            $table->double('amount')->nullable()->comment='payment amount';
            $table->double('discount')->nullable()->comment='payment discount';
            $table->double('taxes')->nullable()->comment='payment taxes';
            $table->double('partial_amount')->nullable()->comment='partial amount';
            $table->date('payment_date')->comment='date of payment';
            $table->double('net_amount')->nullable()->comment='net amount';
            $table->timestamp('lastmodify')->comment='last modified at';
            $table->bigInteger('frequently_discount')->comment='frequently discount';
            $table->double('frequently_discount_amount')->nullable()->comment='frequently discount amount';
            $table->enum('recurrence_status',array('Y','N'))->comment='recurrence status';
            $table->string('payment_status', 255)->nullable()->comment='payment status ';
            $table->string('created_by')->nullable()->comment='Stores username who created';
            $table->string('updated_by')->nullable()->comment='Stores username who updated';
            $table->softDeletes()->comment='Add Deleted at timestamp';
            $table->text("slug")->comment='Stores Slug';
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
        Schema::dropIfExists('payments');
    }
}
