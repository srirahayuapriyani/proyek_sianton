<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jadwalPraktikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal_praktik')->insert(
            array(
                [
                    "kodeJadwal" => "KDJP1",
                    "tanggal" => "12",
                    "hari" => "Senin",
                    "jam" => "03.00 PM",
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "kodeJadwal" => "KDJP2",
                    "tanggal" => "12",
                    "hari" => "Senin",
                    "jam" => "03.00 PM",
                    "created_at" => now(),
                    "updated_at" => now()
                ],
                [
                    "kodeJadwal" => "KDJP3",
                    "tanggal" => "12",
                    "hari" => "Senin",
                    "jam" => "03.00 PM",
                    "created_at" => now(),
                    "updated_at" => now()
                ],[
                    "kodeJadwal" => "KDJP4",
                    "tanggal" => "12",
                    "hari" => "Senin",
                    "jam" => "03.00 PM",
                    "created_at" => now(),
                    "updated_at" => now()
                ],[
                    "kodeJadwal" => "KDJP5",
                    "tanggal" => "12",
                    "hari" => "Senin",
                    "jam" => "03.00 PM",
                    "created_at" => now(),
                    "updated_at" => now()
                ],[
                    "kodeJadwal" => "KDJP6",
                    "tanggal" => "12",
                    "hari" => "Senin",
                    "jam" => "03.00 PM",
                    "created_at" => now(),
                    "updated_at" => now()
                ],[
                    "kodeJadwal" => "KDJP7",
                    "tanggal" => "12",
                    "hari" => "Senin",
                    "jam" => "03.00 PM",
                    "created_at" => now(),
                    "updated_at" => now()
                ],
            )
        );
    }
}
