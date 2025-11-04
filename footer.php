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

<p>© 2025 Drifting Diaries. All rights reserved.</p>