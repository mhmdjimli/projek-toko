<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Toko HP Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        :root {
            --primary-color: #4158D0;
            --gradient-1: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
            --gradient-2: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
            --gradient-3: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
            --text-dark: #2c3e50;
            --text-light: #ffffff;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--gradient-3);
            min-height: 100vh;
        }

        .container {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        /* Header Styling */
        .dashboard-header {
            background: var(--gradient-2);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 20px var(--shadow-color);
            margin-bottom: 25px;
        }

        .dashboard-header h2 {
            color: var(--text-light);
            margin: 0;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        /* Sidebar Styling */
        .sidebar {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 20px var(--shadow-color);
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            display: flex;
            align-items: center;
            padding: 15px;
            color: var(--text-dark);
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.4s ease;
            font-weight: 500;
            background: rgba(255, 255, 255, 0.7);
        }

        .sidebar ul li a:hover {
            background: var(--gradient-1);
            color: var(--text-light);
            transform: translateX(8px);
            box-shadow: 0 4px 15px rgba(65, 88, 208, 0.3);
        }

        .sidebar ul li a i {
            margin-right: 12px;
            width: 24px;
            text-align: center;
            font-size: 1.2em;
        }

        /* Main Content Area */
        .main-content {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px var(--shadow-color);
            min-height: 500px;
        }

        /* Logout Button */
        .btn-logout {
            background: var(--gradient-1);
            color: var(--text-light);
            border: none;
            padding: 12px 25px;
            border-radius: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(65, 88, 208, 0.3);
        }

        .btn-logout:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(65, 88, 208, 0.4);
        }

        /* Footer */
        footer {
            background: var(--gradient-2);
            padding: 25px 0;
            text-align: center;
            color: var(--text-light);
            border-radius: 15px;
            box-shadow: 0 -4px 20px var(--shadow-color);
            margin-top: 25px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px var(--shadow-color);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px var(--shadow-color);
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .main-content {
            animation: fadeIn 0.5s ease-out;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                margin-bottom: 25px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="dashboard-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2><i class="fas fa-mobile-alt me-3"></i>Admin Dashboard</h2>
                </div>
                <div class="col text-end">
                    <a href="<?= base_url('logout') ?>" class="btn btn-logout">
                        <i class="fas fa-sign-out-alt me-2"></i>Logout
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="sidebar">
                    <ul>
                        <li>
                            <a href="<?= base_url('admin/dashboard') ?>">
                                <i class="fas fa-home"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/daftar-hp') ?>">
                                <i class="fas fa-mobile"></i>Pilihan HP
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/transaksi') ?>">
                                <i class="fas fa-shopping-cart"></i>Transaksi
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/pelanggan') ?>">
                                <i class="fas fa-users"></i>Pelanggan
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="main-content">
                    <?= $this->renderSection('main'); ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <i class="fas fa-store me-2"></i>
            &copy; 2024 Toko HP Koko Jimli | Jambi
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>