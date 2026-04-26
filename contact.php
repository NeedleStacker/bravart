<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$active_page = 'contact';
$page_title = 'Kontakt';
$meta_description = 'Kontaktirajte BravArt za upite o metalnim konstrukcijama, strojnoj obradi ili ugradnji stolarije. Tu smo za vas.';
$body_class = 'sub_page';
include 'includes/captcha_helper.php';
$captcha_question = getCaptchaQuestion();
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
            <form id="contactForm">
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
                  <div class="captcha-container" style="margin-bottom: 15px;">
                    <label for="captcha" id="captchaLabel">Koliko je <?php echo $captcha_question; ?> (upiši slovima)</label>
                    <input type="text" name="captcha" id="captcha" placeholder="Odgovor slovima" required />
                  </div>
                  <div id="formResponse" style="margin-bottom: 15px; display: none; padding: 10px; border-radius: 5px;"></div>
                  <div class=" ">
                    <button type="submit" id="submitBtn">
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

<?php
$extra_js = '
<script>
$(document).ready(function() {
    $("#contactForm").on("submit", function(e) {
        e.preventDefault();

        var form = $(this);
        var submitBtn = $("#submitBtn");
        var responseDiv = $("#formResponse");

        submitBtn.prop("disabled", true).text("Slanje...");
        responseDiv.fadeOut();

        $.ajax({
            type: "POST",
            url: "send_mail.php",
            data: form.serialize(),
            dataType: "json",
            success: function(response) {
                responseDiv.text(response.message).fadeIn();
                if (response.status === "success") {
                    responseDiv.css({"background-color": "#d4edda", "color": "#155724", "border": "1px solid #c3e6cb"});
                    form[0].reset();
                } else {
                    responseDiv.css({"background-color": "#f8d7da", "color": "#721c24", "border": "1px solid #f5c6cb"});
                }

                if (response.new_captcha) {
                    $("#captchaLabel").text("Koliko je " + response.new_captcha + " (upiši slovima)");
                    $("#captcha").val("");
                }
            },
            error: function(xhr) {
				console.log("STATUS:", xhr.status);
				console.log("RESPONSE:", xhr.responseText);
			},
            complete: function() {
                submitBtn.prop("disabled", false).text("Pošalji");
            }
        });
    });
});
</script>
';
include 'includes/footer.php';
?>
