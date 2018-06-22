<?php get_header(); ?>

<main class="container mt-5">

  <div class="row">
    <div class="col-sm-8">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>

            <h1 class="display-4"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?><a/></h1>
            <p> <?php the_time('j M Y'); ?> - <?php the_category(', ');?></p>

            <?php the_post_thumbnail('comune_single', array( 'class' => 'img-fluid mb-4', 'alt' => get_the_title() ))?>

            <?php the_content(); ?>

            <?php wp_link_pages('pagelink=Page %'); ?>

            <?php the_tags(); ?>

          </article>

            <hr>


        </article>

      <?php endwhile; else: ?>

        <p><?php esc_html_e('Sorry, no post matched your criteria.', 'comune'); ?></p>

      <?php endif; ?>

    </div>

    <?php get_sidebar(); ?>

  </div>

</main>

<?php get_footer(); ?>
