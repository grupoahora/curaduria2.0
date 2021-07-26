<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenericVarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generic_vars', function (Blueprint $table) {
            $table->id();

            $table->string('vart1');
            $table->string('vart2');

            $table->string('vara1');
            $table->string('vara3');
            $table->string('vara4');
            $table->string('vara5');
            $table->string('vara6');
            $table->string('vara7');
            
            $table->string('varc1');
            $table->text('varc2');
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
            $table->string('varc13');
            

           

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
        Schema::dropIfExists('generic_vars');
    }
}
