@extends('layout2')
@section('content3')

<h2>Ajouter une Réalisation</h2>

<form action="{{ route('realisations.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Type :</label>
    <select name="type" required onchange="toggleFields(this.value)">
        <option value="video">Vidéo YouTube</option>
        <option value="image">Image</option>
    </select>

    <div id="video-fields">
        <input type="url" name="url" placeholder="Lien YouTube" required>
    </div>

    <div id="image-fields" style="display: none;">
        <input type="file" name="image_file">
        <input type="url" name="url" placeholder="Lien image Google Drive">
    </div>

    <input type="text" name="title" placeholder="Titre (optionnel)">
    <textarea name="description" placeholder="Description (optionnel)"></textarea>

    <button type="submit">Ajouter</button>
</form>

<script>
function toggleFields(value) {
    document.getElementById('video-fields').style.display = value === 'video' ? 'block' : 'none';
    document.getElementById('image-fields').style.display = value === 'image' ? 'block' : 'none';
}
</script>

@endsection
