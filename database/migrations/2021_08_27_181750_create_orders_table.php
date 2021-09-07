<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('entity')->nullable();
            $table->text('notes')->nullable();
            $table->string('order_id')->default("No_Detail");
            $table->string('offer_id')->nullable();
            $table->string('currency')->default("INR");
            $table->integer('attempts')->default("0"); 
            $table->string('receipt')->nullable();  
            $table->double('amount')->nullable();
            $table->double('amount_paid')->nullable();  
            $table->double('amount_due')->nullable();  
            $table->enum('status', array('created','pending', 'processing', 'cancel','completed'))->default('Pending'); 
            $table->unsignedBigInteger('user_id')->unsigned()->nullable()->comment = 'forign key of user';
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('updated_by')->nullable();
            $table->softDeletes()->nullable()->comment('stores deleted at time and date of user');
            $table->boolean('is_activate')->default(true);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
