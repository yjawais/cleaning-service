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
            $table->string('date_of_birth')->nullable()->comment = 'store date of birth';
            $table->string('gender')->nullable()->comment = 'store gender';
            $table->string('profile_image')->default("https://cdn2.iconfinder.com/data/icons/e-commerce-line-4-1/1024/open_box4-512.png");
            $table->unsignedBigInteger('address_id')->unsigned()->nullable()->comment = 'forign key of address';
            $table->foreign('address_id')->references('id')->on('address_details');
            $table->string('folder_name')->nullable();
            $table->string('referral_code')->nullable()->comment('stores referral code of user');
            $table->integer('wallet_amount')->nullable()->comment('stores wallet amount of user');
            $table->string('vc_status')->default('not_done')->comment('stores verified status of user');
            $table->string('p_status')->default('not_done')->comment('stores payment confirmation status of user');
            $table->boolean('is_verify')->default(false)->comment('stores verified status of user');
            $table->string('created_by')->nullable()->comment('stores name of person who created user');
            $table->string('updated_by')->nullable()->comment('stores name of person who updated user');
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
