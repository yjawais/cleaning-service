<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('provider')->nullable(); 
            $table->text('description')->nullable(); 
            $table->string('icon')->default("https://cdn2.iconfinder.com/data/icons/e-commerce-line-4-1/1024/open_box4-512.png");
            $table->text('client_id')->nullable(); 
            $table->text('client_secret')->nullable(); 
            $table->text('redirect_link')->nullable();
            $table->boolean('check')->default(false);
            $table->string('slug')->nullable();
            $table->softDeletes()->nullable()->comment('stores deleted at time and date of user');
            $table->boolean('is_verify')->default(false);
            $table->boolean('confirmed')->default(false);
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
        Schema::dropIfExists('social_settings');
    }
}
