<?php
error_reporting(E_ALL);
session_start();
include('db-con.php');


function page_header() {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS file -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Font Styles -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;900&display=swap">

        <!-- Icons files -->
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <script src="https://kit.fontawesome.com/525fd5b530.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/tippy.js@6"></script>

        <!-- Bootstrap JS files -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <!-- JQUERY JS File -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- Theme CSS file -->
        <link rel="stylesheet" href="assets/style.css">
        <title>The Lab Rats</title>
    </head>
    <body>
<?php
}

function page_footer($showLinks=true) {
?>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
        <!-- Particle Animation Script -->
        <script src="assets/script.js"></script>


        <!-- Footer (: -->
        <?php if($showLinks) { ?>
            
        <!-- Footer -->
        <footer id="contact" class="py-4">
            <div class="container text-center">
                <p>&copy; 2025 The LabRats. All Rights Reserved. Making science accessible to all.</p>
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
<?php
}}

function nav_bar($showBackButton=false) {
    $headerClass = "";
    $homeFile = "";

    if(!isset($_SESSION["id"]) === true) {
        include('includes/sign-in-modal.php');
        include('includes/sign-up-modal.php');
    }
    if(strpos($_SERVER["SCRIPT_FILENAME"], 'index.php') === false) {
        $headerClass='header--active';
        $homeFile = "index.php";
    }
?>
        <canvas id="particle-canvas"></canvas>

        <!-- Header -->
        <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
            <div class="container">
                <?php if($showBackButton) { ?>
                <a href="list.php"><i class="fas fa-chevron-left me-1"></i>Back</a>
                <?php } ?>
                <a class="navbar-brand d-flex align-items-center" href="index.php#home">
                    <div class="bg-primary text-white rounded me-2 p-2 d-inline-flex">
                        <i class="bi bi-vial fs-5"></i>
                    </div>
                    <span class="fs-4 fw-bold">The LabRats</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="<?=$homeFile?>#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?=$homeFile?>#how-it-works">How It Works</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?=$homeFile?>#experiments">Experiments</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?=$homeFile?>#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?=$homeFile?>#contact-section">Contact Us</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <?php
                        if(!isset($_SESSION['id'])){
                            echo '
                        <a href="#" class="btn btn-outline-primary me-2"  data-bs-toggle="modal" data-bs-target="#modal-signin">Log In</a>
                        <a href="#" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#modal-signup">Sign Up</a>';
                        }
                        else {
                            echo '
                        <a class="nav-link" href="list.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flask" viewBox="0 0 16 16">
                                <path d="M4.5 0a.5.5 0 0 0 0 1H5v5.36L.503 13.717A1.5 1.5 0 0 0 1.783 16h12.434a1.5 1.5 0 0 0 1.28-2.282L11 6.359V1h.5a.5.5 0 0 0 0-1zM10 2H9a.5.5 0 0 0 0 1h1v1H9a.5.5 0 0 0 0 1h1v1H9a.5.5 0 0 0 0 1h1.22l.61 1H10a.5.5 0 1 0 0 1h1.442l.611 1H11a.5.5 0 1 0 0 1h1.664l.611 1H12a.5.5 0 1 0 0 1h1.886l.758 1.24a.5.5 0 0 1-.427.76H1.783a.5.5 0 0 1-.427-.76l4.57-7.48A.5.5 0 0 0 6 6.5V1h4z"/>
                            </svg>
                            Lab
                        </a>
                        <a class="nav-link" href="profile.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg>
                            Profile
                        </a>
                        <a class="nav-link link-danger" href="log-out.php">
                            Logout
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>
                        </a>';
                    }
                        ?>
                    </div>
                </div>
            </div>
        </nav>

    
<?php
}

?>