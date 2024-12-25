<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Shopping Cart - Toko HP Jimli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        :root {
            --primary-color: #4f46e5;
            --secondary-color: #6366f1;
            --accent-color: #818cf8;
            --background-color: #f8fafc;
        }

        body {
            background-color: var(--background-color);
            font-family: 'Inter', sans-serif;
        }

        .navbar-custom {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            padding: 1rem 0;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        .cart-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .cart-item {
            background: white;
            border-radius: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
            border: 1px solid #f1f5f9;
            margin-bottom: 1.5rem;
            padding: 1.5rem;
        }

        .cart-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .cart-image {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .product-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .product-description {
            color: #64748b;
            font-size: 0.95rem;
        }

        .quantity-badge {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 25px;
            font-weight: 500;
            display: inline-block;
        }

        .price-tag {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .delete-btn {
            border-radius: 50%;
            width: 45px;
            height: 45px;
            padding: 0;
            line-height: 45px;
            text-align: center;
            transition: all 0.3s ease;
            background-color: #fee2e2;
            border: none;
            color: #ef4444;
        }

        .delete-btn:hover {
            background-color: #fecaca;
            transform: rotate(90deg);
        }

        .summary-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .summary-header {
            color: #1e293b;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #f1f5f9;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            color: #64748b;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 2px solid #f1f5f9;
            font-weight: 600;
            color: #1e293b;
            font-size: 1.25rem;
        }

        .btn-checkout {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            border: none;
            border-radius: 12px;
            padding: 1rem;
            font-weight: 500;
            width: 100%;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .btn-checkout:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
            color: white;
        }

        .btn-continue {
            background: white;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            border-radius: 12px;
            padding: 1rem;
            font-weight: 500;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-continue:hover {
            background: var(--primary-color);
            color: white;
        }

        .empty-cart {
            text-align: center;
            padding: 3rem;
        }

        .empty-cart i {
            font-size: 4rem;
            color: #cbd5e1;
            margin-bottom: 1.5rem;
        }

        .empty-cart h3 {
            color: #1e293b;
            margin-bottom: 1rem;
        }

        .empty-cart p {
            color: #64748b;
            margin-bottom: 2rem;
        }

        @keyframes removeItem {
            0% {
                opacity: 1;
                transform: translateX(0);
            }
            100% {
                opacity: 0;
                transform: translateX(-100%);
                height: 0;
                margin: 0;
                padding: 0;
            }
        }

        .removing {
            animation: removeItem 0.5s ease forwards;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-mobile-alt me-2"></i>
                Toko HP Jimli
            </a>
            <div class="ms-auto">
                <span class="badge bg-white text-primary rounded-pill px-3 py-2">
                    <i class="fas fa-shopping-cart me-1"></i>3
                </span>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="text-center mb-2" style="color: #1e293b; font-weight: 600;">Shopping Cart</h1>
                <p class="text-center" style="color: #64748b;">Review your items and proceed to checkout</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="cart-container" id="cartItemsContainer">
                    <!-- Cart Item 1 -->
                    <div class="cart-item" data-price="2000000">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="images/hp1.jpeg" alt="Galaxy S24" class="cart-image" />
                            </div>
                            <div class="col-md-4">
                                <h5 class="product-name">Samsung Galaxy S24</h5>
                                <p class="product-description">Premium Smartphone</p>
                            </div>
                            <div class="col-md-2 text-center">
                                <span class="quantity-badge">
                                    <i class="fas fa-times me-1"></i>1
                                </span>
                            </div>
                            <div class="col-md-2 text-center">
                                <span class="price-tag">Rp 2.000.000</span>
                            </div>
                            <div class="col-md-1 text-end">
                                <button class="delete-btn" onclick="removeCartItem(this)">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="cart-item" data-price="11000000">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="images/hp2.jpeg" alt="iPhone 11" class="cart-image" />
                            </div>
                            <div class="col-md-4">
                                <h5 class="product-name">iPhone 11</h5>
                                <p class="product-description">Apple Smartphone</p>
                            </div>
                            <div class="col-md-2 text-center">
                                <span class="quantity-badge">
                                    <i class="fas fa-times me-1"></i>1
                                </span>
                            </div>
                            <div class="col-md-2 text-center">
                                <span class="price-tag">Rp 11.000.000</span>
                            </div>
                            <div class="col-md-1 text-end">
                                <button class="delete-btn" onclick="removeCartItem(this)">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 3 -->
                    <div class="cart-item" data-price="2000000">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="images/hp3.jpeg" alt="Infinix" class="cart-image" />
                            </div>
                            <div class="col-md-4">
                                <h5 class="product-name">Infinix Note</h5>
                                <p class="product-description">Budget Smartphone</p>
                            </div>
                            <div class="col-md-2 text-center">
                                <span class="quantity-badge">
                                    <i class="fas fa-times me-1"></i>1
                                </span>
                            </div>
                            <div class="col-md-2 text-center">
                                <span class="price-tag">Rp 2.000.000</span>
                            </div>
                            <div class="col-md-1 text-end">
                                <button class="delete-btn" onclick="removeCartItem(this)">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="summary-card">
                    <h4 class="summary-header">Order Summary</h4>
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span id="subtotal">Rp 15.000.000</span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping</span>
                        <span>Free</span>
                    </div>
                    <div class="summary-total">
                        <span>Total</span>
                        <span id="totalAmount">Rp 15.000.000</span>
                    </div>
                    <div class="mt-4">
                        <a href="<?= base_url('checkout')?>" class="btn btn-checkout">
                            <i class="fas fa-credit-card me-2"></i>Proceed to Checkout
                        </a>
                        <a href="<?= base_url()?>" class="btn btn-continue">
                            <i class="fas fa-arrow-left me-2"></i>Continue Shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function formatCurrency(amount) {
            return 'Rp ' + amount.toLocaleString() + ',-';
        }
        
        function updateTotals() {
            const cartItems = document.querySelectorAll('.cart-item:not(.removing)');
            let total = 0;
            
            cartItems.forEach(item => {
                const price = parseInt(item.dataset.price);
                total += price;
            });
            
            document.getElementById('subtotal').textContent = formatCurrency(total);
            document.getElementById('totalAmount').textContent = formatCurrency(total);
            
            const cartBadge = document.querySelector('.badge');
            cartBadge.textContent = cartItems.length;
        }
        
        function removeCartItem(button) {
            const cartItem = button.closest('.cart-item');
            cartItem.classList.add('removing');
            
            setTimeout(() => {
                cartItem.remove();
                updateTotals();
                
                if (document.querySelectorAll('.cart-item').length === 0) {
                    const container = document.getElementById('cartItemsContainer');
                    container.innerHTML = `
                        <div class="empty-cart">
                            <i class="fas fa-shopping-cart"></i>
                            <h3>Your cart is empty</h3>
                            <p>Add some items to your cart to get started!</p>
                            <a href="<?= base_url()?>" class="btn btn-checkout">
                                <i class="fas fa-shopping-bag me-2"></i>Start Shopping
                            </a>
                        </div>
                    `;
                }
            }, 500);
        }
    </script>
</body>
</html>