<?php
  include('includes/functions.php');
  page_header();
  nav_bar();
?>

        <!-- Hero Section -->
        <main id="home" class="hero-bg text-center h-100">
            <div class="container container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="display-3 fw-bolder mb-3">Unlock the World of Science, Virtually.</h1>
                        <p class="lead text-white-50 mb-4">
                            Experience hands-on learning with our immersive and interactive virtual science labs. Explore concepts in physics, chemistry, and biology without limits.
                        </p>
                        <a href="#experiments" class="btn btn-primary btn-lg px-4 py-3 fw-bold cta-button">Start Experimenting Now</a>
                    </div>
                </div>
            </div>
        </main>

        <!-- Features Section -->
        <section id="features" class="py-5">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold">Why Choose The LabRats?</h2>
                    <p class="lead text-muted">Our platform is designed to provide an engaging, safe, and effective learning experience.</p>
                </div>
                <div class="row text-center g-4">
                    <div class="col-md-4">
                        <div class="card h-100 p-4 feature-card shadow-sm">
                            <div class="icon-circle bg-primary-subtle text-primary mx-auto mb-3"><i class="bi bi-cursor"></i></div>
                            <h3 class="fs-4 fw-semibold">Interactive Simulations</h3>
                            <p class="text-muted">Engage with realistic 3D models. Conduct experiments just as you would in a real lab.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 p-4 feature-card shadow-sm">
                            <div class="icon-circle bg-success-subtle text-success mx-auto mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-flask" viewBox="0 0 16 16">
  <path d="M4.5 0a.5.5 0 0 0 0 1H5v5.36L.503 13.717A1.5 1.5 0 0 0 1.783 16h12.434a1.5 1.5 0 0 0 1.28-2.282L11 6.359V1h.5a.5.5 0 0 0 0-1zM10 2H9a.5.5 0 0 0 0 1h1v1H9a.5.5 0 0 0 0 1h1v1H9a.5.5 0 0 0 0 1h1.22l.61 1H10a.5.5 0 1 0 0 1h1.442l.611 1H11a.5.5 0 1 0 0 1h1.664l.611 1H12a.5.5 0 1 0 0 1h1.886l.758 1.24a.5.5 0 0 1-.427.76H1.783a.5.5 0 0 1-.427-.76l4.57-7.48A.5.5 0 0 0 6 6.5V1h4z"/>
