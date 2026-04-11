  <!-- info section -->
    <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_logo">
            <a class="navbar-brand" href="index.php">
              <img src="images/info-logo.png" alt="" />
              <span>
                BravArt
              </span>
            </a>
            <p>
              BravArt - Vaš pouzdan partner za bravarske usluge, metalne konstrukcije i strojnu obradu metala.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_links">
            <h5>
              Korisne poveznice
            </h5>
            <ul>
              <li>
                <a href="index.php">
                  Početna
                </a>
              </li>
              <li>
                <a href="about.php">
                  O nama
                </a>
              </li>
              <li>
                <a href="service.php">
                  Usluge
                </a>
              </li>
              <li>
                <a href="product.php">
                  Proizvodi
                </a>
              </li>
              <li>
                <a href="contact.php">
                  Kontakt
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_info">
            <h5>
              Kontaktirajte nas
            </h5>
            <p>
              Posavska 33,<br>
              Brodski Varoš,<br>
              Hrvatska
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <?php echo date("Y"); ?> <a href="copyright.php">Sva prava pridržana</a>. BravArt, obrt za bravarske usluge, vl. Matej Sarić
    </p>
  </footer>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <?php if (isset($extra_js)) echo $extra_js; ?>
</body>

</html>
