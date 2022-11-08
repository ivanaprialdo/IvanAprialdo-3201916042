<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Seksipelayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpjseksipelayanan', function (Blueprint $table) {
            $table->id();
            $table->string('spa');
            $table->string('spr');
            $table->string('sppemuda');
            $table->string('spperkaria');
            $table->string('spperkauan');
            $table->string('spmp');
            $table->string('spdstb');
            $table->string('spim');
            $table->string('sps');
            $table->string('sha');
            $table->string('sp');
            $table->string('spaset');
            $table->string('slmd');
            $table->string('skpl');
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
        Schema::dropIfExists('seksipelayanan');
    }
}
