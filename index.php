<?php
$active_page = 'index';
$page_title = 'Početna';
$meta_description = 'Vrhunske bravarske usluge, ALU i kovane ograde, nadstrešnice i metalne konstrukcije u Slavonskom Brodu. BravArt - vaš pouzdan partner.';
include 'includes/header.php';
?>
    <!-- slider section -->
    <section class=" slider_section ">
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
              ALU i kovane ograde
            </h6>
            <p>
              Izrada i montaža modernih aluminijskih i tradicionalnih kovanih ograda koje pružaju sigurnost i estetsku vrijednost vašem domu.
            </p>
            <a href="service.php">
              Vidi više
            </a>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="images/s-3.jpg" alt="" />
          </div>
          <div class="detail-box">
            <h6>
              Nadstrešnice i konstrukcije
            </h6>
            <p>
              Projektiranje i izrada izdržljivih metalnih nadstrešnica i konstrukcija po mjeri, savršeno prilagođenih vašem prostoru.
            </p>
            <a href="service.php">
              Vidi više
            </a>
          </div>
        </div>
        <div class="box b3">
          <div class="img-box">
            <img src="images/s-5.jpg" alt="" />
          </div>
          <div class="detail-box">
            <h6>
              Staklene ograde
            </h6>
            <p>
              Elegantna rješenja sa staklenim ogradama za balkone, terase i stubišta, kombinirajući moderan dizajn i maksimalnu sigurnost.
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
                  Sve pohvale za izradu i montažu ograde. Kvaliteta je na najvišoj razini, a dizajn je moderan i upravo ono što smo željeli.
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
