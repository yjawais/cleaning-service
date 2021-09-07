<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('short_form');
            $table->string('image')->default("https://cdn2.iconfinder.com/data/icons/e-commerce-line-4-1/1024/open_box4-512.png");
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
        Schema::dropIfExists('countries');
    }
}
