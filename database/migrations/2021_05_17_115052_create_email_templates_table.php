<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email_type')->nullable()->comment('Stores email type'); 
            $table->text('email_subject')->nullable()->comment('Stores email subject');
            $table->text('email_body')->nullable()->comment('Stores email body');
            $table->string('default_message')->nullable()->comment('Stores default message');
            $table->string('user_type')->nullable()->comment('Stores user type');  
            $table->boolean('is_verify')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->boolean('is_activate')->default(true);
            $table->string('created_by')->nullable()->comment('Stores created by');
            $table->string('updated_by')->nullable()->comment('Stores updated by');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
        Schema::dropIfExists('email_templates');
    }
}
