<!DOCTYPE html>
<html class="no-js">
    <head>
        <link class="log-title"  rel="icon" href="images/miraa-log.jpg" type="image/gif" sizes="17x17">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>miraa kenya</title>
        <meta name="description" content="buy miraa">
         <meta name="description" content="view miraa">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- Fonts -->
        <!-- Lato -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- CSS -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="css/responsive.css">
    </head>

    <body id="body">

    	<div id="preloader">
    		<div class="book">
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		</div>
    	</div>

	    <!-- 
	    Header start
	    ==================== -->
	    <div class="navbar-default navbar-fixed-top" id="navigation">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="#">
                        <img class="logo-1" src="images/miraa-log.jpg" alt="LOGO" width="90px" >

	                    <img class="logo-2" src="images/miraa-log.jpg" alt="tesh tech" width="60px" height="60px">
	                </a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <nav class="collapse navbar-collapse" id="navbar">
	                <ul class="nav navbar-nav navbar-right" id="top-nav">
	                    <li><a href="index.php">Home</a></li>
	                    <li><a href="#about">About us</a></li>
	                    <li><a href="#service">Services</a></li>
                      <li><a href="#learn">work</a></li>
                      <li><a href="#learn">learn</a></li>

	                    <li><a href="#contact">Contact</a></li>
                            <li class="current"><a href="addmiraap.php">login</a></li>


	                </ul>
	            </nav><!-- /.navbar-collapse -->
	        </div><!-- /.container-fluid -->
	    </div>
         <section id="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="wow fadeInDown">

     <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
          <h2>login</h2>
                        <div class="form-group">
                            <form action="server.php" method="POST" id="contact-form">
                                <div class="input-field">
                                    <input type="number" class="form-control" placeholder="number ya simu"  name="phone">
                                </div>
                                <div class="input-field">
                                    <input type="password" class="form-control" placeholder="password" name="password">
                                </div>
                               
                                <button class="btn btn-send" type="submit" name="login">login</button>
                     
                            </form>

                            <div id="success">
                                <p>Your Message was sent successfully</p>
                            </div>
                            <div id="error">
                                <p>Your Message was not sent successfully</p>
                            </div>






                            </h2>
                            <p class="wow fadeInDown" data-wow-delay="0.3s"></p>
                            <div class="wow fadeInDown" data-wow-delay="0.3s">
                                

                                or

     <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
        <h2>register</h2>
                        <div class="form-group">

                            <form action="" method="POST" id="contact-form">
                                <div class="input-field">
                                    <input type="text" class="form-control" placeholder="your name" name="name">
                                </div>
                                <div class="input-field">
                                    <input type="text" class="form-control" placeholder="your email" name="email">
                                </div>
                                <div class="input-field">
                                    <input type="number" class="form-control" placeholder="number ya simu" name="phone">
                                </div>
                                <div class="input-field">
                                    <input type="password" class="form-control" placeholder="password" name="password">
                                </div>
                               
                                <button class="btn btn-send" type="submit" name="register">create account</button>
                                
                            </form>

                            <div id="success">
                                <p>Your Message was sent successfully</p>
                            </div>
                            <div id="error">
                                <p>Your Message was not sent successfully</p>
                            </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 wow zoomIn">
                        <div class="block">
                          
                
                            






                           
                        </div>
                    </div>
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- header close -->



        <!-- 
        About start
        ==================== -->
      
        <!-- 
        About start
        ==================== -->

       


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miraa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['send'])){
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$message=filter_input(INPUT_POST,'message');
$phone=filter_input(INPUT_POST,'phone');



$sql = "INSERT INTO users (name, email,message,phone )
VALUES ('$name', '$email','$message','$phone')";

if ($conn->query($sql) === TRUE) {
echo"<script type='text/javascript'>alert('message sent successfully  ');</script>";
    echo "<span style='color: red;'>hello $name we have received you request we are going to talk to you at short time
        <br>
        phone number: $phone or email: $email incase it is incorrect please re-enter again
    </span>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

if(isset($_POST['register'])){
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$phone=filter_input(INPUT_POST,'phone');



$sql = "INSERT INTO users (username, email,phone,password )
VALUES ('$name', '$email','$phone','$password')";

if ($conn->query($sql) === TRUE) {
 header('location:registeredusers.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo"<script type='text/javascript'>alert('message sent successfully  ');</script>";
}
}











$conn->close();




















?>

        <!-- 


        Contact start
        ==================== -->
        <section id="contact" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="block">
                            <div class="heading wow fadeInUp">
                                <h2>ongea nasi</h2>
                                <p>huwa tunajibu kwa muda usio zidi masaa ishirini</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
						<div class="block text-left">
							<div class="sub-heading">
								<h4>Anwani zetu</h4>
								<p></p>
							</div>
							<address class="address">
                                <hr>
								<p>+254 <br>
                                kenya 32</p>
                                <hr>
                                <p><strong>Email:</strong>&nbsp;teshtech@gmail.com<br>
                                <strong>Phone:</strong>&nbsp;+254724817625</p>
								 <strong>whatsapp:</strong>&nbsp;+254724817625</p>
                                  <a href=""><img src="facebook.png" height="70px" width="70px"> fb </a> <a href="https://www.facebook.com/Teshtech-451650828721544/?modal=admin_todo_tour"><img src="tweeter.png" height="70px" width="70px"> tweeter </a>
                                
							</address>
						</div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
                    	<div class="form-group">
                    	    <form action="#" method="POST" id="contact-form">
                    	        <div class="input-field">
                    	            <input type="text" class="form-control" placeholder="jina lako" name="name">
                    	        </div>
                                <div class="input-field">
                                    <input type="text" class="form-control" placeholder="nambari ya simu" name="phone">
                                </div>
                    	        <div class="input-field">
                    	            <input type="email" class="form-control" placeholder="Email yako" name="email">
                    	        </div>
                    	        <div class="input-field">
                    	            <textarea class="form-control" placeholder="ujumbe wako" rows="3" name="message"></textarea>
                    	        </div>
                    	        <button class="btn btn-send" type="submit" name="send">tuma</button>
                    	    </form>

                    	    <div id="success">
                    	        <p>Your Message was sent successfully</p>
                    	    </div>
                    	    <div id="error">
                    	        <p>Your Message was not sent successfully</p>
                    	    </div>
                    	</div>
                    </div>
                </div>
            </div>
        </section>



        <section clas="wow fadeInUp">
        	<div class="map-wrapper">
        	</div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <p>Copyright &copy; <a href="https://sniper8.000webhostapp.com/">Teshatech</a>| All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="js/jquery.lwtCountdown-1.0.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>
