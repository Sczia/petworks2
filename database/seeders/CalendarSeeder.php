<?php

namespace Database\Seeders;

use App\Models\Calendar;
use Illuminate\Database\Seeder;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =        [
            ['title' => 'Demo Event-1','color'=>'b3bbf4', 'start' => '2022-04-11', 'end' => '2022-04-12','time'=>'02:30:00' ],
            ['title' => 'Demo Event-2', 'start' => '2022-04-11', 'end' => '2022-04-13','time'=>'03:30:00'],
            ['title' => 'Demo Event-3', 'start' => '2022-04-14', 'end' => '2022-04-14','time'=>'04:30:00'],
            ['title' => 'Demo Event-3', 'start' => '2022-04-17', 'end' => '2022-04-17','time'=>'05:30:00'],
        ];
        foreach ($data as $item) {
            Calendar::create($item);
        }
    }
}
