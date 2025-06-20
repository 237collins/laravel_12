<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Convertisseur de liens YouTube</title>
        <link rel="stylesheet" href="{{ asset('css/embed.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    </head>
    <body>
        <header class="header">
            <div class="header-nav">
                {{--
                <div class="logo">Alex <span>Morgan</span></div>
                --}}

                <nav class="nav" id="nav-menu">
                    <a href="{{ route('tarif') }}">tarif</a>
                    <a href="{{ route('realisation') }}">realisation</a>
                </nav>

                <div class="burger" id="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="bloc1">
              <h2 class="title1">🎬 Convertisseur de liens YouTube</h2>
            <textarea
                id="inputLinks"
                placeholder="Colle ici tes liens YouTube (un par ligne)"
            ></textarea>
            <br />
            <button onclick="convertLinks()">Convertir</button>
            <button onclick="downloadLinks()">
                Télécharger les liens (.txt)
            </button>

            <div class="output" id="outputIframes"></div>

            <script>
                let convertedLinks = [];

                function convertLinks() {
                    const input = document.getElementById("inputLinks").value;
                    const lines = input
                        .split("\n")
                        .map((line) => line.trim())
                        .filter((line) => line);
                    const output = document.getElementById("outputIframes");
                    output.innerHTML = "";
                    convertedLinks = [];

                    lines.forEach((link) => {
                        let videoId = "";

                        if (link.includes("watch?v=")) {
                            try {
                                const url = new URL(link);
                                videoId = url.searchParams.get("v");
                            } catch (e) {
                                console.warn("Lien invalide :", link);
                            }
                        } else if (link.includes("youtu.be/")) {
                            videoId = link.split("youtu.be/")[1].split("?")[0];
                        }

                        if (videoId) {
                            const embedUrl = `https://www.youtube.com/embed/${videoId}`;
                            convertedLinks.push(embedUrl);

                            const block = document.createElement("div");
                            block.className = "video-block";

                            const container = document.createElement("div");
                            container.className = "embed-container";

                            const linkText = document.createElement("div");
                            linkText.className = "embed-link";
                            linkText.textContent = embedUrl;

                            const copyBtn = document.createElement("button");
                            copyBtn.className = "copy-btn";
                            copyBtn.textContent = "Copier";
                            copyBtn.onclick = () => {
                                navigator.clipboard.writeText(embedUrl);
                                copyBtn.textContent = "Copié !";
                                setTimeout(
                                    () => (copyBtn.textContent = "Copier"),
                                    1500
                                );
                            };

                            const iframe = document.createElement("iframe");
                            iframe.src = embedUrl;
                            iframe.allowFullscreen = true;
                            iframe.frameBorder = 0;

                            container.appendChild(linkText);
                            container.appendChild(copyBtn);
                            block.appendChild(container);
                            block.appendChild(iframe);
                            output.appendChild(block);
                        }
                    });
                }

                function downloadLinks() {
                    if (convertedLinks.length === 0) {
                        alert("Aucun lien converti à télécharger.");
                        return;
                    }

                    const blob = new Blob([convertedLinks.join("\n")], {
                        type: "text/plain",
                    });
                    const url = URL.createObjectURL(blob);
                    const a = document.createElement("a");
                    a.href = url;
                    a.download = "liens_youtube_convertis.txt";
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                    URL.revokeObjectURL(url);
                }
            </script>
            </div>

            {{-- Nouveau code lié à la table réalisation  --}}
            <div class="blocn">
  <h2>Formulaire Vidéo</h2>

  <!-- Message de succès affiché ici -->
  <div id="success-message-video" style="display: none; color: green; font-weight: bold; margin-bottom: 10px;"></div>

  <form id="form1" method="POST" action="{{ route('realisation.store') }}">
    @csrf
    <input type="hidden" name="type" value="video">

    <div class="form-group">
      <label for="lien">Lien YouTube</label>
      <input type="text" id="lien" name="url" required />
    </div>

    <div class="form-group">
      <label for="titre1">Titre (optionnel)</label>
      <input type="text" id="titre1" name="title" />
    </div>

    <div class="form-group">
      <label for="description">Description (optionnel)</label>
      <textarea id="description" name="description"></textarea>
    </div>

    <button type="submit">Envoyer</button>
  </form>
</div>


<div class="blocn1">
  <h2>Formulaire Image</h2>

  <!-- Message de succès au-dessus -->
  <div id="success-message-image" style="display: none; color: green; font-weight: bold; margin-bottom: 10px;"></div>

  <form id="form2" method="POST" action="{{ route('realisation.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="type" value="image">

    <div class="form-group">
      <label for="dropzone">Image</label>
      <div class="dropzone" id="dropzone">
        Cliquez ou déposez une image ici
      </div>
      <input type="file" id="imageInput" name="image_file" accept="image/*" style="display: none;" required />
    </div>

    <div class="form-group">
      <label for="titre2">Titre (optionnel)</label>
      <input type="text" id="titre2" name="title" />
    </div>

    <div class="form-group">
      <label for="desc-image">Description (optionnel)</label>
      <textarea id="desc-image" name="description"></textarea>
    </div>

    <button type="submit">Envoyer</button>
  </form>
