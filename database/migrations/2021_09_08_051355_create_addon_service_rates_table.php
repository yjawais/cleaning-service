<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddonServiceRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addon_service_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('addon_service_id')->unsigned()->nullable()->comment = 'forign key of addon serviceid';
            $table->foreign('addon_service_id')->references('id')->on('service_addons');
            $table->string('unit')->nullable()->comment='Stores Unit';
            $table->enum('rules', ['E', 'G'])->comment='Stores Rules';
            $table->double('rate')->comment='Stores Rate';
            $table->text('slug')->nullable()->comment='Stores Slug';
            $table->string('created_by')->nullable()->comment='Stores username who created';
            $table->string('updated_by')->nullable()->comment='Stores username who updated';
            $table->softDeletes()->comment='Add Deleted at timestamp';
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
        Schema::dropIfExists('addon_service_rates');
    }
}
