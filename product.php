<?php
$active_page = 'product';
$page_title = 'Proizvodi';
$meta_description = 'Pregledajte naše proizvode - od industrijskih metalnih elemenata do unikatnih bravarskih rješenja.';
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
        <?php
        $dir = "images/products/";
        $images = glob($dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

        foreach($images as $image) {
            $filename = basename($image);
            // Remove leading numbers, extensions and replace underscores with spaces
            $title = preg_replace('/^\d+/', '', $filename);
            $title = pathinfo($title, PATHINFO_FILENAME);
            $title = str_replace('_', ' ', $title);
            $title = ucfirst($title);

            echo '<div class="box">';
            echo '  <a href="' . $image . '" data-lightbox="gallery" data-title="' . $title . '">';
            echo '    <img src="' . $image . '" alt="' . $title . '" />';
            echo '  </a>';
            echo '</div>';
        }
        ?>
      </div>

    </div>
  </section>

  <!-- end product section -->

<?php
$extra_js = '<!-- lightbox2 js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>';
include 'includes/footer.php';
?>
