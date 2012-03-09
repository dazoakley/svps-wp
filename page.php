<?php get_header(); ?>

        <div id="content" class="grid_8 hfeed">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <?php edit_post_link('edit', '<span class="editlink">', '</span>'); ?>
          
          <h2 class="page-title">
            <?php the_title(); ?>
          </h2>
          
          <div class="page-content">
            <?php the_content(); ?>
          </div>

          <?php endwhile; else: ?>
          
          <h2>Woops...</h2>
          
          <p>Sorry, but you're looking for something that isn't here.</p>
          
          <?php endif; ?>  
          
          <p align="center"><?php posts_nav_link(); ?></p>
        </div>
        
<?php get_sidebar(); ?>        
<?php get_footer(); ?>
