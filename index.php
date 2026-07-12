<?php
/**
 * The main template file
 */

get_header();
?>

    <main>
        <div class="blog-page-container">
            <div class="container">
                <div class="section-head" style="margin-bottom: 40px; text-align: center;">
                    <span class="label">Pusat Informasi</span>
                    <h2>Blog & Berita Alea</h2>
                </div>
                <div class="blog-layout">
                    
                    <!-- Main Content Area -->
                    <div class="blog-main">
                        <?php if ( have_posts() ) : ?>
                            <?php 
                            $first_post = true;
                            while ( have_posts() ) : the_post(); 
                                if ( $first_post && !is_paged() ) :
                                    // Hero Card for the very first post
                                    $first_post = false;
                                    $bg_image = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/img/hero-tech.png';
                            ?>
                                <article class="blog-hero-card" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
                                    <div class="hero-overlay"></div>
                                    <div class="hero-content">
                                        <div class="hero-meta">
                                            <span>👤 <?php the_author(); ?></span>
                                            <span>&bull;</span>
                                            <span><?php echo get_the_date(); ?></span>
                                        </div>
                                        <h2 class="hero-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div class="hero-excerpt">
                                            <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                                        </div>
                                    </div>
                                </article>
                            <?php else: ?>
                                <article class="blog-list-card">
                                    <div class="list-card-image">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail( 'medium', array( 'style' => 'width:100%; height:100%; object-fit:cover;' ) ); ?>
                                            </a>
                                        <?php else: ?>
                                            <div class="placeholder-img">🖥️</div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="list-card-content">
                                        <h3 class="list-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="list-excerpt">
                                            <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                                        </div>
                                        <div class="list-meta">
                                            <span><?php the_author(); ?></span> &bull; <span><?php echo get_the_date(); ?></span>
                                        </div>
                                    </div>
                                </article>
                            <?php 
                                endif;
                            endwhile; 
                            ?>
                            
                            <div class="pagination">
                                <?php
                                echo paginate_links( array(
                                    'prev_text' => '« Sebelumnya',
                                    'next_text' => 'Selanjutnya »',
                                    'type'      => 'plain',
                                ) );
                                ?>
                            </div>

                        <?php else : ?>
                            <div style="padding: 40px; background: #fff; border-radius: 12px; text-align: center; border: 1px solid #ddd;">
                                <h3>Pencarian Tidak Ditemukan</h3>
                                <p><?php esc_html_e( 'Belum ada artikel atau artikel yang Anda cari tidak ditemukan.', 'aleacomputer' ); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Sidebar Area -->
                    <aside class="blog-sidebar">
                        <div class="widget search-widget">
                            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <input type="search" class="search-field" placeholder="Cari Artikel..." value="<?php echo get_search_query(); ?>" name="s" />
                                <button type="submit" class="search-submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg></button>
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
