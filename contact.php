<?php
$active_page = 'contact';
$page_title = 'Kontakt';
$meta_description = 'Kontaktirajte BravArt za upite o metalnim konstrukcijama, strojnoj obradi ili ugradnji stolarije. Tu smo za vas.';
$body_class = 'sub_page';
include 'includes/header.php';
?>
  </div>

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Javite nam se
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-6 ">
            <form action="send_mail.php" method="POST">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" name="name" placeholder="Ime i prezime" required />
                  </div>
                  <div>
                    <input type="email" name="email" placeholder="E-mail" required />
                  </div>
                  <div>
                    <input type="text" name="phone" placeholder="Broj telefona" />
                  </div>
                  <div class="">
                    <input type="text" name="message" placeholder="Poruka" class="message_input" required />
                  </div>
                  <!-- Honeypot field -->
                  <div style="display:none;">
                    <input type="text" name="website" placeholder="Leave this field empty" />
                  </div>
                  <div class=" ">
                    <button type="submit">
                      Pošalji
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.6420579633845!2d17.978875576856015!3d45.1538356541604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475dc39f280e2277%3A0x6b7727187c2c0926!2sPosavska%20ul.%2033%2C%2035000%2C%20Slavonski%20Brod%2C%20Croatia!5e0!3m2!1sen!2shr!4v1715850000000!5m2!1sen!2shr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

<?php include 'includes/footer.php'; ?>
