<?php

/*
Template Name: Page Of Posts
*/
?>


<?php get_header(); ?>

<?php get_template_part( 'navbar'); ?> 



<div id="primary">
  <div id="content" role="main">

  <?php
  /* the_post will retrieve the content of the new page you 
  *  create to list the posts, e.g. as an intro to describe 
  *  which posts are shown.
  */
  the_post(); 
  
  // Display content of page
  get_template_part( 'content', get_post_format() ); 
  wp_reset_postdata();

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
	
  );

  $list_of_posts = new WP_Query( $args ); 

 
  while ( $list_of_posts->have_posts() ): $list_of_posts->the_post();

    // Display content of posts
    get_template_part( 'content', get_post_format() );

  endwhile; 
  ?>

  </div><!-- /#content -->
</div><!-- /#primary -->
<?php get_footer();