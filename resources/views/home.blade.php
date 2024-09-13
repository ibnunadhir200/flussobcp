<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Flusso Bak Cuci Piring</title>
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="{{ url('assets/frontend/images/logo.png') }}" alt="logo" class="img-fluid">
            </div>
            <div class="menu">
                <a href="#">Artikel</a>
                <a href="#">My Profile</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Rasakan Pengalaman Cuci Piring yang Lebih Cepat, Bersih, dan Elegan!</h1>
            <p>Kebersihan adalah kunci utama dalam menjaga kesehatan keluarga, terutama di dapur. Di tengah kesibukan sehari-hari, mencuci piring sering kali menjadi rutinitas yang melelahkan.</p>
            <p> Kini, dengan Flusso Bak Cuci Piring (888), nikmati proses mencuci yang lebih cepat, higienis, dan elegan. Dirancang dengan material premium dan teknologi modern, Flusso memastikan piring, gelas, dan peralatan makan Anda bersih sempurna dengan lebih sedikit usaha!</p>
            <p> Hadirkan kenyamanan dan kemewahan di dapur Anda dengan Flusso untuk dapur yang lebih bersih, sehat, dan bergaya</p>
            <a href="#" class="btn">Hubungi Kami</a>
        </div>
        <div class="hero-image">
            <img src="{{ url('assets/frontend/images/bcp.png') }}" alt="orang" class="img-fluid">
        </div>
    </section>

    <!-- Content Section 1 -->
    <section class="product-features content">
        <!-- Gambar di sebelah kiri -->
        <div class="feature">
            <img src="{{ url('assets/frontend/images/bcp2.png') }}" alt="bcpborder" class="img-fluid">
        </div>
        
        <!-- Teks di sebelah kanan -->
        <div class="text-content">
            <h2>Nyaman, Luas, dan Anti Karat.</h2>
            <h3>Apakah Anda sering mengalami masalah saat mencuci peralatan dapur?</h3>
            <ul>
                <p> Bak terlalu sempit dan air sering terciprat?</p>
                <p>Bak mudah berkarat atau tergores?</p>
                <p> menemukan bak cuci yang elegan dan berkualitas tinggi?</p> 
            </ul>
            <a href="#" class="btn">Hubungi Kami</a>
        </div>
    </section>

    <section class="product-features content2">
        <!-- Gambar di sebelah kiri -->
        <div class="feature2">
            <img src="{{ url('assets/frontend/images/bcp2.png') }}" alt="bcpborder" class="img-fluid">
        </div>
        
        <!-- Teks di sebelah kanan -->
        <div class="text-content2">
            <h2>Nyaman, Luas, dan Anti Karat.</h2>
            <h3>Apakah Anda sering mengalami masalah saat mencuci peralatan dapur?</h3>
        </div>
    </section>
    

    <!-- Promo Section -->
    <section class="promo">
        <h2>Penawaran Spesial untuk Anda!</h2>
        <div class="promo-content">
            <div class="promo-image">
                <img src="https://via.placeholder.com/300x200" alt="Sink Promo">
                <span class="discount">50% OFF</span>
            </div>
            <div class="promo-details">
                <h3>Paket Lengkap Bak Cuci Piring + Afur</h3>
                <p>Diskon hingga 50% untuk pembelian pertama Anda!</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 PAP | PT. PUTRA ABADI PRATAMA</p>
    </footer>
</body>
</html>
