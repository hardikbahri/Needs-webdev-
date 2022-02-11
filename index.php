<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Needs!-Everything You Need in one Click!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/style3.css">
    <link rel="stylesheet" href="assets/css/style4.css">
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="Needs-logos.jpg" width="120" height="110">
            </5>
          <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
            <li><a href="logout.php">logout</a></li>
            <li><a href="registration.php">register here</a></li>


              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              
              <li class="scroll-to-section"><a href="#video">Videos</a></li> 

              <li class="scroll-to-section"><div class="main-red-button-hover"><a href="#contact">Contact Us Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="owl-carousel owl-banner">
                <div class="item header-text">
                  <h6>Needs!</h6>
                 

                  <h2>Everything you need in <em></em> <span>one click</span>!</h2>
                  <p>Hey, <?php echo $_SESSION['username']; ?>!</p>

                  <p>Here we try to help with you basic necessities by providing the contact details of that particular Store/Hospital or anything with the best available resources</p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="#contact">Message Us Now</a>
                    </div>
                    <div class="call-button">
                      <a href="#"><i class="fa fa-phone"></i> 88001 91432</a>
                    </div>
                  </div>
                </div>
                <div class="item header-text">
                  <h6>Growing Resources</h6>
                  <h2>Get the <em>best and verified</em> details <span>for your Needs!</span></h2>
                  <p>We display details of only those shops and any other facility that has been personally verified by our team so that our users don't have to run here and there</p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="#services">Our Services</a>
                    </div>
                    <div class="call-button">
                      <a href="#"><i class="fa fa-phone"></i> 85273 29168</a>
                    </div>
                  </div>
                </div>
                <div class="item header-text">
                  <h6>FeedBack</h6>
                  <h2>Your <em>FeedBack</em> is really important for all of us <span>at NEEDS!</span></h2>
                  <p>Please <a rel="nofollow" href="https://docs.google.com/forms/d/e/1FAIpQLSeYr-3uWUFEu5nkrND1fSt42_Nrs_WWfPphGDccQW2-oYtOSA/viewform?usp=sf_link" target="_blank">support us</a> with your valuable feedback and help us improve!. Thank you.</p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="#video">Watch Videos</a>
                    </div>
                    <div class="call-button">
                      <a href="#"><i class="fa fa-phone"></i> 97117 36726</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="services-right-dec">
      <img src="assets/images/services-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="services-left-dec">
        <img src="assets/images/services-left-dec.png" alt="">
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>We <em>Provide</em> The Best Services </h2>
            <span>Our Services</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-services">
            <div class="item">
              <a href="appointment.php"><h4>Hospital Procurement</h4></a>
              <div class="icon"><img src="hospital clipart.png" alt=""></div>
              
            </div>
            <div class="item">
              <a href="medecines.php"><h4>Medecines</h4></a>
              <div class="icon"><img src="medecine clipart.png" alt=""></div>
              
            </div>
            <div class="item">
             <a href="paramedic services.PHP"> <h4>Ambulance</h4></a>
              <div class="icon"><img src="ambulance clipart.png" alt=""></div>
              
            </div>
            <div class="item">
              <h4>Oxygen Concentrator</h4>
              <div class="icon"><img src="concentrator clipart.png" alt=""></div>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="Customer-Satisfaction(Final).jpg">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>With the help of our team at <em>Needs!</em> &amp; <span>Project</span> has been able to collect the data which you can trust on!</h2>
            <p>We have worked really hard to collect the verified data </p>
            <div class="row">
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-01.png" alt="">
                    </div>
                    <div class="count-digit">320</div>
                    <div class="count-title">Satisfied Customers!</div>
                    <p>With the help of our data,these many customers have benefitted from our data</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-02.png" alt="">
                    </div>
                    <div class="count-digit">229</div>
                    <div class="count-title">Clicks</div>
                    <p>So far these many people have used our website and benefitted from it!.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-03.png" alt="">
                    </div>
                    <div class="count-digit">120</div>
                    <div class="count-title">Calls Recieved</div>
                    <p>Calls that we have recieved from our customers! </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <img src="assets/images/portfolio-left-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-portfolio">
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a rel="sponsored" href="https://templatemo.com/tm-564-plot-listing" target="_parent"><h4>First Project</h4></a>
                    <span>Plot Listing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-02.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Two</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a rel="sponsored" href="https://templatemo.com/tm-562-space-dynamic" target="_parent"><h4>Third Project</h4></a>
                    <span>Space Dynamic SEO</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Four</h4></a>
                    <span>Website Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Fifth Project</h4></a>
                    <span>Digital Assets</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-02.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Sixth Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>7th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>8th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>9th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-02.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Ten</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Eleven</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>12th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div id="pricing" class="pricing-tables">
    <div class="tables-left-dec">
      <img src="assets/images/tables-left-dec.png" alt="">
    </div>
    <div class="tables-right-dec">
      <img src="assets/images/tables-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Select a suitable <em>plan</em> for your next <span>projects</span></h2>
            <span>Our Plans</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="item first-item">
            <h4>Hospital Beds</h4>
            <em></em>
            <span>Personally Verified!</span>
            <ul>
             <!-- <li>Fortis Hospital, Sector 62, Noida</li>
              <li>Max Hospital,Sec-19,Noida</li>
              <li>Kailash Hospital,Sec-30,Noida</li>
              <li>Jaypee Hospital,Sec-128,Noida</li>
            </ul>-->
            <div class="main-blue-button-hover">
              <a href="appointment.php">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <h4>Trusted Medicine Shops</h4>
            <em></em>
            <span>Having Good Stock of medicines!</span>
            <ul>
            <!--  <li>Apollo Pharmacy,Sec-76,Noida</li>
              <li>Aggarwal Medical Store,Atta,Sec-18,Noida</li>
              <li>Ajay Medical Store,Sec-27,Noida</li>
              <li>Fortis HealthWorld,Sec-62,Noida</li>
            </ul> -->
            <div class="main-blue-button-hover">
              <a href="medecines.php">Get it Now</a>
            </div>
          </div>
        </div>
         <div class="col-lg-4">
          <div class="item third-item">
            <h4>Oxyen Cylinders/Refill</h4>
            <em></em>
            <span>Verified!</span>
            <ul>
            <!-- <li>Oxygen Cylinder Rental,Sec-71,Noida</li>
              <li>Mittal Air Products,Sec-9,Noida</li>
              <li>Oxygen Concentrator Noida,Sec-74,Noida</li>
              <li>Divya Industrial Gases,Sec-57,Noida</li>
            </ul> -->
            <div class="main-blue-button-hover">
              <a href="oxygen\index.html">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- <div id="subscribe" class="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <h2>Know Your Website SEO Score by Email</h2>
                <form id="subscribe" action="" method="get">
                  <input type="text" name="website" id="website" placeholder="Your Website URL" required="">
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                  <button type="submit" id="form-submit" class="main-button ">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div id="video" class="our-videos section">
    <div class="videos-left-dec">
      <img src="assets/images/videos-left-dec.png" alt="">
    </div>
    <div class="videos-right-dec">
      <img src="assets/images/videos-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-8">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/xTvd7oAEyhs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          <div class="overlay-effect">
                            <a href="#"><h4>Stay Safe agaisnt Covid-19</h4></a>
                            <span>Safety &amp; Precautions</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <!-- <iframe width="100%" height="auto" src="https://www.youtube.com/embed/RdJBSFpcO4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                          <div class="overlay-effect">
                            <a href="#"><h4>Hospital Beds</h4></a>
                            <span>Hospitals  &amp; Chemist</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <!-- <iframe width="100%" height="auto" src="https://www.youtube.com/embed/ZlfAjbQiL78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                          <div class="overlay-effect">
                            <a href="#"><h4>Ambulance</h4></a>
                           
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <!-- <iframe width="100%" height="auto" src="https://www.youtube.com/embed/mx1WseE7-0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                          <div class="overlay-effect">
                            <a href="#"><h4>Medecines</h4></a>
                            
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-4">
                  <div class="menu">
                    <div class="active">
                      <div class="thumb">
                        <img src="novelcoronavirus-optimized.jpg" alt="">
                        <div class="inner-content">
                          <h4>COVID 19</h4>
                          
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="hospital-beds-application.webp" alt="">
                        <div class="inner-content">
                          <h4>Hospital Beds</h4>
                          <span>Hospitals &amp; Chemists</span>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="ambulance 2.jpg" alt="Marketing">
                        <div class="inner-content">
                          <h4>Ambulance</h4>
                          
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="medicine_524556844_1000.jpg" alt="SEO Work">
                        <div class="inner-content">
                          <h4>Medecines</h4>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="section-heading">
            <h2>Feel free to <em>Contact</em> us via the <span>form</span></h2>
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.0011016336734!2d77.36986691445946!3d28.629729082418866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce551491b3ce7%3A0x7335d9fcfd4d9db0!2sJAYPEE%20INSTITUTE%20OF%20INFORMATION%20TECHNOLOGY!5e0!3m2!1sen!2sin!4v1637153594628!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="info">
              <span><i class="fa fa-phone"></i> <a href="#"> 95994 27908<br>88001 91432</a></span>
              <span><i class="fa fa-envelope"></i> <a href="#">needseverythingin1click@gmail.com<br></a></span>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
        <form id="contact" name="Form" method="post">
        

        <ul>
            <li>Name</li>
            <li><input type="text" name="name" id="name" size="30"></li>
        </ul>
        <ul>
            <li>Phone Number</li>
            <li><input type="phone" name="phone" id="phone" size="30"></li>
        </ul>
        <ul>
            <li>email</li>
            <li><input type="email" name="email" id="email" size="30"></li>
        </ul>
         <ul>
            <div>
                <input type="submit" name="submit" onclick="submitForm()" id="submit" value="Submit" />
            </div>
        </ul>
    </form>
  <?php
 $server = "localhost";
 $username = "root";
 $password = "";


