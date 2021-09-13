<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffGcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_gcs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment='Stores id of staff gc table';
            $table->string('gc_id', 70)->nullable()->comment='stores gc id';
            $table->enum('gc_status',['Y','N'])->nullable()->comment='Stores gc status value';
            $table->text('gc_token')->nullable()->comment='Stores gc token';
            $table->enum('gc_status_configure',['Y','N'])->nullable()->comment='Stores gc status configure value';
            $table->enum('gc_status_sync_configure',['Y','N'])->nullable()->comment='Stores gc status sync configure value';
            $table->string('gc_client_id', 200)->nullable()->comment='stores gc client id';
            $table->string('gc_client_secret', 200)->nullable()->comment='stores gc client secret';
            $table->string('gc_frontend_url', 200)->nullable()->comment='stores gc frontend url';
            $table->string('gc_admin_url', 200)->nullable()->comment='stores gc admin url';
            $table->integer('staff_id')->nullable()->comment='Stores staff id';
            $table->string('gc_api_key', 200)->nullable()->comment='stores gc api key';
            $table->string('created_by')->nullable()->comment('stores name of person who created');
            $table->string('updated_by')->nullable()->comment('stores name of person who updated');
            $table->softDeletes()->nullable()->comment('stores deleted at time and date'); 
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
        Schema::dropIfExists('staff_gcs');
    }
}
