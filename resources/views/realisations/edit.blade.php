@extends('layout2')

@section('content3')
<section class="realisation">
    <h2><span class="highlight">Modifier</span> Réalisation</h2>

    <form action="{{ route('realisation.update', $realisation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" value="{{ old('title', $realisation->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description (facultatif)</label>
            <textarea name="description">{{ old('description', $realisation->description) }}</textarea>
        </div>

        @if ($realisation->type === 'video')
            <div class="form-group">
                <label for="url">Lien YouTube</label>
                <input type="text" name="url" value="{{ old('url', $realisation->url) }}" required>
            </div>
        @elseif ($realisation->type === 'image')
            <div class="form-group">
                <label for="image_file">Changer l’image (facultatif)</label>
                <input type="file" name="image_file" accept="image/*">
            </div>
            <p>Image actuelle :</p>
            <img src="{{ asset('storage/' . $realisation->url) }}" alt="{{ $realisation->title }}" style="max-width: 200px;">
        @endif

        <button type="submit">Mettre à jour</button>
    </form>
</section>
@endsection
