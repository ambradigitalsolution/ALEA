<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

    <main>
        <div class="blog-page-container">
            <div class="container">
                <div class="blog-layout">
                    
                    <!-- Main Content Area -->
                    <div class="blog-main">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>
                                <div class="single-post-header">
                                    <?php the_title( '<h1 class="single-post-title">', '</h1>' ); ?>
                                    <div class="single-post-meta">
                                        <span>👤 <?php the_author(); ?></span>
                                        <span>📅 <?php echo get_the_date(); ?></span>
                                        <span>📁 <?php the_category( ', ' ); ?></span>
                                    </div>
                                </div>
                                
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="single-post-image">
                                        <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; height:auto; display:block; object-fit:cover; max-height:500px;' ) ); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="single-post-content">
                                    <?php
                                    the_content();
                                    
                                    wp_link_pages( array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aleacomputer' ),
                                        'after'  => '</div>',
                                    ) );
                                    ?>
                                </div>
                                
                                <?php if ( has_tag() ) : ?>
                                    <div class="single-post-tags">
                                        <?php the_tags( '', '', '' ); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                                ?>
                            </article>
                        <?php endwhile; // End of the loop. ?>
                    </div>
                    
                    <!-- Sidebar Area -->
                    <aside class="blog-sidebar">
                        <div class="widget search-widget">
                            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <input type="search" class="search-field" placeholder="Cari Artikel..." value="<?php echo get_search_query(); ?>" name="s" />
                                <button type="submit" class="search-submit"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-top:4px;"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg></button>
                            </form>
                        </div>
                        
                        <div class="widget recent-posts-widget">
                            <h3 class="widget-title">Artikel Terbaru</h3>
                            <div class="widget-posts-list">
                                <?php
                                $recent_posts = wp_get_recent_posts( array(
                                    'numberposts' => 3,
                                    'post_status' => 'publish'
                                ) );
                                foreach( $recent_posts as $post_item ) :
                                    $thumb_url = get_the_post_thumbnail_url($post_item['ID'], 'thumbnail');
                                ?>
                                    <div class="widget-post-item">
                                        <div class="widget-post-img">
                                            <?php if($thumb_url): ?>
                                                <a href="<?php echo get_permalink($post_item['ID']); ?>"><img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($post_item['post_title']); ?>"></a>
                                            <?php else: ?>
                                                <div class="placeholder-img-small" style="font-size:2rem;background:#eee;">📄</div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="widget-post-info">
                                            <h4 class="widget-post-title"><a href="<?php echo get_permalink($post_item['ID']); ?>"><?php echo esc_html( wp_trim_words( $post_item['post_title'], 6 ) ); ?></a></h4>
                                            <div class="widget-post-date"><?php echo get_the_date( '', $post_item['ID'] ); ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; wp_reset_query(); ?>
                            </div>
                        </div>
                    </aside>
                    
                </div>
            </div>
        </div>
    </main>

<?php
get_footer();
