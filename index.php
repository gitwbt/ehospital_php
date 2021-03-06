<?php include('./config.php');?>
<?php include(ROOT_PATH . '/includes/header.php'); ?>
<?php include('./data.php');?>
<?php 
  // use Symfony\Component\HttpClient\HttpClient;
  // $client = HttpClient::create();
  // $response = $client->request('GET', 'http://127.0.0.1:8000/api/consultantions/');
  
  // // $statusCode = $response->getStatusCode();
  // // $contentType = $response->getHeaders()['content-type'][0];
 
  // $content = $response->getContent();
  // $content = $response->toArray();

  // $consultations = $content;

?>
<?php 
    // $consultations = file_get_contents('http://127.0.0.1:8000/api/consultantions/');
    // $consultations = json_decode($consultations,true);
?>
<!-- Site Content -->
<main class="site-content">
  <!-- Hero Section -->
  <div class="swiper-container" id="hero">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <section class="hero full">
              <div class="hero--image">
                <img src="./assets/home_banner.jpg" alt="asdd" />
              </div>
              <div class="container">
                <!-- <div class="row"> -->
                <!-- <div class="col-lg-8 col-12 ml-auto d-flex justify-content-end"> -->
                <div class="hero--content-wrapper">
                  <div class="hero--content">
                    <h1 class="mb-1">
                    <?php echo $lang["sliders"][0]['title']; ?>
                    </h1>
                    <div class="hero--search-form">
                      <p class="mb-4"> <?php echo $lang["sliders"][0]['sub']; ?></p>
                      <?php include('./includes/hero_search_form.php');  ?>
                    </div>
                  </div>
                </div>
                <!-- </div> -->
                <!-- </div> -->
              </div>
            </section>
          </div>
          <div class="swiper-slide">
            <section class="hero full">
              <div class="hero--image">
                <img src="./assets/img/slider_2.png" alt="asdd" />
              </div>
              <div class="container">
                <!-- <div class="row"> -->
                <!-- <div class="col-lg-8 col-12 ml-auto d-flex justify-content-end"> -->
                <div class="hero--content-wrapper">
                  <div class="hero--content">
                    <h1 class="mb-1">
                    <?php echo $lang["sliders"][0]['title']; ?>
                    </h1>
                    <div class="hero--search-form">
                      <p class="mb-4"><?php echo $lang["sliders"][0]['sub']; ?></p>
                      <?php include('./includes/hero_search_form.php');  ?>
                    </div>
                  </div>
                </div>
                <!-- </div> -->
                <!-- </div> -->
              </div>
            </section>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
          <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
  </div>
  <!-- Featured Services Section -->
  <section class="feat-services default-padding">
    <div class="container">
      <div class="section-heading">
        <h2>Our Services</h2> 
        <p>
          It is a long established fact that a reader will be distracted
          by the readable content of a page when looking at its layout.
        </p>
      </div>
      <?php if(!empty($consultations)): ?>
        <div class="row gx-lg-4 gx-2">
        <?php foreach($services as $service){?>
            <div class="col-6 col-md-6 col-lg-4">
              <div class="service-card">
                <div class="service-card--img">
                  <a href="
                  <?php 
                  $id = $service["id"];
                  if($service['id'] === 1):
                    echo "consultation.php";
                  elseif($service['id'] === 2):
                    echo "medical_station.php";
                  elseif($service['id'] === 4):
                    echo "second_opinion.php";
                  elseif($service['id'] === 6):
                    echo "health_packages.php";
                  else:
                    echo "service.php?id=$id";
                  endif;
                  ?>
                  ">
                    <img src="<?php echo $service["img"];?>" alt="ser1" />
                  </a>
                </div>
                <div class="service-card--content">
                  <h3 class="line-clamp-1"><?php echo $service["title"];?></h3>
                  <p class="line-clamp-2">
                    <?php echo $service["desc"];?>
                  </p>
                  <?php if($service['id'] === 1): ?>
                    <a href="consultation.php" class="d-inline-block ml-auto outline-btn ">
                      Learn More
                    </a>
                  <?php elseif($service['id']===2):?>
                    <a href="medical_station.php" class="d-inline-block ml-auto outline-btn ">
                      Learn More
                    </a>
                  <?php else:?>
                  <a href="
                  <?php 
                  $id = $service["id"];
                  switch($service['id']){
                    case $service['id'] === 1:
                      echo 'consultation.php';
                      break;
                    case $service['id'] === 2:
                      echo 'medical_station.php';
                      break;
                    case  $service['id'] === 4:
                      echo 'second_opinion.php';
                      break;
                    case  $service['id'] === 6:
                      echo 'health_packages.php';
                      break;
                    default:
                       echo "service.php?id=$id";
                  }
                  ?>
                  " class="d-inline-block ml-auto outline-btn ">
                    Learn More
                  </a>
                  <?php endif;?>
                </div>
              </div>
            </div>
        <?php } ?>
          </div>
        </div>
      <?php else: ?>
          <p>No Consultation Found</p>
      <?php endif; ?>

  </section>
  <!-- Cta Section -->
  <section class="cta">
    <div class="cta--image">
      <img
        src="https://images.pexels.com/photos/3938023/pexels-photo-3938023.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
        alt=""
      />
    </div>
    <div class="cta--overlay"></div>
    <div class="cta--content">
      <div class="container">
        <h1>
          Foundation of e-Hospital <br />
          Scrolling.. Specialization...Slider
        </h1>
      </div>
    </div>
  </section>
    <!-- Ad Section -->
    <section class="ad default-padding">
      <div class="container">
        <div class="row">
        <div class="col-lg-6 col-12 ">
          <img src="./assets/img/ad1.jpg" class='mb-2' alt="">
          </div>
           <div class="col-lg-6 col-12">
          <img src="./assets/img/ad1.jpg" alt="">
          </div>
        </div>
      </div>
  </section>

  <!-- Consultations Section -->
  <section class="feat-consultations default-padding greybg">
    <div class="container">
      <div class="section-heading">
        <h2>Consultations</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam
          doloribus tempore architecto! Similique magnam vero error
          quaerat necessitatibus fugit officia?
        </p>
      </div>
          
      <?php if(!empty($consultations)): ?>
      <div class="feat-consultations--slider">
        <div class="swiper-container" id="consult">
          <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="row gx-lg-4 gx-2">
                <?php foreach($consultations as $consultation){?>
                  <?php if($consultation['id'] <= 4):?>
                      <div class="col-6 col-md-6 col-lg-6">
                        <div class="consult-card">
                            <div class="consult-card--img">
                            <a href="appointment.php?id=<?php echo $consultation['id'] ?>" >
                              <img src="<?php echo $consultation['image']; ?>" alt="" />
                            </a>
                            </div>
                            <div class="consult-card--content">
                            <div>
                              <div class="consult-card--title">
                              <h3 class="line-clamp-1"><?php echo $consultation['title'] ?></h3>
                              <span><?php echo $consultation['subtitle'] ?></span>
                              </div> 
                                <p class="line-clamp-3">
                                    <?php echo $consultation['desc'] ?>
                                </p>
                            </div>
                            <a href="appointment.php?id=<?php echo $consultation['id'] ?>" class="outline-btn justify-content-center">
                                Book Appointment
                            </a>
                            </div>
                        </div>
                      </div>
                  <?php endif;?>
                <?php } ?>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="row gx-lg-4 gx-2">
                <?php foreach($consultations as $consultation){?>
                  <?php if($consultation['id'] > 4):?>
                     <?php if($consultation['id']<=8):?>
                        <div class="col-6 col-md-6 col-lg-6">
                          <div class="consult-card">
                              <div class="consult-card--img">
                              <img src="<?php echo $consultation['image']; ?>" alt="" />
                              </div>
                              <div class="consult-card--content">
                              <div>
                                <div class="consult-card--title">
                                <h3><?php echo $consultation['title'] ?></h3>
                                <span><?php echo $consultation['subtitle'] ?></span>
                                </div> 
                                  <p>
                                      <?php echo $consultation['desc'] ?>
                                  </p>
                              </div>
                              <a href="appointment.php?id=<?php echo $consultation['id'] ?>" class="outline-btn justify-content-center">
                                  Book Appointment
                              </a>
                              </div>
                          </div>
                        </div>
                      <?php endif;?>
                  <?php endif;?>
                <?php } ?>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="row gx-lg-4 gx-2">
                <?php foreach($consultations as $consultation){?>
                  <?php if($consultation['id'] > 8):?>
                    <?php if($consultation['id']<=16):?>
                      <div class="col-6 col-md-6 col-lg-6">
                        <div class="consult-card">
                            <div class="consult-card--img">
                            <img src="<?php echo $consultation['image']; ?>" alt="" />
                            </div>
                            <div class="consult-card--content">
                            <div>
                              <div class="consult-card--title">
                              <h3 class="line-clamp-1"><?php echo $consultation['title'] ?></h3>
                              <span><?php echo $consultation['subtitle'] ?></span>
                              </div> 
                                <p class="line-clamp-3">
                                    <?php echo $consultation['desc'] ?>
                                </p>
                            </div>
                            <a href="appointment.php?id=<?php echo $consultation['id'] ?>" class="outline-btn justify-content-center">
                                Book Appointment
                            </a>
                            </div>
                        </div>
                      </div>
                      <?php endif;?>
                  <?php endif;?>
                <?php } ?>
            </div>
          </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
      <?php else: ?>
          <p>No Consultation Found</p>
      <?php endif; ?>
    </div>
  </section>
  <!-- Testimonial Section -->
  <section class="testi default-padding">
    <div class="container">
      <div class="testi--slider">
        <div class="swiper-container" id="testi">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testi--card">
                <div class="testi--card-img">
                  <img
                    src="https://images.pexels.com/photos/3938023/pexels-photo-3938023.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    alt=""
                  />
                </div>
                <div class="testi--card-content">
                  <h3>Dr. Naren Tulisman</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Blanditiis dignissimos minima facilis nam amet
                    possimus nesciunt dicta! Inventore, odio quasi?
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testi--card">
                <div class="testi--card-img">
                  <img src="./assets/testi1.jpg" alt="" />
                </div>
                <div class="testi--card-content">
                  <h3>Dr. Naren Tulisman</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Blanditiis dignissimos minima facilis nam amet
                    possimus nesciunt dicta! Inventore, odio quasi?
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ad Section -->
  <section class="ad default-padding">
    <div class="container">
      <div class="row ">
        <div class="col-lg-6 col-12">
        <img src="./assets/img/ad1.jpg" class="mb-2" alt="">
        </div>
        <div class="col-lg-6 col-12">
        <img src="./assets/img/ad1.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Partners Lab Section -->
  <section class="feat-partners default-padding greybg">
    <div class="container">
      <div class="section-heading">
        <h2>Medical Partner</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam
          doloribus tempore architecto! Similique magnam vero error
          quaerat necessitatibus fugit officia?
        </p>
      </div>
      <div class="row gx-lg-4 gx-2">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="partner-card">
            <div class="partner-card--img">
              <img
                src="https://images.pexels.com/photos/3938023/pexels-photo-3938023.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                alt=""
              />
            </div>
            <div class="partner-card--content">
              <h2>Medimix Technologies</h2>
              <p>
                It is a long established fact that a reader will be
                distracted by the readable content of a page whe It is a
                long established fact that a reader will .
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6">
          <div class="partner-card">
            <div class="partner-card--img">
              <img
                src="https://images.pexels.com/photos/3938023/pexels-photo-3938023.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                alt=""
              />
            </div>
            <div class="partner-card--content">
              <h2>Medimix Technologies</h2>
              <p>
                It is a long established fact that a reader will be
                distracted by the readable content of a page whe It is a
                long established fact that a reader will .
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-6">
          <div class="partner-card">
            <div class="partner-card--img">
              <img
                src="https://images.pexels.com/photos/3938023/pexels-photo-3938023.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                alt=""
              />
            </div>
            <div class="partner-card--content">
              <h2>Medimix Technologies</h2>
              <p>
                It is a long established fact that a reader will be
                distracted by the readable content of a page whe It is a
                long established fact that a reader will .
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Partners Companies Section -->
  <section class="feat-partners-companies default-padding greybg">
    <div class="container">
      <div class="section-heading">
        <h2>Partner Companies</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam
          doloribus tempore architecto! Similique magnam vero error
          quaerat necessitatibus fugit officia?
        </p>
      </div>
      <div class="partners--slider">
        <div class="swiper-container" id="partners">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="partner-item">
                <img src="./assets/discord.jpg" alt="discord" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner-item">
                <img src="./assets/addidas.jpg" alt="discord" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner-item">
                <img src="./assets/pubg.jpg" alt="discord" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner-item">
                <img src="./assets/github.jpg" alt="discord" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="partner-item">
                <img src="./assets/discord.jpg" alt="discord" />
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Article Section -->
  <section class="feat-article greybg default-padding">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-12 col-sm-12">
              <div class="section-heading--left fluid">
                <h2 >
                  <img class="feat-article--logo" src="./assets/logo.png" alt="logo" />
                  <span>Newsletter</span>
                </h2>
                <p class="line-clamp-2">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam
                  doloribus tempore architecto! Similique magnam vero error
                  quaerat necessitatibus fugit officia?
                </p>
              </div>
              <div class="row  ">
                  <div class="col-lg-6 col-md-12 col-12 single">
                    <div class="article-card">
                      <div class="article-card--img">
                        <img
                          src="https://images.pexels.com/photos/3938023/pexels-photo-3938023.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                          alt=""
                        />
                      </div>
                      <div class="article-card--content">
                        <div class="article-card--meta">
                          <span>17th April 2020</span>
                          <span>20 min read</span>
                        </div>
                        <h3 class="line-clamp-1">How does diabetes make your life?</h3>
                        <p class="line-clamp-3">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          Ipsa distinctio nostrum nemo itaque sint dolore!
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6  col-md-12 col-12">
                    <div class="article-card column">
                      <div class="article-card--img">
                        <img
                          src="https://images.pexels.com/photos/3938023/pexels-photo-3938023.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                          alt=""
                        />
                      </div>
                      <div class="article-card--content">
                        <div class="article-card--meta">
                          <span>17th April 2020</span>
                          <span>20 min read</span>
                        </div>
                        <h3 class="line-clamp-1">How does diabetes make your life?</h3>
                        <p class="line-clamp-3">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          Ipsa distinctio nostrum nemo itaque sint dolore!
                        </p>
                      </div>
                    </div>
                    <div class="article-card column">
                      <div class="article-card--img">
                        <img
                          src="https://images.pexels.com/photos/3938023/pexels-photo-3938023.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                          alt=""
                        />
                      </div>
                      <div class="article-card--content">
                        <div class="article-card--meta">
                          <span>17th April 2020</span>
                          <span>20 min read</span>
                        </div>
                        <h3 class="line-clamp-1">How does diabetes make your life?</h3>
                        <p class="line-clamp-3">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          Ipsa distinctio nostrum nemo itaque sint dolore!
                        </p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        <div class="col-lg-4 ">
          <img class="vertical-ad" src="./assets/img/Ads_1.jpg" alt="ad" >
        </div>
      </div>

    </div>
  </section>
</main>
<?php include_once(ROOT_PATH . '/includes/footer.php') ?>