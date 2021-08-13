<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blades', function (Blueprint $table) {
            $table->id();

            
<<<<<<< HEAD:database/migrations/2021_08_04_135529_create_blades_table.php
            $table->string('name_blade');
=======
            $table->string('nameform');
>>>>>>> davidcortÃes:database/migrations/2021_07_24_135529_create_forms_table.php
            $table->string('url');

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
        Schema::dropIfExists('blades');
    }
}
