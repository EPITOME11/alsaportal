<title>E-Legal Library</title>

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
  <link href="assets/img/Untitled-2.png" rel="icon">
  <link href="assets/img/Untitled-2.png" rel="apple-touch-icon">

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




if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 20;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "1"; 

	$result_count = mysqli_query($connect,"SELECT COUNT(*) As total_records FROM `material`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1


$sql = mysqli_query($connect, "SELECT * FROM `material` order by id desc LIMIT $offset, $total_records_per_page" ) or die("could Not Select profile".mysqli_error($count));





$count = 0 ;
	
	
	if(mysqli_num_rows($sql)>$count){
		while($row=mysqli_fetch_assoc($sql))
		
			
			
	{
	$id[]=$row["id"];
	$title1[]=$row["title"];
		$intro1[]= $row["code"];
		$intro3[]= $row["unit"];
		$title2[]= $row["level"];
		$intro2[]= $row["file"];
		
		$count++;
	
	
	}
			
	}

$sn = 1;


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
              <li><a href="membership.html" style="color: #055611">MY PROFILE   </a></li>
             
              <li><a href="e-learn.php?id=<?php echo $id2 ?>" style="color:#055611">MY E-LEARN </a></li>
              <li><a href="membership.html" style="color: #055611">MY MEMBERSHIP  </a></li>
              
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
          
          <p style="color: #3ac162; padding-top: 20px; ">E-LEGAL LIBRARY  </p>
        </div> </div></div> 
     
     
      <div class="container" data-aos="fade-up" style="margin-top: 0px;">
        
        

       <div class="container-fluid " >
          
          <div class="row">
          	 <div class="modal-window" style="margin-top: 20px; padding-left: 10px;">
		<div id="modal">
			
			<div class="modal-search">
				
				<form action="search-material.php" method="get">
					<fieldset>
						<input type="text" name="search" value="" placeholder="Enter Course Code" required>
						<input class="btn-success" type="submit" value="Search" name="upload">
					</fieldset>
				</form>
			</div>
		</div>  
	</div><br/>
          </div>          
          
           <div class="row" style="margin-top: 30px; color: black;">
             
            
             
             
             
             
              <div class="col-3">Course Title</div>
              <div class="col-3"> Code</div>
              <div class="col-2">Unit</div>
              <div class="col-2">Level</div>
              <div class="col-2">File</div>
           </div><hr/>
            <?php for ($s=0; $s<$count; $s++){?>
            <div class="row " >
              <div class="col-3"><?php echo $title1[$s]?></div>
              <div class="col-3"><?php echo $intro1[$s]?></div>
              <div class="col-2"><?php echo $intro3[$s]?></div>
              <div class="col-2"><?php echo $title2[$s]?></div>
              <div class="col-2"><a href="image/<?php echo $intro2[$s]; ?>" target="_blank" />PDF</a></div>
           </div><hr/>
           <?php }?>
           
           
           
           <br/>
	<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12" style='padding: 10px 20px 0px; border-top: dotted 1px #3ac162; font-size: 18px; color: #3ac162'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<ul class="pagination" style="height: ;font-size: 10px; background-color:;border-spacing: 2px;">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a class="btn btn-success " style="padding-left: 2px; color: white " <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>|
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a class='btn '; ' color: white'>$counter</a></li>";	
				}else{
           echo "<li><a class='btn btn-success'; ' color: white' href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a class='btn btn-success'; ' color: white'>$counter</a></li>";	
				}else{
           echo "<li><a class='btn btn-success'; ' color: white' href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a class='btn btn-success'; ' color: white'>...</a></li>";
		echo "<li><a class='btn btn-success'; ' color: white' href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a class='btn btn-success'; ' color: white' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a class='btn btn-success'; 'color: white' href='?page_no=1'>1</a></li>";
		echo "<li><a class='btn btn-success'; 'color: white' href='?page_no=2'>2</a></li>";
        echo "<li><a class='btn btn-success'; 'color: white'>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a class='btn btn-success'; 'color: white'>$counter</a></li>";	
				}else{
           echo "<li><a class='btn btn-success'; 'color: white' href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a class='btn btn-success'; 'color: white'>...</a></li>";
	   echo "<li><a class='btn btn-success'; 'color: white' href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a class='btn btn-success'; 'color: white' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a class='btn btn-success'; 'color: white' href='?page_no=1'>1</a></li>";
		echo "<li><a class='btn btn-success'; 'color: white' href='?page_no=2'>2</a></li>";
        echo "<li><a class='btn btn-success'; 'color: white'>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a class='btn btn-success'; 'color: white'>$counter</a></li>";	
				}else{
           echo "<li><a class='btn btn-success'; 'color: white' href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    |
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a class="btn btn-success" style="color: white " <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
   
</ul>
</div>

	
</div>

 
           
           
           
       </div><p/>
       
   <h4 style="background-color: ;" >
      <span style="color: darkgreen; font-family: Impact, Haettenschweiler, Franklin Gothic Bold, Arial Black,' sans-serif'"> <u>Check Out!</u></span><p/>      
              
               
               <i style="color: forestgreen; "> ALSA  School of Legal Studies</i>  </h4><a href="legal-studies-alsa.php" class="btn get-started-btn"><b>Explore Courses </b></a>
      
        
      </div>
    </section><!-- End About Section -->

    

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
 
  
  <style>
	  .active a{
		  color: white;
		  background-color: #3ac162;
		  border-radius: 6px;
	  }
	  .active a:hover{
		  color: aquamarine;
	  }
	  
  </style>
  

</body>

</html>