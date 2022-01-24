<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeliksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teliks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('width');
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('teliks_id')->nullable();
            $table->index('teliks_id','telik_firm_idx');
            $table->foreign('teliks_id', 'telik_firm_fk')->on('firms')->references('id');
////            $table->unsignedBigInteger('tv_brand')->nullable();
//            $table->index('tv_brand', 'telik_firm_idx');
//            $table->foreign('tv_brand', 'telik_firm_fk')->on('firms')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teliks');
    }
}
