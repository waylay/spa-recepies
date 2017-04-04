@extends('layouts.app')

@section('content')
    <div class="headline">
      <div class="heading">
        <h1 class="title">Recipes</h1>
        <h2 class="subtitle">Browse all recipes</h2>
      </div>
    </div>

    <div class="columns is-desktop is-multiline">
      @foreach ($recipes as $recipe)
        <div class="column is-3">
          @include('recipes.card')
        </div>
      @endforeach
    </div>

    {{ $recipes->links() }}

@endsection
