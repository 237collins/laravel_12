@php use App\Models\Realisation; @endphp

<section class="realisation">
  <h2><span class="highlight">Mes</span> Démos</h2>

  <div class="grid video-grid">
    @foreach(Realisation::where('type', 'video')->get() as $video)
      <div class="item">
        <iframe height="280" src="{{ $video->url }}" title="{{ $video->title }}"
          frameborder="0" allowfullscreen></iframe>
        <h3>{{ $video->title }}</h3>
        <p>{{ $video->description }}</p>
      </div>
    @endforeach
  </div>

  <section>
    <h2><span class="highlight">Apps</span> Conçues</h2>
    <div class="grid image-grid">
      @foreach(Realisation::where('type', 'image')->get() as $image)
        <div class="apps-cap">
          <img src="{{ asset('storage/' . $image->url) }}" alt="{{ $image->title }}">
          <h3>{{ $image->title }}</h3>
        </div>
      @endforeach
    </div>
  </section>
</section>
