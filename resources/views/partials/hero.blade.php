<section class="section hero" id="home" aria-label="hero">
  
  <div class="container">
    @foreach ($header as $item)
    <div class="hero-content">
      <p class="hero-subtitle">{{ $item->companny_name }} Marketing Agency</p>
      
      <h1 class="h1 hero-title">
        {{ $item->companny_name }}
      </h1>
      
      <p class="hero-text">
        {{ $item->description }}
      </p>

      <a href="/products" class="btn btn-primary">Get Started</a>
    </div>

    <figure class="hero-banner">
      <img
        src="{{ asset('storage/' . $item->image) }}"
        width="720"
        height="673"
        alt="{{ $item->companny_name }}"
        class="w-100"
        />
    </figure>
    @endforeach
  </div>

</section>