<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('category_id')->nullable();
            $table->string('name');
            $table->text('text')->nullable();
            $table->string('seo_name')->nullable();
            $table->boolean('visible')->nullable();
            $table->timestamp('created')->nullable();
            $table->boolean('post')->nullable();
            $table->unsignedInteger('user_id');

            //indexes
            $table->index(['name']);
        });

        //foreign keys
        Schema::table('contents', function($table) {
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contents');
    }

}
