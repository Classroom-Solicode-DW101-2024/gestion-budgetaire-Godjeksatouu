<?php
session_start();
include 'config/db.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4">Start you Managing your Budget Today.</h1>
                    <p class="lead mb-4">We simplify finances, track expenses, and help you manage your budgets effectively.</p>
                    <a href="register.php" class="btn btn-primary btn-lg rounded-pill px-4">Get Started Today</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/imgs/dashboard-preview.png" alt="Budget Dashboard" class="img-fluid rounded ">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Key Features</h2>
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-primary text-white rounded-circle mb-3 mx-auto">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h5 class="card-title">Track Expenses</h5>
                            <p class="card-text">Monitor where your money goes with detailed expense tracking and categorization.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-primary text-white rounded-circle mb-3 mx-auto">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <h5 class="card-title">Budget Planning</h5>
                            <p class="card-text">Create custom budgets for different categories and track your progress.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Feature 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-primary text-white rounded-circle mb-3 mx-auto">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <h5 class="card-title">Financial Reports</h5>
                            <p class="card-text">Generate detailed reports to visualize your financial health at a glance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">What Our Users Say</h2>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card testimonial-card mb-4">
                        <div class="card-body p-4">
                            <p class="mb-3">"This budget tool has completely transformed how I manage my finances. Now I always know where my money is going."</p>
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-primary text-white rounded-circle">JS</div>
                                <div class="ms-3">
                                    <h6 class="mb-0">John Smith</h6>
                                    <small class="text-muted">Marketing Professional</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card testimonial-card mb-4">
                        <div class="card-body p-4">
                            <p class="mb-3">"The visualization tools make it so easy to understand my spending habits and improve my financial decisions."</p>
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-primary text-white rounded-circle">LT</div>
                                <div class="ms-3">
                                    <h6 class="mb-0">Laura Thompson</h6>
                                    <small class="text-muted">Small Business Owner</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card testimonial-card mb-4">
                        <div class="card-body p-4">
                            <p class="mb-3">"I've finally been able to save for my dream vacation thanks to the budgeting features in this amazing app."</p>
                            <div class="d-flex align-items-center">
                                <div class="avatar bg-primary text-white rounded-circle">MR</div>
                                <div class="ms-3">
                                    <h6 class="mb-0">Michael Rodriguez</h6>
                                    <small class="text-muted">Software Developer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>