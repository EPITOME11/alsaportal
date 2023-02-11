<title>Exam Registration </title>
<link href="assets/img/Untitled-2.png" rel="icon">
  <link href="assets/img/Untitled-2.png" rel="apple-touch-icon">


<?php
//if (isset($_COOKIE["oka"]))  $id= $_COOKIE["oka"]; else header("location:login.php");
if (isset($_COOKIE["okenna4082"]))  $user= $_COOKIE["okenna4082"]; else header("location:login.php");
include("database.php");
if (isset($_COOKIE["okenna4082"])){
	$cookie = $_COOKIE["okenna4082"];
	$sql = mysqli_query($connect, "select * from reg where username = '$cookie' " ) or die("could Not Select profile".mysqli_error());
	
	while ($row= mysqli_fetch_assoc($sql)){
		$id2= $row['id'];
		$user= $row['surname'];
		$name = $row['username'];
		$image = $row['photo'];
		
	}



}




?>











<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.5.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>







 

<body>

  <!-- ======= Header ======= -->
 <header id="header" class="fixed-top" >
    <div class="container d-flex align-items-center" >

      <!--<h2 class="logo me-auto"><a href="index.html">ALSA</a></h2>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="dashboard.php" class="logo me-auto"><img src="assets/img/Untitled-2 - Copy (2).png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0" style="color: white">
        <ul >
          <li><a  href="dashboard.php" ><b>HOME</b></a></li>
          <li><a  href="about.php" ><b>ABOUT </b></a></li>
           <li class="dropdown"><a class="active" href="#"><span><b>ALSA COMMUNITY</b></span> </a>
            <ul>
              <li><a href="alsa-officers.php" style="color: #055611">ALSA OFFICERS </a></li>
             
              <li><a href="alsa-lecturers.html" style="color: #055611">LECTURERS/FACILITATORS</a></li>
              <li><a href="alsa-accreditation.html" style="color: #055611">ACCREDITATION </a></li>
              <li><a href="alsa-partnering-institutions.html" style="color: #055611">PARTNERING INSTITUTIONS </a></li>
               <li><a href="alsa-lawyers.html" style="color: #055611">LAWYERS </a></li>
                <li><a href="alsa-clients.html" style="color: #055611">CLIENTS</a></li>
                <li><a href="professional-course.php" style="color: #055611">PROFESSIONAL COURSES </a></li>
            </ul>
          </li>
          
           <li class="dropdown"><a href="#"><span><b>E-LIBRARY</b></span> </a>
            <ul>
              <li><a href="e-legal-library.php" style="color: #055611">E-LEGAL LIBRARY  </a></li>
             
              <li><a href="e-learn.php?id=<?php echo $id2 ?>" style="color: #055611">ALSA E-LEARN</a></li>
              <li><a href="research-papers.html" style="color: #055611">ARTICLE PUBLICATION </a></li>
              
            </ul>
          </li>
            <li class="dropdown"><a href="#"><span><b>NEWS</b></span> </a>
            <ul>
              <li><a href="journal-alsa.html" style="color: #055611">ALSA AFRICAN LAW JOURNAL   </a></li>
             
              <li><a href="blog-posts.php" style="color: #055611">WORLD LEGAL NEWS</a></li>
              <li><a href="legal-studies-alsa.php" style="color: #055611">ALSA SCHOOL OF LEGAL STUDIES </a></li>
              
            </ul>
          </li>
          
          
          
           

          <li class="dropdown"><a href="#"><span><b>COURSES</b></span> </a>
            <ul>
              <li><a href="e-learn.html" style="color: #055611">Pan Africanism</a></li>
              <li class="dropdown"><a href="#"><span style="color: #055611">Top Courses </span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="e-learn.html" style="color: #055611">Maritime Law</a></li>
                  <li><a href="e-learn.html" style="color: #055611">Human Right Law</a></li>
                  <li><a href="e-learn.html" style="color: #055611">Accounting Law</a></li>
                  <li><a href="e-learn.html" style="color: #055611">Aviation Law</a></li>
                  <li><a href="e-learn.html" style="color: #055611">Civil Litigation </a></li>
                </ul>
              </li>
              <li><a href="e-learn.html" style="color: #055611">Pharmacy Law</a></li>
              <li><a href="e-learn.html" style="color: #055611">Oil & Gas Law</a></li>
              <li><a href="e-learn.html" style="color: #055611">American Legal System </a></li>
            </ul>
          </li>
         
          <li class="dropdown"><a href="#"><span><b>DASHBOARD </b></span> </a>
            <ul>
             <li><a href="#" style="color: #055611">Hi <?php echo $name ?> <img src="image/<?php echo $image ?>" style="width: 50px; height: 60px; overflow-x: hidden; overflow-y: hidden"/>  </a></li>
              <li><a href="my-profile.php?id=<?php echo $id2 ?>" style="color: #055611">MY PROFILE   </a></li>
             
              <li><a href="e-learn.php?id=<?php echo $id2 ?>" style="color:#055611">MY E-LEARN </a></li>
              <li><a href="my-membership.php?id=<?php echo $id2 ?>" style="color: #055611">MY MEMBERSHIP  </a></li>
              
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="logout.php" class="get-started-btn"><b>Logout</b></a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- End Breadcrumbs -->

   
   <?php
