<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBurInvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bur_invs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bur_id');
            $table->unsignedBigInteger('inv_id');

            $table->index('bur_id', 'bur_inv_bur_idx');
            $table->index('inv_id', 'bur_inv_inv_id');
            $table->foreign('bur_id', 'bur_inv_bur_fk')->on('burs')->references('id');
            $table->foreign('inv_id', 'bur_inv_inv_fk')->on('invs')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bur_invs');
    }
}
