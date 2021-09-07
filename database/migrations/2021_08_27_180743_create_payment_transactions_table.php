<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('sales_tax', 5, 2)->default(0)->comment = "Any Tax  charges";
            $table->decimal('service_charges', 5, 2)->default(0)->comment = "Any charges related to service";
            $table->string('comment')->default("No_Detail")->comment = "Any Special Comment on Product";
            $table->string('coupon_code')->default("No_Detail")->comment = "Coupon code from the coupon table";
            $table->string('coupon_description')->default("No_Detail")->comment = "Coupon code from the coupon table";
            $table->string('transaction_id')->default("No_Detail");
            $table->string('currency')->default("INR");
            $table->enum('transaction_status', array('Pending','Processing','Cancel','Completed'))->default('Pending'); 
            $table->text('transaction_description')->nullable(); 
            $table->timestamp('transaction_date')->useCurrent(); 
            $table->text('transaction_amount')->nullable(); 
            $table->string('payment_mode')->default("No_Detail"); 
            $table->enum('payment_status', array('Pending', 'Processing', 'Cancel','Completed'))->default('Pending'); 
            $table->text('error_code')->nullable(); 
            $table->text('error_description')->nullable(); 
            $table->text('error_source')->nullable(); 
            $table->text('error_step')->nullable(); 
            $table->text('error_reason')->nullable(); 
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
        Schema::dropIfExists('payment_transactions');
    }
}