$con = mysqli_connect($server, $username, $password,"project" );

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
// var used to collect values sent by method post.

$sql = "INSERT INTO `form`(`name`, `phone`,`email`) VALUES ('$name','$phone','$email')";//sql query
mysqli_query($con,$sql);//performs given query on the database
echo "<br>";

//$r=mysqli_query($con,"select max(department) from patientrelation");
//  while($row=mysqli_fetch_array($r))
// {
//     echo $row['max(department)'];
// }
?>


    <script>
        function submitForm() {
            if (validateForm()) {
               
            }
        }

        function validateForm() {
            let form = document.Form;

            if (form.name.value == "") {
                alert("Enter your First Name");
                form.name.focus();
                return false;
            }
           
            if (form.phone.value == "" || form.phone.value.length != 10) {
                alert("Enter your 10 digit phone No.");
                form.phone.focus();
                return false;
            }

            var email = form.email.value;
            var atpos = email.indexOf("@");
            var atLastPos = email.lastIndexOf('@');
            var domain = email.substring(atLastPos);
            if (email == "" || atpos < 1 || domain !== "@gmail.com") {
                alert("Enter your correct gmail ID")
                form.email.focus();
                return false;
            }
            
           
            
            return true;
        }
    </script>
        </div>
      </div>
    </div>
    <div class="contact-dec">
      <img src="assets/images/contact-dec.png" alt="">
    </div>
    <div class="contact-left-dec">
      <img src="assets/images/contact-left-dec.png" alt="">
    </div>
  </div>

  <div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="about footer-item">
            <div class="logo">
              <a href="#"><img src="Needs-logos.jpg" alt="Needs Logo"></a>
            </div>
            <a href="#">needseverythingin1click@gmail.com</a>
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="community footer-item">
            <h4>Community</h4>
            <ul>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Meta</a></li>
              <li><a href="#">Twitter</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="subscribe-newsletters footer-item">
            <h4>Subscribe for Regular updates</h4>
            <p>To get latest Covid-Related updates</p>
            <form action="#" method="get">
              <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
              <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane-o"></i></button>
            </form>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright">
            <p> 
            <br>
            Designed by Hardik,Rahul,Aditya,Gautam</p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>


</body>
</html>