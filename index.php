<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Landing Page </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
            <a class="nav-link text-white" href="#about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#open-donations">Donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#how-to-donate">How to Donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#documentation">Documentation</a>
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
          <a class="btn btn-dark px-5 py-3 fw-bold mt-4" href="#open-donations">Donate Now</a>
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

          <p>Di dunia yang penuh dengan kebaikan, masih banyak orang yang membutuhkan uluran tangan.
            Banyak orang yang ingin membantu sesama, tetapi sering kali kesulitan untuk menemukan cara yang tepat.
            Website ini hadir sebagai jembatan yang menghubungkan para dermawan dengan mereka yang membutuhkan,
            melalui sistem donasi yang trensparan, mudah, dan aman. Kami percaya bahwa setiap kontribusi sekecil apa pun
            dapat membawa perubahan besar bagi mereka yang sedang berjuang.</p>

          <p>Kami memiliki komitmen yang kuat untuk terus mengembangkan platform ini agar dapat menjangkau lebih banyak
            orang yang membutuhkan. Sebagai bagian dari upaya ini, kami berencana untuk memperluas kerja sama dengan
            berbagai komunitasserta organisasi sosial guna memastikan bahwa setiap bantuan yang terkumpul dapat didistribusikan
            sesuai dengan kebutuhan yang diperlukan. Bersama sama, kita dapat membangun budaya tolong menolong yang lebih kuat,
            dan mementingkan nilai nilai kehidupan sosial serta memberikan manfaat yang nyata begi mereka yang membutuhkan.</p>
        </div>
        <div class="col-12 col-md-6">
          <img src="images/donate.jpg" alt="our mission" width=" 100%">
        </div>
      </div>
    </div>
  </section>
  <!-- End About Us -->

  <!-- Start Open Donations -->
  <section id="open-donations" class="pb-5">

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
                  class="fa fa-microphone"></i></span>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Bar-->
    <?php
    // Fungsi untuk mendapatkan tanggal saat ini dalam format tertentu
    function getCurrentDate()
    {
      return date('F j, Y'); // Contoh: "March 22, 2024"
    }

    // Fungsi untuk menghasilkan jumlah donasi acak
    function getRandomDonations()
    {
      return rand(100, 600); // Angka acak antara 100 dan 600
    }

    // Fungsi untuk menghasilkan kartu donasi
    function generateDonationCard($image, $title, $description)
    {
      $date = getCurrentDate();
      $donations = getRandomDonations();

      return "
        <div class='col'>
            <div class='card shadow-sm'>
                <img src='$image' class='card-img-top' alt='Gambar Deskripsi'>
                <div class='card-body'>
                    <div class='d-flex justify-content-between'>
                        <small class='text-muted'>$date</small>
                        <a href='#' class='text-primary text-decoration-none fw-bold'>$donations donations</a>
                    </div>
                    <h5 class='fw-bold text-dark mt-1'>$title</h5>
                    <p class='card-text'>$description</p>
                    <div class='d-flex justify-content-between align-items-center'>
                        <div class='btn-group'>
                            <button type='button' class='btn btn-sm btn-outline-success'>Donate</button>
                        </div>
                        <small class='text-body-secondary'>9 mins</small>
                    </div>
                </div>
            </div>
        </div>
    ";
    }
    ?>

    <!-- HTML -->
    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
          echo generateDonationCard("images/OpenDonation1.png", "Banjir di Kabupaten Bandung", "Masyarakat Kabupaten Bandung memerlukan bantuan Anda untuk penanganan krisis setelah banjir yang merendam empat kecamatan dan menyebabkan ratusan warga mengungsi.");
          echo generateDonationCard("images/OpenDonation2.png", "Tsunami di Aceh", "Peringatan! Tsunami dahsyat telah melanda Aceh pada 26 Desember 2004, menyebabkan lebih dari 170.000 korban jiwa. Mari bantu saudara-saudara kita yang terdampak.");
          echo generateDonationCard("images/OpenDonation3.png", "Krisis Air Bersih di Sekolah-sekolah Indonesia", "Peringatan! Sebanyak 3,1 juta siswa di Indonesia belum memiliki akses ke air bersih di sekolah mereka. Mari bantu anak-anak kita mendapatkan fasilitas air bersih yang layak.");
          echo generateDonationCard("images/OpenDonation4.png", "Kebakaran Hutan Kumpeh", "Hutan di Kecamatan Kumpeh, Muarojambi, Jambi, telah terbakar, mempengaruhi masyarakat sekitar. Mari bantu menyediakan fasilitas kesehatan bagi mereka yang terdampak.");
          echo generateDonationCard("images/OpenDonation5.png", "Gempa Bumi di Tuban", "Gempa berkekuatan 6,1 skala Richter mengguncang Kabupaten Tuban, Jawa Timur, pada 22 Maret 2024, menyebabkan kerusakan bangunan dan memerlukan bantuan segera. Mari bantu mereka pulih dengan menyediakan makanan dan obat-obatan.");
          echo generateDonationCard("images/OpenDonation6.png", "Kekeringan di Nusa Tenggara Timur", "Warga Nusa Tenggara Timur saat ini menderita akibat kekeringan parah, bantu mereka mendapatkan air bersih!");
          ?>
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
  <section id="how-to-donate" class="pb-5">
  <div class="container-fluid hero d-flex align-items-center justify-content-center text-center">
    <div class="formcontainer">
      <div class="row d-flex justify-content-center text-center">

        <img src="images/" alt="">
        <h1 class="hero-title">
          How To Donate
        </h1>
      </div>
    </div>
  </div>
  </div>
  </section>
  
  <!-- End How To Donate -->



  <!-- Start Updates -->
  <section id="documentation" class="pb-5">
    <div class="container">
      <div class="col-12 p-4">
        <h2 class="display-4 text-center fw-bold mt-4">Documentation</h2>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="images/banjirSemarang.jpeg" alt="Banjir Semarang" width="100%" height="200%" >
            <div class="card-body">
              <p class="card-text">Donasi telah tersalurkan untuk bencana banjir di kota Semarang pada 17 Maret 2022.
                Donasi yang terkumpul berupa uang sejumlah 8.450.000. Terima Kasih atas bantuan yang telah anda diberikan
                untuk korban bencana ini.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-body-secondary"> 18 Maret 2022</small> <!-- Tgl Upload update ke web -->
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="images/BanjirBantul.jpeg" alt="Banjir Bantul" width="100%" height="200%">
            <div class="card-body">
              <p class="card-text">Pada 15 Desember 2022, tim kami telah menyalurkan donasi berupa bahan makanan pokok 
                serta uang tunai sejumlah 3.450.000 kepada warga terdampak bencana banji di Bantul, Yogyakarta.
                Bantuan ini diharapkan dapat meringankan beban mereka dalam menghadapi situasi sulit.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-body-secondary">17 Desember 2022</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="images/banjirSemarang.jpeg" alt="">
          <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"><text>
            <div class="card-body">
              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-body-secondary">9 دقائق</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
            </svg>
            <div class="card-body">
              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
              <small class="text-body-secondary">9 دقائق</small>
            </div>
          </div>
        </div>
      </div>
  </section>


  <!-- Start Footer -->
  <footer class="footer border-top py-5 my-5">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
      <div class="col mb-3">
        <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
          <img src="images/image.png" class="me-2" alt="Logo" width="175" height="105">
        </a>
        <p class="text-body-secondary">&copy; 2024</p>
      </div>

      <div class="col mb-3"></div> <!-- Kosong untuk spacing -->

      <!-- Menu Navigasi Footer -->
      <div class="col mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="Subfont">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">About</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="Subfont">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">About</a></li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="Subfont">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="Subfont">About</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<!-- End Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>