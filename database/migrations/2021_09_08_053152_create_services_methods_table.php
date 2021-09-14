<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_methods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_id')->unsigned()->nullable()->comment = 'forign key of serviceid';
            $table->foreign('service_id')->references('id')->on('services');
            $table->string('method_title')->nullable()->comment='Stores Method Title';
            $table->boolean('is_activate')->default(false);
            $table->integer('position')->nullable()->comment='Stores Position';
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
        Schema::dropIfExists('services_methods');
    }
}
