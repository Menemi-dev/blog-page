<?php
/**
 * The hero template
 */
?>

<div class="blog-hero">
  <h1 class="blog-hero--title"><?php echo get_the_title(); ?></h1>
  <div class="blog-hero--container">
    <div class="blog-hero--column">
      <div class="blog-hero--content"><?php echo get_the_content(); ?></div>
    </div>

    <div class="blog-hero--column">
      <img class="blog-hero--image" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" />
    </div>
  </div>
</div>