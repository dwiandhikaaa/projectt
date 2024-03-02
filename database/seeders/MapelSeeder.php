<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mapel;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'BAHASA INDONESIA',
            'MATEMATIKA'
        ];

        foreach ($data as $item){

            Mapel::create([
                'mapel' => $item
            ]);
        }
    }
}
