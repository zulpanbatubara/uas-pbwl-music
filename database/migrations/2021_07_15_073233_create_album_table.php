<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->increments('album_id'); 
            $table->string('album_name'); 
  	        $table->string('artist_name');
            $table->timestamps();
        });
      

        // Schema::table('album', function (Blueprint $table) {
        //     $table->foreignId('album_artist_id')->references('artist_id')->on('artist');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album');
    }
}
