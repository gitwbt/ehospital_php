<?php $title = 'Mero Health' ?>
<?php include('./config.php');?>
<?php include('./data.php');?>

<?php include(ROOT_PATH.'/includes/header.php');?>
<main class="site-content">
        <!-- Hero Section -->
        <section class="hero ">
          <div class="hero--image">
            <img src="./assets/mero-health-banner.jpg" alt="asdd" />
          </div>
          <div class="container">
            <!-- <div class="row"> -->
            <!-- <div class="col-lg-8 col-12 ml-auto d-flex justify-content-end"> -->
            <div class="hero--content-wrapper">
              <div class="hero--content">
                <h1>
                  Your Digital <br />
                  Records In One <br />
                  Place.
                </h1>
                <!-- <div class="hero--search-desc">
                  <p>
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout.
                  </p>
                </div> -->
              </div>
            </div>
            <!-- </div> -->
            <!-- </div> -->
          </div>
        </section>
        <!-- Health Upload -->
        <section class="health-upload">
          <div class="container">
            <div class="health-upload--content">
              <form action="">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="custom-form-upload">
                      <input type="file" />
                      <label for="">
                        <img src="./assets/download.png" alt="" />
                        <span
                          >Drop files to upload <br />
                          or browse</span
                        >
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-8 d-flex justify-content-end">
                    <div class="section-heading">
                      <h2>Mero Health</h2>
                      <p>
                        It is a long established fact that a reader will be
                        distracted by the readable content of a page when
                        looking at its layout.
                      </p>
                      <button
                        type="button"
                        class="outline-btn primary with-icon"
                      >
                        <span>Upload Files</span>
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
              </form>
            </div>
          </div>
        </section>
      </main>

<?php include(ROOT_PATH.'/includes/footer.php');?>