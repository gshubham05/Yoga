<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>yoganMaya - Free Bootstrap 4 Template by CodeWareITPvtLtd</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/enroll.css">
   </head>
   <body>
   <?php
    include('header.php');
    ?>
     <section class="hero-wrap" style="background-image:  url('images/background2.jpeg');height: 550px; background-size:cover; background-position: center center;">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
             <div class="row no-gutters slider-text js-fullheight" style="padding-top: 10%;" data-scrollax-parent="true">
                     <div class="pt-" >
                         <span class="subheading pt-5" style="font-size: 30px;" > Yoga is the journey of the self,<br> through the self, to the self</span>
                         <h1 class="text-white fw-500" >Enroll Now</h1>
                         <p class=""></p>
                     </div>
             </div>
      </div>
      </div>
   </section>
      <section class="py-5 bg" style="background-color: #99999910;">
        <div class="container">
         <div class="heading-section text-center justify-content-between">
            <span class="heading-section subheading ">yoganMaya</span>
            <h2 class="text-center text-capitalize">Application Form</h2>
            <span class="font-weight-light">Please fill out the below form to let us know a bit <br> more about you and your plans to visit us.</span>
         </div>
         <div class="row mt-3 ">
            <div class="col-md-1"></div>
            <div class="col-md-10">
               <div class="start-form-enroll bg-white mt-2">
               <form method="post" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="course-name">Select Program</label>
                              <select class="form-control" name="program" id="course-name" required>
                                 <option selected>Chosee...</option>
                                 <option value ="100 Hour Yoga TTCin English">100 Hour Yoga TTCin English</option>
                                 <option value ="200 Hour Yoga TTCin English">200 Hour Yoga TTCin English</option>
                                 <option value ="300 Hour Yoga TTCin English">300 Hour Yoga TTCin English</option>
                                 <option value ="Yoga Ayurvedic Detoxificaton Retreat">Yoga Ayurvedic Detoxificaton Retreat</option>
                                 <option value ="Yoga and Anti-Stress Retreat">Yoga and Anti-Stress Retreat</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="course-date">Select Month</label>
                              <select class="form-control" name="month" id="course-date" required>
                                 <option selected>Chosee...</option>
                                 <option value ="January">January</option>
                                 <option value ="February">February</option>
                                 <option value ="March">March</option>
                                 <option value ="April">April</option>
                                 <option value ="May">May</option>
                                 <option value ="June">June</option>
                                 <option value ="July">July</option>
                                 <option value ="August">August</option>
                                 <option value ="Setptember">Setptember</option>
                                 <option value ="October">October</option>
                                 <option value ="November">November</option>
                                 <option value ="December">December</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="name">Arrival Date</label>
                              <input type="date" class="form-control" name="adate" id="name" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="name">Departure Date</label>
                              <input type="date" class="form-control" name="ddate" id="name" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="Accommodation">Accommodation</label>
                              <select class="form-control" name="accommodation" id="Accommodation" required>
                                 <option selected>Chosee...</option>
                                 <option value ="Private-Room">Private Room</option>
                                 <option value ="Twin-shared-Room">Twin Shared Room</option>
                                 <option value ="4th Shared Room">4th Shared Room</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="Mr.Williamson" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="email">Email</label>
                              <input type="text" class="form-control" name="email" id="email" placeholder="Mr.Williamson123@gnail.com" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="phone">WhatsApp / Phone Number</label>
                              <input type="text" class="form-control" id="phone" name="phone" placeholder="+912345677" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="country">Country</label>
                              <input type="text" class="form-control" id="country" name="country" placeholder="Indonesia" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="gender">Gender</label>
                              <select class="form-control" id="gender" name="gender" required>
                                 <option selected>Chosee...</option>
                                 <option value ="male">Male</option>
                                 <option value ="female">female</option>
                                 <option value ="Other">Other</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <div class="form-group-requird">
                              <label for="number">Number of Participants</label>
                              <input type="number" class="form-control" name="participants" id="number" placeholder="Number of Participants" required>
                           </div>
                        </div>
                        <div class="col-md-9">
                           <div class="form-group-requird">
                              <label for="medical"> Any Medical History</label>
                              <input type="text" class="form-control" id="medical" name="medical" placeholder="Any Medical History" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="addication">Any History of Addication</label>
                              <input type="text" class="form-control" id="addication" name="addication" placeholder="Any History of Addication" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group-requird">
                              <label for="reached"> How You Reached US</label>
                              <input type="text" class="form-control" id="reached" name="reached" placeholder="How You Reached US" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group-requird">
                              <label for="msg"> Message/Question</label>
                              <input type="text" class="form-control" id="msg" name="message" placeholder="Message/Question" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-lg btn-block btn-primary font-weight-bold EnrollClick mt-3" type="submit" name="submit">Enroll Now</button>
                        </div>
                     </div>
                  </form>
                  <?php
              $con = mysqli_connect("localhost", "root", "", "yoga");
          
            if(isset($_REQUEST['submit']))
            {
                $program=$_REQUEST['program'];
                $month=$_REQUEST['month'];
                $adate=$_REQUEST['adate'];
                $ddate=$_REQUEST['ddate'];
                $accommodation=$_REQUEST['accommodation'];
                $name=$_REQUEST['name'];
                $email=$_REQUEST['email'];
                $phone=$_REQUEST['phone'];
                $country=$_REQUEST['country'];
                $gender=$_REQUEST['gender'];
                $participants=$_REQUEST['participants'];
                $medical=$_REQUEST['medical'];
                $addication=$_REQUEST['addication'];
                $reached=$_REQUEST['reached'];
                $message=$_REQUEST['message'];
                
                
                $q = "INSERT INTO enroll (program, month, arrival, deprature, accommodation,name,email,phone,country,gender,participants,medicalhistory,addication,reached,message)
                 VALUES ('$program', '$month', '$adate', '$ddate', '$accommodation', '$name', '$email', '$phone', '$country', '$gender', '$participants','$medical','$addication','$reached','$message')";
                   if(mysqli_query($con, $q)) {
                     echo "<script>alert('Registered successfully');</script>"; // Display alert using JavaScript
                 } else {
                     echo "<script>alert('Error: " . mysqli_error($con) . "');</script>"; // Display alert using JavaScript
                 }
                   
            }
            ?>
               </div>
            </div>
            <div class="col-md-1"></div>
         </div>
        </div>
      </section>
      <?php
        include 'footer.php';
    ?>

      </body>
</html>
