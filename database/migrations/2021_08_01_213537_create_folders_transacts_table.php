<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BladesTransacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("folders_transacts", function (Blueprint $table) {
            $table->id();

            
            $table->unsignedBigInteger('folders_id');
            $table->unsignedBigInteger('transacts_id');

            $table->foreign('blades_id')->references('id')->on('blades')->onDelete('cascade');
            $table->foreign('transacts_id')->references('id')->on('transacts')->onDelete('cascade');
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
