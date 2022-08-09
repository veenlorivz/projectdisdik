<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "nama" => "Rekayasa Perangkat Lunak",
                "keterangan" => "RPL"
            ],
            [
                "nama" => "Teknik Komputer dan Jaringan",
                "keterangan" => "TKJ"
            ],
            [
                "nama" => "Multimedia",
                "keterangan" => "MM"
            ],
        ];

        foreach ($data as $d ) {
            Jurusan::create($d);
        }
    }
}
