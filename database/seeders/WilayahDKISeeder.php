<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WilayahDKI;

class WilayahDKISeeder extends Seeder
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
                "namawilayah" => "Jakarta Pusat 1",
                "description" => "Jakpus 1"
            ],
            [
                "namawilayah" => "Jakarta Pusat 2",
                "description" => "Jakpus 2"
            ],
            [
                "namawilayah" => "Jakarta Utara 1",
                "description" => "Jakut 1"
            ],
        ];

        foreach ($data as $d ) {
            WilayahDKI::create($d);
        }
    }
}
