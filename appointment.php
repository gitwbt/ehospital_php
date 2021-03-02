<?php include('./config.php');?>
<?php include('./data.php');?>
<?php 
$id = $_GET['id'];
$consultation = $consultations[$id - 1];
if(!$id){
    header('Location: index.php');
}
// use Symfony\Component\HttpClient\HttpClient;
// $client = HttpClient::create();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $full_name = $_POST['full_name'];
//   $email = $_POST['email'];
//   $date = $_POST['date'];
//   $note = $_POST['note'];
//   if(!empty($full_name) && !empty($email) && !empty($date) && !empty($note)){
//     $response = $client->request('POST', 'http://127.0.0.1:8000/api/appointments/',[
//       'headers'=>[
//         'Content-Type'=>'application/json'
//       ],
//       'json' => [
//         'full_name'=>'test',
//         'email' => 'asdasd@gmail.com',
//         'note' => 'Asdasdasdasd asd sad a sd'
//       ]
//     ]);
//   }

//   // $content = $response->getContent();
//   // var_dump($content);
// }

?>
<?php include(ROOT_PATH.'/includes/header.php');?>
<main class="site-content">
      <!-- Hero Section -->
      <section class="hero half">
        <div class="hero--image">
        <img src="./assets/consult-banner.jpg" alt="asdd" />
        </div>
        <div class="container">
        <!-- <div class="row"> -->
        <!-- <div class="col-lg-8 col-12 ml-auto d-flex justify-content-end"> -->
        <div class="hero--content-wrapper">
          <div class="row">
            <div class="col-lg-6 col-sm-12 ml-auto">
              <div class="hero--content">
              <h1 class="mb-0">
              <?php echo $consultation['title']; ?>
              </h1>
              <div class="hero--search-desc">
                  <p class="line-clamp-3">
                  <?php echo $consultation['desc']; ?>
                  </p>
              </div>
              </div>
            </div>
          </div>
       
        </div>
        <!-- </div> -->
        <!-- </div> -->
        </div>
    </section>
    <section class="appointment-form">
  <div class="container">
<div class="row">
  <div class="col-md-6">
     <h2 class="text-primary">Patient Information Form</h2>
     <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum reiciendis sint at unde, rerum illum consequatur corrupti est perferendis eius!</p>
      <div id="message"></div>
      <form method="POST" id="appointmentForm">
          <div class="form-group mb-3">
            <label for="">Full Name</label>
            <input type="text" name="full_name" class="form-control" required />
          </div>
          <div class="form-group mb-3">
            <label for="">Phone Number</label>
            <input type="phone" name="email" class="form-control" required />
          </div>
          <div class="form-group mb-3">
            <label for="">Appointment Date</label>
            <input type="datetime-local" name="date" class="form-control" required />
          </div>
          <div class="form-group mb-3">
            <label for="">Note</label>
            <textarea
              class="form-control"
              name="note"
              placeholder="Write note"
              required
            ></textarea>
          </div>
          <div class="form-group  mb-3">
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
</main>

<?php include(ROOT_PATH.'/includes/footer.php');?>