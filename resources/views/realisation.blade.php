<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mes Réalisations</title>
    <link rel="stylesheet" href="{{ asset('css/realisation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="logo">NOVA <span>DEV</span></div>

        <nav class="nav" id="nav-menu">
          <a href="{{ route('home') }}">Home</a>
          <a href="{{ route('tarif') }}">tarifs</a>
           <a href="{{ route('embed') }}">Link YT changer</a>
        </nav>

        <a class="cta-button" href="#">Let's Collaborate</a>

        <div class="burger" id="burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>

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

    <!-- footer -->
    <footer>
      <div class="footer-container">
        <div class="footer-about">
          <div class="footer-logo">Alex Morgan</div>
          <p class="footer-description">
            The ultimate design solutions platform built for creativity,
            reliability, and performance. Trusted by businesses and individuals
            worldwide with expert support available 24/7.
          </p>
        </div>

        <div class="footer-column">
          <h3>Services</h3>
          <ul class="footer-links">
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Branding</a></li>
            <li><a href="#">UI/UX Design</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h3>Solutions</h3>
          <ul class="footer-links">
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Design Process</a></li>
            <li><a href="#">Pricing Options</a></li>
            <li><a href="#">Success Stories</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h3>Resources</h3>
          <ul class="footer-links">
            <li><a href="#">Blog</a></li>
            <li><a href="#">Tutorials</a></li>
            <li><a href="#">Design Tools</a></li>
            <li><a href="#">Help Center</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h3>Legal</h3>
          <ul class="footer-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">© 2025 Alex Morgan. All rights reserved.</div>
    </footer>
    <!--  -->
    <!-- Nouvau code -->
    <script>
      const burger = document.getElementById("burger");
      const navMenu = document.getElementById("nav-menu");

      burger.addEventListener("click", () => {
        navMenu.classList.toggle("active");
      });
    </script>
  </body>
</html>
