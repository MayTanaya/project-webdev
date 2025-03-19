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
<section id="about-us" class="pb-5">
    <div class="container">
        <div class="col-12 p-4">
            <h2 class="display-4 text-center fw-bold mt-4">Our Mission</h2>
        </div>

            <div class="row">
                <div class="col-12 col-md-6 text-justify">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus fermentum mi, a consectetur ligula dapibus eu. 
                    Quisque pulvinar erat sed odio molestie scelerisque. Ut efficitur vehicula enim vitae aliquet. Nam dignissim elit varius 
                    venenatis condimentum. Etiam volutpat sit amet quam dapibus dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
                    per inceptos himenaeos. Maecenas egestas pulvinar arcu, a faucibus dolor volutpat vel. Mauris sed neque bibendum, tempus nibh quis, 
                    bibendum ligula. Vestibulum malesuada urna nec orci dictum, eget interdum lacus sagittis.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus fermentum mi, a consectetur ligula dapibus eu. 
                    Quisque pulvinar erat sed odio molestie scelerisque. Ut efficitur vehicula enim vitae aliquet. Nam dignissim elit varius 
                    venenatis condimentum. Etiam volutpat sit amet quam dapibus dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
                    per inceptos himenaeos. Maecenas egestas pulvinar arcu, a faucibus dolor volutpat vel. Mauris sed neque bibendum, tempus nibh quis, 
                    bibendum ligula. Vestibulum malesuada urna nec orci dictum, eget interdum lacus sagittis.</p>
                </div>
            <div class="col-12 col-md-6">
                <img src="images/donate.jpg" alt="our mission" width=" 100%">
            </div>
        </div>
    </div>
</section>
<!-- End About Us -->

<!-- Start Open Donations -->
<section id="about-us" class="pb-5">
    
    <div class="container">
        <div class="col-12 p-4">
            <h2 class="display-4 text-center fw-bold mt-4">Open Donations</h2>
        </div>
        <!-- Search Bar-->
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                        <div class="form">
                            <i class="fa fa-search"></i>
                            <input type="text"
                            class="form-control form-input"
                            placeholder="search...">
                            <span class="left-pan"><i 
                            class="fa fa-microphone"></
                            i></span> 
                        </div>
                    </div>
                </div>
            </div>
    </div>
     <!-- Search Bar--> 
    <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="images/OpenDonation1.png" class="card-img-top" alt="Gambar Deskripsi">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="images/OpenDonation2.png" class="card-img-top" alt="Gambar Deskripsi">
          <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="images/OpenDonation3.png" class="card-img-top" alt="Gambar Deskripsi">
          <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="images/OpenDonation4.png" class="card-img-top" alt="Gambar Deskripsi">
          <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="images/OpenDonation5.png" class="card-img-top" alt="Gambar Deskripsi">
          <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>

  </div>
</div>
</div>

    </section>
</section>
<!-- End Open Donations -->

<!-- Start How To Donate -->
<div class="container-fluid hero d-flex align-items-center justify-content-center text-center">
    <div class="formcontainer">
        <div class="row d-flex justify-content-center text-center">
            <img src="images/" alt="">
        </div>
        </div>
    </div>
</div>
<!-- End How To Donate -->

<!-- Start Updates -->

<!-- End Updates -->

<!-- Start Documentation -->

<!-- End Documentation -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

