<?php
$year = date("Y");
$next_year = $year + 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--=============== FAVICON ===============-->
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/styles.css" />

  <title>Syahril Ashraf</title>
</head>

<body>
  <!--==================== HEADER ====================-->
  <!-- <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo"> Syahril </a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list grid">
            <li class="nav_item">
              <a href="#home" class="nav__link active-link">
                <i class="ri-home-5-line"></i> Home
              </a>
            </li>
            <li class="nav_item">
              <a href="#skills" class="nav__link">
                <i class="ri-trophy-line"></i> Skills
              </a>
            </li>
            <li class="nav_item">
              <a href="#qualification" class="nav__link">
                <i class="ri-book-open-line"></i> Qualification
              </a>
            </li>
            <li class="nav_item">
              <a href="#services" class="nav__link">
                <i class="ri-briefcase-line"></i> Services
              </a>
            </li>
            <li class="nav_item">
              <a href="#projects" class="nav__link">
                <i class="ri-image-line"></i> Projects
              </a>
            </li>
            <li class="nav_item">
              <a href="#contact" class="nav__link">
                <i class="ri-image-line"></i> Contact
              </a>
            </li>
          </ul>
          <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
          </div>
        </div>

        <div class="nav__buttons">
          <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
          </div>
        </div>
      </nav>
    </header> -->

  <!--==================== MAIN ====================-->
  <main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
      <div class="home__container container grid section__border">
        <div class="home__data grid">
          <h1 class="home__title">
            Hi, I’m Syahril Ashraf <br />
            Backend Developer <br />
          </h1>
          <div class="div home__blob grid">
            <div class="home__perfil">
              <img src="assets/img/syahril.png" alt="home perfil" />
            </div>
            <img src="assets/img/shape-wawes.svg" alt="" class="home__shape-wawes" />
            <img src="assets/img/shape-circle.svg" alt="" class="home__shape-circle" />
          </div>
          <ul class="home__social">
            <a href="https://www.linkedin.com/in/syahril7/" target="_blank" class="home__social-link">
              <i class="ri-linkedin-box-line"></i>
            </a>
            <a href="https://github.com/syah769" target="_blank" class="home__social-link">
              <i class="ri-github-line"></i>
            </a>
            <a href="https://www.facebook.com/baju.kaler.itam/" target="_blank" class="home__social-link">
              <i class="ri-facebook-line"></i>
            </a>
          </ul>
          <!-- <button type="submit" class="home__social">
              Submit <i class="ri-download-2-line"></i>
            </button> -->
          <a class="home__social" href="assets/Resume_Syahril_Ashraf.pdf" target="_blank">My Resume <i class="ri-download-2-line"></i></a>
        </div>
        <!--==================== HOME INFO 1 ====================-->
        <div class="home__info">
          <div>
            <h3 class="home__info-title">BIOGRAPHY</h3>
            <p class="home__info-description">
              Hi, My name is Muhammad Syahril Ashraf bin Mohd Amer. Seeking a
              challenging career that provides an opportunity to develop my
              technical skills and abilities in software development
            </p>
          </div>
          <div>
            <h3 class="home__info-title">CONTACT</h3>
            <p class="home__info-description">
              <!-- Lima, Perú <br /> -->
              syahrilashraf769@gmail.com <br />
              +60135077314 <br />
            </p>
          </div>
          <div>
            <h3 class="home__info-title">SERVICES</h3>
            <p class="home__info-description">
              Web Development <br />
              App Development <br />
            </p>
          </div>
        </div>

        <!--==================== HOME INFO 2 ====================-->
        <div class="home__info">
          <div>
            <h3 class="home__info-title">YEARS OF EXPERIENCE</h3>
            <p class="home__info-number">2 years</p>
          </div>
          <div>
            <h3 class="home__info-title">COMPLETED PROJECTS</h3>
            <p class="home__info-number">6 projects</p>
          </div>
          <div>
            <h3 class="home__info-title">COMPANIES WORKED</h3>
            <p class="home__info-number">4 companies</p>
          </div>
        </div>
      </div>
    </section>

    <!--==================== SKILLS ====================-->
    <section class="skills section" id="skills">
      <h2 class="section__title">Skills</h2>
      <span class="section__subtitle">My Favorite Skills</span>

      <div class="skills__container container grid section__border">
        <!--==================== SKILLS 1 ====================-->
        <div class="skills__content">
          <!-- <h3 class="skills__title">
              <i class="ri-braces-line"></i> Backend Developer
            </h3> -->
          <div class="skills__info">
            <div class="skills__data">
              <div class="skills__blob">
                <img src="assets/img/html-1.svg" alt="skills image" />
              </div>
              <h3 class="skills__name">HTML</h3>
              <span class="skills__subtitle">Intermediate</span>
            </div>
            <div class="skills__data">
              <div class="skills__blob">
                <img src="assets/img/css-3.svg" alt="skills image" />
              </div>
              <h3 class="skills__name">CSS</h3>
              <span class="skills__subtitle">Intermediate</span>
            </div>
            <div class="skills__data">
              <div class="skills__blob">
                <img src="assets/img/logo-javascript.svg" alt="skills image" />
              </div>
              <h3 class="skills__name">JavaScript</h3>
              <span class="skills__subtitle">Intermediate</span>
            </div>
            <div class="skills__data">
              <div class="skills__blob">
                <img src="assets/img/php.svg" alt="skills image" />
              </div>
              <h3 class="skills__name">PHP</h3>
              <span class="skills__subtitle">Intermediate</span>
            </div>
            <div class="skills__data">
              <div class="skills__blob">
                <img src="assets/img/laravel-2.svg" alt="skills image" />
              </div>
              <h3 class="skills__name">Laravel</h3>
              <span class="skills__subtitle">Intermediate</span>
            </div>
            <div class="skills__data">
              <div class="skills__blob">
                <img src="assets/img/wordpress-blue.svg" alt="skills image" />
              </div>
              <h3 class="skills__name">WordPress</h3>
              <span class="skills__subtitle">Intermediate</span>
            </div>
          </div>
        </div>

        <!--==================== SKILLS 2 ====================-->
        <div class="skills__content">
          <!-- <h3 class="skills__title">
              <i class="ri-pantone-line"></i> Web Designer
            </h3> -->
          <div class="skills__info">
            <div class="skills__data">
              <div class="skills__blob">
                <img src="assets/img/git-icon.svg" alt="skills image" />
              </div>
              <h3 class="skills__name">Git</h3>
              <span class="skills__subtitle">Basic</span>
            </div>
            <div class="skills__data">
              <div class="skills__blob">
                <img src="assets/img/flutter.svg" alt="skills image" />
              </div>
              <h3 class="skills__name">Flutter</h3>
              <span class="skills__subtitle">Basic</span>
            </div>
            <!-- <div class="skills__data">
                <div class="skills__blob">
                  <img src="assets/img/flutter.svg" alt="skills image" />
                </div>
                <h3 class="skills__name">Flutter</h3>
                <span class="skills__subtitle">Basic</span>
              </div> -->
            <!-- <div class="skills__data">
                <div class="skills__blob">
                  <img src="assets/img/invision.svg" alt="skills image" />
                </div>
                <h3 class="skills__name">InvisionApp</h3>
                <span class="skills__subtitle">Basic</span>
              </div> -->
            <!-- <div class="skills__data">
                <div class="skills__blob">
                  <img
                    src="assets/img/adobe-photoshop-2.svg"
                    alt="skills image"
                  />
                </div>
                <h3 class="skills__name">Photoshop</h3>
                <span class="skills__subtitle">Basic</span>
              </div> -->
          </div>
        </div>
      </div>
    </section>

    <!--==================== QUALIFICATION ====================-->
    <section class="qualification section" id="qualification">
      <h2 class="section__title">Qualification</h2>
      <span class="section__subtitle">Experience & Education</span>
      <div class="qualification__container container grid section__border">
        <!--==================== QUALIFICATION 1 ====================-->
        <div class="qualification__content">
          <h3 class="qualification__title">
            <i class="ri-pencil-ruler-2-line"></i> Education
          </h3>
          <div class="qualification__info">
            <div>
              <h3 class="qualification__name">
                Bachelor of Information Technology (Hons.)<br />in Software
                Engineering
              </h3>
              <span class="qualification__country">Universiti Kuala Lumpur Malaysia Institute<br />of
                Information Technology</span>
              <span class="qualification__year">2020 - 2023</span>
            </div>
            <div>
              <h3 class="qualification__name">
                Diploma of Information Technology
              </h3>
              <span class="qualification__country">Politeknik Sultan Abdul Halim Mu'adzam Shah</span>
              <span class="qualification__year">2016 - 2019</span>
            </div>
            <div>
              <h3 class="qualification__name">Sijil Pelajaran Malaysia</h3>
              <span class="qualification__country">Sekolah Menengah Kebangsaan Agama Yan</span>
              <span class="qualification__year">2011 - 2015</span>
            </div>
          </div>
        </div>
        <!--==================== QUALIFICATION 2 ====================-->
        <div class="qualification__content">
          <h3 class="qualification__title">
            <i class="ri-building-line"></i> Experience
          </h3>
          <div class="qualification__info">
            <div>
              <h3 class="qualification__name">Backend Developer - Intern</h3>
              <span class="qualification__country">Bayam (M) Sdn Bhd</span>
              <span class="qualification__year">February 2023 - June 2023</span>
            </div>
            <div>
              <h3 class="qualification__name">Laravel Framework Tutor</h3>
              <span class="qualification__country">UniKL MIIT</span>
              <span class="qualification__year">January 2022</span>
            </div>
            <div>
              <h3 class="qualification__name">Web Developer - Freelancer</h3>
              <span class="qualification__country">Masjid Al Wustha, Kedah</span>
              <span class="qualification__year">March 2021 - July 2022</span>
            </div>
            <div>
              <h3 class="qualification__name">
                WordPress Developer - Freelancer
              </h3>
              <span class="qualification__country">Yayasan Islam Negeri Kedah</span>
              <span class="qualification__year">March 2021 - July 2021</span>
            </div>
            <div>
              <h3 class="qualification__name">App Developer - Freelancer</h3>
              <span class="qualification__country">SMK Agama Yan</span>
              <span class="qualification__year">October 2019 - June 2020</span>
            </div>
            <div>
              <h3 class="qualification__name">App Developer - Intern</h3>
              <span class="qualification__country">Mecacom Technologies Sdn Bhd</span>
              <span class="qualification__year">December 2018 - May 2019</span>
            </div>
          </div>
        </div>
      </div>
      <img src="assets/img/shape-circle.svg" alt="qualification" class="qualification__img" />
    </section>

    <!--==================== SERVICES ====================-->
    <!-- <section class="services section" id="services">
        <h2 class="section__title">Services</h2>
        <span class="section__subtitle">What I offer</span>
        <div class="services__container container grid section__border">
          <div class="services__card">
            <i class="ri-layout-4-line"></i>
            <h2 class="services__title">
              UI/UX <br />
              Designer
            </h2>
            <p class="services__description">
              Service that provides the best quality and at the request of the
              client, with professional work and customer support.
            </p>
            <div class="services__border"></div>
          </div>
          <div class="services__card">
            <i class="ri-code-line"></i>
            <h2 class="services__title">
              Website <br />
              Designer
            </h2>
            <p class="services__description">
              Service that provides the best quality and at the request of the
              client, with professional work and customer support.
            </p>
            <div class="services__border"></div>
          </div>
          <div class="services__card">
            <i class="ri-quill-pen-line"></i>
            <h2 class="services__title">
              Digital <br />
              Animator
            </h2>
            <p class="services__description">
              Service that provides the best quality and at the request of the
              client, with professional work and customer support.
            </p>
            <div class="services__border"></div>
          </div>
        </div>
      </section> -->

    <!--==================== PROJECTS ====================-->
    <section class="projects section" id="projects">
      <h2 class="section__title">Projects</h2>
      <span class="section__subtitle">Most Recent Work</span>
      <div class="container section__border">
        <div class="projects__container swiper">
          <div class="swiper-wrapper">
            <!--==================== PROJECT 1 ====================-->
            <div class="projects__content swiper-slide">
              <img src="assets/img/etahfiz.png" alt="projects image" class="projects__img" />

              <div>
                <span class="projects__subtitle">Web</span>
                <h1 class="projects__title">E-Tahfiz Management</h1>
                <a href="#" class="projects__button">
                  View Demo <i class="ri-arrow-right-line"></i>
                </a>
              </div>
            </div>
            <!--==================== PROJECT 2 ====================-->
            <div class="projects__content swiper-slide">
              <img src="assets/img/alwustha.png" alt="projects image" class="projects__img" />

              <div>
                <span class="projects__subtitle">Web</span>
                <h1 class="projects__title">Website Masjid Al Wustha</h1>
                <a href="#" class="projects__button">
                  View Demo <i class="ri-arrow-right-line"></i>
                </a>
              </div>
            </div>
            <!--==================== PROJECT 3 ====================-->
            <div class="projects__content swiper-slide">
              <img src="assets/img/ekhairat.png" alt="projects image" class="projects__img" />

              <div>
                <span class="projects__subtitle">Web</span>
                <h1 class="projects__title">E-Khairat Management</h1>
                <a href="#" class="projects__button">
                  View Demo <i class="ri-arrow-right-line"></i>
                </a>
              </div>
            </div>
            <!--==================== PROJECT 4 ====================-->
            <div class="projects__content swiper-slide">
              <img src="assets/img/danawajar.png" alt="projects image" class="projects__img" />

              <div>
                <span class="projects__subtitle">Web</span>
                <h1 class="projects__title">Dana Wajar Crowdfunding</h1>
                <a href="#" class="projects__button">
                  View Demo <i class="ri-arrow-right-line"></i>
                </a>
              </div>
            </div>
            <!--==================== PROJECT 5 ====================-->
            <div class="projects__content swiper-slide">
              <img src="assets/img/ar.png" alt="projects image" class="projects__img" />

              <div>
                <span class="projects__subtitle">Mobile App</span>
                <h1 class="projects__title">AR PT3 E-Learning</h1>
                <a href="#" class="projects__button">
                  View Demo <i class="ri-arrow-right-line"></i>
                </a>
              </div>
            </div>
            <!--==================== PROJECT 6 ====================-->
            <div class="projects__content swiper-slide">
              <img src="assets/img/meca.png" alt="projects image" class="projects__img" />

              <div>
                <span class="projects__subtitle">Mobile App</span>
                <h1 class="projects__title">Meca Desk</h1>
                <a href="#" class="projects__button">
                  View Demo <i class="ri-arrow-right-line"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-button-next">
            <i class="ri-arrow-drop-right-line"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="ri-arrow-drop-left-line"></i>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <!--==================== TESTIMONIAL ====================-->
    <section class="testimonial section">
      <h2 class="section__title">Testimonial</h2>
      <span class="section__subtitle">My client saying</span>
      <div class="container section__border">
        <div class="testimonial__container swiper">
          <div class="swiper-wrapper">
            <!--==================== TESTIMONIAL 1 ====================-->
            <div class="testimonial__content swiper-slide">
              <p class="testimonial__description">
                “Bekerja dengan Syahril sangat mudah, beliau memberikan
                nasihat tentang kos dan kualiti untuk sistem yang
                dibincangkan”
              </p>
              <div>
                <h3 class="testimonial__name">Puan Farah</h3>
                <span class="testimonial__subtitle">Client</span>
              </div>
            </div>
            <!--==================== TESTIMONIAL 2 ====================-->
            <div class="testimonial__content swiper-slide">
              <p class="testimonial__description">
                “Syahril adalah bekas anak murid saya yang mudah untuk
                berbincang. Beliau bekerja keras untuk siapkan aplikasi ini
                dalam masa yang singkat”
              </p>
              <div>
                <h3 class="testimonial__name">Cikgu Zurina</h3>
                <span class="testimonial__subtitle">Client</span>
              </div>
            </div>
            <!--==================== TESTIMONIAL 3 ====================-->
            <div class="testimonial__content swiper-slide">
              <p class="testimonial__description">
                “Sekiranya berlaku apa-apa perubahan pada design website,
                beliau cepat dalam melaksanakan arahan yang diberikan oleh
                saya dan mencadangkan apa yang bagus atau tak”
              </p>
              <div>
                <h3 class="testimonial__name">Encik Salimie</h3>
                <span class="testimonial__subtitle">Client</span>
              </div>
            </div>
          </div>
          <div class="swiper-button-next">
            <i class="ri-arrow-right-s-line"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="ri-arrow-left-s-line"></i>
          </div>
        </div>
      </div>
      <img src="assets/img/shape-wawes.svg" alt="testimonial image" class="testimonial__img" />
    </section>

    <!--==================== CONTACT ====================-->
    <section class="contact section" id="contact">
      <h2 class="section__title">Contact Me</h2>
      <span class="section__subtitle">Get in Touch</span>
      <div class="contact__container container grid section__border">
        <div class="contact__content">
          <h3 class="contact__title">
            <i class="ri-chat-3-line"></i> Talk to me
          </h3>
          <div class="contact__info">
            <div class="contact__data">
              <span class="contact__data-title">Email</span>
              <span class="contact__data-info">syahrilashraf769@gmail.com</span>
            </div>
            <div class="contact__data">
              <span class="contact__data-title">Contact | WhatsApp</span>
              <span class="contact__data-info">+60135077314</span>
              <a href="https://wa.me/60135077314" class="contact__button" target="_blank">Call me <i class="ri-arrow-right-line"></i></a>
            </div>
            <!-- <div class="contact__data">
                <span class="contact__data-title">Messenger</span>
                <span class="contact__data-info">@baju.kaler.itam</span>
                <a
                  href="https://www.facebook.com/baju.kaler.itam/"
                  target="_blank"
                  class="contact__button"
                  >Write me <i class="ri-arrow-right-line"></i
                ></a>
              </div> -->
          </div>
        </div>

        <div class="contact__content">
          <h3 class="contact__title">
            <i class="ri-send-plane-line"></i> Your questions or feedback
          </h3>
          <form action="" class="contact__form" id="contact-form">
            <div class="contact__form-div">
              <label class="contact__form-tag">Names</label>
              <input type="text" name="user_name" required placeholder="Write your names" class="contact__form-input" id="contact-name" />
            </div>
            <div class="contact__form-div">
              <label class="contact__form-tag">Mail</label>
              <input type="email" name="user_email" required placeholder="Write your email" class="contact__form-input" id="contact-email" />
            </div>
            <div class="contact__form-div contact__form-area">
              <label class="contact__form-tag">Question</label>
              <textarea name="user_project" placeholder="Ask anything" id="contact-project" class="contact__form-input"></textarea>
            </div>

            <p class="contact__message" id="contact-message"></p>

            <button type="submit" class="contact__button">
              Submit <i class="ri-arrow-right-up-line"></i>
            </button>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!--==================== FOOTER ====================-->
  <footer class="footer">
    <div class="footer__container container">
      <h1 class="footer__title">Syahril Ashraf</h1>
      <p>Backend Developer</p>
      <ul class="footer__list">
        <li>
          <a href="#home" class="footer__link">Home</a>
        </li>
        <li>
          <a href="#skills" class="footer__link">Skills</a>
        </li>
        <li>
          <a href="#projects" class="footer__link">Projects</a>
        </li>
      </ul>
      <ul class="footer__social">
        <a href="https://www.linkedin.com/in/syahril7/" target="_blank" class="footer__social-link">
          <i class="ri-linkedin-box-line"></i>
        </a>
        <a href="https://github.com/syah769" target="_blank" class="footer__social-link">
          <i class="ri-github-line"></i>
        </a>
        <a href="https://www.facebook.com/baju.kaler.itam/" target="_blank" class="footer__social-link">
          <i class="ri-facebook-line"></i>
        </a>
      </ul>
      <span class="footer__copy">
        &#169; <?php echo date("Y"); ?> Copyright Syahril Ashraf. All Rights Reserved
      </span>

    </div>
  </footer>

  <!--========== SCROLL UP ==========-->
  <a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line"></i>
  </a>

  <!--=============== SCROLLREVEAL ===============-->
  <script src="assets/js/scrollreveal.min.js"></script>

  <!--=============== SWIPER JS ===============-->
  <script src="assets/js/swiper-bundle.min.js"></script>

  <!--=============== EMAIL JS ===============-->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
</body>

</html>