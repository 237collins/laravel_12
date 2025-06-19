@extends('layout2')
@section('content3')

<section class="realisation">
  <h2><span class="highlight">Mes</span> Vidéos</h2>

  
  {{--  Pour l'affichage des fichiers (Manque la logique) --}}
  {{-- @auth
  <div style="margin-bottom: 1rem">
    <a href="?type=video" class="btn">Afficher les vidéos</a>
    <a href="?type=image" class="btn">Afficher les images</a>
    <a href="?type=all" class="btn">Tout afficher</a>
  </div>
  @endauth --}}

  <div class="grid video-grid">
    @forelse ($videos->take(3) as $video)
      <div class="item">
        <iframe height="280" width="100%" style="object-fit: cover"
          src="{{ $video->url }}" title="{{ $video->title }}"
          frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
        </iframe>
        <h3>{{ $video->title }}</h3>
        <p>{{ $video->description }}</p>

        @auth
          <div>
            <form action="{{ route('realisation.destroy', $video->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette Vidéo ?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>

        <a href="{{ route('realisation.edit', $video->id) }}" class="btn btn-edit">Modifier</a>
      
          </div>
        @endauth
      </div>
    @empty
      <p>Aucune vidéo pour le moment.</p>
    @endforelse
  </div>

  <section>
    <h2><span class="highlight">Mes</span> Designs</h2>

    <div class="grid image-grid">
      @forelse ($images->take(4) as $image)
        <div class="item">
          <img src="{{ asset('storage/' . $image->url) }}" alt="{{ $image->title }}" />
          <h3>{{ $image->title }}</h3>
          <p>{{ $image->description }}</p>

          @auth
          <form action="{{ route('realisation.destroy', $image->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette Image ?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>

          <a href="{{ route('realisation.edit', $image->id) }}" class="btn btn-edit">Modifier</a>
          @endauth
        </div>
      @empty
        <p>Aucune image pour le moment.</p>
      @endforelse
    </div>
  </section>
</section>

@endsection
