<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('mahasiswas', function (Blueprint $table) {
        $table->string('npm_mhs')->primary(); // Set primary key ke npm_mhs
        $table->string('nama_mhs');
        $table->string('prodi');
        $table->text('alamat');
        $table->string('no_telp');
        $table->string('email')->unique();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
