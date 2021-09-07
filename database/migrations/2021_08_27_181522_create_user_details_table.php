<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->nullable()->comment = 'forign key of user';
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('date_of_birth')->nullable()->comment = 'store date of birth';;
            $table->string('gender')->nullable()->comment = 'store gender';
            $table->string('profile_image')->nullable();
            $table->unsignedBigInteger('address_id')->unsigned()->nullable()->comment = 'forign key of address';
            $table->foreign('address_id')->references('id')->on('address_details');
            $table->string('folder_name')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
