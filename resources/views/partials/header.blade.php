<header class="header">
      <div class="header-container">
        <div class="logo">Nova <span>- Dev</span></div>

        <div class="sidebar">
          <nav class="nav" id="nav-menu">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#services">Services</a>
            <a href="#testimonials">Testimonials</a>
            <a href="#contact">Contact</a>
             <div>
        <style>
  .btn-dashboard {
    display: inline-block;
    padding: 10px 20px;
    margin: 10px 0;
    background-color: #1d4ed8;
    color: white;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s;
  }

  .btn-dashboard:hover {
    background-color: #2563eb;
  }
</style>
 @auth
    <a href="{{ route('dashboard') }}" class="btn-dashboard">Mon Espace</a>
@endauth
    </div>
          </nav>
        </div>

        <!-- Ancien lien -->
        <!-- <a class="cta-button" href="#">Let's Collaborate</a> -->
        <!-- Nouveau lien -->
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