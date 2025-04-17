<?php
include 'includes/header.php';
include 'includes/navbar.php';

?>

    
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0" data-aos="fade-up">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Login</h2>
                        
                        <form action="includes/handle_login.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
                        </form>
                        <div class="mt-4 text-center">
                            <p>Don't have an account? <a href="register.php">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <p>© 2025 Gestionnaire. All rights reserved.</p>
        </div>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</div>