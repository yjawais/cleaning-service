<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_histories', function (Blueprint $table) {
            $table->bigIncrements('id')->comment='Stores id of wallet history table';
            $table->integer('client_id')->nullable()->comment='Stores client id';
            $table->integer('wallet_amount')->nullable()->comment='Stores wallet amount';
            $table->enum('wallet_amount_status',['C','D'])->nullable()->comment='Stores wallet amount status of client';
            $table->string('wallet_trans_id', 100)->nullable()->comment='stores wallet id';
            $table->string('wallet_method', 10)->nullable()->comment='stores wallet method';
            $table->timestamp('lastmodify')->nullable()->comment='stores lastmodification date and time';
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
        Schema::dropIfExists('wallet_histories');
    }
}
