<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelikTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telik_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('telik_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('telik_id', 'telik_tag_telik_idx');
            $table->index('tag_id', 'telik_tag_tag_idx');

            $table->foreign('telik_id', 'telik_tag_telik_fk')->on('teliks')->references('id');
            $table->foreign('tag_id', 'telik_tag_tag_fk')->on('tags')->references('id');
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
        Schema::dropIfExists('telik_tags');
    }
}
