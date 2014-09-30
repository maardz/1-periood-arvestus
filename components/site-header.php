<header id="site-header">
  <div class="site-title">
    <h1><?php echo $site_title; ?></h1>
  </div>

  <nav class="menu-main">
    <ul class="menu">
      <?php foreach ($menu_main as $key => $value) { ?>
        <li><a href="<?php echo $value; ?>"><?php echo $key; ?></a></li>
      <?php
      } ?>
    </ul>
  </nav>
</header>
