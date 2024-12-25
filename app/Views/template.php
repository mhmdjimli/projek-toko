<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko HP KOKO JIMLI</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <style>
      .navbar-brand {
        font-size: 1.5rem;
        font-weight: bold;
        color: #dc3545 !important;
      }
      
      .nav-link {
        font-weight: 500;
      }
      
      .hero-section {
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/api/placeholder/1200/400');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
        margin-bottom: 2rem;
      }

      .cart-button {
        transition: all 0.3s ease;
      }

      .cart-button:hover {
        transform: translateY(-2px);
      }

      .cart-badge {
        position: relative;
        top: -2px;
      }

      footer {
        background: linear-gradient(45deg, #dc3545, #fd7e14) !important;
        color: white;
      }

      .social-icons a {
        color: white;
        margin: 0 10px;
        font-size: 1.2rem;
        transition: all 0.3s ease;
      }

      .social-icons a:hover {
        transform: translateY(-3px);
        opacity: 0.8;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <i class="fas fa-mobile-alt me-2"></i>
          KOKO JIMLI
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontak</a>
            </li>
          </ul>
          <a href="<?= base_url() ?>chart" class="btn btn-outline-danger ms-3 cart-button">
            <i class="fas fa-shopping-cart me-2"></i>
            Keranjang
            <span class="badge bg-danger cart-badge">4</span>
          </a>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section text-center">
      <div class="container">
        <h1 class="display-4 fw-bold mb-4">Selamat Datang di Toko HP KOKO JIMLI</h1>
        <p class="lead mb-4">Temukan smartphone terbaru dengan harga terbaik</p>
        <button class="btn btn-danger btn-lg">Lihat Koleksi</button>
      </div>
    </div>

    <!-- Main Content -->
    <main>
      <div class="container">
        <?= $this->renderSection('main') ?>
      </div>
    </main>

    <!-- Footer -->
    <footer class="py-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 text-center text-md-start">
            <h5 class="mb-3">KOKO JIMLI</h5>
            <p class="mb-0">Toko HP Terpercaya di Jambi</p>
          </div>
          <div class="col-md-4 text-center my-3 my-md-0">
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
          <div class="col-md-4 text-center text-md-end">
            <p class="mb-0">© JAMBI 2024. Toko HP KOKO JIMLI.</p>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>