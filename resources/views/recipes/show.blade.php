@extends('layouts.app')
@section('hero')
<section class="hero is-small is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title is-spaced">
        {{ $recipe->name }}
      </h1>
      <h2 class="subtitle">
        {{ $recipe->description }}
      </h2>
    </div>
  </div>
</section>
@endsection
@section('content')

  <div class="tile is-ancestor">
    <div class="tile is-4 is-vertical is-parent">
      <div class="tile is-child box">
        <figure class="image is-4by3">
          <img src="{{ asset('/images/'.$recipe->image) }}" alt="{{ $recipe->name }}">
        </figure>
      </div>
      <div class="tile is-child box">
        <p class="title">ingredients</p>
        @foreach ($recipe->ingredients as $ingredient)
          <li>{{ $ingredient->name }}</li>
        @endforeach
      </div>
    </div>
    <div class="tile is-parent">
      <div class="tile is-child box">
        <p class="title">Directions</p>
        <ol>
        @foreach ($recipe->steps as $step)
          <li>{{ $step->content }}</li>
        @endforeach
      </ol>
      </div>
    </div>
  </div>

@endsection
