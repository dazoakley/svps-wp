<?php get_header(); ?>

        <div id="content" class="grid_8 hfeed">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <div id="post-<?php the_ID(); ?>" class="post hentry">
            <div class"entry-head">
              <?php edit_post_link('edit', '<span class="editlink">', '</span>'); ?>
              <h2 class="entry-title">
                  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to '<?php the_title(); ?>'"><?php the_title(); ?></a>
              </h2>
            </div><!-- .entry-head -->
            
            <div class="entry-content">
              <?php the_content(); ?>
            </div><!-- .entry-content -->
              
            <div class="entry-foot">
              <div class="entry-meta post-info">
                <p class="entry-time">
                  Published
                  <span class="entry-author">
                    by <address class="vcard author"><a href="<?php bloginfo('url'); ?>/author/<?php the_author(); ?>" class="url fn" title="View all posts by <?php the_author(); ?>"><?php the_author(); ?></a></address>,
                  </span> 
                  <span class="entry-date">
                    on <abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></abbr>,
                  </span> 
                  <span class="entry-categories">
                    in <?php the_category(', '); ?>.
                  </span>
                </p>
                <p class="entry-comments">
                  <a class="commentslink" href="<?php comments_link(); ?>"><?php comments_number('0 comments', '1 comment', '% comments'); ?></a>
                </p>
                <p class="entry-tags tags">
                  <?php the_tags('Tags: ', ', ', '.'); ?>
                </p>
              </div> <!-- .entry-meta -->
            </div><!-- .entry-foot -->
              
          </div><!-- .hentry -->
          
          <?php endwhile; else: ?>
          
          <h2>Woops...</h2>
          
          <p>Sorry, no posts were found.</p>
          
          <?php endif; ?>  
          
          <p align="center"><?php posts_nav_link(); ?></p>
        </div>
        
<?php get_sidebar(); ?>        
<?php get_footer(); ?>
