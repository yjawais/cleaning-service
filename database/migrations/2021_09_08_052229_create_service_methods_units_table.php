<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceMethodsUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_methods_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_id')->unsigned()->nullable()->comment = 'forign key of serviceid';
            $table->foreign('service_id')->references('id')->on('services');
            $table->unsignedBigInteger('methods_id')->unsigned()->nullable();
           $table->foreign('methods_id')->references('id')->on('services_methods');
           $table->string('units_title')->nullable()->comment='Stores Units Title';
            $table->double('base_price')->nullable()->comment='Stores Base Price';
            $table->integer('min_limit')->nullable()->comment='Stores Minimum Limit';
            $table->integer('max_limit')->nullable()->comment='Stores Maximum Limit';
            $table->boolean('is_activate')->default(false);
            $table->enum('status', ['E', 'D'])->comment='Stores Status';
            $table->integer('position')->nullable()->comment='Stores Position';
            $table->string('limit_title')->nullable()->comment='Stores Limit Title';
            $table->string('unit_symbol')->nullable()->comment='Stores Unit Symbol';
            $table->enum('half_section', ['E', 'D'])->comment='Stores Half Section';
            $table->integer('uduration')->nullable()->comment='Stores Uduration';
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
        Schema::dropIfExists('service_methods_units');
    }
}
