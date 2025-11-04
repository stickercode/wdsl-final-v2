<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Blogs | Drifting Diaries</title>
  <link rel="stylesheet" href="/WDSL/allblogs.css">
  <link rel="stylesheet" href="/WDSL/style.css">
</head>
<body>

  <!-- === HEADER === -->
  <header id="navbar">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/WDSL/navbar.php'); ?>
  </header>

  <!-- === ALL BLOGS SECTION === -->
  <section id="all-blogs-section">
    <h2 class="section-title">All Blogs</h2>
    <p class="about-text">Explore travel stories and adventures from across the globe.</p>

    <!-- 🌏 ASIA -->
    <div class="continent">
      <h3>🌏 Asia</h3>

      <!-- Philippines -->
      <div class="country">
        <h4>🇵🇭 Philippines</h4>
        <div class="blog-list">

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
            <h3 class="blog-title">Ilocos Norte & Vigan: A Journey Through Time and Wind</h3>
            </a>
          </div>
        </div>
      </div>

      <!-- Japan -->
      <div class="country">
        <h4>🇯🇵 Japan</h4>
        <div class="blog-list">
          <div class="blog-card">
            <img src="/WDSL/Assets/Pictures/tokyo-tn.jpg" alt="tokyo" class="blog-image">
            <a href="/WDSL/Blogs/JP_Tokyo.php">
              <h3 class="blog-title">Tokyo: The Heart of Japan</h3>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 🌍 AFRICA -->
    <div class="continent">
      <h3>🌍 Africa</h3>

      <div class="country">
        <h4>🇳🇬 Nigeria</h4>
        <div class="blog-list">
          <div class="blog-card">
            <img src="/WDSL/Assets/Pictures/abuja-tn.jpg" alt="abuja" class="blog-image">
            <a href="/WDSL/Blogs/NG_Abuja.php">
              <h3 class="blog-title">Abuja: Gateway to Nigeria’s Wonders</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
