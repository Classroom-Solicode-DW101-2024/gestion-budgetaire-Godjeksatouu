<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="container-fluid">
    <!-- Navbar will be included via PHP include in handle_register.php -->
    
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0" data-aos="fade-up">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Create Account</h2>
                        
                        <!-- Error messages will be displayed by handle_register.php -->
                        
                        <form action="includes/handle_register.php" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2">Register</button>
                        </form>
                        <div class="mt-4 text-center">
                            <p>Already have an account? <a href="login.php">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</div>