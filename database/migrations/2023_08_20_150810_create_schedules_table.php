<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id');
            $table->integer('noJadwal');
            $table->string('hari');
            $table->integer('sol_1');
            $table->integer('sol_2');
            $table->integer('sol_3');
            $table->integer('sol_4');
            $table->integer('jam');
            $table->integer('menit');
            $table->integer('detik');
            $table->integer('durasi');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};