<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('city_name');
            $table->string('city_short_form');
            $table->string('district_name');
            $table->string('image')->default("https://cdn2.iconfinder.com/data/icons/e-commerce-line-4-1/1024/open_box4-512.png");
            $table->unsignedBigInteger('state_id')->unsigned()->nullable();
            $table->foreign('state_id')->references('id')->on('states');
            $table->unsignedBigInteger('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('latitude')->default("No_Data_Found");
            $table->string('longitude')->default("No_Data_Found");
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
        Schema::dropIfExists('cities');
    }
}
