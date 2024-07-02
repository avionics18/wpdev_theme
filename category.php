<?php get_header(); ?>

<main>
  <div class="bg-white border-bottom py-5">
    <div class="container">
      <h5 class="text-secondary">Posts categorized under:</h5>
      <h1 class="ff-heading m-0"><i class="fa fa-tags me-2"></i><?php single_cat_title(); ?></h1>
    </div>
  </div>
  <div class="container py-5">
    <div class="row">
      <?php get_template_part("includes/section", "archive"); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>