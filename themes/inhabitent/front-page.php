<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <section class="home-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="Image of Inhabitent logo" />
    </section>

    <div class="container">
        <section class="home-shop">
            <h2>Shop Stuff</h2>
            <?php  //shop stuff on front page
               $arg = array( 'taxonomy' => 'product_type', 'hide_empty' => true);
               $terms = get_terms( $arg );
           ?>
            <section class="product-feed-container">
                <?php
                     $arg = array( 'taxonomy' => 'product_type', 'hide_empty' => true);
                    $terms = get_terms('product_type');

                    foreach ($terms as $term) : ?>
                        <?php $url = get_term_link($term->slug, 'product_type'); ?>

                        <div class="product-feed-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="Product icon image of <?php echo $term->slug; ?>">
                            <p><?php echo $term->description; ?></p>
                            <p><a href="<?php echo $url ?>"><?php echo $term->name; ?> Stuff</a></p>
                        </div>
                    <?php endforeach; ?>
            </section>
        </section>

        <section class="home-journal">
            <h2>Inhabitent Journal</h2>

            <?php
                $args = array( 'post_type' => 'post',
                               'orderby' => 'post_date',
                               'order' => 'DESC',
                               'posts_per_page' => 3 );

                $journal_posts = get_posts( $args ); ?>

                <div class="journal-feed-container">
                    <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
                        <div class="journal-feed-item">
                            <?php the_post_thumbnail(); ?>

                            <div class="journal-feed-item-info">
                                <span><?php the_date(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                <a href="<?php the_permalink(); ?>"><div class="link-button">Read Entry</div></a>
                            </div>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
        </section>

       
    </div>

<?php get_footer(); ?>