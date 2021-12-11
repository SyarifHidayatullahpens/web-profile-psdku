<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePmbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pmbs', function (Blueprint $table) {
            $table->id();
            $table->string('name',20)->unique();
            $table->date('date_start');
            $table->date('date_finish');
            $table->date('annoucement');
            $table->date('re_registration');
            $table->text('description');
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
        Schema::dropIfExists('pmbs');
    }
}
