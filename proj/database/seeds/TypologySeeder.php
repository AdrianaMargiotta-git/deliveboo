<?php

use Illuminate\Database\Seeder;

use App\Typology;
use App\User;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $typologies = [
          'Giapponese',
          'Asiatico',
          'Brasiliano',
          'Cinese',
          'Colazione',
          'Dolci e dessert',
          'Fast food',
          'Giapponese',
          'Indiano',
          'Italiano',
          'Mediterraneo',
          'Messicano',
          'Pizzeria',
          'Sushi',
          'Libanese',
        ];

        foreach ($typologies as $typology) {
          $newtypology = new Typology();
          $newtypology -> type = $typology;
          $newtypology -> save();

          $users = User::inRandomOrder()
          ->limit(rand(1,5)) ->get();
          $newtypology -> users() -> attach($users);
        }

        // factory(Typology::class, 10)->create()->each(function ($typology) {
        //     $user = User::inRandomOrder()->limit(rand(1, 5))->get();
        //     $typology->users()->attach($user);
        // });

    }
}
