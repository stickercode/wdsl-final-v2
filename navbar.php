<?php
// --- compute $base so links are correct whether site is /WDSL or at server root ---
// e.g. $_SERVER['SCRIPT_NAME'] => "/WDSL/Blogs/allblogs.php"
$script = $_SERVER['SCRIPT_NAME'] ?? '';
$parts = array_values(array_filter(explode('/', $script))); // remove empty parts

$base = ''; // default = site at server root
if (count($parts) >= 1) {
  // if first segment contains a dot (index.php) it's not a folder -> treat as root
  if (strpos($parts[0], '.') === false) {
    // first segment is a folder name -> use it as base (/WDSL)
    $base = '/' . $parts[0];
  }
}

?>
<link rel="stylesheet" href="/WDSL/style.css">
<div id="logo">
  <h1 class="site-title"><a href="<?php echo $base ?: '/'; ?>/index.php">DRIFTING DIARIES</a></h1>
</div>

<nav id="nav-links">
  <ul class="menu">
    <li class="menu-item"><a href="<?php echo $base ?: '/'; ?>/index.php">Home</a></li>

    <li class="menu-item mega-dropdown">
      <a href="#" id="destinations-link">Destinations ▾</a>
      <div class="mega-menu">
        <div class="continent">
          <h4>Asia</h4>
          <ul>
            <li><strong>Philippines</strong>
              <ul>
                <li><a href="<?php echo $base; ?>/Blogs/PH_Baguio.php">Baguio</a></li>
                <li><a href="<?php echo $base; ?>/Blogs/PH_Palawan.php">Palawan</a></li>
                <li><a href="<?php echo $base; ?>/Blogs/PH_IlocosNorte.php">Ilocos Norte</a></li>
              </ul>
            </li>
            <li><strong>Japan</strong>
              <ul>
                <li><a href="<?php echo $base; ?>/Blogs/JP_Tokyo.php">Tokyo</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="continent">
          <h4>Africa</h4>
          <ul>
            <li><strong>Nigeria</strong>
              <ul>
                <li><a href="<?php echo $base; ?>/Blogs/NG_Abuja.php">Abuja</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="continent">
          <h4>Europe</h4>
          <ul>
            <li><strong>France</strong>
              <ul>
                <li><a href="#">Paris</a></li>
              </ul>
            </li>
            <li><strong>Italy</strong>
              <ul>
                <li><a href="#">Rome</a></li>
                <li><a href="#">Venice</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </li>

    <li class="menu-item"><a href="<?php echo $base; ?>/allblogs.php">Blogs</a></li>
    <li class="menu-item"><a href="<?php echo $base; ?>/about.php">About</a></li>
    <li class="menu-item"><a href="<?php echo $base; ?>/contacts.php">Contact</a></li>
  </ul>
</nav>