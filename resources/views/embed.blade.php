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
      <div class="container">
        {{-- <div class="logo">Alex <span>Morgan</span></div> --}}

        <nav class="nav" id="nav-menu">
          <a href="{{ route('tarif') }}">tarif</a>
          <a href="{{ route('realisation') }}">realisation</a>
        </nav>

        {{-- <a class="cta-button" href="#">Let's Collaborate</a> --}}

        <div class="burger" id="burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>
    <h2>🎬 Convertisseur de liens YouTube</h2>
    <textarea
      id="inputLinks"
      placeholder="Colle ici tes liens YouTube (un par ligne)"
    ></textarea>
    <br />
    <button onclick="convertLinks()">Convertir</button>
    <button onclick="downloadLinks()">Télécharger les liens (.txt)</button>

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
              setTimeout(() => (copyBtn.textContent = "Copier"), 1500);
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
  </body>
</html>
