<?php
$active_page = 'index';
$page_title = 'Početna';
$meta_description = 'Vrhunske bravarske usluge, metalne konstrukcije i strojna obrada metala u Slavonskom Brodu. BravArt - vaš pouzdan partner.';
include 'includes/header.php';
?>
    <!-- slider section -->
    <section class=" slider_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="detail-box">
              <h1>
                <?php echo SITE_NAME; ?>
                <br />
                <span>
                  Bravarske usluge
                </span>
              </h1>
              <p>
                Vaš partner za vrhunske metalne konstrukcije, preciznu strojnu obradu i ugradnju stolarije. Kvaliteta i tradicija u Brodskom Varošu.
              </p>
              <div class="btn-box">
                <a href="about.php" class="btn-1"> Pročitaj više </a>
                <a href="contact.php" class="btn-2">Zatražite ponudu</a>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="img-box">
              <img src="images/slider-img.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding-top">
    <div class="container">
      <div class="heading_container">
        <h2>
          Naše usluge
        </h2>
      </div>
      <div class="service_container">
        <div class="box b1">
          <div class="img-box">
            <img src="images/s-1.jpg" alt="" />
          </div>
          <div class="detail-box">
            <h6>
              Metalne konstrukcije
            </h6>
            <p>
              Projektiranje i izrada lakih i teških metalnih konstrukcija prilagođenih vašim potrebama, od industrijskih do dekorativnih elemenata.
            </p>
            <a href="service.php">
              Vidi više
            </a>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="images/s-2.jpg" alt="" />
          </div>
          <div class="detail-box">
            <h6>
              Strojna obrada
            </h6>
            <p>
              Precizna strojna obrada metala, uključujući tokarenje, glodanje i bušenje, osiguravajući visoku točnost i kvalitetu finalnog proizvoda.
            </p>
            <a href="service.php">
              Vidi više
            </a>
          </div>
        </div>
        <div class="box b3">
          <div class="img-box">
            <img src="images/s-3.jpg" alt="" />
          </div>
          <div class="detail-box">
            <h6>
              Ugradnja stolarije
            </h6>
            <p>
              Profesionalna ugradnja metalne i druge stolarije, osiguravajući stabilnost, dugovječnost i estetsku usklađenost s vašim objektom.
            </p>
            <a href="service.php">
              Vidi više
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Što kažu naši klijenti
        </h2>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="detail-box">
                <h4>
                  Marko Marić
                </h4>
                <p>
                  Izvrsna suradnja na projektu metalnih konstrukcija. Precizni, brzi i pouzdani.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="detail-box">
                <h4>
                  Ana Kovač
                </h4>
                <p>
                  Sve pohvale za strojnu obradu dijelova. Kvaliteta je na najvišoj razini.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="detail-box">
                <h4>
                  Ivan Horvat
                </h4>
                <p>
                  Vrlo profesionalna usluga i vrhunska izrada. Toplo preporučujem <?php echo SITE_NAME; ?> za sve bravarske radove.
                </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- metal section -->

  <section class="metal_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <h2>
          Izrađujemo <br />
          vrhunske<br />
          metalne <br />
          proizvode
        </h2>
        <a href="contact.php">
          Zatražite ponudu
        </a>
      </div>
    </div>
  </section>

  <!-- end metal section -->

<?php
$extra_js = '<!-- lightbox2 js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>';
include 'includes/footer.php';
?>
