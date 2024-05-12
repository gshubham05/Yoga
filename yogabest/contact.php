<html >
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
      <link rel="stylesheet" href="css/contact.css">
   </head>
   <body>
   <?php
    include 'header.php';
    ?>
      <section class="hero-wrap " style="background-image:url(NewImages/IMG_4385.jpg); height: 650px; background-size: cover; background-position: center center; ">
         <div class="overlay"></div>
         <div class="overlay-2"></div>
         <div class="container">
         </div>
         </div>
      </section>
      <section class="ftco-section" >
            <div class="container">
                <div class="heading-section text-center justify-content-between">
                    <span class="heading-section subheading ">yoganMaya</span>
                    <h2 class="text-center text-capitalize">Get In Touch</h2>
                 </div>
                <div class="row" >
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h4 clas>Leave a Reply</h4>
                        <div class="contact-form mt-2">
                        <form method="post" >
                                <div class="row">
                                    <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Name*" name="n"  style="box-shadow: 0 5px 10px  #6dae2228!important;">
                                </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Email*" name="e"  style="box-shadow: 0 5px 10px  #6dae224a!important;">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Enter WhatsApp / Mobile No.*" name="ph"  style="box-shadow: 0 5px 10px  #6dae224a!important;">
                                </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Country*" name="co"  style="box-shadow: 0 5px 10px  #6dae224a!important;">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <select class="form-control select-dropdown" id="course-name" name="pr"  required  style="box-shadow: 0 5px 10px  #6dae224a!important;">
                                            <option selected>Select Program</option>
                                            <option value ="100 Hour Yoga TTCin English">100 Hour Yoga TTCin English</option>
                                            <option value ="200 Hour Yoga TTCin English">200 Hour Yoga TTCin English</option>
                                            <option value ="300 Hour Yoga TTCin English">300 Hour Yoga TTCin English</option>
                                            <option value ="Yoga Ayurvedic Detoxificaton Retreat">Yoga Ayurvedic Detoxificaton Retreat</option>
                                            <option value ="Yoga and Anti-Stress Retreat">Yoga and Anti-Stress Retreat</option>
                                         </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control  select-dropdown" name="g" id="gender" required  style="box-shadow: 0 5px 10px  #6dae224a!important;">
                                            <option selected> Select Gender.</option>
                                            <option value ="male">Male</option>
                                            <option value ="female">female</option>
                                            <option value ="Other">Other</option>
                                         </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <textarea rows="7" cols="50"  name="dis"  class="form-control" placeholder="write here"  style="box-shadow: 0 5px 10px  #6dae224a!important;"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-lg btn-block btn-primary font-weight-bold EnrollClick mt-3 px-4" name='submit' type='submit'>Send Now</button>
                                </div>
                               
                            </form>
                            <?php
             $con = mysqli_connect("localhost", "root", "", "yoga");

             if(isset($_REQUEST['submit'])) {
                 $n = $_REQUEST['n'];
                 $e = $_REQUEST['e'];
                 $ph = $_REQUEST['ph'];
                 $co = $_REQUEST['co']; // Corrected variable name
                 $pr = $_REQUEST['pr']; // Corrected variable name
                 $g = $_REQUEST['g'];
                 $d = $_REQUEST['dis']; // Corrected variable name
             
                 $q = "INSERT INTO contact (name, email, phone, country, program, gender, message) VALUES ('$n', '$e', '$ph', '$co', '$pr', '$g', '$d')";
                 
                 if(mysqli_query($con, $q)) {
                     echo "<script>alert('Registered successfully');</script>"; // Display alert using JavaScript
                 } else {
                     echo "<script>alert('Error: " . mysqli_error($con) . "');</script>"; // Display alert using JavaScript
                 }
             }
             
            ?>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12  text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.7132674767226!2d78.0564677!3d30.330672699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929f807cf20d7%3A0x51e77a77ce303140!2sDream%20Tech!5e0!3m2!1sen!2sin!4v1714535443468!5m2!1sen!2sin" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
      </section>
      <?php
        include 'footer.php';
    ?>
   </body>
</html>