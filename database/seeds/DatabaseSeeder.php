<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $ingredients = factory(App\Ingredient::class, 20)->create();


      factory(App\User::class, 5)->create()->each(function ($u) use ($ingredients) {
         $u->recipes()->saveMany(factory(App\Recipe::class, 10)->create(['user_id' => $u->id ])->each( function ($r) use ($ingredients) {
           $r->ingredients()->attach($ingredients->random(rand(2,6)));
         })
       );
     });
    }
}
