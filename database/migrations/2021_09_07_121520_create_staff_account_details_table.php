<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffAccountDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_account_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_no')->nullable()->comment = 'store bank account number';
            $table->string('bank_name')->nullable()->comment = 'store bank name';
            $table->string('branch_code')->nullable()->comment = 'store bank brach code';
            $table->string('bank_ifsc')->nullable()->comment = 'store bank ifsc';
            $table->string('bank_micr')->nullable()->comment = 'store bank micr';
            $table->text('branch_location')->nullable()->comment = 'store bank location';
            // $table->unsignedBigInteger('company_detail_id')->unsigned()->nullable()->comment = 'forign key of company detail';
            // $table->foreign('company_detail_id')->references('id')->on('company_details');
            $table->string('created_by')->nullable()->comment = 'store id of creater';
            $table->string('updated_by')->nullable()->comment = 'store id of updator';
            $table->softDeletes()->nullable()->comment('stores deleted at time and date '); 
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
        Schema::dropIfExists('staff_account_details');
    }
}
