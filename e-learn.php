<title>My E-Learn </title>
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
		$id= $row['id'];
		$user= $row['surname'];
		$name = $row['username'];
		$image = $row['photo'];
		$user1= $row['firstname'];
		$userr= $row['institution'];
		$user3= $row['country'];
		$user6= $row['email'];
		$user77= $row['phone'];
		
		$title10 = $row["pgd"];
		$title11 = $row["gpcc"];
		$body12 = $row["gpccode"];
		$title13 = $row["gpcf"];
		$intro14 = $row["gpcm"];
		$intro15 = $row["register"];
		
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?php
include("database.php");

$a = $_GET['id'];



$sql = "SELECT * FROM reg where id1 = '$a'";

$result = mysqli_query($connect, $sql) or die ("Could Not Select". mysqli_error($connect) );
if(mysqli_num_rows($result)){
	while($row=mysqli_fetch_assoc($result))
	{
		
		
		$title3 = $row["pgd"];
		$title1 = $row["gpcc"];
		$body2 = $row["gpccode"];
		$title2 = $row["gpcf"];
		$intro1 = $row["gpcm"];
		$intro6 = $row["register"];
		
		
		
		
		
		
		
	}
}


?>



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
           <li class="dropdown"><a  href="#"><span><b>ALSA COMMUNITY</b></span> </a>
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
             
              <li><a href="e-learn.php?id=<?php echo $id ?>" style="color: #055611">ALSA E-LEARN</a></li>
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
         
          <li class="dropdown"><a class="active" href="#"><span><b>DASHBOARD </b></span> </a>
            <ul>
             <li><a href="#" style="color: #055611">Hi <?php echo $name ?> <img src="image/<?php echo $image ?>" style="width: 50px; height: 60px; overflow-x: hidden; overflow-y: hidden"/>  </a></li>
              <li><a href="my-profile.php?id=<?php echo $id ?>" style="color: #055611">MY PROFILE   </a></li>
             
              <li><a href="e-learn.php?id=<?php echo $id ?>" style="color:#055611">MY E-LEARN </a></li>
              <li><a href="my-membership.php?id=<?php echo $id ?>" style="color: #055611">MY MEMBERSHIP  </a></li>
              
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="logout.php" class="get-started-btn"><b>Logout</b></a>

    </div>
  </header><!-- End Header -->

  <main id="main"  >
    <!-- ======= Breadcrumbs ======= -->
    <!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
     <div class="container-fluid" data-aos="fade-up" style="margin-top: 35px; background-color: whitesmoke">
<div class="container">
        <div class="section-title"  >
          
          <p style="color: #3ac162; padding-top: 20px; ">MY E-LEARN  </p>
        </div> </div></div> 
     
     
     
     
      <div class="container" data-aos="fade-up" style="margin-top: 0px;">
        
        

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-2" style="margin-top: 0px;" data-aos="fade-left" data-aos-delay="100"><hr/>
             <h6><b><u>Course Details: </u></b> </h6>
              <p  >
              <table width="100% " height="auto" style="font-weight: 600; font-size: 15px;">
              <tr>
              		<td><b>Faculty:</b></td>
              		<td>Law</td>
              	</tr>
              	<tr>
              		<td><b>Department:</b></td>
              		<td><?php if(isset($title3)) echo $title3; else echo 'You have not registered any course yet.'; if(isset($title10)) echo $title10; ?></td>
              	</tr>
              	<tr>
              		<td><b>Program:</b></td>
              		<td><?php if(isset($title1))  echo 'LPC in'.' '.$title1; else echo 'Nil'; if(isset($title11))  echo $title11; ?></td>
              	</tr>
              	<tr>
              		<td><b>Program Code:</b></td>
              		<td><?php if(isset($body2))  echo $body2;else echo 'Nil'; if(isset($body12))  echo $body12 ;?></td>
              	</tr>
              	 <tr>
              		<td><b>Facilitator:</b></td>
              		<td><?php if(isset($title2))  echo $title2;else echo 'Nil'; if(isset($title13))  echo $title13 ; ?></td>
              	</tr>
              	 <tr>
              		<td><b>Course Material:</b></td>
              		<td><a class="btn get-started-btn" href="image/<?php if(isset($intro1))  echo $intro1;else echo 'Nil'; if(isset($intro14))  echo $intro14 ; ?>" target="_blank" /> PDF Downloads</a></td>
              	</tr>
              	</table>
             
             
             
              
              
              
            </p>
             
             
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-1 content" style="margin-top: 0px; "><hr/>
			   <h5><img src="assets/img/Untitled-2 - Copy (2).png" width="10%" height="35px" />
             
              
               
               <b> ALSA  SCHOOL OF LEGAL STUDIES </b> <p/> </h5><h6>3/5 Adeyemo Alakija Street
