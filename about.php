<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About | Drifting Diaries</title>
  <link rel="stylesheet" href="style.css">
  <style>
    :root {
      --forest-green: #2E4E36;
      --light-cream: #FAF8F3;
      --coffee-brown: #8C6A4F;
      --sky-blue: #7FA8A2;
      --warm-red: #C44B4B;
      --black: #0B0B0B;
      --white: #FFFFFF;
    }

    body {
      margin: 0;
      font-family: "Merriweather", serif;
      background-color: var(--light-cream);
      color: var(--forest-green);
      line-height: 1.8;
    }
    /* === ABOUT SECTION === */
    .about-container {
      max-width: 900px;
      margin: 80px auto;
      background-color: var(--white);
      padding: 50px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .about-container h1 {
      text-align: center;
      color: var(--forest-green);
      font-family: "Playfair Display", serif;
      font-size: 36px;
      margin-bottom: 25px;
    }

    .about-container p {
      color: var(--coffee-brown);
      font-size: 18px;
      text-align: justify;
      margin-bottom: 18px;
    }

    .about-container em {
      color: var(--warm-red);
      font-style: normal;
      font-weight: 600;
    }

   

    html {
      scroll-behavior: smooth;
    }  
    
  </style>
</head>

<body>
  <!-- === NAVBAR === -->
  <header id="navbar">
    <?php include('./navbar.php'); ?>
  </header>

  <section class="about-container">
    <h1>About Drifting Diaries</h1>

    <p>
      Welcome to <em>DRIFTING DIARIES</em> — a digital scrapbook of adventures, stories, and memories shared by a group of friends who simply love to explore. 
      This website is more than just a collection of travel guides or itineraries; it’s a heartfelt space where each of us shares our personal experiences, 
      from spontaneous road trips to carefully planned getaways. Every story here comes from a unique perspective — the quiet observer who loves mountain views, 
      the foodie who never misses a local delicacy, the thrill-seeker chasing hidden waterfalls, and the storyteller who turns moments into memories.
    </p>

    <p>
      We created this page to capture and preserve the memories of our journeys — not only as a way to look back on the places we’ve been, but also to inspire others to seek their own adventures. 
      Traveling has always been our way of learning, bonding, and finding beauty in both the grand and the simple things. 
      Through this blog, we aim to share those experiences honestly and creatively, giving our readers a glimpse into what travel means to us beyond the photos — 
      the laughter, the surprises, and even the little challenges that make each trip unforgettable.
    </p>

    <p>
      This page is about connection, curiosity, and storytelling. 
      It’s where we document not just where we go, but how each destination changes us in small but meaningful ways. 
      Whether you’re here for travel tips, inspiration, or just to read about real experiences from real people, 
      we hope our stories remind you that every journey — big or small — has its own magic waiting to be discovered.
    </p>
  </section>

  <footer>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/WDSL/footer.php'); ?>
  </footer>
</body>
</html>
