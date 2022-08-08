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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('namasekolah')->nullable();
            $table->string('alamat')->nullable();
            $table->foreignId('wilayah_dki_id')->constraint()->onDelete('cascade');
            $table->foreignId('tahun_akademik_id')->constraint()->onDelete('cascade');
            $table->foreignId('jurusan_id')->constraint()->onDelete('cascade');
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
        Schema::dropIfExists('schools');
    }
};
