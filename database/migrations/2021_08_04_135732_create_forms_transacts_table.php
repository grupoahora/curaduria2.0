<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTransactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_transacts', function (Blueprint $table) {
            $table->id();

            
            $table->unsignedBigInteger('form_id');
            $table->unsignedBigInteger('transact_id');

            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
            $table->foreign('transact_id')->references('id')->on('transacts')->onDelete('cascade');
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
        Schema::dropIfExists('forms_transacts');
    }
}
