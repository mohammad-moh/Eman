<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePationtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pationts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('pharma_id')->unsigned();
            $table->timestamps();
            $table->foreign('pharma_id')->references('id')->on('pharmas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pationts');
    }
}
