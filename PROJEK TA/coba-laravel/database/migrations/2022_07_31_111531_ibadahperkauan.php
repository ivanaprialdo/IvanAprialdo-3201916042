<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IbadahPerkauan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iperkauan', function (Blueprint $table) {
            $table->id();
            $table->string('wsleader');
            $table->string('pemainmusik');
            $table->string('pkhotbah');
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
        Schema::dropIfExists('iperkauan');
    }
}
