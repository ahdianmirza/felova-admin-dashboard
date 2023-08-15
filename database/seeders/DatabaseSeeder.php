<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manual;
use App\Models\Timer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Manual::create([
            'device' => 'HC001',
            'slug' => 'hc001',
            'pompa' => 1,
            'sol_1' => 1,
            'sol_2' => 0,
            'sol_3' => 1,
            'sol_4' => 1,
        ]);

        Manual::create([
            'device' => 'HC002',
            'slug' => 'hc002',
            'pompa' => 1,
            'sol_1' => 0,
            'sol_2' => 1,
            'sol_3' => 1,
            'sol_4' => 1,
        ]);

        Manual::create([
            'device' => 'HC003',
            'slug' => 'hc003',
            'pompa' => 1,
            'sol_1' => 0,
            'sol_2' => 0,
            'sol_3' => 1,
            'sol_4' => 1,
        ]);

        Manual::create([
            'device' => 'HC004',
            'slug' => 'hc004',
            'pompa' => 1,
            'sol_1' => 0,
            'sol_2' => 0,
            'sol_3' => 1,
            'sol_4' => 1,
        ]);

        Manual::create([
            'device' => 'HC005',
            'slug' => 'hc005',
            'pompa' => 1,
            'sol_1' => 0,
            'sol_2' => 0,
            'sol_3' => 1,
            'sol_4' => 1,
        ]);

        Manual::create([
            'device' => 'HC006',
            'slug' => 'hc006',
            'pompa' => 0,
            'sol_1' => 0,
            'sol_2' => 1,
            'sol_3' => 0,
            'sol_4' => 0,
        ]);

        Manual::create([
            'device' => 'HC007',
            'slug' => 'hc007',
            'pompa' => 0,
            'sol_1' => 0,
            'sol_2' => 0,
            'sol_3' => 0,
            'sol_4' => 0,
        ]);

        Timer::create([
            'device' => 'HC001',
            'slug' => 'hc001',
            'hari' => 'Senin',
            'noJadwal' => 1,
            'sol_1' => 0,
            'sol_2' => 1,
            'sol_3' => 1,
            'sol_4' => 0,
            'jam' => 5,
            'menit' => 10,
            'detik' => 10,
            'durasi' => 2,
            'status' => 1,
        ]);

        Timer::create([
            'device' => 'HC002',
            'slug' => 'hc002',
            'hari' => 'Selasa',
            'noJadwal' => 2,
            'sol_1' => 0,
            'sol_2' => 0,
            'sol_3' => 1,
            'sol_4' => 1,
            'jam' => 6,
            'menit' => 11,
            'detik' => 11,
            'durasi' => 2,
            'status' => 0,
        ]);

        Timer::create([
            'device' => 'HC003',
            'slug' => 'hc003',
            'hari' => 'Rabu',
            'noJadwal' => 3,
            'sol_1' => 1,
            'sol_2' => 0,
            'sol_3' => 0,
            'sol_4' => 0,
            'jam' => 7,
            'menit' => 12,
            'detik' => 12,
            'durasi' => 3,
            'status' => 1,
        ]);

        Timer::create([
            'device' => 'HC004',
            'slug' => 'hc004',
            'hari' => 'Kamis',
            'noJadwal' => 4,
            'sol_1' => 1,
            'sol_2' => 1,
            'sol_3' => 0,
            'sol_4' => 1,
            'jam' => 8,
            'menit' => 13,
            'detik' => 13,
            'durasi' => 4,
            'status' => 0,
        ]);

        Timer::create([
            'device' => 'HC005',
            'slug' => 'hc005',
            'hari' => 'Jumat',
            'noJadwal' => 5,
            'sol_1' => 0,
            'sol_2' => 0,
            'sol_3' => 0,
            'sol_4' => 0,
            'jam' => 9,
            'menit' => 14,
            'detik' => 14,
            'durasi' => 5,
            'status' => 1,
        ]);

        Timer::create([
            'device' => 'HC006',
            'slug' => 'hc006',
            'hari' => 'Sabtu',
            'noJadwal' => 6,
            'sol_1' => 0,
            'sol_2' => 1,
            'sol_3' => 1,
            'sol_4' => 0,
            'jam' => 10,
            'menit' => 15,
            'detik' => 15,
            'durasi' => 6,
            'status' => 1,
        ]);

        Timer::create([
            'device' => 'HC007',
            'slug' => 'hc007',
            'hari' => 'Minggu',
            'noJadwal' => 7,
            'sol_1' => 1,
            'sol_2' => 1,
            'sol_3' => 1,
            'sol_4' => 1,
            'jam' => 12,
            'menit' => 16,
            'detik' => 16,
            'durasi' => 7,
            'status' => 0,
        ]);
    }
}