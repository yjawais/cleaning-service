<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffStatusesTable extends Migration
{
    /**
     * Run the migrations.
     * Created by Awais
     * @return void
     */
    public function up()
    {
        Schema::create('staff_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('staff_id')->comment='Staff id';
            $table->integer('order_id')->comment='Order id';
           // $table->enum('status',array('A','D'))->comment='status of staff';
            $table->boolean('is_activate')->default(true)->nullable()->comment='is activate';
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
        Schema::dropIfExists('staff_statuses');
    }
}
