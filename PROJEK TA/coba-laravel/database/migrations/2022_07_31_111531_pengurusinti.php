<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PengurusInti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpjpengurusinti', function (Blueprint $table) {
            $table->id();
            $table->string('ketua');
            $table->string('wakilketuasatu');
            $table->string('wakilketuadua');
            $table->string('sekretaris');
            $table->string('wakilsekretaris');
            $table->string('bendehara');
            $table->string('wakilbendehara');
            $table->string('staftatausaha');
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
        Schema::dropIfExists('pengurusinti');
    }
}
