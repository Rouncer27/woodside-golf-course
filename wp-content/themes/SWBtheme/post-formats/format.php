          


           <article class="otherblog singleblog">

            <header>
              <?php
              if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'main' );
              }
              ?>
              <p class="blogmeta"><span><?php echo get_the_category_list(' | '); ?></span><span class="by"> | By</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person"><?php the_author(); ?> |</span>
              <time class="updated entry-time" datetime="<?php echo get_the_time('Y-m-d') ?>" itemprop="datePublished"><?php echo get_the_date("D-m-y"); ?></time></p>
              <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
            </header>

            <section class="content">
              <?php the_content(); ?>

              <?php   wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );
              ?>

            </section>

            <section>
              <div class="comments">
                <?php comments_template(); ?>
              </div>
            </section>

          </article>