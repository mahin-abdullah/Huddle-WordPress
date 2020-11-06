<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
</head>
<body>

<div class="wrapper">
      <header>
        <div class="container row-sm">
          <a class="logo" href="<?php echo site_url(); ?>">
            <img src="<?php echo get_theme_file_uri('/images/logo.svg'); ?>" alt="Logo of Huddle" />
          </a>

          <nav class="nav">
            <ul class="nav__list">
              <li class="nav__item">
                <a class="nav__link nav__link--btn" href="#">Try it Free</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>