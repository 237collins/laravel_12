<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=heroice-width, initial-scale=1.0" />
    <title>NOVA-DEV</title>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
   <link rel="stylesheet" href="{{ asset('css/coments.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/tarif.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/realisation.css') }}" /> --}}
    
    {{-- <link rel="stylesheet" href="{{ asset('css/embed.css') }}" /> --}}
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet">

  </head>
  <body>
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
    <!-- Menu Burger -->
    <div class="burger2" id="burger-menu2">&#9776;</div>

    <!-- Sidebar -->
    <div class="sidebar1" id="sidebar1">
      <nav class="nav" id="nav-menu">
        <a href="{{ route('home') }}">Home</a>
        <a href="#about">About</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#services">Services</a>
        <a href="#testimonials">Témoignage</a>
        <a href="#contact">Contact</a>
      </nav>
    </div>

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
            dans un monde où la vitesse d'apprentissage est un atout majeur
            Je suis confiant dans ma capacité à proposer des idées innovantes
            et à colaborer avec un équipe dynamique pour la réqlisation des projets d'envergure.

          </p>
          <a href="{{ route('tarif') }}" class="hero-button">Collaborons →</a>
          <p class="clients">
            Plus de <strong>100+</strong> Clients dans le monde.
          </p>
          <div class="client-logos">
            <div class="circle"><img style="width: 90%; height: 90%; border-radius: 30%; object-fit: scale-down;" src="assets/logos/discover.png" alt="discover"></div>
            <span class="circle"><img
                style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;"
                src="assets/logos/consoinvest.png" alt="Consoinvest"></span>
            <span class="circle"><img style="width: 90%; height: 90%; border-radius: 50%; object-fit: scale-down;"
              src="assets/logos/Logo .png" alt="FK Massages"></span>
            <!-- <span class="circle"><img style="width: 100%; height: 100%; object-fit: cover;"
              src="" alt=""></span> -->

            <div class="side-text">

              <div class="ligne-et-texte">
                <div class="barre-verticale"></div>
                <p class="texte">
                  I am a designer and heroeloper
                  with a passion for creating
                  unique visual experiences
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="social-icons">
          <hr class="barre-verticale-3">
            <div class="ligne-et-texte-2">
                <div class="barre-verticale-2"></div>
                <ul class="horizontal-menu">
                    <li><a href="#"><img src="assets/icons/insta.png" alt=""></a></li>
                    <li><a href="#"><img  src="assets/icons/x.png" alt=""></a></li>
                    <li> <a href="#"><img  src="assets/icons/linkedin.png" alt=""></a></li>
                    <li> <a href="#"><img  src="assets/icons/facebook.png" alt=""></a></li>
                 </ul>
                 
            </div>
            <hr class="barre-verticale-3">
        </div>
      </section>

      <!-- Section About -->
      <section id="about">
        <div class="about-container">
          <div class="about-text">
            <h2><span>Who</span> We Are</h2>
            <p class="about-p">
              Designing the future with creativity and purpose, we are
              dedicated.
            </p>
            <p>
              At Alex Morgan, we believe that design is more than just
              aesthetics—
              it's a powerful tool to communicate, connect, and inspire. With a
              passion for innovation and a commitment to excellence, we
              transform
              ideas into impactful designs that tell stories and leave lasting
              impressions.
            </p>
            <ul class="about-services">
              <li>
                <span class="checkmark">✔</span>
                <div>
                  <strong>Custom Branding</strong>
                  <p>
                    Crafting unique identities that resonate with your audience.
                  </p>
                </div>
              </li>
              <li>
                <span class="checkmark">✔</span>
                <div>
                  <strong>Web Design</strong>
                  <p>
                    Building responsive and visually stunning websites tailored
                    to
                    your goals.
                  </p>
                </div>
              </li>
              <li>
                <span class="checkmark">✔</span>
                <div>
                  <strong>UI/UX Solutions</strong>
                  <p>
                    Creating seamless, user-friendly experiences that enhance
                    engagement.
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <div class="about-image">
            <div class="image-placeholder">
              <img style="width: 100%; height: 100%; object-fit: cover; border-radius: 15px"
                src="{{ url('assets/images/who.jpg') }}" alt>
            </div>
          </div>
        </div>
      </section>

      <!--  -->

      <!-- portfolio -->
      <section id="portfolio">

        <div class="portfolio-container">
          <div class="section-header">
            <h2><span>Our Work</span> Speaks for Itself</h2>
            <p>
              Designed a sleek, responsive website for a tech startup to enhance
              their online presence and improve user experience.
            </p>
          </div>
          <div class="portfolio-grid">
            <!-- Project 1 -->
            <div class="project-card">
              <div class="image-placeholder"></div>
              <h3>Modern Business Website Design</h3>
              <p>
                Designed a sleek, responsive website for a tech startup to
                enhance
                their online presence and improve user experience.
              </p>
              <ul>
                <li>✔ Custom UI/UX tailored for tech-savvy audiences.</li>
                <li>
                  ✔ Integrated responsive design for seamless mobile experience.
                </li>
                <li>✔ Achieved a 50% increase in website traffic
                  post-launch.</li>
              </ul>
              <a href="#" class="btn">View Project</a>
            </div>

            <!-- Project 2 -->
            <div class="project-card" id="project-2">
              <div class="image-placeholder"></div>
              <h3>Brand Identity for Urban Coffee House</h3>
              <p>
                Created a complete brand identity, including logo, typography,
                and
                packaging design for a trendy coffee house.
              </p>
              <ul>
                <li>✔ Minimalist logo with a bold, urban aesthetic.</li>
                <li>✔ Custom typography designed for versatile
                  applications.</li>
                <li>
                  ✔ Consistent branding across menus, signage, and merchandise.
                </li>
              </ul>
              <a href="#" class="btn">View Project</a>
            </div>

            <!-- Project 3 -->
            <div class="project-card">
              <div class="image-placeholder"></div>
              <h3>E-commerce UI Design for Fashion Store</h3>
              <p>
                heroeloped an engaging and visually stunning UI for a fashion
                e-commerce platform to drive online sales.
              </p>
              <ul>
                <li>✔ User-centric design focused on ease of navigation.</li>
                <li>✔ Integrated high-quality visuals to showcase products.</li>
                <li>✔ Boosted sales conversion rate by 35%.</li>
              </ul>
              <a href="#" class="btn">View Project</a>
            </div>

            <!-- Project 4 -->
            <div class="project-card" id="project-2">
              <div class="image-placeholder"></div>
              <h3>Social Media Campaign for Beauty Brand</h3>
              <p>
                Designed an engaging social media campaign for a beauty brand,
                featuring stunning visuals and animations.
              </p>
              <ul>
                <li>
                  ✔ Created visually cohesive posts for Instagram and Facebook.
                </li>
                <li>✔ Designed short animations to boost engagement.</li>
                <li>✔ Achieved a 60% increase in social media following.</li>
              </ul>
              <a href="#" class="btn">View Project</a>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!--  -->

    <!-- services -->
    <section id="services">
      <div class="services-container">
        <div class="section-header">
          <h2><span>What</span> We Do</h2>
          <p>
            From branding to web design, we offer a full suite of services that
            help businesses thrive in the digital world.
          </p>
        </div>

        <div class="service-grid">
          <div class="service-card">
            <div class="icon">
              <img src="assets/icons/branding.png" alt="Branding Icon" />
            </div>
            <h3>Branding</h3>
            <p>Building strong identities for businesses to stand out.</p>
          </div>
          <div class="service-card">
            <div class="icon">
              <img src="assets/icons/ui-ux.png" alt="UI/UX Icon" />
            </div>
            <h3>UI/UX Design</h3>
            <p>Creating user-friendly interfaces.</p>
          </div>
          <div class="service-card">
            <div class="icon">
              <img src="assets/icons/web-design.png" alt="Web Design Icon" />
            </div>
            <h3>Web Design</h3>
            <p>Designing responsive, visually appealing websites.</p>
          </div>
          <div class="service-card">
            <div class="icon">
              <img src="assets/icons/print-design.png"
                alt="Print Design Icon" />
            </div>
            <h3>Print Design</h3>s
            <p>Designing eye-catching materials.</p>
          </div>
        </div>
      </div>
    </section>

    <!--  -->
    <!-- Comments section -->

    <section class="testimonials-section" id="testimonials">
      <div class="title">
        <h2 class="section-title"><span>What Our</span> Clients Say</h2>
        <p class="section-subtitle">Hear from the people who have experienced
          the transformative power of our design solutions.</p>
      </div>
      <div class="testimonial-wrapper">
        <div class="comment-container">

          <div class="slide">
            <div class="testimonial-card">
            
            <!-- Photo du client -->
            <img src="assets/images/pp.jpg"
              alt="Anna Harper" class="client-photo">
            

            <div class="infos">
              <!-- Témoignage -->
              <p class="testimonial-text">
                Working with Alex Morgan was an absolute game-changer for our
                business.
                The designs not only captured our vision perfectly but also
                elevated
                our brand's image. Clients have been raving about the new look!
              </p>

              <!-- Info client -->
              <div class="client-info">
                <h3 class="client-name">Anna Harper</h3>
                <!-- <p class="client-position">CEO, Harper Designs</p> -->
                <div class="client-rating">⭐⭐⭐⭐⭐</div>
              </div>
            </div>

             

          </div>
          <!--  Client 2 -->
          </div>
          
          <!-- 2 -->

         
        </div>
          
        <div class="pagination">
            <button class="prev">&#8592;</button> <!-- Flèche gauche -->
            <button class="next">&#8594;</button> <!-- Flèche droite -->
        </div>

       

      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="contact-container">
        <div class="contact-header">
        <h2> <span> Get in </span>Touch</h2>
        <p>
          Have a project in mind? Let's work together to bring your ideas to
          life.
        </p>
      </div>

      <form class="contact-form">
        <div class="form-group  ">
          <label for="name"></label>
          <input type="text" id="name" class="form-control"
            placeholder="Enter your full name" />
        </div>

        <div class="form-group ">
          <label for="email"></label>
          <input type="email" id="email" class="form-control"
            placeholder="Enter your email address" />
        </div>

        <div class="form-group ">
          <label for="subject"></label>
          <input type="text" id="subject" class="form-control"
            placeholder="Enter your subject message" />
        </div>

        <div class="form-group ">
          <label for="message"></label>
          <textarea id="message" class="form-control"
            placeholder="Enter your Message"></textarea>
        </div>

        <div class="form-group ">
          <button type="submit" class="btn-submit">Send Message</button>
        </div>
      </form>
      </div>
    </section>
    <!--  -->

    <!-- footer -->
    <footer>
      <div class="footer-container">
        <div class="footer-about">
          <div class="footer-logo"> Momo <span>Collins</span></div>
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

      <div class="footer-bottom">© 2025 Momo Collins. All rights reserved.</div>
    </footer>
    <!--  -->
    <!-- Nouvau code -->
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

  </body>
</html>
