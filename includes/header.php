<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo eHospital - Re-Defining Medical Care In Nepal</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="shortcut icon" href="<?php echo BASE_URL ?>assets/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/main.css" />
  </head>
  <body>
    <!-- Main -->
    <main class="site-main">
 
      <!-- Header -->
      <header class="site-header">
        <!-- Nav -->
        <nav class="site-nav navbar navbar-light navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand site-logo" href="index.php">
              <img src="./assets/logo.png" alt="logo" />
            </a>
            <button class="navbar-toggler" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarNav" 
            aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <?php $page = basename($_SERVER['PHP_SELF']);?>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo ($page === 'index.php') ?'active':'' ?>">
                  <a class="nav-link" href="index.php"><?php echo $lang['home'] ?> </a>
                </li>
                <li class="nav-item <?php echo ($page === 'doctor_lists.php') ?'active':'' ?>">
                  <a class="nav-link" href="doctor_lists.php"
                    ><?php echo $lang['doctor'] ?>
                  </a>
                </li>
                <li class="nav-item <?php echo ($page === 'consultation.php') ?'active':'' ?>">
                  <a class="nav-link" href="consultation.php"
                    >Consultation
                  </a>
                </li>
                <!-- <li class="nav-item  <?php /// echo ($page === 'doctor_profile.php') ?'active':'' ?>">
                    <a class="nav-link" href="doctor_profile.php"
                      >Doctor Profile
                    </a>
                </li> -->
                <li class="nav-item <?php echo ($page === 'medical_station.php') ?'active':'' ?>">
                    <a class="nav-link" href="medical_station.php"
                      ><?php echo $lang['medical_station'] ?>
                    </a>
                </li>
                <li class="nav-item <?php echo ($page === 'mero_health.php') ?'active':'' ?>">
                    <a class="nav-link" href="mero_health.php"
                      ><?php echo $lang['mero_health'] ?>
                    </a>
                </li>
                <li class="nav-item <?php echo ($page === 'about.php') ?'active':'' ?>">
                    <a class="nav-link" href="about.php"
                      ><?php echo $lang['about'] ?>
                    </a>
                </li>
                <li class="nav-item <?php echo ($page === 'contact.php') ?'active':'' ?>">
                    <a class="nav-link" href="contact.php"
                      ><?php echo $lang['contact'] ?>
                    </a>
                </li>
                <li class="nav-item " title="Langague Switcher">
                    <a class="nav-btn" href="?lang=<?php echo $_SESSION['lang'] == "np"? "en":"np"; ?>"
                      ><?php echo $_SESSION['lang'] == "np"? "english":"nepali"; ?>
                    </a>
                </li>
                <!-- <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Doctors
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" href="./consultation.html"
                    >Consultation
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./doctor_list.html">Appointment </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./mero_health.html">Mero Health </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact </a>
                </li> -->
              </ul>
            </div>
          </div>
        </nav>
      </header>