<div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="{{ asset('/images/'.$recipe->image) }}" alt="{{ $recipe->name }}">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-5"><strong>{{ $recipe->name }}</strong></p>
      </div>
    </div>
    <div class="content">
      {{ $recipe->description }}
    </div>
  </div>
  <footer class="card-footer has-text-right">
    <small class="card-footer-item">{{ $recipe->created_at->diffForHumans() }}</small>
    <small class="card-footer-item"><a href="#">{{ $recipe->user->name }}</a></small>
  </footer>
</div>
