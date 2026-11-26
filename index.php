<?php
// Website profil organisasi IMM - template awal.
// Silakan sesuaikan nama komisariat, periode, kontak, dan kegiatan dengan data resmi organisasi.
$namaOrganisasi = "Ikatan Mahasiswa Muhammadiyah";
$namaUnit = "PK IMM Al-Fatih";
$periode = "Periode 2026/2027";

$kegiatan = [
    [
        "nomor" => "01",
        "kategori" => "KADERISASI",
        "judul" => "Darul Arqam Dasar",
        "deskripsi" => "Ruang pembinaan awal untuk mengenal nilai, identitas, dan arah gerakan IMM.",
        "tanggal" => "Jadwal menyesuaikan"
    ],
    [
        "nomor" => "02",
        "kategori" => "INTELEKTUAL",
        "judul" => "Forum Diskusi Kader",
        "deskripsi" => "Membangun tradisi membaca, berdiskusi, dan menyampaikan gagasan secara kritis.",
        "tanggal" => "Jadwal menyesuaikan"
    ],
    [
        "nomor" => "03",
        "kategori" => "PENGABDIAN",
        "judul" => "Aksi Sosial Masyarakat",
        "deskripsi" => "Menghadirkan gerakan yang bermanfaat melalui kolaborasi dan kepedulian sosial.",
        "tanggal" => "Jadwal menyesuaikan"
    ],
];

