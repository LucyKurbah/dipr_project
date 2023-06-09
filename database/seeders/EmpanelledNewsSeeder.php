<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmpanelledNews;

class EmpanelledNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmpanelledNews::updateOrCreate(['news_name'=>'Shillong Times']);
        EmpanelledNews::updateOrCreate(['news_name'=>'Mawphor']);
    }
}
