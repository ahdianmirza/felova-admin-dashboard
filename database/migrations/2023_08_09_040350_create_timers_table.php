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
        Schema::create('timers', function (Blueprint $table) {
            $table->id();
            $table->string('device');
            $table->string('slug')->unique();
            $table->string('hari');
            $table->integer('noJadwal')->unique();
            $table->boolean('sol_1')->default(false);
            $table->boolean('sol_2')->default(false);
            $table->boolean('sol_3')->default(false);
            $table->boolean('sol_4')->default(false);
            $table->integer('jam');
            $table->integer('menit');
            $table->integer('detik');
            $table->integer('durasi');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timers');
    }
};