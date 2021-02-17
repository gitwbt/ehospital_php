<?php include('./config.php');?>
<?php include('./data.php'); ?>
<?php 
    $id = $_GET['id'];
    $doctor = $doctors[$id - 1];
    if(!$id){
        header('Location: index.php');
    }
?>
<?php include(ROOT_PATH . '/includes/header.php'); ?>
<main class="site-content">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero--image">
        <img src="./assets/doctor-profile-banner.jpg" alt="asdd" />
        </div>
        <div class="container">
        <!-- <div class="row"> -->
        <!-- <div class="col-lg-8 col-12 ml-auto d-flex justify-content-end"> -->
        <div class="hero--content-wrapper">
            <div class="hero--content">
            <h1>
                Consult Your Doctors <br />
                and Specialist From <br />
                Anywhere.
            </h1>
            <div class="hero--search-desc">
                <p class="mb-4">
                It is a long established fact that a reader will be
                distracted by the readable content of a page when looking at
                its layout.
                </p>
                <button type="button" class="outline-btn primary with-icon">
                <span>Browse Doctors</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="31.078"
                    height="19.547"
                    viewBox="0 0 31.078 19.547"
                >
                    <g
                    id="Group_102"
                    data-name="Group 102"
                    transform="translate(19967.715 6634.534)"
                    >
                    <path
                        id="Path_23"
                        data-name="Path 23"
                        d="M-19994.812-6625.45h29.215"
                        transform="translate(27.098)"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    />
                    <path
                        id="Path_24"
                        data-name="Path 24"
                        d="M-19949.131-6639.5l10,8.621-10,9.442"
                        transform="translate(1 5.723)"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    />
                    </g>
                </svg>
                </button>
            </div>
            </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->
        </div>
    </section>
    <!-- Profile Card -->
    <section class="profile-card default-padding">
        <div class="container">
        <div class="profile-card--content">
            <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo $doctor['img'] ?>" alt="" />
            </div>
            <div class="col-lg-8 d-flex flex-column justify-content-center">
                <div class="profile-card--title">
                <h2><?php echo $doctor['name'] ?></h2>
                <a href="appointment.php?id=<?php echo $id;?>" class="outline-btn primary with-icon">
                    <span>Book Appointment</span>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="31.078"
                    height="19.547"
                    viewBox="0 0 31.078 19.547"
                    >
                    <g
                        id="Group_102"
                        data-name="Group 102"
                        transform="translate(19967.715 6634.534)"
                    >
                        <path
                        id="Path_23"
                        data-name="Path 23"
                        d="M-19994.812-6625.45h29.215"
                        transform="translate(27.098)"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        />
                        <path
                        id="Path_24"
                        data-name="Path 24"
                        d="M-19949.131-6639.5l10,8.621-10,9.442"
                        transform="translate(1 5.723)"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        />
                    </g>
                    </svg>
                </a>
                </div>
                <div class="profile-card--meta">
                <ul>
                    <li>
                    <span>MBBS:</span>
                    <?php echo $doctor['mbbs']; ?>
                    </li>
                    <li>
                    <span>Department:</span>
                    <?php echo $doctor['department']; ?>
                    </li>
                    <li>
                    <span>Speciality:</span>
                    <?php echo $doctor['speciality']; ?>
                    </li>
                </ul>
                </div>
                <div class="profile-card--desc">
                <p>
                    As a graduate of some of the most reputed and institutes
                    of the world, I have always dreamed to provide best
                    possible selfless care to the people. After working in
                    PGIMER Chandigarh and AIIMS New Delhi for six years I have
                    decided to utilize the the knowledge and experience gained
                    there to help the people of my country. I always feel that
                    we should provide evidenve based comprehensive care to the
                    patients without thinking about any personal or
                    institutional benifits. I feel that I can provide best
                    possible care in every feild of Gastroenterology and
                    Hepatology in Nepal only. Together we can make this dream
                    come together.
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
</main>
<?php  include(ROOT_PATH .'/includes/footer.php'); ?>