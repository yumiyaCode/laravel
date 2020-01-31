<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArknightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arknights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('ids')->unique();
            $table->String('name');
            $table->String('type');
            $table->String('role');
            $table->integer('rare');
            $table->integer('cost');
            $table->String('legion');
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
        Schema::dropIfExists('arknights');
    }
}
