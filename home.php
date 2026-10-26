<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to My Company</h2>
        <p class="text-muted mb-0">Manage your products, customers, staff and orders in one place</p>
    </div>
</div>

<div id="myCarousel" class="carousel slide shadow-sm mb-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded">
        <div class="carousel-item active bg-primary text-white text-center py-5">
            <div class="py-5">
                <i class="bi bi-box-seam-fill display-1"></i>
                <h2 class="mt-3">Quality Products</h2>
                <p class="mb-5">Browse and manage our full range of products</p>
            </div>
        </div>
        <div class="carousel-item bg-success text-white text-center py-5">
            <div class="py-5">
                <i class="bi bi-people-fill display-1"></i>
                <h2 class="mt-3">Happy Customers</h2>
                <p class="mb-5">Keep track of every customer you serve</p>
            </div>
        </div>
        <div class="carousel-item bg-dark text-white text-center py-5">
            <div class="py-5">
                <i class="bi bi-receipt display-1"></i>
                <h2 class="mt-3">Fast Invoicing</h2>
                <p class="mb-5">Create orders and print invoices in seconds</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row g-4">
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-box-seam-fill text-primary display-4"></i>
                <h5 class="mt-3">Products</h5>
                <p class="text-muted">Add, edit and remove products from your inventory.</p>
                <a href="products.php" class="btn btn-primary">Go to Products</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-people-fill text-success display-4"></i>
                <h5 class="mt-3">Customers</h5>
                <p class="text-muted">Keep a record of all your registered customers.</p>
                <a href="customers.php" class="btn btn-success">Go to Customers</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-person-badge-fill text-warning display-4"></i>
                <h5 class="mt-3">Staffs</h5>
                <p class="text-muted">Manage your staff members and their contacts.</p>
                <a href="staffs.php" class="btn btn-warning">Go to Staffs</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-cart-fill text-info display-4"></i>
                <h5 class="mt-3">Orders</h5>
                <p class="text-muted">Create orders, add products and view invoices.</p>
                <a href="orders.php" class="btn btn-info text-white">Go to Orders</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
