<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name')->nullable();
            $table->string('designation')->nullable();
            $table->text('message')->nullable();
            $table->string('image')->nullable(); 
            $table->string('display_page')->nullable();
            // $table->enum('status', array('sending','receiving', 'approved', 'reject'))->default('sending'); 
            // $table->unsignedBigInteger('user_id')->unsigned()->nullable()->comment = 'forign key of user';
            // $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('is_verify')->default(false);
            $table->softDeletes()->nullable()->comment('stores deleted at time and date of user');
            $table->boolean('is_activate')->default(true);
            $table->string('updated_by')->nullable();
            $table->string('created_by')->nullable();            
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
        Schema::dropIfExists('testimonials');
    }
}
