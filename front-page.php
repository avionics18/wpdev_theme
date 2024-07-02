<?php get_header(); ?>

<main>
  <div class="container py-5">
    <h1><?php the_title(); ?></h1>
    <?php get_template_part("includes/section", "content"); ?>
  </div>
</main>

<?php get_footer(); ?>