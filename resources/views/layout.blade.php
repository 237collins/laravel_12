<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'NOVA-DEV')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/coments.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    @stack('styles')
</head>
<body>

    @include('partials.header')

    {{-- Menu burger et sidebar si tu veux les inclure partout --}}
    <div class="burger2" id="burger-menu2">&#9776;</div>

<div class="sidebar1" id="sidebar1">
  <nav class="nav" id="nav-menu">
    <a href="{{ route('home') }}"><i class="fas fa-home"></i><span>Home</span></a>
    <a href="#about"><i class="fas fa-user"></i><span>About</span></a>
    <a href="#portfolio"><i class="fas fa-briefcase"></i><span>Portfolio</span></a>
    <a href="#services"><i class="fas fa-cogs"></i><span>Services</span></a>
    <a href="#testimonials"><i class="fas fa-comments"></i><span>Témoignage</span></a>
    <a href="#contact"><i class="fas fa-envelope"></i><span>Contact</span></a>
   
   
  </nav>
</div>


    <main>
        @yield('content')
        @yield('content2')
    </main>

    {{-- footer --}}

     @include('partials.footer')
    
    {{-- JS scripts --}}
    @stack('scripts')
</body>
</html>
