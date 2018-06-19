
<?php get_header(); ?>
<div class="container my-5">

  <?php if(is_search()) { ?>

    <h1><?php esc_html_e( 'Results for:', 'comune'); ?> <?php echo $s; ?></h1>

  <?php } else if(is_category() || is_tag() ) { ?>

    <h1><?php echo single_cat_title(); ?></h1>

  <?php } else { ?>

    <h1><?php bloginfo('description');?></h1>

  <?php } ?>


</div>


<main class="container">

  <div class="row">
    <div class="col-sm-8">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p> <?php the_time('j M Y'); ?> - <?php the_category(', ');?></p>

            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('comune_single', array( 'class' => 'img-fluid mb-4', 'alt' => get_the_title() ))?>
            </a>

            <?php the_excerpt(); ?>

        </article>

        <hr class="my-5">

      <?php endwhile; ?>

       <div class="pagination">

        <?php
        global $wp_query;

        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
        	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        	'format' => '?paged=%#%',
        	'current' => max( 1, get_query_var('paged') ),
        	'total' => $wp_query->max_num_pages
        ) );
        ?>

      </div>



      <?php else: ?>

        <p><?php esc_html_e('Sorry, no post matched your criteria.', 'nx'); ?></p>

      <?php endif; ?>

    </div>

    <?php get_sidebar(); ?>

  </div>

</main>


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
