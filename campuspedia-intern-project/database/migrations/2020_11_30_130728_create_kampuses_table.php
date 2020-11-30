<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kampuses', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kampus');
            $table->string('akronim');
            $table->string('akreditasi');
            $table->string('status');
            $table->integer('peringkat_asia');
            $table->integer('peringkat_lokal');
            $table->string('lokasi');
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
        Schema::dropIfExists('kampuses');
    }
}
