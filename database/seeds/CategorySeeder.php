<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'category'=> "Cafe Latte",
                'description'=>'Cafe latte is made from espresso (one-third), steam milk (two-thirds), topped with about a centimeter of foam.',
            ],
            [
                'category'=> "Espresso",
                'description'=>'This coffee beverage is made by forcing nearly boiling water under pressure through ground coffee beans, resulting in a brew that’s thicker than those made from other brewing methods.',
            ],
            [
                'category'=> "Iced Coffee",
                'description'=>'Iced coffee can be a great, refreshing beverage – but only if you can keep the drink cold without diluting it with ice.',
            ],
            [
                'category'=> "Frappuccino",
                'description'=>'The frappuccino is a Starbucks specialty, coffee blended with ice and other ingredients and topped with whip cream.',
            ],
            [
                'category'=> "Caramel Machiatto",
                'description'=>'This refreshing and tasty iced coffee drink is yet another Starbucks classic, and just like the frappuccino.',
            ],
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
