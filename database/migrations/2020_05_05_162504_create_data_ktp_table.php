<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ktp', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik');
            $table->string('nama', 200);
            $table->string('kota_lahir', 200);
            $table->string('tanggal_lahir', 200);
            $table->string('jenis_kelamin', 1);
            $table->string('alamat', 200);
            $table->string('status_pekerjaan', 200);
            $table->string('kewarganegaraan', 200);
            $table->string('email', 200);
            $table->string('status_ektp', 200);
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
        Schema::dropIfExists('data_ktp');
    }
}
