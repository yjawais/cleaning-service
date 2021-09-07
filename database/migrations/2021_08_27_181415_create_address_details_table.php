<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address_type')->default('Permanant')->comment = 'store address type which is permanant,office,branch';
            $table->string('address_line_1')->nullable()->comment = 'store address line1';
            $table->string('address_line_2')->nullable()->comment = 'store address line2';
            $table->string('address_area')->nullable()->comment = 'store address area';
            $table->unsignedBigInteger('city_id')->unsigned()->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger('state_id')->unsigned()->nullable();
            $table->foreign('state_id')->references('id')->on('states');
            $table->unsignedBigInteger('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries');            
            $table->string('address_pincode')->nullable()->comment = 'store address pincode';
            $table->text('contact_number')->nullable()->comment = 'store contact number';
            $table->string('created_by')->nullable()->comment = 'store id of creater';
            $table->string('updated_by')->nullable()->comment = 'store id of updator';
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
        Schema::dropIfExists('address_details');
    }
}
