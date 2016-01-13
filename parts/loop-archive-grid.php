<?php
// Adjust the amount of rows in the grid
$grid_columns = 4; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="row" data-equalizer> <!--Begin Row:-->

    <?php endif; ?>

    <!--Item: -->
    <div class="large-3 medium-3 columns panel" data-equalizer-watch>

        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

            <section class="featured-image" itemprop="articleBody">
                <?php the_post_thumbnail('full'); ?>
            </section> <!-- end article section -->

            <header class="article-header">
                <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                <?php
                	/* Translators: %1$s is the time, %2$s is the link to the author's archive, %3$s is the category */
                	printf( '<p>' . __( '%1$s by %2$s. %3$s', 'jointswp' ) . '</p>',
                		get_the_time( 'F j, Y' ),
                		get_the_author_posts_link(),
                		get_the_category_list( __( ', ', 'jointswp' ) )
                	);
                ?>
            </header> <!-- end article header -->

            <section class="entry-content" itemprop="articleBody">
                <?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
            </section> <!-- end article section -->

        </article> <!-- end article -->

    </div>

    <?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

    </div>  <!--End Row: -->

<?php endif; ?>
