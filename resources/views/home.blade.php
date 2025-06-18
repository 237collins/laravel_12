
@extends('layout')

@section('title', 'Accueil - NOVA-DEV')

@section('content')

<section class="hero">
  <div>
    <h1>Hello, je suis <span>Collins</span></h1>
  </div>

  <div class="container" id="home">
    <div class="hero-image">
      <div class="profil-image-placeholder">
        <img style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px;"
          src="{{ url('assets/images/pp.jpg') }}" alt="proto de profil">
      </div>
    </div>

    <div class="hero-content">
      <p>
        Passionné par l'informatique et la technologie.
        Je suis extrêmement motivé à développer constamment mes compétences,<br>
        dans un monde où la vitesse d'apprentissage est un atout majeur.
        Je suis confiant dans ma capacité à proposer des idées innovantes
        et à collaborer avec une équipe dynamique pour la réalisation des projets d'envergure.
      </p>
      <a href="{{ route('tarif') }}" class="hero-button">Collaborons →</a>
      <p class="clients">
        Plus de <strong>100+</strong> Clients dans le monde.
      </p>
      <div class="client-logos">
        <!-- Logos clients ici -->
      </div>
    </div>
  </div>

  <div class="social-icons">
    <!-- Icônes sociales -->
  </div>
</section>

<!-- About -->
@include('sections.about')

<!-- Portfolio -->
@include('sections.portfolio')

<!-- Services -->
@include('sections.services')

<!-- Testimonials or comments -->
@include('sections.testimonials')

<!-- Contact -->
@include('sections.contact')

@endsection

@push('scripts')
<script>
  const burger2 = document.getElementById('burger-menu2');
  const sidebar = document.getElementById('sidebar1');

  burger.addEventListener('click', () => {
    sidebar.classList.toggle('active');
  });
</script>

    <!--  -->
    <script>
      const burger = document.getElementById("burger");
      const navMenu = document.getElementById("nav-menu");

      burger.addEventListener("click", () => {
        navMenu.classList.toggle("active");
      });
    </script>

{{-- <script>
  const burger2 = document.getElementById('burger-menu2');
  const sidebar = document.getElementById('sidebar1');
  burger2.addEventListener('click', () => {
    sidebar.classList.toggle('active');
  }); --}}
</script>
@endpush