$pesan = "";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["kirim_pesan"])) {
    $nama = trim($_POST["nama"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $isi = trim($_POST["isi"] ?? "");

    if ($nama === "" || $email === "" || $isi === "") {
        $pesan = "Mohon lengkapi semua kolom terlebih dahulu.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $pesan = "Format email belum benar. Silakan periksa kembali.";
    } else {
        // Form demo: belum menyimpan atau mengirim pesan ke server/email.
        $pesan = "Terima kasih, " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . ". Form demo berhasil divalidasi. Hubungkan ke database/email untuk menerima pesan.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website resmi profil, informasi, dan dokumentasi kegiatan PK IMM Al-Fatih.">
    <title><?= htmlspecialchars($namaUnit) ?> | IMM Bergerak</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="noise"></div>
    <header class="site-header" id="top">
        <nav class="nav container" aria-label="Navigasi utama">
            <a class="brand" href="#top" aria-label="IMM Beranda">
                <img class="brand-logo" src="assets/images/logo-pk-imm-al-fatih.png" alt="Logo PK IMM Al-Fatih">
                <span class="brand-copy"><strong>IMM BERGERAK</strong><small><?= htmlspecialchars($namaUnit) ?></small></span>
            </a>
            <button class="menu-toggle" id="menuToggle" aria-label="Buka menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
            <div class="nav-links" id="navLinks">
                <a href="#tentang">Tentang</a>
                <a href="#nilai">Nilai Gerakan</a>
                <a href="#program">Program</a>\n                <a href="#galeri">Galeri</a>
                <a href="#kontak" class="nav-cta">Hubungi Kami <span>↗</span></a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero container">
            <div class="hero-grid"></div>
            <div class="hero-content reveal">
                <div class="eyebrow"><span class="pulse-dot"></span> <?= htmlspecialchars($periode) ?> <i></i> ORGANISASI MAHASISWA</div>
                <h1>Menggerakkan<br><span class="gradient-text">Perubahan.</span><br>Menyalakan Gagasan.</h1>
                <p class="hero-description">Ruang bertumbuh bagi kader mahasiswa untuk menguatkan intelektualitas, nilai keislaman, dan kepedulian sosial melalui gerakan yang nyata.</p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#tentang">Jelajahi IMM <span>↗</span></a>
                    <a class="button button-ghost" href="#program"><span class="play-icon">▶</span> Lihat Program</a>
                </div>
                <div class="hero-meta">
                    <div><strong>01</strong><span>Intelektualitas</span></div>
                    <div><strong>02</strong><span>Religiusitas</span></div>
                    <div><strong>03</strong><span>Humanitas</span></div>
                </div>
            </div>
            <div class="hero-visual reveal">
                <div class="orbit orbit-one"></div><div class="orbit orbit-two"></div>
                <div class="visual-card">
                    <div class="visual-top"><span>IDENTITAS GERAKAN</span><span class="live-label">● ACTIVE</span></div>
                    <img class="hero-logo" src="assets/images/logo-pk-imm-al-fatih.png" alt="Logo PK IMM Al-Fatih">
                    <div class="visual-caption">INTELEKTUALITAS<br><b>RELIGIUSITAS</b><br>HUMANITAS</div>
                    <div class="visual-line"></div>
                    <div class="visual-bottom"><span>BERILMU</span><span>BERAMAL</span><span>BERGERAK</span></div>
                </div>
                <div class="floating-chip chip-top">✳ KADER BERKEMAJUAN</div>
                <div class="floating-chip chip-bottom"><span class="chip-dot"></span> Ide • Aksi • Kolaborasi</div>
                <div class="crosshair crosshair-one">+</div><div class="crosshair crosshair-two">+</div>
            </div>
            <a class="scroll-cue" href="#tentang"><span></span> SCROLL UNTUK MENJELAJAH</a>
        </section>

        <section class="ticker" aria-label="Slogan organisasi">
            <div class="ticker-track">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <span>FASTABIQUL KHAIRAT</span><b>✳</b><span>BERILMU • BERAMAL • BERGERAK</span><b>✳</b>
                <?php endfor; ?>
            </div>
        </section>

        <section class="section container about-section" id="tentang">
            <div class="section-label reveal"><span>01 / TENTANG KAMI</span><i></i></div>
            <div class="about-grid">
                <div class="section-heading reveal"><p class="overline">LEBIH DARI SEKADAR ORGANISASI</p><h2>Tempat gagasan<br>bertemu <span class="gradient-text">aksi.</span></h2></div>
                <div class="about-copy reveal">
                    <p class="lead">Ikatan Mahasiswa Muhammadiyah (IMM) merupakan organisasi mahasiswa yang menjadi ruang pembinaan, pengembangan potensi, dan pengabdian.</p>
                    <p>Melalui proses perkaderan dan kegiatan organisasi, kader didorong untuk berpikir kritis, berakhlak, serta hadir memberi manfaat bagi masyarakat. Website ini menjadi media informasi dan dokumentasi kegiatan <?= htmlspecialchars($namaUnit) ?>.</p>
                    <a class="text-link" href="#nilai">Kenali nilai gerakan <span>↗</span></a>
                </div>
            </div>
        </section>

        <section class="section values-section" id="nilai">
            <div class="container">
                <div class="section-label reveal"><span>02 / NILAI GERAKAN</span><i></i></div>
                <div class="values-intro reveal"><h2>Tiga nilai.<br><span class="gradient-text">Satu gerakan.</span></h2><p>Menjadi landasan dalam belajar, mengambil peran, dan memberi dampak.</p></div>
                <div class="value-cards">
                    <article class="value-card reveal"><span class="card-number">01</span><div class="value-icon">⌁</div><h3>Intelektualitas</h3><p>Mengembangkan budaya ilmu, berpikir kritis, dan terbuka terhadap gagasan.</p><span class="card-line"></span></article>
                    <article class="value-card featured reveal"><span class="card-number">02</span><div class="value-icon">✳</div><h3>Religiusitas</h3><p>Meneguhkan nilai keislaman sebagai pedoman dalam bersikap dan bergerak.</p><span class="card-line"></span></article>
                    <article class="value-card reveal"><span class="card-number">03</span><div class="value-icon">◎</div><h3>Humanitas</h3><p>Menumbuhkan kepedulian, empati, dan keberpihakan pada kemaslahatan bersama.</p><span class="card-line"></span></article>
                </div>
            </div>
        </section>

        <section class="section container programs-section" id="program">
            <div class="section-label reveal"><span>03 / RUANG AKSI</span><i></i></div>
            <div class="program-heading reveal"><div><p class="overline">DARI GAGASAN MENJADI GERAKAN</p><h2>Program <span class="gradient-text">unggulan.</span></h2></div><p>Beberapa contoh ruang kegiatan yang dapat dikembangkan oleh komisariat. Sesuaikan dengan agenda resmi organisasi.</p></div>
            <div class="program-list">
                <?php foreach ($kegiatan as $item): ?>
                    <article class="program-item reveal">
                        <span class="program-no"><?= htmlspecialchars($item["nomor"]) ?></span>
                        <div class="program-main"><span class="program-category"><?= htmlspecialchars($item["kategori"]) ?></span><h3><?= htmlspecialchars($item["judul"]) ?></h3><p><?= htmlspecialchars($item["deskripsi"]) ?></p></div>
                        <div class="program-date"><?= htmlspecialchars($item["tanggal"]) ?></div>
                        <span class="program-arrow">↗</span>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="section gallery-section" id="galeri">
            <div class="container">
                <div class="section-label reveal"><span>04 / GALERI KEGIATAN</span><i></i></div>
                <div class="gallery-heading reveal">
                    <div><p class="overline">CERITA DALAM SETIAP LANGKAH</p><h2>Jejak <span class="gradient-text">kebersamaan.</span></h2></div>
                    <p>Potret proses, ruang belajar, dan kebersamaan kader PK IMM Al-Fatih dalam menjalankan gerakan.</p>
                </div>
                <div class="gallery-grid">
                    <figure class="gallery-card gallery-large reveal">
                        <img src="assets/images/kegiatan-malam.jpg" alt="Kebersamaan kader PK IMM Al-Fatih pada kegiatan malam" loading="lazy">
                        <figcaption><span>01</span><strong>Ruang Kebersamaan</strong></figcaption>
                    </figure>
                    <figure class="gallery-card reveal">
                        <img src="assets/images/kegiatan-kebersamaan.jpg" alt="Kegiatan kebersamaan kader di area persawahan" loading="lazy">
                        <figcaption><span>02</span><strong>Belajar dan Bertumbuh</strong></figcaption>
                    </figure>
                    <figure class="gallery-card reveal">
                        <img src="assets/images/kegiatan-diskusi.jpg" alt="Kegiatan kader PK IMM Al-Fatih di dalam ruangan" loading="lazy">
                        <figcaption><span>03</span><strong>Ruang Kaderisasi</strong></figcaption>
                    </figure>
                    <figure class="gallery-card reveal">
                        <img src="assets/images/kegiatan-pelantikan.jpg" alt="Kebersamaan kader dalam kegiatan organisasi" loading="lazy">
                        <figcaption><span>04</span><strong>Merawat Solidaritas</strong></figcaption>
                    </figure>
                    <figure class="gallery-card gallery-tall reveal">
                        <img src="assets/images/kegiatan-lapangan-portrait.jpg" alt="Dokumentasi kegiatan lapangan kader PK IMM Al-Fatih" loading="lazy">
                        <figcaption><span>05</span><strong>Bergerak Bersama</strong></figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <section class="quote-section">
            <div class="container quote-inner reveal"><span class="quote-mark">“</span><p>Fastabiqul Khairat — berlomba-lomba dalam kebaikan, menghadirkan ilmu yang bermanfaat dan aksi yang berdampak.</p><span class="quote-caption">SEMANGAT GERAKAN IMM</span></div>
        </section>

        <section class="section container contact-section" id="kontak">
            <div class="section-label reveal"><span>04 / TERHUBUNG</span><i></i></div>
            <div class="contact-grid">
                <div class="reveal"><p class="overline">MARI BERKOLABORASI</p><h2>Punya ide?<br><span class="gradient-text">Mari bergerak.</span></h2><p class="contact-desc">Terbuka untuk kolaborasi, diskusi, dan kegiatan yang membawa manfaat.</p><div class="contact-detail"><span>EMAIL ORGANISASI</span><a href="mailto:imm@example.com">imm@example.com ↗</a></div><div class="contact-detail"><span>MEDIA SOSIAL</span><a href="https://instagram.com/" target="_blank" rel="noopener">Instagram organisasi ↗</a></div></div>
                <form class="contact-form reveal" method="post" action="#kontak">
                    <div class="form-top"><span>KIRIM PESAN</span><span>✳</span></div>
                    <?php if ($pesan !== ""): ?><div class="form-notice"><?= htmlspecialchars($pesan, ENT_QUOTES, "UTF-8") ?></div><?php endif; ?>
                    <label for="nama">Nama</label><input id="nama" name="nama" type="text" placeholder="Nama lengkap" required>
                    <label for="email">Email</label><input id="email" name="email" type="email" placeholder="nama@email.com" required>
                    <label for="isi">Pesan</label><textarea id="isi" name="isi" rows="4" placeholder="Ceritakan ide atau kebutuhan kolaborasimu..." required></textarea>
                    <button class="button button-primary submit-button" type="submit" name="kirim_pesan">Kirim pesan <span>↗</span></button>
                    <small class="form-hint">Form ini masih berupa demo validasi, belum menyimpan pesan ke database.</small>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-inner"><a class="brand" href="#top"><img class="brand-logo" src="assets/images/logo-pk-imm-al-fatih.png" alt="Logo PK IMM Al-Fatih"><span class="brand-copy"><strong>IMM BERGERAK</strong><small><?= htmlspecialchars($namaUnit) ?></small></span></a><p>Berilmu • Beramal • Bergerak</p><span>© <?= date("Y") ?> <?= htmlspecialchars($namaUnit) ?>. Template website organisasi.</span></div>
    </footer>
    <button class="back-top" id="backTop" aria-label="Kembali ke atas">↑</button>
    <script src="assets/js/script.js"></script>
</body>
</html>
