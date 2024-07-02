<?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();

      if (has_post_thumbnail()) {
?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>" class="card-img-top">
<?php
      }
    }
  }
?>