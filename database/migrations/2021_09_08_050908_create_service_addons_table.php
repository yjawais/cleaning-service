<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceAddonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_addons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_id')->unsigned()->nullable()->comment = 'forign key of serviceid';
            $table->foreign('service_id')->references('id')->on('services');
            $table->string('service_name')->nullable()->comment='Stores Addon Servicename';
            $table->string('base_price')->nullable()->comment='Stores Baseprice';
            $table->integer('max_quantity')->nullable()->comment='Stores Max Quantity';
            $table->string('image')->default("https://cdn2.iconfinder.com/data/icons/e-commerce-line-4-1/1024/open_box4-512.png")->comment="Stores Image Link";
            $table->string('multiple_quantity')->nullable()->comment='Stores Multiple Quantity';
            $table->integer('position')->nullable()->comment='Stores Position';
            $table->string('predefine_image')->default("https://cdn2.iconfinder.com/data/icons/e-commerce-line-4-1/1024/open_box4-512.png")->comment="Stores Predefine Image Link";
            $table->string('predefine_image_title')->nullable()->comment='Stores Predefine Image Title';
            $table->string('addon_description')->nullable()->comment='Stores Addon Service description';
            $table->string('duration')->nullable()->comment='Stores Duration';
            $table->text('slug')->nullable()->comment='Stores Slug';
            $table->string('created_by')->nullable()->comment='Stores username who created';
            $table->string('updated_by')->nullable()->comment='Stores username who updated';
            $table->boolean('is_activate')->default(false);
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
        Schema::dropIfExists('service_addons');
    }
}
