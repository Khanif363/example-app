<?php

namespace Database\Seeders;

use App\Models\Hoby as HobyModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Hoby extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $hoby = ['nama' => 'Mancing'];
        // HobyModel::create($hoby);
        HobyModel::factory(10)->create();
    }
}
