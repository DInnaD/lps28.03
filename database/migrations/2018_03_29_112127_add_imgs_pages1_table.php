<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImgsPages1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages1', function (Blueprint $table) {


            $table->string('images2', 100)->nullable();
            $table->string('images3', 100)->nullable();
            $table->string('images4', 100)->nullable();
            $table->string('images5', 100)->nullable();
            $table->string('images6', 100)->nullable();
            $table->string('name2', 100)->nullable();
            $table->string('name3', 100)->nullable();
            $table->string('name4', 100)->nullable();
            $table->string('name5', 100)->nullable();
            $table->string('name6', 100)->nullable();
            $table->text('text2', 100)->nullable();
            $table->text('text3', 100)->nullable();
            $table->text('text4', 100)->nullable();
            $table->text('text5', 100)->nullable();
            $table->text('text6', 100)->nullable();
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
