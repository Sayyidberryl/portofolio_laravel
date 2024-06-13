<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PortBryl</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav>
    <div class="nav__content">
      <div class="logo">
        <h1>PortBryl</h1>
      </div>
      <label for="check" class="checkbox">
        <i class="ri-menu-line"></i>
      </label>
      <input type="checkbox" name="check" id="check" />
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>
  <section class="section">
    <div class="section__container">
      <div class="content">
        <p class="subtitle">HELLO</p>
        <h1 class="title" style="  text-align: left;">
          I'm <span>Berryl<br />a</span> Web Developer
        </h1>
        <p class="description">
          Selamat datang di web portfolio saya !, perkenal kan saya Sayyid Berryl seorang junior develover dan seorang
          kreator muda
        </p>
        <div class="action__btns">
          <button class="hire__me"><a
              href="mailto:sayyidberrylmustofa@gmail.com?subject=Subject%20Here&body=Body%20text%20here"
              class="no-decoration" style="no-decoration; color:#fff;">Hire me</a></button>
          <button class="portfolio"><a href="https://github.com/Sayyidberryl" class="no-decoration">Github</a></button>
        </div>
      </div>
      <div class="image">
        <img src="/assets/img/fotoku.jpg" alt="profile" />
      </div>
    </div>
  </section>
  <section class="aboutyou" id="about">
    <p class="section__text__p1">Cari tau lebih banyak</p>
    <h1 class="title">Tentang saya</h1>
    <div class="section-container">
      <div class="section__pic-container">
        <img src="/assets/img/kom.jpg" alt="Profile picture" class="about-pic" />
      </div>
      <div class="about-details-container">
        <div class="about-containers">
          <div class="details-container">
            <img src="./assets/img/experience.png" alt="Experience icon" class="icon" />
            <h3>Pengalaman</h3>
            <p>1+ years <br />Full stack Developer</p>
          </div>
          <div class="details-container">
            <img src="/assets/img/education.png" alt="Education icon" class="icon" />
            <h3>Pendidikan</h3>
            <p>SMK Wikrama Bogor<br />Harvard</p>
          </div>
        </div>
        <div class="text-container">
          <p>
            Saya adalah seorang develover programmer rumahan. meski begitu saya mendedikasikan seluruh kemampuan saya dalam dunia it sebagai programmer. Saya berperan sebagai junior develover dan junior programmer. saya memiliki keahlian khusus nya di bidang Development.
          </p>
        </div>
      </div>
    </div>
    <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#experience'" />
  </section>
  <section class="newcontact" id="contact">
    <p class="section__text__p1">Hubungi</p>
    <h1 class="title">Kontak</h1>
    <div class="contact-info-upper-container">
      <div class="contact-info-container">
        <img src="./assets/img/github.png" alt="Email icon" class="icon contact-icon email-icon" />
        <p><a href="https://github.com/Sayyidberryl" class="no-decoration">Github</a></p>
      </div>
      <div class="contact-info-container">
        <img src="./assets/img/linkedin.png" alt="LinkedIn icon" class="icon contact-icon" />
        <p><a href="https://www.linkedin.com/in/sayyid-berryl-musthofa-a6b723211/" class="no-decoration">LinkedIn</a></p>
      </div>
    </div>
  </section>
  <footer>
    
    <p>Copyright &#169; 2024 Sayyid Berryl.</p>
  </footer>
</body>

</html>

</html>