Victoria Island, Lagos
Nigeria</h6><h5><u>School of Post Graduate Studies</u> </h5>
          
            <h6><b><u>Student Information: </u></b> </h6> 
            <p style="color: ; " >
            <table width="100% " height="auto" style="font-weight: 600; font-size: 15px;" >
              <tr>
              		<td><b>Reg. Number:</b></td>
              		<td><?php if(isset($intro6)) echo $intro6 ;else echo 'Nil'; if(isset($intro15)) echo $intro15 ;  ?></td>
              	</tr>
              	<tr>
              		<td><b>Surname:</b></td>
              		<td><?php echo $user ?></td>
              	</tr>
              	<tr>
              		<td><b>F/M Name:</b></td>
              		<td><?php echo $user1 ?></td>
              	</tr>
              	<tr>
              		<td><b>Institution:</b></td>
              		<td><?php echo $userr ?></td>
              	</tr>
              	 <tr>
              		<td><b>Nationality:</b></td>
              		<td><?php echo $user3 ?></td>
              	</tr>
              	 
              	 <tr>
              		<td><b>Email:</b></td>
              		<td><?php echo $user6 ?></td>
              	</tr>
              	</table>
            
            
            
              
              
            </p>
            
          <!--  <ul>
              <li><i class="bi bi-check-circle"></i>  ALSA seeks to bridge the gap among African law students, unite them and coordinate their affairs, provide a platform for them to realise their potentials.</li>
              <li><i class="bi bi-check-circle"></i> As part of our intervention to legal education among law students, Continuing Professional Development for lawyers and access to legal knowledge for the general population, ALSA runs a School of Legal Studies that offers certificate courses based on Open and Distance Learning Method or Open and Distance Education. </li>
              <li><i class="bi bi-check-circle"></i> In addition to our continental network of partners and associates, ALSA runs an International Head Office in Lagos, Nigeria and two associate offices in Abuja, Nigeria and Zambia.</li>
            </ul>-->
            <!--<p>
             We are a registered corporate organisation holding a Certificate of Incorporation issued by the Nigerian Corporate Affairs Commission (CAC).
            </p> -->

          </div>
        </div>
        
        
        
         <div class="row">
          <div class="col-lg-6 order-1 order-lg-1" style="margin-top: 20px;" data-aos="fade-left" data-aos-delay="100"><hr/>
             <h5><b><u> Assessment:  </u> </b> </h5>
              <p  >
              <table width="100% " height="auto" style="font-weight: 600; font-size: 16px;" >
              <tr >
              		<td><b>Course Registration:</b></td>
              		<td><a href="legal-studies-alsa.php" class="btn get-started-btn">Register Course </a></td>
              	</tr>
              	<tr  >
              		<td><b>Exam Registration:</b></td>
              		<td><a class="btn get-started-btn" href="exam-registration.php?id=<?php echo $id ?>">Register Exam</a></td>
              	</tr>
              	<tr>
              		<td><b>Exam Preparation: </b></td>
              		<td><a href="alsaprep/index.php" class="btn get-started-btn">ALSA-Prep 360</a></td>
              	</tr>
              	<tr>
              		<td><b>ALSA E-Examination:</b></td>
              		<td><a href="exam1/index.php" class="btn get-started-btn">E-Assessment</a> </td>
              	</tr>
              	 
              	 <tr>
              		<td><b>Graduation List:</b></td>
              		<td><a href="quiz-scores.php" class="btn get-started-btn">Check List</a></td>
              	</tr>
              	
              	</table>
              
              
              
            </p>
             
             
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content" style="margin-top: 20px;"><hr/>
            
            <h5><b><u>Attention: </u></b></h5> You must register a course first before registering exam. <p/><hr/>
            
             
              On completion of your course of study, you automatically becomes an alumni of ALSA School of Legal Studies and entitled for job placement on the ALSA Community when requested by clients.<hr/>
              You can enrol for another course once the certificate of a previously offered course is issued and downloaded.<hr/>
               
              
              
              
            
          <!--  <ul>
              <li><i class="bi bi-check-circle"></i>  ALSA seeks to bridge the gap among African law students, unite them and coordinate their affairs, provide a platform for them to realise their potentials.</li>
              <li><i class="bi bi-check-circle"></i> As part of our intervention to legal education among law students, Continuing Professional Development for lawyers and access to legal knowledge for the general population, ALSA runs a School of Legal Studies that offers certificate courses based on Open and Distance Learning Method or Open and Distance Education. </li>
              <li><i class="bi bi-check-circle"></i> In addition to our continental network of partners and associates, ALSA runs an International Head Office in Lagos, Nigeria and two associate offices in Abuja, Nigeria and Zambia.</li>
            </ul>-->
            <!--<p>
             We are a registered corporate organisation holding a Certificate of Incorporation issued by the Nigerian Corporate Affairs Commission (CAC).
            </p> -->

          </div>
        </div>


      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
   <!-- <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section>--><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <!--<section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>--><!-- End testimonial item -->

           <!-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>--><!-- End testimonial item -->

            <!--<div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>--><!-- End testimonial item -->

            <!--<div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>--><!-- End testimonial item -->

           <!-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>--><!-- End testimonial item -->

         <!-- </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>--><!-- End Testimonials Section -->

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