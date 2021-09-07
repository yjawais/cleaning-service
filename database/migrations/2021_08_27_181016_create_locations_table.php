<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('area')->nullable()->comment = 'store location area'; 
            $table->string('pin_code')->nullable()->comment = 'store location pincode';
            $table->text('description')->nullable()->comment = 'store descriptions';
            $table->string('thumbnail')->default("https://cdn2.iconfinder.com/data/icons/e-commerce-line-4-1/1024/open_box4-512.png")->comment = 'store thumbnail image';
            $table->string('msg')->default("No_Data_Found");  
            $table->unsignedBigInteger('city_id')->unsigned()->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger('state_id')->unsigned()->nullable();
            $table->foreign('state_id')->references('id')->on('states');
            $table->unsignedBigInteger('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('latitude')->default("No_Data_Found");
            $table->string('longitude')->default("No_Data_Found");
            $table->string('slug')->nullable();
            // Above the line
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
        Schema::dropIfExists('locations');
    }
}
