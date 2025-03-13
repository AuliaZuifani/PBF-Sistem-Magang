<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id('id_perusahaan');
            $table->string('nama_perusahaan');
            $table->string('no_telp');
            $table->text('alamat');
            $table->string('email_perusahaan')->unique();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('perusahaans');
    }
};