<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificVarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specific_vars', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('varc1');
            $table->string('varc2');
            $table->string('varc3');
            $table->string('varc4');
            $table->string('varc5');
            $table->string('varc6');
            $table->string('varc7');
            $table->string('varc8');
            $table->string('varc9');
            $table->string('varc10');
            $table->string('varc11');
            $table->string('varc12');

            $table->unsignedBigInteger('transact_id')->nullable();
            

            
            $table->foreign('transact_id')->references('id')->on('transacts')->onDelete('set null')->onUpdate('cascade');

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
        Schema::dropIfExists('specific_vars');
    }
}
