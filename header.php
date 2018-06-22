<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description') ;?>">

  <?php wp_head() ?>

</head>
<body <?php body_class(); ?>>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Nome amministrazione afferente</a>
      <div data-megamenu-class="Megamenu-area">
                      <a data-megamenu-class="Button u-border-none u-color-95 u-background-compl u-text-r-xxs" href="#">Accedi</a>
                  </div>
    </div>
  </nav>
  <div class="header">
    <div class="container py-5">
      <div class="row">
        <div class="col-8 col-md-6">
          <div class="media header-title">
            <img class="img-fluid mr-3" data-src="holder.js/64x64" alt="75x80" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1619948f286%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1619948f286%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213%22%20y%3D%2236.8%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            <div class="media-body">
              <h1 class="display-3">Nome della Pubblica Amministrazione</h1>
              <small>sit amet nibh libero</small>
            </div>
          </div>

        </div>
        <div class="col-4 d-block d-sm-block d-md-none text-right align-middle">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#searchForm" aria-controls="searchForm" aria-expanded="false" aria-label="Toggle navigation">
            <i class="it-search"></i>
          </button>
        </div>
        <div class="col-12 col-md-6">
          <div class="navbar-expand-md header-utils">
            <div class="header-social text-right">
              <ul class="list-inline">
                <li class="list-inline-item">Seguici su</li>
                <li class="list-inline-item"><a href=""><i class="it-facebook"></i><span class="sr-only">Facebook</span></a></li>
                <li class="list-inline-item"><a href=""><i class="it-twitter"></i><span class="sr-only">Twitter</span></a></li>
                <li class="list-inline-item"><a href=""><i class="it-youtube"></i><span class="sr-only">Youtube</span></a></li>
              </ul>
            </div>
            <form class="form-inline my-2 my-lg-0 collapse navbar-collapse" action="<?php echo esc_url_raw(home_url()); ?> "method="get" id="searchForm">
              <input class="form-control mr-sm-2 ml-auto" type="text" placeholder="Cerca" aria-label="Search" name="s">
              <button class="btn btn-primary my-2 my-sm-0" type="submit">Cerca</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        wp_nav_menu([
          'menu'            => 'header',
          'theme_location'  => 'header',
          'container'       => 'div',
          'container_id'    => 'bs4navbar',
          'container_class' => 'collapse navbar-collapse',
          'menu_id'         => false,
          'menu_class'      => 'navbar-nav mr-auto',
          'depth'           => 2,
          'fallback_cb'     => 'bs4navwalker::fallback',
          'walker'          => new bs4navwalker()
        ]);
        ?>

      </div>
    </nav>
  </div>
