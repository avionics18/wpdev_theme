<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<main>
  <?php get_template_part("includes/section", "header"); ?>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-8">
        <div class="card mb-3">
          <div class="card-body">
            <?php get_template_part("includes/section", "content"); ?>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header"><b>Contact Form</b></div>
          <div class="card-body">
            <div class="form-group">
              <input type="email" class="form-control mb-3" placeholder="Enter your email">
              <textarea class="form-control mb-3" rows="5" placeholder="Enter your message"></textarea>
              <button class="btn btn-primary"><i class="fa fa-paper-plane me-2"></i>Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>