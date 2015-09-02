<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pictures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('picture_id');
            $table->string('filename', 255);
            $table->string('registration', 15);  
            $table->date('date');
            $table->tinyInteger('unknow');
            $table->tinyInteger('decade');   
            $table->tinyInteger('publish');
            $table->string('cn', 16);
            $table->string('ln', 6);
            $table->string('sn', 16);
            $table->string('fn', 5);
            $table->string('selcal', 5);
            $table->string('hex', 6);
            $table->string('maiden_name', 50);
            $table->string('tail_code', 2);
            $table->string('serial', 20);
            $table->string('unit', 60);
            $table->string('buno', 6);
            $table->string('film', 5);
            $table->string('photogram', 3);
            $table->string('storage_cd_hi', 10);
            $table->string('storage_cd_low', 10);
            $table->longText('observation');   

            $table->integer('authors')->unsigned();
            $table->foreign('authors')->references('id')->on('users');  

            $table->integer('family')->unsigned();
            $table->foreign('family')->references('family_id')->on('families'); 

            $table->integer('operator')->unsigned();
            $table->foreign('operator')->references('operator_id')->on('operators'); 

            $table->integer('type')->unsigned();
            $table->foreign('type')->references('type_id')->on('types');   
                    
            $table->integer('trip')->unsigned();
            $table->foreign('trip')->references('trip_id')->on('trips');   

            $table->integer('location')->unsigned();
            $table->foreign('location')->references('location_id')->on('locations'); 
            
            $table->integer('media')->unsigned();
            $table->foreign('media')->references('media_id')->on('medias');  
          
            $table->integer('category')->unsigned();
            $table->foreign('category')->references('category_id')->on('categories');    

            $table->integer('painting')->unsigned();
            $table->foreign('painting')->references('painting_id')->on('paintings');

            $table->integer('slide_batch')->unsigned();
            $table->foreign('slide_batch')->references('slide_batch_id')->on('slide_batch');   

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
        Schema::drop('pictures');
    }
}
