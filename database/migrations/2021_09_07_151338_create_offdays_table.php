<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffdaysTable extends Migration
{
    /**
     * Run the migrations.
     * Created by Awais
     * @return void
     */
    public function up()
    {
        Schema::create('offdays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->nullable()->comment='foreign key user id';
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('off_date')->nullable()->comment='stores Off day of user';
            $table->timestamp('last_modify')->comment='last modified at';
            $table->string('status')->nullable()->comment='status of offday';
            $table->boolean('is_activate')->default(true)->nullable()->comment='is user activated';
            $table->string('created_by')->nullable()->comment='entry created by';
            $table->string('updated_by')->nullable()->comment='entry created by';
            $table->softDeletes('deleted_at')->nullable()->comment='time deleted at';
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
        Schema::dropIfExists('offdays');
    }
}
