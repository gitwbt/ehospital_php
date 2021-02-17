<?php include('./config.php');?>
<?php include(ROOT_PATH . '/includes/header.php'); ?>
<main class="site-content">
    <section class="hero">
        <div class="hero--image">
        <img src="./assets/consult-banner.jpg" alt="asdd" />
        </div>
        <div class="container">
        <!-- <div class="row"> -->
        <!-- <div class="col-lg-8 col-12 ml-auto d-flex justify-content-end"> -->
        <div class="hero--content-wrapper">
            <div class="hero--content">
            <h1>
                The Best <br />
                Doctors And <br />
                Specialist At <br />
                Your Service.
            </h1>
            </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->
        </div>
    </section>
    <section class="doctors-lists default-padding">
        <div class="container">
        <div class="section-heading">
            <h2>Our Medical Specialists</h2>
            <p>
            It is a long established fact that a reader will be distracted
            by the readable content of a page when looking at its layout.
            </p>
        </div>

        <div class="doctors-lists--fliter-form">
            <form action="">
            <h3>What specialist are you looking for ?</h3>
            <select>
                <option disabled hidden>ALL</option>
                <option>Heart</option>
                <option>Nose</option>
            </select>
            </form>
        </div>
        <div class="row">
            <div class="col-lg-6">
            <div class="doctor-card">
                <div class="doctor-card--image">
                <img src="./assets/face.jpg" alt="" />
                </div>
                <div class="doctor-card--content">
                <div class="doctor-card--title">
                    <h2>Antonio Chekov</h2>
                    <p>MBBS, MD, Eye Specialist</p>
                </div>
                <div class="doctor-card--desc">
                    <ul>
                    <li>
                        <span>MBBS:</span>
                        Teaching Hospital
                    </li>
                    <li>
                        <span>Speciality:</span>
                        Urologist
                    </li>
                    <li>
                        <span>Website:</span>
                        www.antonio.com
                    </li>
                    </ul>
                </div>
                <div class="doctor-card--actions">
                    <a href="appointment.php?id=1" class="link-btn">
                    <span>Book Appointment</span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20.861"
                        height="32.019"
                        viewBox="0 0 20.861 32.019"
                    >
                        <path
                        id="Path_24"
                        data-name="Path 24"
                        d="M-19949.131-6639.5l16.48,13.848-16.48,15.168"
                        transform="translate(19950.484 6641.03)"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="4"
                        />
                    </svg>
                    </a>
                    <a  href="doctor_profile.php?id=1" class="outline-btn primary">
                     View Profile
                    </a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="doctor-card">
                <div class="doctor-card--image">
                <img src="./assets/face.jpg" alt="" />
                </div>
                <div class="doctor-card--content">
                <div class="doctor-card--title">
                    <h2>Antonio Chekov</h2>
                    <p>MBBS, MD, Eye Specialist</p>
                </div>
                <div class="doctor-card--desc">
                    <ul>
                    <li>
                        <span>MBBS:</span>
                        Teaching Hospital
                    </li>
                    <li>
                        <span>Speciality:</span>
                        Urologist
                    </li>
                    <li>
                        <span>Website:</span>
                        www.antonio.com
                    </li>
                    </ul>
                </div>
                <div class="doctor-card--actions">
                    <a href="appointment.php?id=2" class="link-btn">
                    <span>Book Appointment</span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20.861"
                        height="32.019"
                        viewBox="0 0 20.861 32.019"
                    >
                        <path
                        id="Path_24"
                        data-name="Path 24"
                        d="M-19949.131-6639.5l16.48,13.848-16.48,15.168"
                        transform="translate(19950.484 6641.03)"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="4"
                        />
                    </svg>
                    </a>
                    <a href="doctor_profile.php?id=2" class="outline-btn primary">
                    View Profile
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
</main>
<?php  include(ROOT_PATH .'/includes/footer.php'); ?>