<?php get_header(); ?>

        <main id="post-<?php the_ID(); ?>" <?php post_class('archivepage'); ?> >
            <div class='archivepage__container'> 
                <header class="archivepage__header">
                    <h1>

                        <?php if ( is_day() ) : ?>Daily archives for <span><?php echo get_the_date(); ?></span>

                        <?php elseif ( is_month() ) : ?>Monthly archives for <span><?php echo get_the_date( 'F Y' ); ?></span>

                        <?php elseif ( is_year() ) : ?>Yearly archives for <span><?php echo get_the_date( 'Y' ); ?></span>

                        <?php elseif ( is_category() ) : ?>All posts in the <span><?php single_cat_title(); ?></span> category

                        <?php elseif ( is_tag() ) : ?>Currently browsing posts tagged <span><?php single_tag_title( '' ); ?></span>

                        <?php else : ?>

                        Archives Page
                        
                        <?php endif; ?>

                    </h1>
                </header>

               
            <section class="archivepage__section">               

            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                <div class="archivepage__article">
                  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
                  <p class="archivepage__article--date"><?php the_date( 'l, F j, Y' ); ?></p>
                  <?php the_excerpt(); ?>
                </div>
            
         

            <?php endwhile; else: ?> 
      
                <div><p><?php _e( "We're sorry, but we couldn't find anything for you. Please try and search for whatever it was you were looking for." ); ?></p></div>
          
            <?php endif; ?> 

            </section>
         
            <?php if(is_active_sidebar( 'archive_sidebar' ) ) { ?>

                <aside class="archivepage__sidebar swbsidebar">
                    <?php get_sidebar('archive'); ?>
                </aside>

            <?php } ?>

                <nav class="blog-archive__pagination"><!-- Pagination -->


                  <?php the_posts_pagination( array(
                      'mid_size' => 2,
                      'prev_text' => __( 'Back Page', 'textdomain' ),
                      'next_text' => __( 'Next Page', 'textdomain' ),
                  ) ); ?>


                </nav>
        </div>
     </main>
     
<?php get_footer(); ?> 