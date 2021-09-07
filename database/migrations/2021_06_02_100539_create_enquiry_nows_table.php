<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiryNowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiry_nows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->text('enquiry_products')->nullable();
            $table->string('enqury_status')->default('Pending');
            $table->text('enquiry_msg')->nullable();
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
        Schema::dropIfExists('enquiry_nows');
    }
}
