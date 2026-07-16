<?php
/**
 * The template for displaying the front page (Landing Page)
 */

get_header();
?>

    <main>

    <!-- HERO -->
    <section id="hero" style="background: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero-bg-hd.png' ); ?>') center center / cover no-repeat; color: white; padding: 60px 0 80px; position: relative; overflow: hidden;">
        <!-- Dark overlay for text readability -->
        <div style="position: absolute; inset: 0; background: linear-gradient(90deg, rgba(7,31,16,0.95) 0%, rgba(11,59,31,0.8) 40%, rgba(7,31,16,0.2) 100%); z-index: 1;"></div>
        
        <div class="container" style="position: relative; z-index: 10;">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">
                <div style="flex: 1 1 100%; max-width: 900px; animation: fadeInUp 1s ease-out forwards;">
                    <style>
                        @keyframes fadeInUp {
                            from { opacity: 0; transform: translateY(30px); }
                            to { opacity: 1; transform: translateY(0); }
                        }
                    </style>
                    <span style="display: inline-block; background-color: var(--primary); padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; margin-bottom: 20px; box-shadow: 0 0 15px rgba(15,157,88,0.5);">#1 SOLUSI ASET IT BEKAS</span>
                    
                    <h1 style="font-size: clamp(2.2rem, 8vw, 3.5rem); line-height: 1.2; margin-bottom: 20px;">
                        BELI LAPTOP KOMPUTER<br>
                        <span style="color: #4ade80; text-shadow: 0 0 20px rgba(15,157,88,0.4);">& PERANGKAT IT BEKAS</span>
                    </h1>
                    
                    <p style="font-size: 1.1rem; color: #dddddd; margin-bottom: 30px; line-height: 1.8;">
                        Kami membeli komputer, laptop, dan perangkat IT bekas dari perusahaan, bank, kampus, hotel, rumah sakit, dan instansi pemerintah dalam jumlah besar maupun lelang.
                    </p>
                    
                    <style>
                        .hero-check-grid {
                            display: grid;
                            grid-template-columns: repeat(2, auto);
                            justify-content: start;
                            gap: 20px 40px;
                            margin-bottom: 40px;
                            font-weight: 500;
                        }
                        @media(max-width: 575px) {
                            .hero-check-grid { grid-template-columns: 1fr; }
                        }
                    </style>
                    <div class="hero-check-grid">
                        <div style="display:flex; align-items:center; gap:10px; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
                            <span style="background:var(--primary); border-radius:50%; width:24px; height:24px; display:inline-flex; justify-content:center; align-items:center; box-shadow: 0 0 10px rgba(15,157,88,0.4); font-size: 14px;">✓</span> Harga Terbaik
                        </div>
                        <div style="display:flex; align-items:center; gap:10px; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
                            <span style="background:var(--primary); border-radius:50%; width:24px; height:24px; display:inline-flex; justify-content:center; align-items:center; box-shadow: 0 0 10px rgba(15,157,88,0.4); font-size: 14px;">✓</span> Survey Gratis
                        </div>
                        <div style="display:flex; align-items:center; gap:10px; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
                            <span style="background:var(--primary); border-radius:50%; width:24px; height:24px; display:inline-flex; justify-content:center; align-items:center; box-shadow: 0 0 10px rgba(15,157,88,0.4); font-size: 14px;">✓</span> Pembayaran Cepat
                        </div>
                        <div style="display:flex; align-items:center; gap:10px; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
                            <span style="background:var(--primary); border-radius:50%; width:24px; height:24px; display:inline-flex; justify-content:center; align-items:center; box-shadow: 0 0 10px rgba(15,157,88,0.4); font-size: 14px;">✓</span> Jemput Lokasi
                        </div>
                        <div style="display:flex; align-items:center; gap:10px; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
                            <span style="background:var(--primary); border-radius:50%; width:24px; height:24px; display:inline-flex; justify-content:center; align-items:center; box-shadow: 0 0 10px rgba(15,157,88,0.4); font-size: 14px;">✓</span> Transaksi Aman & Legal
                        </div>
                        <div style="display:flex; align-items:center; gap:10px; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
                            <span style="background:var(--primary); border-radius:50%; width:24px; height:24px; display:inline-flex; justify-content:center; align-items:center; box-shadow: 0 0 10px rgba(15,157,88,0.4); font-size: 14px;">✓</span> Bergaransi
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <a href="https://wa.me/6281399070807?text=Halo%20Alea%20Computer,%20saya%20tertarik%20dengan%20layanan%20Anda." target="_blank" class="hero-btn hero-btn-primary">Hubungi Kami</a>
                    </div>
                    
                    <p style="margin-top: 20px; font-size: 0.9rem; color: #aaaaaa; opacity: 0.8;">🛡️ Aman, Cepat, Profesional & Terpercaya</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CLIENTS -->
    <section class="clients-section">
        <div class="container">
            <div class="clients-title">Dipercaya Perusahaan dan Instansi</div>
            <div class="clients-logos" style="display:flex; justify-content:center; align-items:center; gap:50px; flex-wrap:wrap; margin-bottom:30px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png" alt="PLN" style="height:45px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/BRI_2020.svg" alt="BANK BRI" style="height:35px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/22/Telkom_Indonesia_logo.png" alt="Telkom Indonesia" style="height:45px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Pertamina_Logo.svg" alt="PERTAMINA" style="height:40px;">
                <img src="https://upload.wikimedia.org/wikipedia/en/e/e4/Unilever.svg" alt="Unilever" style="height:45px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg" alt="KAI" style="height:35px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/BPJS_Kesehatan_logo.svg" alt="BPJS Kesehatan" style="height:35px;">
            </div>
            <div class="clients-stars">★★★★★</div>
            <div class="clients-sub">Lebih dari <strong>500+</strong> transaksi aset IT berhasil diselesaikan.</div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-head">
                <span class="label">Layanan Kami</span>
                <h2>Apa yang Kami Beli?</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon" style="display:flex; justify-content:center; align-items:center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="14" y="2" width="8" height="20" rx="2" ry="2"></rect>
                            <rect x="2" y="6" width="10" height="12" rx="2" ry="2"></rect>
                            <path d="M6 18v4"></path>
                            <path d="M2 22h8"></path>
                        </svg>
                    </div>
                    <h3>Komputer Bekas</h3>
                    <p>CPU Kantor, PC Rakitan, Workstation</p>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="display:flex; justify-content:center; align-items:center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"></path>
                        </svg>
                    </div>
                    <h3>Laptop Bekas</h3>
                    <p>Laptop Kantor, Laptop Perusahaan, Laptop Project</p>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="display:flex; justify-content:center; align-items:center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                            <path d="M6.01 18H6"></path>
                            <path d="M10.01 18H10"></path>
                            <path d="M15 10v4"></path>
                            <path d="M19 6v8"></path>
                            <path d="M11 6v8"></path>
                            <path d="M7 10v4"></path>
                        </svg>
                    </div>
                    <h3>Networking Bekas</h3>
                    <p>Switch, Router, Access Point</p>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="display:flex; justify-content:center; align-items:center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                            <rect x="6" y="14" width="12" height="8"></rect>
                        </svg>
                    </div>
                    <h3>Printer Bekas</h3>
                    <p>Laserjet, Inkjet, Multifunction</p>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="display:flex; justify-content:center; align-items:center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h3>Monitor Bekas</h3>
                    <p>LED, IPS, Ultrawide</p>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="display:flex; justify-content:center; align-items:center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                        </svg>
                    </div>
                    <h3>Server Bekas</h3>
                    <p>Rack Server, Tower Server, Storage</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="section-head">
                <span class="label">Keunggulan Kami</span>
                <h2>Kenapa Memilih Kami?</h2>
            </div>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon"><svg viewBox="0 0 24 24"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg></div>
                    <h3>Harga Kompetitif</h3>
                    <p>Penawaran terbaik sesuai kondisi barang.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg></div>
                    <h3>Survey Langsung</h3>
                    <p>Tim kami datang ke lokasi Anda.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg></div>
                    <h3>Pembayaran Cepat</h3>
                    <p>Transfer langsung setelah deal.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg></div>
                    <h3>Profesional</h3>
                    <p>Berpengalaman menangani aset IT dari berbagai perusahaan.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div>
                    <h3>Aman & Legal</h3>
                    <p>Didukung dokumen resmi dan berita acara.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><svg viewBox="0 0 24 24"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg></div>
                    <h3>Data Aman</h3>
                    <p>Penghapusan data sesuai standar keamanan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section id="process" class="process-section">
        <div class="container">
            <div class="section-head">
                <span class="label">Proses Kerja</span>
                <h2>Cara Kerja Kami</h2>
            </div>
            <div class="process-grid">
                <div class="process-line"></div>
                <div class="process-step">
                    <div class="step-num">1</div>
                    <h3>Hubungi Kami</h3>
                    <p>Sampaikan informasi barang yang ingin dijual.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">2</div>
                    <h3>Survey Barang</h3>
                    <p>Tim kami melakukan pengecekan ke lokasi Anda.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">3</div>
                    <h3>Penawaran Harga</h3>
                    <p>Kami berikan harga terbaik sesuai hasil proses.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">4</div>
                    <h3>Pembayaran</h3>
                    <p>Setelah deal, pembayaran langsung kami proses.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">5</div>
                    <h3>Pengangkutan</h3>
                    <p>Barang kami angkut dengan aman dan terpercaya.</p>
                </div>
            </div>
            <div class="process-note">Selesai hanya dalam 1-3 hari kerja.</div>
        </div>
    </section>

    <section id="services-detail" class="products-section">
        <div class="container">
            <div class="section-head">
                <span class="label">Solusi Kami</span>
                <h2>Layanan Spesialis IT Borongan</h2>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-img" style="display:flex; justify-content:center; align-items:center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                            <path d="M9 22v-4h6v4"></path>
                            <path d="M8 6h.01"></path>
                            <path d="M16 6h.01"></path>
                            <path d="M12 6h.01"></path>
                            <path d="M12 10h.01"></path>
                            <path d="M12 14h.01"></path>
                            <path d="M16 10h.01"></path>
                            <path d="M16 14h.01"></path>
                            <path d="M8 10h.01"></path>
                            <path d="M8 14h.01"></path>
                        </svg>
                    </div>
                    <div class="product-info">
                        <h3>Pemborongan IT Kantor</h3>
                        <div class="specs">Membeli seluruh aset IT bekas dari kantor, sekolah, atau instansi dengan harga bersaing.</div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img" style="display:flex; justify-content:center; align-items:center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                    </div>
                    <div class="product-info">
                        <h3>Penerima Lelang Aset</h3>
                        <div class="specs">Berpengalaman mengikuti dan memenangkan tender lelang aset IT skala besar.</div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img" style="display:flex; justify-content:center; align-items:center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <div class="product-info">
                        <h3>Borongan Segala Kondisi</h3>
                        <div class="specs">Kami menerima borongan perangkat IT dalam kondisi normal, rusak, mati total, hingga cuci gudang.</div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img" style="display:flex; justify-content:center; align-items:center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="1" y="3" width="15" height="13"></rect>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                    </div>
                    <div class="product-info">
                        <h3>Penjemputan Lokasi</h3>
                        <div class="specs">Layanan armada kami siap menjemput borongan aset IT langsung ke tempat Anda.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg></div>
                    <div class="stat-num">10+</div>
                    <div class="stat-label">Tahun Pengalaman</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg></div>
                    <div class="stat-num">500+</div>
                    <div class="stat-label">Perusahaan Dilayani</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"/></svg></div>
                    <div class="stat-num">20.000+</div>
                    <div class="stat-label">Unit IT Diproses</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg></div>
                    <div class="stat-num">100%</div>
                    <div class="stat-label">Transaksi Aman</div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-head">
                <h2>TESTIMONI PELANGGAN</h2>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testi-stars">★★★★★</div>
                    <p class="testi-quote">"Kami berhasil menjual lebih dari 200 unit komputer kantor dengan proses cepat dan harga memuaskan."</p>
                    <div class="testi-author">
                        <div class="testi-avatar" style="display:flex; justify-content:center; align-items:center; background: #e0f2f1; border-radius: 50%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                              <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div>
                            <div class="testi-name">Budi Santoso</div>
                            <div class="testi-role">Manager IT</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testi-stars">★★★★★</div>
                    <p class="testi-quote">"Survey cepat, pembayaran langsung cair. Sangat membantu perusahaan kami."</p>
                    <div class="testi-author">
                        <div class="testi-avatar" style="display:flex; justify-content:center; align-items:center; background: #e0f2f1; border-radius: 50%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                              <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div>
                            <div class="testi-name">Rina Marlina</div>
                            <div class="testi-role">Purchasing Staff</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testi-stars">★★★★★</div>
                    <p class="testi-quote">"Sangat membantu proses disposal aset perusahaan. Profesional dan amanah."</p>
                    <div class="testi-author">
                        <div class="testi-avatar" style="display:flex; justify-content:center; align-items:center; background: #e0f2f1; border-radius: 50%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary, #0F9D58)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                              <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div>
                            <div class="testi-name">Andi Prasetyo</div>
                            <div class="testi-role">General Affairs</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>

<?php
get_footer();
