<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFolderformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('folders_forms', function (Blueprint $table) {
            $table->id();

            
            $table->unsignedBigInteger('folder_id');
            $table->unsignedBigInteger('form_id');

            $table->foreign('folder_id')->references('id')->on('folders')->onDelete('cascade');
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
            $table->timestamps();  //
      });}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
       Schema::dropIfExists('folders_forms'); //
    }
}
