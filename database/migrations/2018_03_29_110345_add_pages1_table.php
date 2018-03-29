<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPages1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages1', function (Blueprint $table) {


            $table->string('alias2', 100)->nullable();
            $table->string('alias3', 100)->nullable();
            $table->string('alias4', 100)->nullable();
            $table->string('alias5', 100)->nullable();
            $table->string('alias6', 100)->nullable();
            $table->string('alias7', 100)->nullable();
            $table->string('alias8', 100)->nullable();
            $table->string('alias9', 100)->nullable();
            $table->string('alias10', 100)->nullable();
            $table->string('alias11', 100)->nullable();
            $table->string('alias12', 100)->nullable();
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