include("database.php");

$a = $_GET['id'];



$sql = "SELECT * FROM reg where id1 = '$a'";

$result = mysqli_query($connect, $sql) or die ("Could Not Select". mysqli_error($connect) );
if(mysqli_num_rows($result)){
	while($row=mysqli_fetch_assoc($result))
	{
		
		$id = $row["id"];
		
		$intro12 = $row["examcode"];
		$image22 = $row['gpccode'];
		$image29 = $row['register'];
		
		
		
	}
}


?>



    <!-- ======= About Us Section ======= -->
   <section id="about" class="about">
     <div class="container-fluid" data-aos="fade-up" style="margin-top: 35px; background-color: whitesmoke">
<div class="container">
        <div class="section-title"  >
          
          <p style="color: #3ac162; padding-top: 20px; ">Exam Registration   </p>
        </div> </div></div> 
     
     
     
      <div class="container" data-aos="fade-up" style="margin-top: 10px;">
        
       

        

        <div class="row">

        <!--  <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Block 6/7 Ilukwe Street, Asata, EN Nigeria</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@vsasftechng.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+234 (0)803 193 6721</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6068187614405!2d7.49977341477028!3d6.4445022953375934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a3ddc1004601%3A0xb63af0c17b6d399!2sIlukwe%20Street%2C%20Achara%20400102%2C%20Enugu!5e0!3m2!1sen!2sng!4v1636781558976!5m2!1sen!2sng" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>-->
          
          
          
           <h4><img src="assets/img/Untitled-2 - Copy (2).png" width="4%" height="30px" />
             
              
               
                ALSA  School of Legal Studies  <p/> </h4><b>Check the boxes below only if you have registered a course: </b>
          

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
           
           
           
            <form action="assessment.php" method="post" role="form"  class="info " enctype="multipart/form-data">
             
              
             
              
             
              
               
             
               <div class="form-group col-md-6">
                  <label for="name">Registration Number:</label>
                  <input value="<?php if(isset( $image29))  echo $image29  ?>" type="text" name="exmne_password" placeholder=" <?php if(isset( $image29))  echo $image29; else {echo 'Enter Reg. Number';}  ?> " class="form-control" id="phone" required>
                </div><p/>
               
             
                <div class="form-group col-md-6">
                  <label for="name"></label>
                  <input class="form-check-input" type="checkbox" name="exmne_course" value="<?php if(isset($intro12)) echo $intro12; ?>" required> I agree on the terms and conditions. 
                </div><p/>
                
                 <div class="form-group col-md-6">
                  <label for="name"></label>
                  <input class="form-check-input" type="checkbox" name="exmne_year_level" value="<?php if(isset($image22)) echo $image22; ?>" required> I am aware that ALSA auto digital detector is inbuilt on this software to trap noise and exam malpractices. 
                </div><p/>
               
               
               
                
                
              
              
              
                
               <div class="my-3">
                <div class="loading"></div>
                <div class="error-message"></div>
               
              </div>
              <div class="text-left "><button name="submit" class="btn-success btn" style="color: white" type="submit">Register </button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: #29cc61">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 style="color:#3ac162 "><img src="assets/img/Untitled-2 - Copy (2).png" width="35%" height="80px" /></h3>
            <p>
              3/5 Adeyemo Alakija Street <br>
              Victoria Island, Lagos <br>
              Nigeria <br><br>
              <strong>Phone:</strong> +234(0)803 546 9357<br>
              <strong>Email:</strong> info@alsaportal.net<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="color:#3ac162 ">Quick Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="career.php">Career </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="disclaimer.html">Disclaimer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="terms-and-conditions.html">Terms and Conditions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy-policy.html">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="color:#3ac162 ">ALSA Community</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="alsa-officers.html">ALSA Officers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="legal-studies-alsa.html">School of Legal Studies </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="alsa-lecturers.html">Lecturers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="alsa-partnering-institutions.html">Partnering Institutions </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="e-learn.php">ALSA E-Learn</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="e-library.php">E-Legal Library</a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4 style="color:#3ac162 ">Join Our Newsletter</h4>
            <p>Get our weekly publication series, events, legal news and jobs globally now.</p>
            <form action="" method="post">
              <input type="email" placeholder="Enter your email " name="email" required><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4" >

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright 2022 <strong><span style="color: darkgreen">ALSA</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Powered by <a style="color: darkgreen" href="https://vsasftechng.com/">Vsasf Tech</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>