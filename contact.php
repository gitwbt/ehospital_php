<?php include('./config.php');?>
<?php include('./data.php');?>

<?php include(ROOT_PATH.'/includes/header.php');?>
<section class="hero">
        <div class="hero--image">
        <img src="./assets/doctor-profile-banner.jpg" alt="asdd" />
        </div>
        <div class="container">
        <!-- <div class="row"> -->
        <!-- <div class="col-lg-8 col-12 ml-auto d-flex justify-content-end"> -->
        <div class="hero--content-wrapper">
            <div class="hero--content">
            <h1 class="mb-1">
              Contact us
            </h1>
            <div class="hero--search-desc">
                <p class="mb-4">
                It is a long established fact that a reader will be
                distracted by the readable content of a page when looking at
                its layout.
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
    <section class="appointment-form ">
  <div class="container">
<div class="row">
  <div class="col-md-6">
     <h2 class="text-primary">Contact us</h2>
     <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum reiciendis sint at unde, rerum illum consequatur corrupti est perferendis eius!</p>
      <div id="message"></div>
      <form method="POST" id="appointmentForm">
          <div class="form-group mb-3">
            <label for="">Full Name</label>
            <input type="text" name="full_name" class="form-control" required />
          </div>
          <div class="form-group mb-3">
            <label for="">Phone Number</label>
            <input type="phone" name="txt" class="form-control" required />
          </div>
          <!-- <div class="form-group mb-3">
            <label for="">Appointment Date</label>
            <input type="datetime-local" name="date" class="form-control" required />
          </div> -->
          <div class="form-group mb-3">
            <label for="">Note</label>
            <textarea
              class="form-control"
              name="note"
              placeholder="Write note"
              required
            ></textarea>
          </div>
          <div class="form-group mb-3">
          <label for="">Gender</label>
           <div class="btn-group-radio">
             <div class="btn-group-radio--item">
             <input
                type="radio"
                class="btn-check"
                name="options"
                id="male"
                autocomplete="off"
              />
              <label class="btn btn-secondary" for="male">Male</label>
             </div>
             <div class="btn-group-radio--item">
             <input type="radio" class="btn-check" name="options" id="female" autocomplete="off" />
              <label class="btn btn-secondary" for="female">Female</label>
             </div>
              <!-- <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" />
              <label class="btn btn-secondary" for="option3">Radio</label> -->
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
        </div>
        </section>
<?php include(ROOT_PATH.'/includes/footer.php');?>