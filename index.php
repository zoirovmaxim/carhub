  <?php
require 'conectare.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CarHub</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo-for-website-BG-white-text-1.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|
  Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="#" class="logo">
        <img src="<?php echo 'assets/img/logo-carhub.png'?>" alt="">
      </a>
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Acasă</a></li>
          <li><a class="nav-link scrollto"  href="#about">Descriere</a></li>
          <li><a class="nav-link scrollto" href="#services">Meniu</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Vehicule</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <a href="#about" class="get-started-btn scrollto">Înainte</a>
    </div>
  </header>
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row " data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Piese de schimb și vehicule avariate<span>.</span></h1>
          <h2>O combinație perfectă pentru a-ți rezolva problemele auto!</h2>
        </div>
      </div>

    </div>
  </section>
  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="<?php echo 'assets/img/img1.jpg'?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Cum să obții profit din mașini avariate ?</h3>
            <p class="fst-italic">
              Viața de șofer, pe lângă toate aspectele pozitive, implică și unele riscuri destul de serioase, cum ar fi accidentele. În cele ce urmează vom trece în revistă principalele opțiuni pe care le aveți la îndemână în legătură cu vehiculele auto avariate.Mașinile au schimbat felul în care întreaga noastră viață se desfășoară zi de zi. Fără ele nu am fi putut progresa într-un ritm atât de rapid, însă există și aspecte mai puțin plăcute, mai ales când vine vorba despre mașini avariate.Daca alegi sa vinzi singur masina avariata, exista o multime de metode prin care poti face acest lucru:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Sa apelezi la cunostinte, pana se gaseste cineva interesat;  </li>
              <li><i class="ri-check-double-line"></i>Sa te duci direct la service-uri auto, din poarta in poarta;</li>
              <li><i class="ri-check-double-line"></i>Sa postezi anunturi cu masina de vanzare pe site-urile de specialitate (metoda cea mai simpla). </li>
            </ul>
          </div>
        </div>

      </div>
    </section>
    <section id="clients" class="clients">
      <div class="container">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="<?php echo 'assets/img/logos/1.png'?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo 'assets/img/logos/2.png'?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo 'assets/img/logos/3.png'?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo 'assets/img/logos/4.png'?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo 'assets/img/logos/5.png'?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo 'assets/img/logos/6.png'?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo 'assets/img/logos/7.png'?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo 'assets/img/logos/8.png'?>" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <section id="features" class="features">
      <div class="container" >
        <div class="row">
          <div class="image col-lg-6" style='background-image: url(https://images.unsplash.com/photo-1552321876-ac707a080f1b?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);' ></div>
          <div class="col-lg-6" >
            <div class="icon-box mt-5 mt-lg-0" >
              <i class="bx bx-receipt"></i>
              <h4>VEZI NOUTĂTILE DIN LUMEA AUTO</h4>
              <p>Citroen SM, maşina franceză cu motor de Maserati, într-un exemplar formidabil, scos la vânzare în Marea Britanie.Motorul avea 3 carburatoare Weber, blocuri cilindrice poziţionate la 90 grade, iar varianta de 2.7 litri cântărea doar 140 kg, graţie folosirii aluminiului. Şi scotea 170 CP, iar mai târziu motorul de 3.0 litri livra 180 CP, tot cu carburatoare, paralel apărând şi o versiune cu injecţie a motorului de 2.7 litri V6.Șeful Renault,este de părere că trecerea rapidă la mașini cu zero emisii ar putea dăuna mediului înconjurător.</p>
            </div>
            <div class="icon-box mt-5" >
              <i class="bx bx-cube-alt"></i>
              <h4>ESTI COMERCIANT DE PIESE AUTO ?</h4>
              <p>Industria auto este una dintre cele mai puternice la nivel mondial. Anual, miliarde si miliarde de euro se invart in afacerile cu automobile si businessuri complementare. Nu doar vanzarile de automobile au crescut la nivel mondial, ci indirect si cele de piese auto. Aceasta piata de piese auto s-a dezvoltat foarte mult si in Romania. Foarte multi romani au preferat sa isi cumpere masini la mana a doua din strainatate, iar gradul de uzura fiind unul mare, necesitatea de a inlocui piese devine o conditie sinecvanon. Astfel multi comercianti de piese auto au investit in stocuri si retele de distributie rapida pentru a profita de cererea tot mai mare din partea clientilor.</p>
            </div>
            <div class="icon-box mt-5" >
              <i class="bx bx-images"></i>
              <h4>SFATURI UTILE PRIVIND ÎNGRIJIREA AUTOMOBILELOR</h4>
              <p>Multi soferi apeleaza la firme de detailing pentru personalizarea unor modele  si reusesc sa obtina o estetica pentru vehicul.Cei care tin la vehiculul pe care il conduc si doresc sa se bucure de el cat mai mult timp sau sa il vanda,cu cat mai multi bani, este bine sa apeleze atat la servicii de cosmetica auto, cat si la tot felul de trucuri care o pastreaza fara rugina si probleme.</p>
            </div>
            <div class="icon-box mt-5" >
              <i class="bx bx-shield"></i>
              <h4>CÎT DE AVARITA TREBUIE SĂ FIE MAȘINA PENTRU A FI DECLARA "DAUNĂ TOTALĂ"?</h4>
              <p>Termenul de "dauna totala" este folosita pentru o descrie a valoare de3 despagubire car depaseste 75% din valoarea de piata a vehicolul avariat . Acesta se poate aplica atat in cazul asigurarii obligatorii RCA , cat si in cazul asigurarii ptionale CASCO .</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section id="services" class="services">
      <div class="container" >

        <div class="section-title">
          <h2>Meniu</h2>
          <p>Produse la oferta</p>
        </div>
        <div class="row">
