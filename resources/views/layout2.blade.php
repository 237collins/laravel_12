<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <title>@yield('title', 'NOVA-DEV')</title> --}}
   <title>Mes Réalisations</title>
    <link rel="stylesheet" href="{{ asset('css/realisation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    @stack('styles')
</head>
<body>
<header class="header">
      <div class="header-container">
        <div class="logo">NOVA <span>DEV</span></div>

        <nav class="nav" id="nav-menu">
          <a href="{{ route('home') }}">Home</a>
          <a href="{{ route('tarif') }}">tarifs</a>
          <a href="{{ route('projet_dev') }}">Dev Projects</a>
           <a href="{{ route('embed') }}">Link YT changer</a> 

           {{-- Condition --}}
           {{-- @auth
    <a href="{{ route('embed') }}">Link YT changer</a>
@endauth --}}
{{--            
           @auth
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Se déconnecter</button>
    </form>
@else
    <a href="{{ route('login') }}">Se connecter</a>
    <a href="{{ route('register') }}">S'inscrire</a>
@endauth --}}

        </nav>

        <a
          class="cta-button"
          href="https://wa.me/237697627966?text=Bonjour%2C%20je%20souhaite%20en%20savoir%20plus%20sur%20vos%20services"
          target="_blank"
          class="whatsapp-btn">WhatsApp
        </a>


        <div class="burger" id="burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>
      
    </div>

{{-- Conteni=u ici bas --}}
    <main>
        @yield('content3')
    </main>

    {{-- footer --}}

     @include('partials.footer')
    
    {{-- JS scripts --}}
    @stack('scripts')
</body>
</html>
