<?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
?>
      <h1 class="fw-bold ff-heading mb-4"><?php the_title(); ?></h1>
      <p class="small text-secondary fw-bold">
        <span><i class="fa fa-calendar me-2"></i><?php the_time("F j, Y"); ?></span>
        <span class="mx-3">|</span>
        <span class="text-capitalize"><i class="fa fa-user-circle-o me-2"></i><?php the_author(); ?></span>
        <span class="mx-3">|</span>
        <span><i class="fa fa-tags"></i> <?php the_category(", ") ?></span>
      </p>
      <hr class="my-4">
<?php
      the_content();
    }
  }
?>