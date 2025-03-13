<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pembimbings', function (Blueprint $table) {
            $table->string('nidn_pembimbing')->primary();
            $table->string('nama_pembimbing');
            $table->string('email')->unique();
            $table->string('no_telp');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembimbings');
    }
};