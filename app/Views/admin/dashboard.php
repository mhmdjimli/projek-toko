<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<div class="dashboard-container">
    <!-- Dashboard Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="display-6 fw-bold text-dark mb-0">
            <i class="fas fa-tachometer-alt me-2 text-primary"></i>
            Dashboard
        </h2>
        <div class="btn-group">
            <button class="btn btn-outline-primary btn-sm">
                <i class="fas fa-download me-1"></i>
                Export
            </button>
            <button class="btn btn-outline-primary btn-sm">
                <i class="fas fa-print me-1"></i>
                Print
            </button>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-5">
        <!-- Revenue Card -->
        <div class="col-md-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h5 class="text-muted fw-semibold mb-1">Total Pendapatan</h5>
                            <h3 class="display-6 fw-bold text-success mb-0">Rp130.000.000</h3>
                        </div>
                        <div class="icon-box bg-success bg-opacity-10 rounded-circle p-3">
                            <i class="fas fa-money-bill-wave fa-2x text-success"></i>
                        </div>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%"></div>
                    </div>
                    <div class="mt-3 text-success">
                        <i class="fas fa-arrow-up me-1"></i>
                        <small>15% lebih tinggi dari bulan lalu</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transactions Card -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h5 class="text-muted fw-semibold mb-1">Total Transaksi</h5>
                            <h3 class="display-6 fw-bold text-primary mb-0">145</h3>
                        </div>
                        <div class="icon-box bg-primary bg-opacity-10 rounded-circle p-3">
                            <i class="fas fa-shopping-cart fa-2x text-primary"></i>
                        </div>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%"></div>
                    </div>
                    <div class="mt-3 text-primary">
                        <i class="fas fa-arrow-up me-1"></i>
                        <small>23 transaksi hari ini</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0 py-3">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold">Aktivitas Terkini</h5>
                <button class="btn btn-link text-decoration-none">Lihat Semua</button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="list-group list-group-flush">
                <div class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                        <div class="icon-box bg-success bg-opacity-10 rounded-circle p-2 me-3">
                            <i class="fas fa-check text-success"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Transaksi Berhasil</h6>
                            <small class="text-muted">iPhone 13 Pro - Rp15.000.000</small>
                        </div>
                        <small class="text-muted ms-auto">5 menit yang lalu</small>
                    </div>
                </div>
                <div class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                        <div class="icon-box bg-warning bg-opacity-10 rounded-circle p-2 me-3">
                            <i class="fas fa-clock text-warning"></i>
                        </div>
                        <div>
                            <h6 class="mb-1">Menunggu Pembayaran</h6>
                            <small class="text-muted">Samsung Galaxy S24 - Rp12.500.000</small>
                        </div>
                        <small class="text-muted ms-auto">15 menit yang lalu</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .dashboard-container {
        padding: 1.5rem;
        background-color: #f8f9fa;
        border-radius: 0.5rem;
    }
    
    .icon-box {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card {
        transition: transform 0.2s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .progress {
        border-radius: 10px;
    }

    .progress-bar {
        border-radius: 10px;
    }
</style>
<?= $this->endSection();?>