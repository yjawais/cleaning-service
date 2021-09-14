<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderClientInfosTable extends Migration
{
    /**
     * Run the migrations.
     * Created by Awais
     * @return void
     */
    public function up()
    {
        Schema::create('order_client_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id')->nullable()->comment='Order Id';
            $table->string('client_name', 200)->nullable()->comment='name of client ';
            $table->string('client_email', 200)->nullable()->comment='email of client ';
            $table->string('client_phone', 15)->nullable()->comment='client phone number';
            $table->text('client_personal_info')->nullable()->comment='client personal information';
            $table->bigInteger('order_duration')->comment='Order duration';
            $table->bigInteger('recurring_id')->comment='recurring id';
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
        Schema::dropIfExists('order_client_infos');
    }
}