</svg></div>
                            <h3 class="fs-4 fw-semibold">Diverse Subjects</h3>
                            <p class="text-muted">From titrations in chemistry to planetary motion in physics, explore a wide range of topics.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 p-4 feature-card shadow-sm">
                            <div class="icon-circle bg-info-subtle text-info mx-auto mb-3"><i class="bi bi-shield-check"></i></div>
                            <h3 class="fs-4 fw-semibold">Safe & Accessible</h3>
                            <p class="text-muted">Learn without risks. Our virtual environment is 100% safe and can be accessed anytime, anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How it Works Section -->
        <section id="how-it-works" class="py-5 bg-light">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold">Get Started in 3 Easy Steps</h2>
                    <p class="lead text-muted">Begin your journey of discovery in just a few clicks.</p>
                </div>
                <!-- Step 1 -->
                <div class="row align-items-center g-5 mb-5">
                    <div class="col-lg-6">
                        <img src="https://placehold.co/600x450/e9ecef/343a40?text=1.+Select+Your+Experiment" class="img-fluid rounded shadow-lg" alt="Select Experiment">
                    </div>
                    <div class="col-lg-6">
                        <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill fs-5 px-3 py-2 mb-3">Step 1</span>
                        <h3 class="fw-bold fs-2">Choose a Lab</h3>
                        <p class="text-muted lead">Browse our extensive library of experiments across Physics, Chemistry, and Biology. Select the topic you want to explore.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="row align-items-center g-5 mb-5 flex-lg-row-reverse">
                    <div class="col-lg-6">
                        <img src="https://placehold.co/600x450/e9ecef/343a40?text=2.+Interact+and+Learn" class="img-fluid rounded shadow-lg" alt="Interact with Simulation">
                    </div>
                    <div class="col-lg-6">
                        <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill fs-5 px-3 py-2 mb-3">Step 2</span>
                        <h3 class="fw-bold fs-2">Run the Simulation</h3>
                        <p class="text-muted lead">Manipulate variables, use virtual equipment, and conduct your experiment in our realistic and interactive 3D environment.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <img src="https://placehold.co/600x450/e9ecef/343a40?text=3.+Analyze+Your+Data" class="img-fluid rounded shadow-lg" alt="Analyze Data">
                    </div>
                    <div class="col-lg-6">
                        <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill fs-5 px-3 py-2 mb-3">Step 3</span>
                        <h3 class="fw-bold fs-2">Analyze Results</h3>
                        <p class="text-muted lead">Collect data from your experiment, view it in graphs and tables, and draw your own scientific conclusions.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Experiments Section -->
        <section id="experiments" class="py-5">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold">Featured Experiments</h2>
                    <p class="lead text-muted">Dive into some of our most popular simulations and start your scientific journey.</p>
                </div>
                <div class="row text g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm experiment-card overflow-hidden">
                            <img src="https://placehold.co/600x400/0d6efd/ffffff?text=Virtual+Chemistry+Lab" class="card-img-top" alt="Physics Lab">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-4">Chemistry Lab</h5>
                                <p class="card-text text-muted">Explore the laws of motion, electricity, and optics. Build circuits, launch projectiles, and bend light in our physics simulator.</p>
                                <a href="list.php" class="fw-semibold text-primary text-decoration-none">Try Simulation <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm experiment-card overflow-hidden">
                            <img src="https://placehold.co/600x400/198754/ffffff?text=Virtual+Physics+Lab" class="card-img-top" alt="Biology Lab">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-4">Physics Lab</h5>
                                <p class="card-text text-muted">Mix chemicals, observe reactions, and learn about molecular structures in a safe, virtual environment. No safety goggles required!</p>
                                <a href="list.php" class="fw-semibold text-primary text-decoration-none">Try Simulation <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm experiment-card overflow-hidden">
                            <img src="https://placehold.co/600x400/ff982aff/ffffff?text=Virtual+Biology+Lab" class="card-img-top" alt="Biology Lab">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold fs-4">Biology Lab</h5>
                                <p class="card-text text-muted">Mix chemicals, observe reactions, and learn about molecular structures in a safe, virtual environment. No safety goggles required!</p>
                                <a href="list.php" class="fw-semibold text-primary text-decoration-none">Try Simulation <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about" class="py-5 bg-light">
            <div class="container py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <img src="https://placehold.co/600x400/e9ecef/212529?text=Collaborative+Team+Environment" class="img-fluid rounded shadow-lg" alt="Our Team">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="display-5 fw-bold mb-3">Our Mission</h2>
                        <p class="text-muted lead">We believe curiosity is the engine of achievement. Our mission is to make science education accessible, engaging, and fun for students worldwide.</p>
                        <p class="text-muted">By breaking down the barriers of cost and safety associated with traditional labs, we empower the next generation of scientists, thinkers, and innovators. V-Lab was founded by a team of educators and developers passionate about transforming learning through technology.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact-section" class="py-5">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold">Get In Touch</h2>
                    <p class="lead text-muted">Have a question or want to work with us? Drop us a message!</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Form -->
                    <div class="col-lg-7">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control p-2" id="name" placeholder="Enter your name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control p-2" id="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control p-2" id="message" rows="5" placeholder="Your message here..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg px-4">Send Message</button>
                        </form>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-lg-4 mt-5 mt-lg-0">
                         <div class="d-flex mb-4">
                            <div class="icon-circle bg-primary-subtle text-primary me-3 flex-shrink-0">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Address</h5>
                                <p class="text-muted mb-0">123 Science Lane<br>Kattankulathur, TN 603203</p>
                            </div>
                        </div>
                         <div class="d-flex mb-4">
                            <div class="icon-circle bg-primary-subtle text-primary me-3 flex-shrink-0">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Email</h5>
                                <p class="text-muted mb-0">contact@vlab.example.com</p>
                            </div>
                        </div>
                         <div class="d-flex">
                            <div class="icon-circle bg-primary-subtle text-primary me-3 flex-shrink-0">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Phone</h5>
                                <p class="text-muted mb-0">+91 12345 67890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id="contact" class="py-4">
            <div class="container text-center">
                <p>&copy; 2025 V-Lab. All Rights Reserved. Making science accessible to all.</p>
                <div class="d-flex justify-content-center fs-4">
                    <a href="#" class="mx-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="mx-2"><i class="bi bi-github"></i></a>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
        <!-- Particle Animation Script -->
        <script src="assets/script.js"></script>
    </body>
</html>





