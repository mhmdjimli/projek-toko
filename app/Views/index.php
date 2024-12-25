<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko HP Jimli - Premium Smartphone Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #818cf8;
            --accent: #f43f5e;
            --success: #10b981;
            --background: #f8fafc;
            --dark: #1e293b;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--background);
        }

        .navbar-custom {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            padding: 1.2rem 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: white !important;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: white !important;
            transform: translateY(-2px);
        }

        .hero-section {
            background: linear-gradient(45deg, #818cf8, #6366f1);
            border-radius: 30px;
            margin: 2rem 0;
            overflow: hidden;
            position: relative;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 80 80' width='80' height='80'%3E%3Cpath fill='%23fff' fill-opacity='0.1' d='M14 16H9v-2h5V9.87a4 4 0 1 1 2 0V14h5v2h-5v15.95A10 10 0 0 0 23.66 27l-3.46-2 8.2-2.2-2.9 5a12 12 0 0 1-21 0l-2.89-5 8.2 2.2-3.47 2A10 10 0 0 0 14 31.95V16zm40 40h-5v-2h5v-4.13a4 4 0 1 1 2 0V54h5v2h-5v15.95A10 10 0 0 0 63.66 67l-3.47-2 8.2-2.2-2.88 5a12 12 0 0 1-21.02 0l-2.88-5 8.2 2.2-3.47 2A10 10 0 0 0 54 71.95V56zm-39 6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm40-40a2 2 0 1 1 0-4 2 2 0 0 1 0 4zM15 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm40 40a2 2 0 1 0 0-4 2 2 0 0 0 0 4z'%3E%3C/path%3E%3C/svg%3E");
            opacity: 0.2;
        }

        .search-form {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            padding: 2rem;
        }

        .card {
            border: none;
            border-radius: 20px;
            background: white;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px -5px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.1);
        }

        .price-tag {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary);
        }

        .btn-custom {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(99, 102, 241, 0.4);
        }

        .footer {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 4rem 0 2rem;
            margin-top: 5rem;
            border-radius: 30px 30px 0 0;
        }

        .badge {
            padding: 0.6rem 1.2rem;
            border-radius: 50px;
            font-weight: 500;
        }

        .badge-new {
            background: linear-gradient(135deg, #f43f5e, #e11d48);
        }

        .badge-sale {
            background: linear-gradient(135deg, #10b981, #059669);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-mobile-alt me-2"></i>Toko HP Jimli
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-home me-1"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fas fa-sign-in-alt me-1"></i>Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>auth/logout">
                            <i class="fas fa-sign-out-alt me-1"></i>Logout
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>chart">
                            <i class="fas fa-shopping-cart me-1"></i>
                            Cart <span class="badge bg-warning rounded-pill">4</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="hero-section">
            <div class="row align-items-center p-5">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-white mb-4">Discover Premium Smartphones</h1>
                    <p class="lead text-white mb-4">Find the latest and best smartphones at competitive prices.</p>
                    <a href="#products" class="btn btn-custom btn-lg">
                        <i class="fas fa-shopping-bag me-2"></i>Explore Now
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="search-form">
                        <h4 class="mb-4"><i class="fas fa-search me-2"></i>Find Your Perfect Phone</h4>
                        <form action="">
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                                    <input type="text" class="form-control" placeholder="Search by brand...">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                    <input type="text" class="form-control" placeholder="Search by model...">
                                </div>
                            </div>
                            <button class="btn btn-custom w-100">
                                <i class="fas fa-search me-2"></i>Search
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="h3 mb-4 fw-bold" id="products">
            <i class="fas fa-fire me-2"></i>Featured Products
        </h2>

        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="position-absolute top-0 end-0 p-3">
                        <span class="badge badge-new">New</span>
                    </div>
                    <img src="images/hp1.jpeg" class="card-img-top" alt="Samsung Galaxy S24">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Samsung Galaxy S24</h5>
                        <p class="price-tag mb-3">Rp 2.000.000</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="<?= base_url() ?>chart" class="btn btn-custom">
                                <i class="fas fa-cart-plus me-2"></i>Add to Cart
                            </a>
                            <button class="btn btn-outline-primary rounded-circle">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="images/hp2.jpeg" class="card-img-top" alt="iPhone 11">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">iPhone 11</h5>
                        <p class="price-tag mb-3">Rp 11.000.000</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="<?= base_url() ?>chart" class="btn btn-custom">
                                <i class="fas fa-cart-plus me-2"></i>Add to Cart
                            </a>
                            <button class="btn btn-outline-primary rounded-circle">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="position-absolute top-0 end-0 p-3">
                        <span class="badge badge-sale">Sale</span>
                    </div>
                    <img src="images/hp3.jpeg" class="card-img-top" alt="Infinix">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Infinix Note</h5>
                        <p class="price-tag mb-3">Rp 2.000.000</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="<?= base_url() ?>chart" class="btn btn-custom">
                                <i class="fas fa-cart-plus me-2"></i>Add to Cart
                            </a>
                            <button class="btn btn-outline-primary rounded-circle">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="images/hp4.jpeg" class="card-img-top" alt="Redmi Note 11">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Redmi Note 11</h5>
                        <p class="price-tag mb-3">Rp 2.700.000</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="<?= base_url() ?>chart" class="btn btn-custom">
                                <i class="fas fa-cart-plus me-2"></i>Add to Cart
                            </a>
                            <button class="btn btn-outline-primary rounded-circle">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3"><i class="fas fa-mobile-alt me-2"></i>Toko HP Jimli</h5>
                    <p>Your trusted partner for premium smartphones in Jambi.</p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3"><i class="fas fa-map-marker-alt me-2"></i>Location</h5>
                    <p>Jl. Main Street No. 123<br>Jambi, Indonesia</p>
                </div>