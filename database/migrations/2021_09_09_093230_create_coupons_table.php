<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     * Created By Awais
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coupon_code', 250)->nullable()->comment='Coupon Code used';
            $table->enum('coupon_type',array('P','F'))->comment='Type of Coupon';
            $table->integer('coupon_limit')->nullable()->comment='limit of Coupon';
            $table->integer('coupon_used')->nullable()->comment='Number of Coupon used';
            $table->double('coupon_value')->nullable()->comment='Value of Coupon ';
            $table->date('coupon_expiry')->comment='Coupon expiry date';
            //$table->enum('is_activate',array('on','off'))->comment='Coupon status';
            $table->boolean('is_activate')->default(true)->nullable()->comment='coupon status is activate';
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
        Schema::dropIfExists('coupons');
    }
}
