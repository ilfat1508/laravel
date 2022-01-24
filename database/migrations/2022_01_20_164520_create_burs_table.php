<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('burs', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->text('responsibilities');
            $table->timestamps();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'bur_category_idx');
            $table->foreign('category_id','bur_category_fk')->on('burcats')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('burs');
    }
}
