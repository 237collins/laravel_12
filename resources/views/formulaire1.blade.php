@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Titre:</label>
    <input type="text" name="titre" required><br><br>

    <label>Image:</label>
    <input type="file" name="image" required><br><br>

    <button type="submit">Envoyer</button>
</form>
@if ($errors->any())
    <ul style="color: red">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
            
        @endforeach
    </ul>
@endif
