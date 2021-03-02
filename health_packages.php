<?php include('./config.php');?>
<?php include('./data.php'); ?>
<?php include(ROOT_PATH.'/includes/header.php');?>

    <section class="hero half">
            <div class="hero--image">
            <img src="./assets/doctor-profile-banner.jpg" alt="asdd" />
            </div>
            <div class="container">
            <!-- <div class="row"> -->
            <!-- <div class="col-lg-8 col-12 ml-auto d-flex justify-content-end"> -->
            <div class="hero--content-wrapper">
                <div class="hero--content">
                <h1 class="mb-1">
                Health Packages
                </h1>
                <div class="hero--search-desc">
                    <p class="mb-4">
                    simply dummy text of the printing and typesetting industry. Lorem psum has
                    </p>
                    <button type="button" class="outline-btn primary with-icon">
                    <span>Learn More</span>
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
    <section class="tab mt-4 mb-4">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Grand Package</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Smart Package</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <!-- Consultaions Lists -->
                    <section class="consultation-lists ">
                        <div class="row gx-lg-4 gx-2">
                            <?php if(!empty($consultations)):  ?>
                                <?php foreach($consultations as $consultation): ?>
                                    <?php if($consultation['id'] <= 4):?>
                                    <div class="col-lg-6 col-6">
                                        <div class="consult-card">
                                        <div class="consult-card--img">
                                            <a href="appointment.php?id=<?php echo $consultation['id'] ?>" >
                                            <img src="<?php echo  $consultation['image'] ?>" alt="" />
                                            </a>
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
                                    <?php endif;?>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No Content Found</p>
                            <?php endif;?> 
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <!-- Consultaions Lists -->
                    <section class="consultation-lists ">
                        <div class="row gx-lg-4 gx-2">
                            <?php if(!empty($consultations)):  ?>
                                <?php foreach($consultations as $consultation): ?>
                                    <?php if($consultation['id'] > 4):?>
                                        <?php // if($consultation['id']<=8):?>
                                            <div class="col-lg-6 col-6">
                                                <div class="consult-card">
                                                <div class="consult-card--img">
                                                    <a href="appointment.php?id=<?php echo $consultation['id'] ?>" >
                                                    <img src="<?php echo  $consultation['image'] ?>" alt="" />
                                                    </a>
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
                                         <?php// endif;?>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>No Content Found</p>
                            <?php endif;?> 
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
<?php include(ROOT_PATH.'/includes/footer.php');?>