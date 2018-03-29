<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePages1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pages1', function (Blueprint $table) {
            
	    $table->increments('id');
            $table->string('name', 100)->nullable();
            $table->string('alias', 100)->nullable();
            $table->text('text', 100)->nullable();
            $table->string('images', 100)->nullable();
            $table->string('link', 255)->nullable();
	        $table->string('audios', 100)->nullable();//img2
	        $table->string('videos', 100)->nullable();//price
            // For Route
             $table->integer('portfolio_id')->nullable()->unsigned();
             $table->foreign('portfolio_id')->references('id')->on('portfolios');
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
       // Schema::dropIfExists('pages1');
     Schema::dropforeign(['portfolio_id']);//ce virno?
     Schema::dropIfExists('pages1');
    }
}

