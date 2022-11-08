<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PelayananPemuda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bppelayananpemuda', function (Blueprint $table) {
            $table->id();
            $table->string('ketua');
            $table->string('sekretaris');
            $table->string('bendehara');
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
        Schema::dropIfExists('pelayananpemuda');
    }
}
