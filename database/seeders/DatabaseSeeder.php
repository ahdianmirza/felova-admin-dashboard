<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manual;
use App\Models\User;
use App\Models\Device;
use App\Models\Schedule;

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


        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => 'admin123'
        ]);

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

        Device::create([
            'name' => 'HC001',
            'slug' => 'hc001'
        ]);

        Device::create([
            'name' => 'HC002',
            'slug' => 'hc002'
        ]);

        Schedule::create([
            'device_id' => 1,
            'noJadwal' => 1,
            'hari' => 'Senin',
            'sol_1' => 1,
            'sol_2' => 0,
            'sol_3' => 0,
            'sol_4' => 0,
            'jam' => '06',
            'menit' => '10',
            'detik' => 0,
            'durasi' => 1,
            'status' => 0
        ]);

        Schedule::create([
            'device_id' => 1,
            'noJadwal' => 2,
            'hari' => 'Selasa',
            'sol_1' => 0,
            'sol_2' => 1,
            'sol_3' => 0,
            'sol_4' => 0,
            'jam' => '07',
            'menit' => '11',
            'detik' => 0,
            'durasi' => 2,
            'status' => 1
        ]);

        Schedule::create([
            'device_id' => 1,
            'noJadwal' => 3,
            'hari' => 'Rabu',
            'sol_1' => 0,
            'sol_2' => 0,
            'sol_3' => 1,
            'sol_4' => 0,
            'jam' => '08',
            'menit' => '12',
            'detik' => 0,
            'durasi' => 3,
            'status' => 0
        ]);

        Schedule::create([
            'device_id' => 1,
            'noJadwal' => 4,
            'hari' => 'Kamis',
            'sol_1' => 0,
            'sol_2' => 0,
            'sol_3' => 0,
            'sol_4' => 1,
            'jam' => '09',
            'menit' => '13',
            'detik' => 0,
            'durasi' => 4,
            'status' => 1
        ]);

        Schedule::create([
            'device_id' => 1,
            'noJadwal' => 5,
            'hari' => 'Jumat',
            'sol_1' => 1,
            'sol_2' => 1,
            'sol_3' => 0,
            'sol_4' => 0,
            'jam' => '10',
            'menit' => '14',
            'detik' => 0,
            'durasi' => 5,
            'status' => 0
        ]);

        Schedule::create([
            'device_id' => 1,
            'noJadwal' => 6,
            'hari' => 'Sabtu',
            'sol_1' => 1,
            'sol_2' => 0,
            'sol_3' => 1,
            'sol_4' => 0,
            'jam' => '11',
            'menit' => '15',
            'detik' => 0,
            'durasi' => 6,
            'status' => 1
        ]);

        Schedule::create([
            'device_id' => 1,
            'noJadwal' => 7,
            'hari' => 'Minggu',
            'sol_1' => 1,
            'sol_2' => 0,
            'sol_3' => 0,
            'sol_4' => 1,
            'jam' => '12',
            'menit' => '16',
            'detik' => 0,
            'durasi' => 7,
            'status' => 0
        ]);

        Schedule::create([
            'device_id' => 2,
            'noJadwal' => 1,
            'hari' => 'Senin',
            'sol_1' => 1,
            'sol_2' => 0,
            'sol_3' => 0,
            'sol_4' => 0,
            'jam' => '08',
            'menit' => '10',
            'detik' => 0,
            'durasi' => 1,
            'status' => 1
        ]);

        Schedule::create([
            'device_id' => 2,
            'noJadwal' => 2,
            'hari' => 'Selasa',
            'sol_1' => 1,
            'sol_2' => 1,
            'sol_3' => 0,
            'sol_4' => 0,
            'jam' => '09',
            'menit' => '11',
            'detik' => 0,
            'durasi' => 2,
            'status' => 0
        ]);
    }
}