<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->bigIncrements('idPasien');
            $table->char('nama');
            $table->text('alamat');
            $table->char('jk');
            $table->string('noTelp', 15);
            $table->integer('idJadwalpraktik')->unique();
            $table->integer('idAntrian')->unique();
            $table->text('diagnosa');
            $table->text('pengobatan');
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
        Schema::dropIfExists('pasien');
    }
};
