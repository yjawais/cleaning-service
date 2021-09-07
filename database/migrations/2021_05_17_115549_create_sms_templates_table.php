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
            $table->string('sms_type')->nullable(); 
            $table->text('sms_body')->nullable(); 
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
        Schema::dropIfExists('sms_templates');
    }
}
