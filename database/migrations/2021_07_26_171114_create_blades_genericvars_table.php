<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBladesGenericvarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blades_genericvars', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('blade_id');
            $table->unsignedBigInteger('genericvar_id');

            $table->foreign('blade_id')->references('id')->on('blades')->onDelete('cascade');
            $table->foreign('genericvar_id')->references('id')->on('generic_vars')->onDelete('cascade');

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
        Schema::dropIfExists('blades_genericvars');
    }
}
