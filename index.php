<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/WDSL/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drifting Diaries | Home</title>
</head>
<body>
  <!-- === HEADER / NAVBAR === -->
  <header id="navbar">
          <!-- Nav Bar -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/WDSL/navbar.php'); ?>
  </header>

  <!-- === SLIDESHOW SECTION === -->
<section class="banner">
  <div class="slides">
    <img src="/WDSL/Assets/Banner/baguio.jpg" alt="baguio" class="slide">
    <img src="/WDSL/Assets/Banner/tokyo.jpg" alt="tokyo" class="slide">
    <img src="/WDSL/Assets/Banner/palawan.jpg" alt="palawan" class="slide">
    <img src="/WDSL/Assets/Banner/abuja.jpg" alt="abuja" class="slide">
    <img src="/WDSL/Assets/Banner/paris.jpg" alt="paris" class="slide">
  </div>

  <!-- Overlay Text (Fixed Position) -->
  <div class="banner-overlay">
    <h1 class="banner-tagline">Drift through places. Discover yourself.</h1>
    
  </div>
</section>

   <!-- === ABOUT SECTION === -->


  <section id="about-section">
    <h2 class="section-title">About Drifting Diaries</h2>
    <p class="about-text">
      Drifting Diaries is a travel blog capturing stories, culture, and breathtaking destinations 
      across the world. From serene beaches to bustling cities — each entry is a heartfelt journey 
      through places that inspire wanderlust and discovery.
    
      <br><br>
      We created this page to capture and preserve the memories of our journeys — not only as a way to look back on the places we’ve been, but also to inspire others to seek their own adventures. 
      Traveling has always been our way of learning, bonding, and finding beauty in both the grand and the simple things. 
      Through this blog, we aim to share those experiences honestly and creatively, giving our readers a glimpse into what travel means to us beyond the photos — 
      the laughter, the surprises, and even the little challenges that make each trip unforgettable.
    </p>

    
  </section>
  <br>
<hr><hr>
  <!-- === FEATURED BLOGS SECTION === -->
  <section id="destinations-section">
    <h2 class="section-title">Featured Spots</h2>

    <div class="blog-list">
      <div class="blog-card">
        <img src="/WDSL/Assets/Pictures/abuja-tn.jpg" alt="abuja" class="blog-image">
        <a href="/WDSL/Blogs/NG_Abuja.php">
          <h3 class="blog-title">Abuja: Gateway to Nigeria’s Wonders</h3>
        </a>
      </div>

      <div class="blog-card">
        <img src="/WDSL/Assets/Pictures/tokyo-tn.jpg" alt="tokyo" class="blog-image">
        <a href="/WDSL/Blogs/JP_Tokyo.php">
          <h3 class="blog-title">Japan: The Land of the Rising Sun</h3>
        </a>
      </div>

      <div class="blog-card">
        <img src="/WDSL/Assets/Pictures/baguio-tn.jpg" alt="baguio" class="blog-image">
        <a href="/WDSL/Blogs/PH_Baguio.php">
          <h3 class="blog-title">Baguio: City of Pines</h3>
        </a>
      </div>

      <div class="blog-card">
        <img src="/WDSL/Assets/Pictures/palawan-tn.webp" alt="palawan" class="blog-image">
        <a href="/WDSL/Blogs/PH_Palawan.php">
          <h3 class="blog-title">Palawan: The Tropical Escape</h3>
        </a>
      </div>

      <div class="blog-card">
        <img src="/WDSL/Assets/Pictures/ilocosnorte-tn.jpg" alt="ilocosNorte" class="blog-image">
        <a href="/WDSL/Blogs/PH_IlocosNorte.php">
          <h3 class="blog-title">Ilocos Norte</h3>
        </a>
      </div>

      <div class="blog-card">
        <img src="/WDSL/Assets/Pictures/palawan-tn.webp" alt="palawan" class="blog-image">
        <a href="/WDSL/Blogs/PH_Palawan.php">
          <h3 class="blog-title">Palawan: The Tropical Escape</h3>
        </a>
      </div>

      <div class="blog-card">
        <img src="/WDSL/Assets/Pictures/palawan-tn.webp" alt="palawan" class="blog-image">
        <a href="/WDSL/Blogs/PH_Palawan.php">
          <h3 class="blog-title">Palawan: The Tropical Escape</h3>
        </a>
      </div>

    </div>
  </section>

 
  <footer>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/WDSL/footer.php'); ?>
  </footer>


</body>
</html>
