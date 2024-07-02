<?php get_header(); ?>

<main>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-8">
        <div class="card shadow-sm mb-3 single-post-card">
          <?php get_template_part("includes/section", "post-thumbnail"); ?>
          <div class="card-body p-md-5">
            <?php get_template_part("includes/section", "post"); ?>
          </div>

          <?php
            global $multipage, $numpages;

            if ($multipage) {
          ?>
              <div class="alert alert-warning rounded-0 px-md-5 py-3">
                <span class="fst-italic"><b>Note: </b>The content of this post has been splitted into <b><?php echo $numpages; ?></b> parts. Kindly use the below page numbers to navigate to different parts of the post.</span>
              </div><!-- NOTE -->
              <div class="card-footer py-3 px-md-5">
                <div class="post-pagination">
                  <p class="m-0 fw-bold text-secondary">Parts : </p>
                  <?php
                    wp_link_pages(
                      array (
                        'before'            => '',
                        'seperator'         => '&raquo;',
                      )
                    );
                  ?>
                </div><!-- .post-pagination -->
              </div><!-- .card-footer -->
          <?php
            }
          ?>
          
        </div><!-- .card -->
      </div><!-- .col-lg-8 -->
      <div class="col-lg-4">
        <div class="ads bg-secondary rounded mb-3"></div>
        <div class="card shadow-sm">
          <div class="card-header fw-bold">Table of Contents</div>
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded">
              <li class="list-group-item small"><a href="#">Introduction</a></li>
              <li class="list-group-item small"><a href="#">What is OFCW?</a></li>
              <li class="list-group-item small"><a href="#">Various Solutions to the Problem</a></li>
            </ul>
          </div>
        </div>
      </div><!-- .col-lg-4 -->
      <div class="col-lg-12 py-4">
        <?php comments_template(); ?>
      </div><!-- .col-lg-12 COMMENTS -->
    </div><!-- .row -->
  </div><!-- .container -->
</main>

<?php get_footer(); ?>