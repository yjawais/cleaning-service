<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesMethodsUnitsRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_methods_units_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('units_id')->unsigned()->nullable()->comment = 'forign key of serviceid';
            $table->foreign('units_id')->references('id')->on('service_methods_units');
           $table->string('units')->nullable()->comment='Stores Unit';
            $table->enum('rules', ['G', 'E'])->comment='Stores Rules';
            $table->float('rate')->comment='Stores Rate';
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
        Schema::dropIfExists('services_methods_units_rates');
    }
}
