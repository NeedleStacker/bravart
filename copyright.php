<?php
require_once 'includes/config.php';
$active_page = '';
$page_title = 'Sva prava pridržana';
$body_class = 'sub_page';
include 'includes/header.php';
?>

  </div> <!-- End hero_area from header -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Sva prava pridržana</h2>
      </div>
      <div class="detail-box">
        <p>
          Sadržaj ove web stranice, uključujući tekstove, slike, logotipe i grafička rješenja, zaštićen je autorskim pravima.
          Vlasnik svih prava je <?php echo SITE_NAME; ?>, obrt za bravarske usluge, vl. <?php echo OWNER_NAME; ?>.
        </p>
        <p>
          Zabranjeno je svako neovlašteno kopiranje, reproduciranje ili distribucija materijala s ove stranice bez prethodnog pisanog dopuštenja vlasnika.
        </p>
        <p>
          Korištenjem ove web stranice pristajete na navedene uvjete.
        </p>
        <div class="btn-box">
          <a href="index.php">Povratak na početnu</a>
        </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
