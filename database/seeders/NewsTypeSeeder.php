<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsType;

class NewsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsType::updateOrCreate(['news_type'=>'Local']);
        NewsType::updateOrCreate(['news_type'=>'National']);
    }
}
