<?php

use Illuminate\Database\Seeder;

use App\Order;
use App\Dish;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Order::class, 10)
       -> create()
       -> each(function($order) {
          // collegamento many to many
         $dishes = Dish::inRandomOrder() -> limit(rand(1,5)) -> get();
         $order -> dishes() -> attach($dishes);

       });
    }
}
