<?php

namespace Database\Seeders;

use App\Models\TahunAkademik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahunAkademikSeeder extends Seeder
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
                "namatahunakademik" => "2022",
                "semester" => "1"
            ],
            [
                "namatahunakademik" => "2021",
                "semester" => "1"
            ],
            [
                "namatahunakademik" => "2020",
                "semester" => "2"
            ],
        ];

        foreach ($data as $d ) {
            TahunAkademik::create($d);
        }
    }
}
