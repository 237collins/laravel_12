<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NOVA-DEV</title>
    <link rel="stylesheet" href="{{ asset('css/tarif.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    
    <header class="header">
      <div class="tarif-container">
        <div class="logo">Nova <span>- Dev</span></div>

        <nav class="nav" id="nav-menu">
          <a href="{{ route('home') }}">Home</a>
          <!-- <a href="#about">About</a> -->
          <a href="{{ route('realisation') }}">Réalisations</a>
        </nav>

<!--         <a class="cta-button" href="#">Let's Collaborate</a> -->
        <a
          class="cta-button"
          href="https://wa.me/237697627966?text=Bonjour%2C%20je%20souhaite%20en%20savoir%20plus%20sur%20vos%20services"
          target="_blank"
          class="whatsapp-btn"
        >WhatsApp
        </a>

        <div class="burger" id="burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>

    <section class="pricing-section">
      <h2><span class="highlight">My</span> Pricing</h2>
      <p class="subtitle">
        Simple and transparent pricing for all your creative needs.
      </p>

      <div class="pricing-cards">
        <!-- Starter -->
        <div class="pricing-card">
          <h3>Starter</h3>
          <p class="price">€199</p>
          <ul>
            <li>1 Page Website</li>
            <li>Responsive Design</li>
            <li>Basic SEO</li>
            <li>Email Support</li>
          </ul>
          <a
            href="https://wa.me/237697627966?text=Je%20souhaite%20commander%20le%20pack%20Starter"
            class="btn"
            >Choose Plan</a
          >
        </div>

        <!-- Professional -->
        <div class="pricing-card featured">
          <h3>Professional</h3>
          <p class="price">€499</p>
          <ul>
            <li>Up to 5 Pages</li>
            <li>UI/UX Design</li>
            <li>SEO Optimized</li>
            <li>Support via WhatsApp</li>
          </ul>
          <a
            href="https://wa.me/237697627966?text=Je%20souhaite%20commander%20le%20pack%20Professional"
            class="btn"
            >Choose Plan</a
          >
        </div>

        <!-- Premium -->
        <div class="pricing-card">
          <h3>Premium</h3>
          <p class="price">€899</p>
          <ul>
            <li>Unlimited Pages</li>
            <li>Brand Identity Design</li>
            <li>Advanced SEO</li>
            <li>Priority Support</li>
          </ul>
          <a
            href="https://wa.me/237697627966?text=Je%20souhaite%20commander%20le%20pack%20Premium"
            class="btn"
            >Choose Plan</a
          >
        </div>
      </div>
    </section>
    <!-- foote -->
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
