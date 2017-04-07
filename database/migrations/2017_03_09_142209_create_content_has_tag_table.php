<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentHasTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_has_tag', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('content_id');
            $table->unsignedInteger('tag_id');
        });

        //foreign keys
        Schema::table('content_has_tag', function($table) {
            $table->foreign('content_id')->references('id')->on('contents');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('content_has_tag');
    }
}
