<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Landing Page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index-style.css">
    
</head>
<body>
<!-- Start navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand text-white fw-bold" href="#">MyDonate</a>

            <!-- Toggle Button (Mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="donate.php">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="updates.php">Updates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="documentation.php">Documentation</a>
                    </li>
                </ul>

                <!-- Login & Sign Up -->
                <form class="d-flex">
                    <button class="btn btn-login me-2" type="button" href="form-rev.html">Login</button>
                    <button class="btn btn-signup" type="button">Sign Up</button>
                </form>
            </div>
        </div>
    </nav>
<!-- End Navbar -->

<!-- Hero Section -->
 <div class="container-fluid hero d-flex align-items-center justify-content-center text-center">
    <div class="formcontainer">
        <div class="row d-flex justify-content-center text-center">
        <!-- text -->
        <div>
            <h1 class="hero-title">
                Happiness comes from <br> your action
            </h1>
        <!-- button -->
            <button class="btn btn-dark px-5 py-3 fw-bold mt-4" type="button">Donate Now</button>
        </div>
        </div>
    </div>
</div>
<!-- End hero section -->

<!-- Start About Us -->
<section id="about" class="about-section-padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-img">
                    <img src="images/donate.jpg" alt="our mission" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-text">
                        <h2> Our Mission </h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus fermentum mi, a consectetur ligula dapibus eu. 
                        Quisque pulvinar erat sed odio molestie scelerisque. Ut efficitur vehicula enim vitae aliquet. Nam dignissim elit varius 
                        venenatis condimentum. Etiam volutpat sit amet quam dapibus dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
                        per inceptos himenaeos. Maecenas egestas pulvinar arcu, a faucibus dolor volutpat vel. Mauris sed neque bibendum, tempus nibh quis, 
                        bibendum ligula. Vestibulum malesuada urna nec orci dictum, eget interdum lacus sagittis.
                        </p>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- End About Us -->

<!-- Start Open Donations -->
<section>
    <div class="open-donate-text">
        <h2 class="open-donations"> Open Donations </h2>
    </div>
</section>
<!-- End Open Donations -->

<!-- Start Open Documentation -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

