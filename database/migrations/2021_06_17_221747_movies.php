<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('movies', function (Blueprint $table)
        {
         $table->id();
         $table->string('name');
         $table->string('cast');
         $table->string('direction');
         $table->unsignedBigInteger('genre_id');
         $table->foreign('genre_id')->references('id')
         ->on ('genres')
         ->onUpdate('cascade');
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
        //
    }
}
