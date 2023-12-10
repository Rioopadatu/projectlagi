<?php 
  session_start();
  require_once('koneksi/database.php');
  require_once('koneksi/auth.php');
  ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- AOS.JS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- my AOS.JS -->
  <link rel="aos.js" href="aos.js">

  <!-- title -->
  <title>Profile Marceryo</title>

  <!-- icon -->
  <link rel="icon" href="assets/img/black-toxic.png">

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-sm" style="background-color: #000;">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html">FanniSyarifudin</a> -->
      <a href="" class="navbar-brand"><img src="assets/img/white-icon.png" width="60rem"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <?php if(checkLogin()) : ?>
          <li class="nav-item">
            <a class="btn btn-light" href="admin.php">Admin</a>
          </li>
          <?php else: ?>
          <li class="nav-item">
            <a class="btn btn-light" href="login.php">Login</a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center fs-1 shadow">
    <div data-aos="fade-down">
      <img src="assets/img/profile.jpeg" class="rounded-circle img-thumbnail" alt="conan" width="200px">
    </div>
    <div data-aos="fade-up" data-aos-delay="300">
      <h1 class="display-4">Marceryo Padatu</h1>
    </div>
    <div data-aos="fade-right">
      <p class="lead">
        Student | Futsal
      </p>
    </div>



    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="fff" fill-opacity="1"
        d="M0,160L40,160C80,160,160,160,240,181.3C320,203,400,245,480,240C560,235,640,181,720,181.3C800,181,880,235,960,250.7C1040,267,1120,245,1200,229.3C1280,213,1360,203,1400,197.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center text-white mb-3">
        <div class="col">
          <div data-aos="fade-down">
            <h2>About Me</h2>
          </div>
        </div>

        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <div data-aos="fade-right">
            <?php
                $queryExp = "SELECT * FROM aboutme ORDER BY id ASC";
                $resultExp = mysqli_query($connectDb, $queryExp);
                
                while ($data = mysqli_fetch_array($resultExp)) : ?>
                <p><?= $data['teks']; ?></p>
                <?php endwhile; ?>
            </div>
          </div>
        </div>


      </div>
    </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,64L40,101.3C80,139,160,213,240,208C320,203,400,117,480,122.7C560,128,640,224,720,266.7C800,309,880,299,960,256C1040,213,1120,139,1200,117.3C1280,96,1360,128,1400,144L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir About-->

  <!-- Skills -->
  <section id="skills">
    <div class="container">
      <div data-aos="fade-down">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Skills</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- HTML -->
        <div class="col-md-4 mb-3">
          <div data-aos="fade-right">
            <div class="card">
              <div class="card-body">
                <div class="logo justify-content-center">
                  <img src="https://img.icons8.com/material-sharp/48/000000/html-5.png" />
                </div>
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                  The HyperText Markup Language, or HTML is the standard markup language for documents designed to be
                  displayed in a web browser. It can be assisted by technologies such as...
                </p>
                <a href="https://en.wikipedia.org/wiki/HTML" class="btn btn-dark">See more</a>
              </div>
            </div>
          </div>
        </div>
        <!-- CSS -->
        <div class="col-md-4 mb-3">
          <div data-aos="fade-up">
            <div class="card">
              <div class="card-body">
                <div class="logo justify-content-center">
                  <img src="https://img.icons8.com/material/48/000000/css3.png" />
                </div>
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                  Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a
                  document written in a markup language such as HTML. CSS is a cornerstone technology of the...
                </p>
                <a href="https://en.wikipedia.org/wiki/CSS" class="btn btn-dark">See more</a>
              </div>
            </div>
          </div>
        </div>
        <!-- JavaScript -->

        <div class="col-md-4 mb-3">
          <div data-aos="fade-left">
            <div class="card">
              <div class="card-body">
                <div class="logo justify-content-center">

                  <img src="https://img.icons8.com/ios-filled/48/000000/javascript.png" />

                  <!-- <h5 class="card-title">Card title</h5> -->
                  <p class="card-text">
                    JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript
                    specification. JavaScript is high-level, often just-in-time compiled, and...
                  </p>
                  <a href="https://en.wikipedia.org/wiki/JavaScript" class="btn btn-dark">See more</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="fff" fill-opacity="1"
        d="M0,224L60,240C120,256,240,288,360,277.3C480,267,600,213,720,197.3C840,181,960,203,1080,229.3C1200,256,1320,288,1380,304L1440,320L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Skils -->

  <!-- Projects -->
  <section id="projects">
    <div class="container">
      <div data-aos="fade-down" data-aos-anchor-placement="top-center">
        <div class="row text-center text-white mb-3">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div data-aos="fade-right" data-aos-anchor-placement="top-center">
            <div class="card">
              <img src="assets/img/thumbs/4.png" class="card-img-top" alt="Project 1">
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe aliquid doloremque placeat alias beatae
                  ipsam eos quaerat quibusdam, harum rerum? Quia distinctio, nemo saepe vel omnis fugit placeat corrupti
                  velit!
                </p>
                <a href="#" class="btn btn-dark">See more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div data-aos="fade-down" data-aos-anchor-placement="top-center">
            <div class="card">
              <img src="assets/img/thumbs/4.png" class="card-img-top" alt="Project 1">
              <div class="card-body">
                <!-- <h5 class="card-title">Tribute Page-Rozaq</h5> -->
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus rem id expedita sapiente beatae
                  ipsam fuga magnam corrupti voluptatem, dolorem perspiciatis odio minus sequi facere repudiandae sunt
                  laborum architecto placeat.
                </p>
                <a href="#" class="btn btn-dark">See more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div data-aos="fade-left" data-aos-anchor-placement="top-center">
            <div class="card">
              <img src="assets/img/thumbs/4.png" class="card-img-top" alt="Project 1">
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, nesciunt.
                </p>
                <a href="#" class="btn btn-dark">See more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div data-aos="fade-right" data-aos-anchor-placement="top-center">
            <div class="card">
              <img src="assets/img/thumbs/5.png" class="card-img-top" alt="Project 1">
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, nesciunt.
                </p>
                <a href="#" class="btn btn-dark">See more</a>
              </div>
            </div>
          </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#ffffff" fill-opacity="1"
            d="M0,224L60,240C120,256,240,288,360,277.3C480,267,600,213,720,197.3C840,181,960,203,1080,229.3C1200,256,1320,288,1380,304L1440,320L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
          </path>
        </svg>
  </section>
  <!-- Akhir Project -->

  <!-- Contact -->

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <div data-aos="fade-down">
            <h2>Contact Me</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="contact-save.php " method="post" >
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" name="nama" aria-describedby="name" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" name="email" id="email" aria-describedby="email" />
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea type="text" class="form-control" name="pesan" id="name" aria-describedby="pesan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Kirim</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#000" fill-opacity="1"
      d="M0,64L40,85.3C80,107,160,149,240,149.3C320,149,400,107,480,106.7C560,107,640,149,720,138.7C800,128,880,64,960,42.7C1040,21,1120,43,1200,64C1280,85,1360,107,1400,117.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
    </path>
  </svg>
  <!-- footter -->
  <footer class="text-white text-center pb-3" style="background-color: black;">
    <p>
      Created by Marceryo 🏆
    </p>
  </footer>

  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>

  <!-- Js.Gform -->
  <script src="assets/js/jquery.min.js"></script>
  <script type="text/javascript">
    var submitted = false;
  </script>
  <script type="text/javascript">
    $('#gform').on('submit', function (e) {
      $('#gform *').fadeOut(2000);
      $('#gform').prepend('Your submission has been processed...');
    });
  </script>



  <!-- AOS.JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init({
      duration: 1200,


      mirror: false, // whether elements should animate out while scrolling past them
      disable: '',

      // aos tambahan
    })
  </script>
  <script>
        <?php 
        if (isset($_GET['message'])) {
            $statusBukutamu = $_GET['message'];
            if ($statusBukutamu == 'sukses') : ?>
                alert('Sukses menambah message');
            <?php elseif ($statusBukutamu == 'gagal') : ?>
                alert('Gagal menambah message');
            <?php endif;
        }
        ?>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      ;(() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
          form.addEventListener(
            'submit',
            (event) => {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            },
            false
          )
        })
      })()
    </script>

</body>

</html>