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
                                <!-- Breadcrumb -->
                                <div class="single-breadcrumb">
                                    <a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a> / 
                                    <a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a> / 
                                    <span class="current"><?php the_title(); ?></span>
                                </div>

                                <div class="single-post-header">
                                    <?php the_title( '<h1 class="single-post-title">', '</h1>' ); ?>
                                    
                                    <div class="single-post-author-box">
                                        <div class="author-info">
                                            <div class="author-avatar">
                                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?>
                                            </div>
                                            <div class="author-meta">
                                                <span class="author-name"><?php the_author(); ?></span>
                                                <span class="author-date"><?php echo get_the_date(); ?> &bull; <?php echo function_exists('aleacomputer_reading_time') ? aleacomputer_reading_time() : '5 mnt baca'; ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="single-share-icons">
                                            <?php 
                                            $post_url = urlencode(get_permalink());
                                            $post_title = urlencode(get_the_title());
                                            ?>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" target="_blank" class="share-icon fb" title="Share on Facebook">
                                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                            </a>
                                            <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" target="_blank" class="share-icon tw" title="Share on Twitter">
                                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?text=<?php echo $post_title; ?>%20<?php echo $post_url; ?>" target="_blank" class="share-icon wa" title="Share on WhatsApp">
                                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                            </a>
                                        </div>
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
                                
                                <!-- Baca Juga / Related Posts -->
                                <div class="related-posts-section">
                                    <h3 class="related-posts-title">Baca juga:</h3>
                                    <?php
                                    $categories = get_the_category();
                                    if ( $categories ) :
                                        $category_ids = array();
                                        foreach ( $categories as $category ) {
                                            $category_ids[] = $category->term_id;
                                        }
                                        $related_args = array(
                                            'category__in'   => $category_ids,
                                            'post__not_in'   => array( get_the_ID() ),
                                            'posts_per_page' => 3,
                                            'orderby'        => 'rand',
                                            'post_status'    => 'publish',
                                        );
                                        $related_query = new WP_Query( $related_args );
                                        if ( $related_query->have_posts() ) :
                                    ?>
                                    <div class="related-posts-grid">
                                        <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
                                        <a href="<?php the_permalink(); ?>" class="related-post-card">
                                            <div class="related-post-img">
                                                <?php if ( has_post_thumbnail() ) : ?>
                                                    <?php the_post_thumbnail( 'medium', array( 'style' => 'width:100%; height:100%; object-fit:cover;' ) ); ?>
                                                <?php else : ?>
                                                    <div class="placeholder-img" style="min-height:160px;">🖥️</div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="related-post-info">
                                                <h4><?php the_title(); ?></h4>
                                                <span class="related-post-date"><?php echo get_the_date(); ?></span>
                                            </div>
                                        </a>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php
                                        endif;
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                </div>
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
