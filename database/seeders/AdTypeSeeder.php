<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdType;


class AdTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdType::updateOrCreate(['type_name'=>'Classified']);
        AdType::updateOrCreate(['type_name'=>'Display']);
    }
}
