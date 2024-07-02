<?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
?>

      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card shadow-sm h-100 archive-post-card">
          <div class="card-body">
            <p class="small"><i class="fa fa-tags me-2"></i><?php the_category(', '); ?></p>
            <h3 class="card-title ff-heading">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <h6 class="card-subtitle small mt-3">
              <span class="text-secondary"><?php the_time("F j, Y"); ?></span>
            </h6>
            <hr>
            <div class="small"><?php the_excerpt(); ?></div>
          </div>
        </div>
      </div>

<?php
    }
  }
?>

<!-- Pagination -->
<div class="col-12 archive-pagination py-4">
  <?php
    global $wp_query;
    $big = 999999999; // need an unlikely integer

    echo paginate_links(
      array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
      )
    );
  ?>
</div>