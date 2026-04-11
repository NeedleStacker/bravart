<?php
$active_page = 'product';
$page_title = 'Proizvodi';
$body_class = 'sub_page';
$extra_css = '<!-- lightbox2 css -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />';
include 'includes/header.php';
?>
  </div>

  <!-- product section -->
  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Naši proizvodi
        </h2>
      </div>
      <div class="product_container">
        <div class="box">
          <a href="images/p-1.jpg" data-lightbox="gallery" data-title="Proizvod 1">
            <img src="images/p-1.jpg" alt="" />
          </a>
        </div>
        <div class="box">
          <a href="images/p-2.jpg" data-lightbox="gallery" data-title="Proizvod 2">
            <img src="images/p-2.jpg" alt="" />
          </a>
        </div>
        <div class="box">
          <a href="images/p-3.jpg" data-lightbox="gallery" data-title="Proizvod 3">
            <img src="images/p-3.jpg" alt="" />
          </a>
        </div>
        <div class="box">
          <a href="images/p-4.jpg" data-lightbox="gallery" data-title="Proizvod 4">
            <img src="images/p-4.jpg" alt="" />
          </a>
        </div>
        <div class="box">
          <a href="images/p-5.jpg" data-lightbox="gallery" data-title="Proizvod 5">
            <img src="images/p-5.jpg" alt="" />
          </a>
        </div>
        <div class="box">
          <a href="images/p-6.jpg" data-lightbox="gallery" data-title="Proizvod 6">
            <img src="images/p-6.jpg" alt="" />
          </a>
        </div>
        <div class="box">
          <a href="images/p-7.jpg" data-lightbox="gallery" data-title="Proizvod 7">
            <img src="images/p-7.jpg" alt="" />
          </a>
        </div>
        <div class="box">
          <a href="images/p-8.jpg" data-lightbox="gallery" data-title="Proizvod 8">
            <img src="images/p-8.jpg" alt="" />
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- end product section -->

<?php
$extra_js = '<!-- lightbox2 js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>';
include 'includes/footer.php';
?>