<?php
$conn = mysqli_connect("localhost", "root", "", "webcar");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `login`";
if($result = mysqli_query($conn, $sql)){
   
    foreach($result as $row){?>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" >
            <div class="icon-box">
              <img style="width: 200px; height: 200px;" src="assets/img/parts/<?php  print_r($row["img"])?>" alt="">
              <h4><a href=""><?php print_r($row["name"])?></a></h4>
              <div class="price"><?php print_r($row["pret"])?> lei</div>
            </div>
        </div>
    <?php }
    echo "</table>";
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

        </div>

      </div>
    </section>
    <section id="cta" class="cta">
      <div class="container" >
        <div class="text-center">
          <h3>Comercializarea automobilelor avariate</h3>
          <p>Aflați cum să protejați vehicolul dumneavoastră</p>
          <a class="cta-btn" href="#">Află acum</a>
        </div>

      </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="container" >

        <div class="section-title">
          <h2>Meniu</h2>
          <p>Vehicule avariate</p>
        </div>

        <div class="row" >
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Toate</li>
              <li data-filter=".filter-app">Automat</li>
              <li data-filter=".filter-card">Manuale</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" >

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo 'assets/img/automobile_avariate/m1.jpg'?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Audi/2022/Hybrid/Trapa/Plasma/Automat/usor avariat/tva ded</h4>
                <p>83 000 lei</p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo 'assets/img/automobile_avariate/m2.jpg'?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Honda 200 kompresor avariat</h4>
                <p>3 910 lei</p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?php echo 'assets/img/automobile_avariate/m3.jpg'?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Volkswagen Passat Variant 2.0 TDI</h4>
                <p>12 000 lei</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo 'assets/img/automobile_avariate/m4.jpg'?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>2011 BMW </h4>
                <p>23 000 lei</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?php echo 'assets/img/automobile_avariate/m5.jpg'?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nissan Variant 2.0 TDI</h4>
                <p>12 000 lei</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?php echo 'assets/img/automobile_avariate/m6.jpg'?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vand Hyundai 2015 cutie automata x drive avariat</h4>
                <p>42 075 lei</p>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="counts" class="counts">
      <div class="container" >

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" >
            <div class="content d-flex flex-column justify-content-center">
              <h3>De ce CarHub?</h3>
              <p>
                Poţi obţine maşina dorită în 4 paşi
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="2" class="purecounter"></span>
                    <p>Alegi mașina dorită sau soliciți consultanță</p>
                    <p>Poţi căuta maşina premium dorită pe site-ul CarHub sau ne poţi trimite o comandă şi o căutăm noi pentru tine.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="2" class="purecounter"></span>
                    <p>Tu alegi metoda de finanțare, noi verificăm și evaluăm mașina</p>
                    <p>Ai opțiunile de: leasing financiar, leasing operaţional, credit auto sau plată integrală. Noi efectuăm evaluarea tehnică şi estetică, verificarea istoricului şi a kilometrajului real a maşinii tale.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="2" class="purecounter"></span>
                    <p>Accepți oferta și efectuezi plata</p>
                    <p>După ce am parcurs întregul proces și vei fi mulțumit de oferta noastră, poți finaliza plata.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="2" class="purecounter"></span>
                    <p>Îţi livrăm maşina „la cheie”, ești fericit și gata de drum</p>
                    <p>Maşina ta ajunge la tine cu toate procedurile administrative rezolvate, o primeşti „la cheie” şi eşti gata de drum!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="testimonials" class="testimonials">
      <div class="container">
        <p>Nu renunța la automobilul tău .</p>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contacte</h2>
          <p>Contactați-ne</p>
        </div>

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44418.617678492825!2d28.167914904578883!3d45.90803872445796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b65c95ca29ef7d%3A0x254c4e01d94d6250!2sCahul%2C%20Moldova!5e0!3m2!1sen!2s!4v1652950729439!5m2!1sen!2s" width="1300" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Locatia:</h4>
                <p>Cahul , Str. Dunarii , 27 </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>carhub@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefon:</h4>
                <p>+373 611 50 415</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="signup.inc.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Numele/Prenumele" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Adresa email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subiect" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Lăsați-ne un mesaj" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Mesaj tău a fost transmis . Mulțumim!</div>
              </div>
              <div class="text-center"><button type="submit">Trimite mesajul</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>
  
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>CarHub<span>.</span></h3>
              <p>
                Str. Dunarii , 27  <br>
                Cahul<br><br>
                <strong>Telefon:</strong> +373 611 50 415<br>
                <strong>Email:</strong>carhub@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoicm8ifQ%3D%3D%22%7D" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/login/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.skype.com/en/" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>BENEFICII</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">ACASĂ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">DESPRE NOI</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">SERVICII</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>INFORMAȚII LEGALE ȘI DE ASISTENȚĂ</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="protection.php">PROTECȚIA CUMPĂRĂTORULUI</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PROTECȚIA DATELOR PERSONALE</a></li>
            </ul>
      </div>
    </div>
  </footer>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="assets/js/main.js"></script>
</body>
</html>