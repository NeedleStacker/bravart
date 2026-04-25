  <!-- info section -->
    <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="info_logo">
            <a class="navbar-brand" href="index.php">
              <img src="images/info-logo.png" alt="" />
              <span>
                <?php echo SITE_NAME; ?>
              </span>
            </a>
            <p>
              <?php echo SITE_NAME; ?> - Vaš stručnjak za ALU i kovane ograde, nadstrešnice te moderne metalne konstrukcije.
            </p>
          </div>
        </div>
        <div class="col-md-6">
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
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <?php echo date("Y"); ?> <a href="copyright.php">Sva prava pridržana</a>. <?php echo SITE_NAME; ?>, obrt za bravarske usluge, vl. <?php echo OWNER_NAME; ?>
    </p>
  </footer>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <?php if (isset($extra_js)) echo $extra_js; ?>
</body>

</html>
