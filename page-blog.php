
<?php
/**
 * The template for displaying posts
 *
 * This is the template that displays all posts' pagination by default.
 * Please note that it uses the new header.
 **/

get_header(); ?>

<div class="new-container">
  <?php

  get_template_part( 'blog', 'hero' );

  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

  $args = array( 'posts_per_page' => 6, 'paged' => $paged, 'post_type' => 'post' );
  $posts = new WP_Query( $args );

  if ( $posts->have_posts() ) :
    while ( $posts->have_posts() ) : $posts->the_post(); ?>
    <div class="blog-post">
      <?php the_post_thumbnail(); ?>
      <h3 class="blog-post--title"><?php echo get_the_title(); ?></h3>
      <?php the_excerpt(); ?>
    </div>
    <?php endwhile; ?>

    <div class="blog-pagination">
      <?php
      next_posts_link( 'Next', $posts->max_num_pages );
      previous_posts_link( 'Previous' );
      ?>
    </div>

    <?php
    wp_reset_postdata();
  endif;

  ?>
</div>

<?php get_footer(); ?>