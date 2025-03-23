<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Landing Page </title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="index-style.css">

</head>

<body>
  <!-- Start navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <!-- Logo -->
      <a href="/" class="navbar-brand d-flex align-items-center">
        <img src="images/logo-navbar.png" alt="Logo" width="150">
      </a>

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
              <input type="text" class="form-control form-input" placeholder="search...">
              <span class="left-pan"><i class="fa fa-microphone"></i></span>
            </div>
          </div>
        </div>
      </div>

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

        // Batasi deskripsi menjadi 100 karakter
        $shortDescription = substr($description, 0, 100) . '...';
        $fullDescription = $description;

        return "
        <div class='col'>
            <div class='card shadow-sm' style='min-height: 500px;'>
                <img src='$image' class='card-img-top' alt='Gambar Deskripsi'>
                <div class='card-body'>
                    <div class='d-flex justify-content-between'>
                        <small class='text-muted'>$date</small>
                        <a href='#' class='text-primary text-decoration-none fw-bold'>$donations donations</a>
                    </div>
                    <h5 class='fw-bold text-dark mt-1'>$title</h5>
                    <p class='card-text short-description'>$shortDescription</p>
                    <p class='card-text full-description' style='display: none;'>$fullDescription</p>
                    <button class='btn btn-sm btn-outline-secondary toggle-description'>Baca Selengkapnya</button>
                    <div class='d-flex justify-content-between align-items-center mt-3'>
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
  </section>
  <!-- End Open Donations -->

  <!-- Toggle Deskripsi -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const buttons = document.querySelectorAll('.toggle-description');

      buttons.forEach(button => {
        button.addEventListener('click', function() {
          const cardBody = this.closest('.card-body');
          const shortDescription = cardBody.querySelector('.short-description');
          const fullDescription = cardBody.querySelector('.full-description');

          if (shortDescription.style.display === 'none') {
            // Tampilkan deskripsi pendek
            shortDescription.style.display = 'block';
            fullDescription.style.display = 'none';
            this.textContent = 'Baca Selengkapnya';
          } else {
            // Tampilkan deskripsi lengkap
            shortDescription.style.display = 'none';
            fullDescription.style.display = 'block';
            this.textContent = 'Tampilkan Lebih Sedikit';
          }
        });
      });
    });
  </script>
  <!-- End Open Donations -->

  <!-- Start How To Donate -->
  <div class="container-fluid p-0">
    <img src="images/coba56.jpg" class="img-fluid w-100" alt="How To Donate">
  </div>

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
            <img src="images/banjirSemarang.jpeg" alt="Banjir Semarang" width="100%" height="200%">
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
            <img src="images/tanah-longsor.jpg" alt="Tanah Longsor" width="100%" height="200%">
            <div class="card-body">
              <p class="card-text">Dengan penuh rasa syukur, kami sampaikan bahwa donasi yang telah terkumpul telah
                berhasil disalurkan kepada para korban bencana tanah longsor di Batam pada 16 Juni 2023. Bantuan
                tersebut diharapkan dapat meringankan beban mereka dan membantu proses pemulihan di tengah situasi
                yang sulit ini. Terima kasih atas kepedulian dan dukungan Anda.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-body-secondary">19 Juni 2023</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="images/gempa.jpg" alt="Gempa" width="100%" height="200%">
            <div class="card-body">
              <p class="card-text">Kami beritahukan pada 18 Desember 2023, donasi yang telah dihimpun telah disalurkan
                sepenuhnya kepada warga terdampak gempa di Cianjur. Semoga bantuan tersebut dapat membantu meringankan
                kesulitan mereka dan mendukung pemulihan kehidupan sehari-hari. Kami ucapkan terima kasih atas dukungan
                dan kontribusi yang telah diberikan.</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
              <small class="text-body-secondary">20 Desember 2023</small>
            </div>
          </div>
        </div>
      </div>
  </section>


  <!-- Start Footer -->
  <div class="b-example-divider"></div>
  <div class="container">
    <footer class="footer py-5">
      <div class="row">
        <!-- Logo dan Deskripsi -->
        <div class="col-md-5 mb-3">
          <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
            <img src="images/logo-footer.png" class="me-2" alt="Logo" width="280" height="auto">
          </a>
          <p class="text-body-secondary">
            MyDonate adalah platform galang dana yang membantu Anda mengumpulkan dana untuk berbagai keperluan,
            mulai dari bantuan medis, pendidikan, hingga proyek sosial. Kami berkomitmen untuk memberikan transparansi
            dan kemudahan dalam setiap donasi yang dilakukan.
          </p>
        </div>

        <!-- Section 1: Navigasi -->
        <div class="col-6 col-md-2 mb-3">
          <h5>Navigasi</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About Us</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Donate</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">How to Donate</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Documentation</a></li>
          </ul>
        </div>

        <!-- Section 2: Kontak -->
        <div class="col-6 col-md-2 mb-3">
          <h5>Kontak</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><span class="nav-link p-0 text-body-secondary">Alamat: Jl. Jend. Urip Sumoharjo No.116 Jebres, Kota Surakarta, Jawa Tengah 57129</span></li>
            <li class="nav-item mb-2"><a href="https://wa.me/6281234567890" class="nav-link p-0 text-body-secondary" target="_blank">WhatsApp: +62 812-3456-7890</a></li>
          </ul>
        </div>

        <!-- Section 3: Media Sosial -->
        <div class="col-6 col-md-2 mb-3">
          <h5>Media Sosial</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a class="link-body-emphasis" href="https://www.instagram.com/pamungcasse/" target="_blank">
                <img src="images/ig.png" width="24" height="24" alt="Instagram"> Instagram
              </a>
            </li>
            <li class="nav-item mb-2">
              <a class="link-body-emphasis" href="https://www.facebook.com/" target="_blank">
                <img src="images/fb.png" width="24" height="24" alt="Facebook"> Facebook
              </a>
            </li>
            <li class="nav-item mb-2">
              <a class="link-body-emphasis" href="https://twitter.com/" target="_blank">
                <img src="images/twitter.png" width="24" height="24" alt="Twitter"> Twitter
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Hak Cipta -->
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; MyDonate Company, Inc. All rights reserved.</p>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<!-- End Footer -->


</html>