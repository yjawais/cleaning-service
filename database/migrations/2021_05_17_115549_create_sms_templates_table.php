<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sms_type')->nullable()->comment('Stores sms type');
            $table->string('sms_subject')->nullable()->comment('Stores sms subject');
            $table->text('sms_body')->nullable()->comment('Stores sms body'); 
            $table->string('default_message')->nullable()->comment('Stores default message');
            $table->string('user_type')->nullable()->comment('Stores user type');
            $table->boolean('is_verify')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->boolean('is_activate')->default(true);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->string('created_by')->nullable()->comment('Stores created by');
            $table->string('updated_by')->nullable()->comment('Stores updated by');
            $table->softDeletes()->nullable()->comment('stores deleted at time and date of user');
            $table->string('slug')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sms_templates');
    }
}
