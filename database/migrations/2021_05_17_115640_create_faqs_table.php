<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->nullable(); 
            $table->text('detail')->nullable(); 
            $table->string('type')->nullable();
            $table->text('slug')->nullable();
            $table->softDeletes()->nullable()->comment('stores deleted at time and date of user');
            $table->boolean('is_verify')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->boolean('is_activate')->default(true);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_by')->useCurrent();
            $table->timestamp('updated_by')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
