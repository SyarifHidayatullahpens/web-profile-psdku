<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('major_id');
            $table->foreign('major_id')->references('id')
                                       ->on('majors')
                                       ->onDelete('cascade')
                                       ->onUpdate('cascade');
            $table->string('name',50)->nullable();
            $table->string('image', 25)->nullable();
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
        Schema::dropIfExists('departements');
    }
}
