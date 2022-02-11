<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Paramedic services</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="templatemainmo2(appointment).css">
        <link rel="stylesheet" href="css/owl-carousel.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="medecinesform.css" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>


    <div class="fixed-side-navbar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span>Intro</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#services"><span>Services</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio"><span>Portfolio</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#our-story"><span>Our Story</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact-us"><span>Contact Us</span></a></li>
        </ul>
    </div>

    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="first-content">
                <h1>Needs!</h1>
                <span><em>Confirmed</em> availability of Ambulance services!</span>
                <div class="primary-button">
                    <a href="#services">Click to see!</a>
                </div>
            </div>
        </div>
    </div>


    <div class="service-content" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Apollo Pharmacy,Sec-76,Noida</h4>
                                <div class="line-dec"></div>
                                <p>Contact No.s-</p>
                                <ul>088269 22553</ul>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Aggarwal Medical Store,Atta,Sec-18,Noida</h4>
                                <div class="line-dec"></div>
                                <p>Contact No.s-</p>
                                <ul>093134 94973</ul>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Ajay Medical Store,Sec-27,Noida</h4>
                                <div class="line-dec"></div>
                                <p>Contact No.s-</p>
                                <ul>099119 66355</ul>
                                <ul></ul>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Fortis HealthWorld,Sec-62,Noida</h4>
                                <div class="line-dec"></div>
                                <p>Contact No.s-</p>
                                <ul>0120 422 8008</ul>
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    
    


    

    
                    <div class="map">
                    <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#home">Back To Top</a>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <p>Copyright &copy; Needs!
            
            		- Designed by: <a rel="nofollow noopener" ><em>Rahul,Hardik,Aditya,Gautam</em></a></p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            document.getElementById(cityName).style.display = "block";  
        }
    </script>

    <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
    </script>
    
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to avail our services</p>
    <hr>
    <form method="post">

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>
   
    <label for="phone"><b>Contact number</b></label>
    <input type="text" placeholder="Enter number" name="phone" id="phone" required>

    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    
    
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" id="address" required>

   
    <label for="time"><b>time of booking</b></label>
    <input type="time" placeholder="Enter time for ambulance" name="time" id="time" required>

   

    
    <button type="submit" class="registerbtn">Submit</button>
  </div>
  </form>
  <div class="container signin">
    
  </div>

<?php
// Set connection variables
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$con = mysqli_connect($server, $username, $password,"project" );

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$time=$_POST['time'];


$sql = "INSERT INTO `paramedic`(`name`, `phone`,`email`,`address`,`time`) VALUES ('$name','$phone','$email','$address','$time')";//sql query
mysqli_query($con,$sql);//performs given query on the database
echo "<br>";

//$r=mysqli_query($con,"select max(department) from patientrelation");
//  while($row=mysqli_fetch_array($r))
// {
//     echo $row['max(department)'];
// }
?>
</body>
</html>