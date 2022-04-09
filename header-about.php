<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/css/about.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body>


  <!-- header -->


  <header class="top">
    <nav class="nav__bar">
      <div class="content">



        <!-- logo -->
        <div class="logo"><a href="<?php echo site_url(); ?>">
      <img src="<?php  echo get_template_directory_uri(); ?>/images/logo-lifelurk.svg" alt="lifelurks's logo">
      </a></div>


        <!-- navigation -->
        <!-- <ul class="nav__list">

          <li><a href="#">Home</a></li>
          <li><a href="#">Blog</a></li>
          <li class="nav__topics">
            <a href="#">Topics</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-caret-down-fill" viewBox="0 0 16 16">
              <path
                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
            </svg>
            <ul class="nav__hoverList">
              <li><a href="#">Home</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Course up </a></li>
            </ul>
          </li>

        </ul> -->


        <?php wp_nav_menu(
          array(
            'theme_location'=> 'header-menu',
            'menu_class' => 'nav__list'
          )
        ) ?>


        <!-- search -->

        <div class="search__container">
          <div class="search__box">
            <input type="text" placeholder="Type Here">
          </div>
          <label class="search__icon" for="">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-search"
              viewBox="0 0 16 16">
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </label>
        </div>

        <!-- menu icon -->

        <div class="menu__container">


          <div class="menu__button">
            <div class="menu__line1"></div>
            <div class="menu__line2"></div>
            <div class="menu__line3"></div>
          </div>


          <div class="cancel__button">
            <div class="cancel__line1"></div>
            <div class="cancel__line2"></div>
          </div>

        </div>





        <div class="hero__click">

          <div class="hero__click__wrapper">

          <?php wp_nav_menu(
          array(
            'theme_location'=> 'full-menu',
            'menu_class' => 'nav__mobi__list'
          )
          ) ?>

            <!-- <ul class="nav__mobi__list">

              <li><a href="#">Home</a></li>
              <li><a href="#">Blog</a></li>
              <li class="nav__mobi__topics">

                <a href="#">Topics</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                  <path
                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg>
                <ul class="nav__mobi__hoverList">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Course up </a></li>
                </ul>
              </li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">About</a></li>

              <li class="nav__mobi__topics">
                <a href="#">Topics</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                  <path
                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg>
                <ul class="nav__mobi__hoverList">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Blog</a></li>
                </ul>
              </li>

            </ul> -->

          </div>

        </div>

      </div>
    </nav>
    </header>
