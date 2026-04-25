<?php
$active_page = 'about';
$page_title = 'O nama';
$meta_description = 'Saznajte više o BravArt obrtu, našoj viziji i predanosti vrhunskoj kvaliteti u izradi ograda i metalnih konstrukcija.';
$body_class = 'sub_page';
include 'includes/header.php';
?>
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2><span>O</span> <?php echo SITE_NAME; ?>-u</h2>
      </div>
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="images/about-img.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <h3>
              Naša priča
            </h3>
            <p>
              <?php echo SITE_NAME; ?> je moderan obrt osnovan 2024. godine, vođen strašću prema metalu i željom za stvaranjem vrhunskih proizvoda. Smješteni u Brodskom Varošu, specijalizirani smo za izradu i montažu visokokvalitetnih ograda i metalnih konstrukcija.
            </p>
            <p>
              Vlasnik <?php echo OWNER_NAME; ?> osobno nadgleda svaki projekt, osiguravajući da svaki detalj zadovoljava najviše standarde kvalitete. Naša vizija je spojiti funkcionalnost i moderan dizajn, koristeći najnovije tehnike u obradi aluminija i čelika.
            </p>
            <p>
              Specijalizirani smo za ALU ograde koje ne zahtijevaju održavanje, tradicionalne kovane ograde, moderne staklene ograde te izradu čvrstih nadstrešnica i konstrukcija po mjeri. Iako smo novi na tržištu, naša predanost i preciznost već su prepoznati od strane naših klijenata. Cilj nam je postati vaš prvi izbor za moderna i trajna rješenja od metala.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

<?php include 'includes/footer.php'; ?>
