<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrequentlyDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequently_discounts', function (Blueprint $table) {
            $table->bigIncrements('id')->comment='Stores id of frequent discount table';
            $table->string('discount_typename', 20)->nullable()->comment='stores discount typename';
            $table->integer('days')->nullable()->comment='Stores number of days';
            $table->enum('d_type',['F','P'])->nullable()->comment='Stores day type';
            $table->double('rates')->nullable()->comment='stores rates';
            $table->string('labels', 50)->nullable()->comment='stores labels';
            $table->integer('booking_count')->nullable()->comment='Stores booking count';
            $table->string('stripe_plan_id', 30)->nullable()->comment='stores stripe plan id';
            $table->boolean('is_activate')->default(true);
            $table->string('created_by')->nullable()->comment('stores name of person who created');
            $table->string('updated_by')->nullable()->comment('stores name of person who updated');
            $table->softDeletes()->nullable()->comment('stores deleted at time and date'); 
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
        Schema::dropIfExists('frequently_discounts');
    }
}
