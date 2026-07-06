<?php
/**
 * The template for displaying the footer
 */
?>
    <!-- BOTTOM CTA -->
    <section class="bottom-cta">
        <div class="container">
            <div class="cta-box">
                <div class="cta-left">
                    <h2>Punya Komputer atau Laptop Bekas<br>yang Ingin Dijual?</h2>
                    <p>Dapatkan penawaran harga terbaik hari ini!</p>
                    <div class="cta-features">
                        <span>Survey Gratis</span>
                        <span>Pembayaran Cepat</span>
                        <span>Jemput ke Lokasi</span>
                    </div>
                </div>
                <div class="cta-right">
                    <a href="https://wa.me/6281399070807?text=Halo%20Alea%20Computer,%20saya%20ingin%20menjual%20aset%20IT%20saya." target="_blank" class="btn-wa">WHATSAPP SEKARANG</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo_terbaru_transparent.png' ); ?>" alt="Alea Computer" style="height:65px; margin-bottom:20px; filter: brightness(0) invert(1); object-fit: contain; object-position: left; transform: translateX(-8px);">
                    <p>Spesialis pemborong komputer, laptop, dan perangkat IT bekas berkualitas dari perusahaan, instansi dan perorangan di Indonesia.</p>
                </div>
                <div class="footer-col">
                    <h3 class="widget-title-footer">Menu</h3>
                    <ul class="footer-menu">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#hero">Beranda</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#features">Tentang kami</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#services">Layanan</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
                        <li><a href="#colophon">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3 class="widget-title-footer">Hubungi Kami</h3>
                    <ul class="footer-contact">
                        <li>
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></span>
                            <div>0813-9907-0807</div>
                        </li>
                        <li>
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg></span>
                            <div>Jl. Komp. Depag No.30, Bambu Apus, Kec. Pamulang, Kota Tangerang Selatan, Banten 15415</div>
                        </li>
                        <li>
                            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>
                            <div>Senin - Sabtu: 08.00 - 17.00</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <span>&copy; <?php echo date('Y'); ?> Alea Computer. All Rights Reserved.</span>
            </div>
        </div>
    </footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