</div>

{{-- AJAX 1--}}
<script>
  document.getElementById('form1').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
      },
      body: formData
    }).then(response => {
      if (response.ok) {
        form.reset();
        showVideoMessage("Vidéo ajoutée avec succès !");
      }
    }).catch(() => {
      showVideoMessage("Erreur lors de l’envoi.", true);
    });
  });

  function showVideoMessage(msg, isError = false) {
    const div = document.getElementById('success-message-video');
    div.style.color = isError ? 'red' : 'green';
    div.textContent = msg;
    div.style.display = 'block';

    setTimeout(() => {
      div.style.display = 'none';
      if (!isError) location.reload();
    }, 2000);
  }
</script>
{{-- Fin AJAX 1 --}}

{{-- AJAX 2 --}}
<script>
  // DROPZONE pour image
  const dropzone = document.getElementById('dropzone');
  const imageInput = document.getElementById('imageInput');

  dropzone.addEventListener('click', () => imageInput.click());
  dropzone.addEventListener('dragover', e => {
    e.preventDefault();
    dropzone.style.background = '#f0f0f0';
  });

  dropzone.addEventListener('dragleave', () => {
    dropzone.style.background = '';
  });

  dropzone.addEventListener('drop', e => {
    e.preventDefault();
    dropzone.style.background = '';
    const file = e.dataTransfer.files[0];
    if (file && file.type.startsWith('image/')) {
      imageInput.files = e.dataTransfer.files;
    }
  });

  // AJAX formulaire image
  document.getElementById('form2').addEventListener('submit', function (e) {
    e.preventDefault();
    const form = e.target;
    const formData = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
      },
      body: formData
    }).then(response => {
      if (response.ok) {
        form.reset();
        showImageMessage("Image ajoutée avec succès !");
      }
    }).catch(() => {
      showImageMessage("Erreur lors de l'envoi.", true);
    });
  });

  // Affichage message de succès/erreur au-dessus du formulaire
  function showImageMessage(msg, isError = false) {
    const div = document.getElementById('success-message-image');
    div.style.color = isError ? 'red' : 'green';
    div.textContent = msg;
    div.style.display = 'block';
    setTimeout(() => {
      div.style.display = 'none';
      if (!isError) location.reload();
    }, 2000);
  }
</script>


{{-- Fin AJXA 2 --}}

            {{-- Ancien code fo --}}
            {{-- Formulaire de Upload --}}
            {{-- <div class="bloc2">
                
                    <div class="blocn">
                      <h2>Importations</h2>
                    <form id="form1" action="formulaire1.php" method="POST">
                        <div class="form-group">
                            <label for="lien">Lien</label>
                            <input type="text" id="lien" name="lien" required />
                        </div>
                        <div class="form-group">
                            <label for="titre1">Titre</label>
                            <input
                                type="text"
                                id="titre1"
                                name="titre"
                                required
                            />
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea
                                id="description"
                                name="description"
                                required
                            ></textarea>
                        </div>
                        <button type="submit">Envoyer</button>
                    </form>
                    </div>

                   <div class="blocn1">
                     <h2>Formulaire 2 : Importer une image</h2>
                    <form id="form2" action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="drop">Image</label>
                            <div class="dropzone" id="dropzone">
                                Glissez-déposez votre image ici ou cliquez
                            </div>
                            <input
                                type="file"
                                id="imageInput"
                                name="image"
                                style="display: none"
                                accept="image/*"
                            />
                        </div>
                        <div class="form-group">
                            <label for="titre2">Titre</label>
                            <input
                                type="text"
                                id="titre2"
                                name="titre"
                                required
                            />
                        </div>
                        <button type="submit">Envoyer</button>
                    </form>
                   </div> --}}
                

                <script>
                    const dropzone = document.getElementById("dropzone");
                    const imageInput = document.getElementById("imageInput");

                    dropzone.addEventListener("click", () =>
                        imageInput.click()
                    );

                    dropzone.addEventListener("dragover", (e) => {
                        e.preventDefault();
                        dropzone.classList.add("dragover");
                    });

                    dropzone.addEventListener("dragleave", () => {
                        dropzone.classList.remove("dragover");
                    });

                    dropzone.addEventListener("drop", (e) => {
                        e.preventDefault();
                        dropzone.classList.remove("dragover");
                        const file = e.dataTransfer.files[0];
                        imageInput.files = e.dataTransfer.files;
                        dropzone.innerText = `Image sélectionnée : ${file.name}`;
                    });

                    imageInput.addEventListener("change", () => {
                        if (imageInput.files.length > 0) {
                            dropzone.innerText = `Image sélectionnée : ${imageInput.files[0].name}`;
                        }
                    });
                </script>
            </div>
        </div>
    </body>
</html>
