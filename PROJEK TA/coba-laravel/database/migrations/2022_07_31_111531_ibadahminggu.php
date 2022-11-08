<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IbadahMinggu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iminggu', function (Blueprint $table) {
            $table->id();
            $table->string('wsleader');
            $table->string('singer');
            $table->string('pemainmusik');
            $table->string('pkhotbah');
            $table->string('pendoa');
            $table->string('ptgskolekte');
            $table->string('pentamu');
            $table->string('petparkir');
            $table->date('hari');
            $table->time('jam');
            $table->string('tempat');
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
        Schema::dropIfExists('iminggu');
    }
}
