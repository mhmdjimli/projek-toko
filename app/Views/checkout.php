<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<style>
    :root {
        --primary-color: #4f46e5;
        --primary-light: #eef2ff;
        --secondary-color: #6366f1;
        --text-primary: #1e293b;
        --text-secondary: #64748b;
        --border-color: #e2e8f0;
    }

    body {
        background-color: #f8fafc;
        color: var(--text-primary);
    }

    .card {
        border: none;
        border-radius: 1.25rem;
        overflow: hidden;
        transition: all 0.3s ease;
        background: white;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    }
    
    .card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(79, 70, 229, 0.1);
    }
    
    .card-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        padding: 1.25rem;
        border: none;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        border: none;
        border-radius: 1rem;
        padding: 1rem 1.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(79, 70, 229, 0.2);
    }
    
    .badge {
        padding: 0.75rem 1.25rem;
        font-size: 0.9rem;
        border-radius: 0.75rem;
        font-weight: 500;
    }
    
    .form-control {
        border-radius: 0.75rem;
        border: 2px solid var(--border-color);
        padding: 0.75rem 1rem;
        font-size: 1rem;
    }
    
    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
    }

    .icon-circle {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: var(--primary-light);
        color: var(--primary-color);
    }

    .section-title {
        font-size: 1.75rem;
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 2rem;
    }

    .total-price {
        background: var(--primary-light);
        border-radius: 1rem;
        padding: 1.5rem;
    }

    .product-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 1rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .input-group {
        border-radius: 0.75rem;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(79, 70, 229, 0.1);
    }

    .input-group .btn {
        border-radius: 0 0.75rem 0.75rem 0;
        padding: 0.75rem 1.25rem;
    }
</style>

<div class="container py-5">
    <!-- Order Review Header -->
    <div class="d-flex align-items-center mb-5">
        <div class="icon-circle me-3">
            <i class="fas fa-clipboard-check fa-lg"></i>
        </div>
        <h2 class="section-title mb-0">Review Order</h2>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <!-- Order Summary Card -->
            <div class="card mb-4 card-hover">
                <div class="card-header">
                    <h4 class="mb-0 text-white">
                        <i class="fas fa-shopping-bag me-2"></i>
                        Order Summary
                    </h4>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img src="/api/placeholder/80/80" class="product-image me-4" alt="Product Image">
                        <div>
                            <h5 class="mb-2 fw-bold">ARYA @1</h5>
                            <h4 class="text-primary mb-0 fw-bold">Rp15.000.000</h4>
                        </div>
                    </div>
                    <div class="row g-3 pt-3 border-top">
                        <div class="col-sm-6">
                            <p class="text-secondary mb-1">Subtotal:</p>
                            <h5 class="fw-bold text-primary">Rp15.000.000</h5>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-secondary mb-1">Shipping:</p>
                            <h5 class="fw-bold text-primary">Free</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shipping Address Card -->
            <div class="card mb-4 card-hover">
                <div class="card-header">
                    <h4 class="mb-0 text-white">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        Alamat Pengiriman
                    </h4>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex">
                        <div class="icon-circle me-3">
                            <i class="fas fa-home"></i>
                        </div>
                        <div>
                            <h5 class="mb-2 fw-bold text-primary">Alamat Utama</h5>
                            <p class="mb-0 text-secondary">Jl. Muaro Jambi - Muaro Bulian KM 16, MENDALO.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Method Card -->
            <div class="card card-hover">
                <div class="card-header">
                    <h4 class="mb-0 text-white">
                        <i class="fas fa-credit-card me-2"></i>
                        Metode Pembayaran
                    </h4>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex align-items-start">
                        <div class="icon-circle me-3">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-3 fw-bold text-primary">Transfer Bank</h5>
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-primary me-3">BCA</span>
                                <h5 class="mb-0 fw-bold">JIMLI ASIDIK</h5>
                            </div>
                            <div class="input-group">
                                <input type="text" value="1122334455" class="form-control" readonly>
                                <button class="btn btn-primary" type="button" onclick="navigator.clipboard.writeText('1122334455')">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Total Payment Card -->
            <div class="card card-hover">
                <div class="card-body p-4">
                    <div class="total-price mb-4">
                        <h5 class="mb-2 text-primary fw-bold">Total Pembayaran</h5>
                        <h3 class="text-primary mb-0 fw-bold">Rp15.000.000</h3>
                    </div>
                    <form action="<?= base_url('submit')?>" method="POST">
                        <button type="submit" class="btn btn-primary w-100 btn-lg">
                            <i class="fas fa-check-circle me-2"></i>
                            Konfirmasi Pesanan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>