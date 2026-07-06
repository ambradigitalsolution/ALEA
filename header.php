<?php
/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page">

    <!-- HEADER -->
    <header class="site-header">
        <div class="container header-inner">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo_terbaru_transparent.png' ); ?>" alt="Alea Computer"></a>
            <div class="menu-overlay" onclick="closeMenu()"></div>
            <nav class="main-nav">
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#hero">Beranda</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#features">Tentang kami</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#services">Layanan</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
                    <li><a href="#colophon">Kontak</a></li>
                </ul>
                <a href="https://wa.me/6281399070807?text=Halo%20Alea%20Computer,%20saya%20tertarik%20dengan%20layanan%20Anda." target="_blank" class="header-phone mobile-only" style="background: #25D366; border-color: #25D366; color: #fff; margin-top: 20px;">
                    Hubungi Kami
                </a>
            </nav>
            <a href="https://wa.me/6281399070807?text=Halo%20Alea%20Computer,%20saya%20tertarik%20dengan%20layanan%20Anda." target="_blank" class="header-phone desktop-only" style="background: #25D366; border-color: #25D366; color: #fff;">
                Hubungi Kami
            </a>
            <button class="hamburger-btn" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <script>
            function toggleMenu() {
                document.querySelector('.main-nav').classList.toggle('active');
                document.querySelector('.menu-overlay').classList.toggle('active');
                document.querySelector('.hamburger-btn').classList.toggle('active');
                if (document.body.style.overflow === 'hidden') {
                    document.body.style.overflow = '';
                } else {
                    document.body.style.overflow = 'hidden';
                }
            }
            function closeMenu() {
                document.querySelector('.main-nav').classList.remove('active');
                document.querySelector('.menu-overlay').classList.remove('active');
                document.querySelector('.hamburger-btn').classList.remove('active');
                document.body.style.overflow = '';
            }
            document.querySelectorAll('.main-nav a').forEach(link => {
                link.addEventListener('click', closeMenu);
            });
        </script>
    </header>
