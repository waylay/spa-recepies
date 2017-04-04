@extends('layouts.app')

@section('hero')
  <section class="hero is-small is-primary is-bold">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Welcome Guest!
        </h1>
        <h2 class="subtitle">
          How about we learn a new recipe today? Interested?
        </h2>
      </div>
    </div>
  </section>
@endsection

@section('content')

  <div class="headline">
    <div class="heading">
      <h1 class="title">Latest Recipes</h1>
      <h2 class="subtitle"><a href="/recipes">Browse all recipes</a></h2>
    </div>
  </div>

  <div class="columns is-desktop is-multiline">
    @foreach ($latest_recipes as $recipe)
      <div class="column is-3">
        @include('recipes.card')
      </div>
    @endforeach
  </div>

  <div class="headline">
    <div class="heading">
      <h1 class="title">Popular Recipes</h1>
      <h2 class="subtitle"><a href="/recipes">Browse all recipes</a></h2>
    </div>
  </div>

  <div class="columns is-desktop is-multiline">
    @foreach ($popular_recipes as $recipe)
      <div class="column is-3">
        @include('recipes.card')
      </div>
    @endforeach
  </div>

@endsection
