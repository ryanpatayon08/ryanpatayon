<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
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
                'unit_type'=> "Caffeine",
                'description'=>'Caffeine is a central nervous system (CNS) stimulant of the methylxanthine class. ',
            ],
            [
                'unit_type'=> "Aroma",
                'description'=>'Powerful evocative smell that enhances a great cup of coffee.',
            ],
            [
                'unit_type'=> "Sugar",
                'description'=>'Sugar Level',
            ],
            [
                'unit_type'=> "Acidity",
                'description'=>'Pleasant tanginess when the coffee first hits the palate.',
            ],
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}