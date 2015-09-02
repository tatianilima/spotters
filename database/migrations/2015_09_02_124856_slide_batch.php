<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SlideBatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_batch', function (Blueprint $table) {
            $table->increments('slide_batch_id');
            $table->string('slide_batch_name');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //DON'T FORGET! COMMENT THIS LINE IN PRODUCTION
        Schema::drop('slide_batch');
    }
}
