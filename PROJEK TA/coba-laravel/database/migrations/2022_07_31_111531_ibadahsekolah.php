<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IbadahSekolah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isekolah', function (Blueprint $table) {
            $table->id();
            $table->string('wsleader');
            $table->string('pemainmusik');
            $table->string('pbwcerita');
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
        Schema::dropIfExists('isekolah');
    }
}
