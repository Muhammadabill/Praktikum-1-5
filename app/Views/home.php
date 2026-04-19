<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- HERO / HEADER -->
<div style="
background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)),
url('https://png.pngtree.com/background/20230823/original/pngtree-breaking-news-template-for-tv-or-podcast-exploring-the-intersection-of-picture-image_4787417.jpg');
background-size: cover;
background-position: center;
padding: 80px 20px;
color: white;
border-radius: 12px;
margin-bottom: 30px;
text-align: center;
">

    <h1 style="font-size: 42px; margin-bottom: 10px; font-weight: bold;">
        📰 Media Daily Abil
    </h1>

    <p style="font-size: 18px; max-width: 750px; margin: 0 auto 25px; line-height: 1.6;">
        Portal berita modern yang menyajikan informasi <b>terkini, cepat, dan terpercaya</b> seputar teknologi, pemrograman, dan dunia kampus.
    </p>

    <a href="<?= base_url('/artikel'); ?>" style="
        display: inline-block;
        background: #ff3b3b;
        color: white;
        padding: 12px 30px;
        text-decoration: none;
        border-radius: 30px;
        font-weight: bold;
        letter-spacing: 1px;
    ">
        🔥 Lihat Berita
    </a>

</div>

<!-- KATEGORI -->
<div style="
display: grid;
grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
gap: 20px;
margin-bottom: 30px;
">

    <div style="
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    border-left: 5px solid #ff3b3b;
    ">
        <h3>📰 Berita Terkini</h3>
        <p>Update terbaru seputar teknologi dan dunia digital yang sedang trending.</p>
    </div>

    <div style="
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    border-left: 5px solid #4285f4;
    ">
        <h3>💻 Tips & Tutorial</h3>
        <p>Panduan coding mulai dari dasar hingga tingkat lanjut untuk meningkatkan skill Anda.</p>
    </div>

    <div style="
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    border-left: 5px solid #34a853;
    ">
        <h3>🎓 Dunia Kampus</h3>
        <p>Berita dan aktivitas mahasiswa serta informasi akademik terkini.</p>
    </div>

</div>

<!-- DESKRIPSI -->
<div style="
padding: 25px;
border-radius: 10px;
background: #ffffff;
box-shadow: 0 5px 12px rgba(0,0,0,0.08);
margin-bottom: 30px;
">

    <h2 style="margin-bottom: 15px;"><?= esc($title) ?></h2>

    <p style="line-height: 1.8; color: #444;">
        <b>Media Daily Abil</b> adalah platform berita digital yang dirancang untuk memberikan pengalaman membaca yang modern dan informatif.
        Kami menghadirkan konten berkualitas tinggi yang relevan dengan perkembangan teknologi saat ini.
    </p>

    <p style="line-height: 1.8; color: #444;">
        Jelajahi berbagai artikel menarik dan tetap update dengan informasi terbaru setiap harinya.
    </p>

</div>

<!-- FOOTER MINI -->
<div style="text-align:center; color:#777; font-size:14px; margin-top:40px;">
    © 2026 Media Daily Abil | Portal Berita Modern
</div>

<?= $this->endSection() ?>