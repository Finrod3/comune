<?php get_header(); ?>

<div class="hero hero-fluid">
<div class="container">
  <h1 class="hero-heading display-4">Lorem Ipsum</h1>
  <p class="lead">Qui ipsorum lingua Celtae, nostra Galli appellantur.</p>
  <hr class="my-4">
  <p>Quid securi etiam tamquam eu fugiat nulla pariatur. Quae vero auctorem tractata ab fiducia dicuntur. Excepteur sint obcaecat cupiditat non proident culpa. Gallia est omnis divisa in partes tres, quarum. Plura mihi bona sunt, inclinet, amari petere vellent.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Per saperne di più</a>
  </p>
</div>
<a href="#section1" data-attribute="forward" class="forward mt-3" aria-hidden="true">
  <i class="it-expand"></i>
</a>
</div>

<main role="main">
<section id="section1">
  <div class="container py-5">
    <h2>a est rerum</h2>
    <div class="row">
      <div class="col-md">
        <h3 class="display-4 mt-3">Lorem Ipsum</h3>
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Ut enim ad minim veniam, quis nostrud exercitation.</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Qui ipsorum lingua Celtae, nostra Galli appellantur.</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Quam temere in vitiis, legem sancimus haerentia. Non equidem invideo, miror magis posuere velit aliquet.</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Gallia est omnis divisa in partes tres, quarum.</a>
        </div>
      </div>
      <div class="col-md">
        <h3 class="display-4 mt-3">Lorem Ipsum</h3>
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Quam temere in vitiis, legem sancimus haerentia. Non equidem invideo, miror magis posuere velit aliquet.</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">At nos hinc posthac, sitientis piros Afros.</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Qui ipsorum lingua Celtae, nostra Galli appellantur.</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Gallia est omnis divisa in partes tres, quarum.</a>
        </div>
      </div>
      <div class="col-md">
        <h3 class="display-4 mt-3">Lorem Ipsum</h3>
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action list-group-item-success">Ullamco laboris nisi ut aliquid ex ea commodi consequat.</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success">Qui ipsorum lingua Celtae, nostra Galli appellantur.</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success">Ut enim ad minim veniam, quis nostrud exercitation.</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success">At nos hinc posthac, sitientis piros Afros.</a>
        </div>
      </div>
    </div>
    <div class="card-deck mt-3">
      <div class="card bg-primary">
        <div class="card-body">
          <a href="#" class="card-link text-white">Lorem Ipsum</a>
        </div>
      </div>
      <div class="card bg-primary">
        <div class="card-body">
          <a href="#" class="card-link text-white">Lorem Ipsum</a>
        </div>
      </div>
      <div class="card bg-primary">
          <div class="card-body">
            <a href="#" class="card-link text-white">Lorem Ipsum</a>
          </div>
      </div>
      <div class="card bg-primary">
          <div class="card-body">
            <a href="#" class="card-link text-white">Lorem Ipsum</a>
          </div>
      </div>
    </div>
  </div>
  <a href="#section2" data-attribute="forward" class="forward mt-3" aria-hidden="true">
    <i class="it-expand"></i>
  </a>
</section>




<section id="section2" class="bg-100">
  <div class="container py-5">
    <h2>News</h2>
<div class="card-deck">
        <?php

      /*News section
      -------------------------------------*/
      $comune_the_query = new WP_Query( 'category_name=news&posts_per_page=3' );

      // Il Loop
      while ( $comune_the_query->have_posts() ) :
        $comune_the_query->the_post(); ?>



          <div class="card">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('comune_single', array( 'class' => 'img-fluid mb-2', 'alt' => get_the_title() ))?>
            </a>
        <!-- <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22383%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20383%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1619a1005dc%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A19pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1619a1005dc%22%3E%3Crect%20width%3D%22383%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22142.91666793823242%22%20y%3D%2298.7%22%3E383x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> -->
        <div class="card-body">
          <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
          <div class="card-text"><?php the_excerpt(); ?></div>
          <p class="card-text"><small class="text-muted"><?php the_time('j M Y'); ?></small></p>
        </div>

      </div>


      <?php endwhile;

      // Ripristina Query & Post Data originali
      wp_reset_query();
      wp_reset_postdata(); ?>
      </section>
      </div>
    </div>
  </div>




  <a href="#section3" data-attribute="forward" class="forward mt-3" aria-hidden="true">
    <i class="it-expand"></i>
  </a>
</section>

<section id="section3">
  <div class="container py-5">
    <h2>a est rerum</h2>
    <div id="collapseDiv1" class="collapse-div" role="tablist">
      <div class="collapse-header" id="heading1">
        <button data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
          Collapsible Group Item #1
        </button>
      </div>
      <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1">
        <div class="collapse-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
        </div>
      </div>
      <div class="collapse-header" id="heading2">
        <button data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
          Collapsible Group Item #2
        </button>
      </div>
      <div id="collapse2" class="collapse show" role="tabpanel" aria-labelledby="heading2">
        <div class="collapse-body">
          Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
      <div class="collapse-header" id="heading3">
        <button data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
          Collapsible Group Item #3
        </button>
      </div>
      <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
        <div class="collapse-body">
          Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        </div>
      </div>
    </div>
  </div>
</section>
</main><!-- /.container -->



<?php get_footer(); ?>
