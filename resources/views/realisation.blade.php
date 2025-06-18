
   @extends('layout2')
   @section('content3')
    <section class="realisation">
      <h2><span class="highlight">Mes</span> Vidéos</h2>

      <div class="grid video-grid">
         <div class="item">
          <iframe
            {{-- width="100%" --}}
            height="280"
            style="object-fit: cover"
            src="https://www.youtube.com/embed/Ml0ukqpT4OQ"
            title="Buna Boy"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
          <h3>Demo 1</h3>
          <p>Description du projet</p>
        </div>

        {{-- Video 2 --}}

        <div class="item">
          <iframe
            {{-- width="100%" --}}
            height="280"
            style="object-fit: cover"
            src="https://www.youtube.com/embed/fT1h6b77jRY"
            title="Buna Boy"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
          <h3>Demo 2</h3>
          <p>Description du projet</p>
        </div>
      </div>
       

      <section>
        <h2><span class="highlight">Mes</span> Designs</h2>

      <div class="grid image-grid">
        <div class="item">
          <img src="assets/images/Roll_Up_Mockup_2.jpg" alt="UI Design 1" />
          <h3>FK MAssages</h3>
          {{-- <p>Interface épurée pour application mobile</p> --}}
        </div>
        <div class="item">
          <img src="assets/images/La-Belle-AWOUDA.jpg" alt="eCommerce" />
          <h3>AWOUDA</h3>
          {{-- <p>Page produit minimaliste et intuitive</p> --}}
        </div>
        <div class="item">
          <img src="assets/images/Les-ateliers-pratiques.jpg" alt="Resto Site" />
          <h3>Cabinet Discover</h3>
          {{-- <p>Design web moderne et responsive</p> --}}
        </div>
        <div class="item">
          <img src="assets/images/Offre 1 FR.jpg" alt="Landing page" />
          <h3>IFP Germania</h3>
          {{-- <p>Page d’accueil pour cosmétique naturel</p> --}}
        </div>
      </div>
      </section>

    </section>
   @endsection