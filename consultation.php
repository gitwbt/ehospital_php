<?php include('./config.php');?>
<?php include('./data.php');?>
<?php
    // use Symfony\Component\HttpClient\HttpClient;
    // $client = HttpClient::create();
    // $response = $client->request('GET', "http://127.0.0.1:8000/api/consultantions/");
    // // $statusCode = $response->getStatusCode();
    // // $contentType = $response->getHeaders()['content-type'][0];
    // $content = $response->getContent();
    // $content = $response->toArray();
    // $consultations = $content;

    // $consultations = [];
?>
<?php include(ROOT_PATH . '/includes/header.php'); ?>
<main class="site-content">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero--image">
        <img src="./assets/consult-banner.jpg" alt="asdd" />
        </div>
        <div class="container">
        <!-- <div class="row"> -->
        <!-- <div class="col-lg-8 col-12 ml-auto d-flex justify-content-end"> -->
        <div class="hero--content-wrapper">
            <div class="hero--content">
            <h1 class="mb-0">
                Consultation 
                Service For <br/>
                Your Health
            </h1>
            <div class="hero--search-desc">
                <p>
                It is a long established fact that a reader will be
                distracted by the readable content of a page when looking at
                its layout.
                </p>
            </div>
            </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->
        </div>
    </section>
    <!-- Consultaions Lists -->
    <section class="consultation-lists default-padding">
        <div class="container">
        <div class="row gx-lg-4 gx-2">
            <?php if(!empty($consultations)):  ?>
                <?php foreach($consultations as $consultation): ?>
                    <div class="col-lg-6 col-6">
                        <div class="consult-card">
                        <div class="consult-card--img">
                            <img src="<?php echo  $consultation['image'] ?>" alt="" />
                        </div>
                        <div class="consult-card--content">
                            <div>
                            <h3 class="line-clamp-1"><?php echo  $consultation['title'] ?></h3>
                            <p class="line-clamp-2">
                                    <?php echo  $consultation['desc'] ?>
                            </p>
                            </div>
                            <a href="appointment.php?id=<?php echo $consultation['id'] ?>" class="outline-btn ">
                            <span class="mr-4">Book Appointment</span>
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
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No Content Found</p>
            <?php endif;?> 
        </div>
        </div>
    </section>
</main>
<?php  include(ROOT_PATH .'/includes/footer.php'); ?>