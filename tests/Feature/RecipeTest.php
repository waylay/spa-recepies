<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RecipeTest extends TestCase
{

    use DatabaseMigrations;
    use DatabaseTransactions;
    /** @test **/
    public function i_can_see_the_homepage()
    {
      $response = $this->get('/');
      $response->assertStatus(200);
    }

    /** @test **/
    public function i_can_see_latest_recipe_on_homepage()
    {
      $recipe = factory('App\Recipe')->create();
      $response = $this->get('/');
      $response->assertSee(htmlspecialchars($recipe->name));
      $response->assertSee(htmlspecialchars($recipe->user->name));
    }
}
