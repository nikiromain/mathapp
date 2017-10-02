<?php

$OUTPUT = '';

if( formSubmission() && ( $formFields = validateFormSubmission( $errors )) ){
    if( !$errors ){
        if( sendEmail( $mailConfig,$formFields ) ){
            $OUTPUT = successMessage();
        }else{
            $OUTPUT = failureMessage();
        }
    }else{
        $OUTPUT = errorMessage( $errors );
    }
}
?>
<!DOCTYPE html>
<html lang="en-us">
<html>
<head>
	<title>Math Kidz</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="mathKidz.css">
	<script src ="sideMenu.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"></script>
	<link rel="stylesheet" href="w3.css">
	<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<script src ="sideMenu.js"></script>
	<style>
    .cse .gsc-search-button input.gsc-search-button-v2,
    input.gsc-search-button-v2 {
        height: 26px !important;
        margin-top: 0 !important;
        min-width: 13px !important;
        padding: 5px 26px !important;
        width: 68px !important;
    }
	
</style>

	</head>

<body id="home">

<!-- Side Navigation on click -->
	<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none;z-index:2" id="mySidenav">
		<a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-teal">Close
			<i class="fa fa-remove"></i>
		</a>
		<a href="index.php">Home</a>
		<a href="lessons.html">Lessons</a>
		<a href="parentsAndTeachers.html">Parents & Teachers</a>
		<li class="w3-dropdown-hover w3-right">
			<a href="" class="w3-hover-khaki" title="Games">Games<i class="fa fa-caret-down"></i></a>     
			<div class="w3-dropdown-content w3-text-theme">
			<a href="substractGame.html" class="w3-hover-khaki">Subtraction Tiles</a>
			<a href="addSumSense.html" class="w3-hover-khaki">Add Sum Sense</a>
			<a href="countDot.html" class="w3-hover-khaki">Count It & Dot It</a>
    </div>
			</li>
	</nav>


<!-- Navbar -->
	<div id="topbar"><img src="images/topbar.png" alt="topbar"/>
	</div>
	<div class="w3-top w3-border-bottom" id="menuBar">
		<ul class="w3-navbar w3-text-theme w3-right-align w3-large w3-padding-16">
			<li class="w3-hide-medium w3-hide-large w3-opennav w3-left">
				<a class="w3-large" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
			</li>
			<li class="w3-margin-left"><a class="w3-hover-none" href="#">
				<span id="logo"><img src="images/logo.png" alt="logo"/></span></a></li>	
				
			<li class="w3-margin-right" style="float:right;width:60px;overflow:hidden;height:34px;margin-top:0px;margin-right:3px;">
			<a href="javascript:void(0);" class="topnav-icons fa fa-search w3-xlarge w3-right w3-hover-khaki" onclick="openNav();loadCSE() " title="Search"></a>
			</li>

			
			<li class="w3-hide-small  w3-right"><a href="#" class="w3-hover-khaki">Lessons</a></li>			
			<li class="w3-hide-small w3-right"><a href="parentsAndTeachers.html" class="w3-hover-khaki">Parents & Teachers</a></li>
			<li class="w3-hide-small w3-dropdown-hover w3-right">
			<a href="#" class="w3-hover-khaki" title="Games">Games<i class="fa fa-caret-down"></i></a>     
				<div class="w3-dropdown-content w3-text-theme">
			<a href="matchUp.html" class="w3-hover-khaki w3-left ">MatchUp<sup>*Bonus</sup </a>	
			<a href="substractGame.html" class="w3-hover-khaki">Subtraction Tiles</a>
			<a href="addSumSense.html" class="w3-hover-khaki w3-left ">Add Sum Sense</a>
			<a href="countDot.html" class="w3-hover-khaki">Count It & Dot It</a>
				</div>
			</li>
			<li class="w3-right w3-hover-khaki w3-hide-small"><a href="index.html" class="w3-text-teal w3-hover-khaki"><i class="fa fa-home"></i></a></li>
		</ul>
		<nav class="w3-dropnav w3-card-2 w3-grey" style="display:none" id="myDropnav">
  <div class="w3-container">
  <span onclick="closeNav()" class="w3-closebtn w3-xlarge" title="Close Menu">&times;</span>
  </div>  
  <div class="w3-row-padding w3-padding-bottom">
  <gcse:search></gcse:search>
  </div>
  <br>
</nav>
	</div>

<!-- Navbar on small screens -->
	<div id="navSmall" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:43px;">
		<ul class="w3-navbar w3-left-align w3-large w3-theme">
			<li><a href="index.html">Home</a></li>
			<li><a href="lessons.html">Lessons</a></li>
			<li><a href="parentsAndTeachers.html">Parents & Teachers</a></li>
			<li class="w3-dropdown-hover w3-right">
			<a href="" class="w3-hover-khaki" title="Games">Games<i class="fa fa-caret-down"></i></a>     
			<div class="w3-dropdown-content w3-text-theme">
			<a href="substractGame.html" class="w3-hover-khaki">Subtraction Tiles</a>
			<a href="addSumSense.html" class="w3-hover-khaki">Add Sum Sense</a>
			<a href="countDot.html" class="w3-hover-khaki">Count It & Dot It</a>
    </div>
			</li>
		</ul>
		
		
	</div>

<!--Main Area-->
	<div class="w3-display-container w3-animate-opacity carousel slide" id="mySlider" data-ride="carousel">
		  <!-- Indicators -->
		<ol class="carousel-indicators">
		<li data-target="#mySlider" data-slide-to="0" class="active"></li>
		<li data-target="#mySlider" data-slide-to="1"></li>
		<li data-target="#mySlider" data-slide-to="2"></li>
		<li data-target="#mySlider" data-slide-to="3"></li>
		</ol>
		
			 <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		<div class="item active">
		<img class="mainimg" src="images/numbers_image.png" alt="numbers" style="width:100%;min-height:150px;max-height:450px;">
		 <div class="carousel-caption w3-display-bottomleft">
		<div class="w3-container w3-display-bottomleft w3-margin-bottom">  
			<button onclick="window.location.href='matchUp.html'" class="w3-btn w3-xlarge w3-cyan w3-hover-teal" title="Go To W3.CSS">Play Quick & Match It!</button>
		</div>
		 </div>
		</div>
		
		 <div class="item">
   <img class="mainimg" src="images/parentsnTeachersmain.png" alt="parents and teachers" style="width:100%;min-height:150px;max-height:450px;">
      <div class="carousel-caption w3-display-bottomleft ">
          <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
			<button onclick="window.location.href='parentsAndTeachers.html'" class="w3-btn w3-xlarge w3-yellow w3-hover-teal" title="Parents and Teachers">Parents & Teachers Listen Up!</button>
		</div>
      </div>
    </div>

    <div class="item">
      <img src="img_flower.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>

    <div class="item">
   <img class="mainimg" src="images/lessons.png" alt="parents and teachers" style="width:100%;min-height:150px;max-height:450px;">
      <div class="carousel-caption w3-display-bottomleft">
       <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
			<button onclick="window.location.href='Lessons.html'" class="w3-btn w3-xlarge w3-purple w3-hover-teal" title="Parents and Teachers">Get Extra Lessons!</button>
		</div>
      </div>
    </div>
  </div>

   <!-- Left and right controls -->
  <a class="left carousel-control" href="#mySlider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mySlider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
	
	</div>

<!-- Spacer Qoute -->
	<section id="spacer">         
         <p class="w3-large w3-serif"><i>"Arithmetic is being able to count up to twenty without taking off your shoes." ~ Mickey Mouse</i></p>
     </section>
			
<!-- Container -->
	<div class="w3-container w3-padding-24 w3-center">
		<h2>GAMES</h2>
		<p>Let's have fun while learning!</p>
		
		<div class="w3-row"><br>
		
			<div class="w3-third">
				<div class="games">
					<div class="icons">
						<a href="#" class="games"><img class= "icon-games1"  src="images/container_image.png" alt="subtracttiles" style="width:60%">
							<img class= "icon-games" src="images/subtractTiles.png" alt="icon"/>
						</a>
					</div>
				</div>
					<a href="substractGame.html" class="games"> <h3>Subtraction Tiles</h3></a>
					<p>Subtract...Minus...Reduce!</p>
				
			</div>

			<div class="w3-third">
				<div class="games">
					<div class="icons">
						<a href="addSumSense.html" class="games"><img src="images/container_image.png" alt="addsumsense" style="width:60%">
							<img class= "icon-games" src="images/addSumSense.png" alt="icon"/>
						</a>
					</div>
				</div>
					<a href="#"class="games"><h3>Add Sum Sense</h3></a>
						<p>Add...Sum...Plus!</p>
			</div>

			<div class="w3-third">
				<div class="games">
					<div class="icons">
						<a href="CountDot.html" class="games"><img src="images/container_image.png" alt="dot" style="width:60%">
							<img class= "icon-games" src="images/countDot.png" alt="icon"/>
						</a>
					</div>
				</div>
					<a href="#" class="games"><h3>Count It & Dot It</h3></a>
						<p>Calculate...Tally...Add Up!</p>
			</div>

		</div>
	</div>	
	
<!-- Footer -->
	<footer class="w3-container w3-padding-24 w3-center">
		<h4>A Math Kidz Project</h4>
		<p><img src="images/footer-image.png" alt="footerimage"/></p>
		<a class="footer" href="aboutUs.html" title="AboutUs">About Us &nbsp;&nbsp; </a>
		<a class="footer" href="termsOfUse.html" title="Terms of Us">Terms of Use &nbsp;&nbsp;</a>
		<a class="footer" href="privacyPolicy.html" title="Privacy Policy">Privacy Policy </a>
		
		<button onclick="document.getElementById('emailForm').style.display='block'" class="w3-btn" id="sbbtn">Email</button>
			<div id="emailForm" class="w3-modal">
			<div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:450px">
  
			<div class="w3-center"><br>
				<span onclick="document.getElementById('emailForm').style.display='none'" 
				class="w3-closebtn w3-black  w3-hover-red w3-container w3-padding-4 w3-display-topright" title="Close Modal">×</span>
				<img src="images/email.png" alt="email" style="width:30%" class="w3-circle w3-margin-top">
			</div>

		<form class="w3-container" action="" method="post">
		 	<?php print $OUTPUT; ?>

			<div class="w3-section">
				<label class="w3-text-black w3-left"><b>Email</b></label>
					<input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Your Email" name="youremail" required>

				<label class="w3-text-black w3-left"><b>Comments/Suggestions/Queries</b></label>
					<textarea class="w3-input w3-border" type="text" placeholder="Write your message here..." name="yourmessage" required></textarea>

						<button class="w3-btn-block  w3-section w3-padding" name="emailform"  type="submit">Send</button>
			</div>
		</form>

		<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
			<button onclick="document.getElementById('emailForm').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
		</div>

  </div>
</div>
		<p>Copyright 2016 Math Kidz</p>

		<div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
			<span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
			<a class="w3-btn" href="#home"><span class="w3-xlarge">
			<i class="fa fa-chevron-circle-up"></i></span></a>
		</div>
	</footer>
		
	
</body>
</html>
<?php 
function formSubmission(){
    if( isset( $_POST['emailform'] ) ){
        if( get_magic_quotes_gpc() ){ stripslashes_deep( $_POST ); }
        return true;
    }
    return false;
}

function stripslashes_deep( $value ){
    $value = is_array( $value ) ?
        array_map('stripslashes_deep', $value):
        stripslashes($value);
    return $value;
}

function validateFormSubmission( &$errors=array() ){
    $formData = array( '','','' );
    
    if( empty( $_POST['yourmessage'] ) ){
        $errors['yourmessage'] = "Please write a message."; 
    }else{
        $formData[0] = $_POST['yourmessage'];
    }

 if( empty( $_POST['youremail'] ) ){
        $errors['youremail'] = "Please provide your email address.";
    }elseif( !filter_var( $_POST['youremail'],FILTER_VALIDATE_EMAIL ) || !preg_match( '#\w\.\w{2,}$#',$_POST['youremail'] ) ){
        $errors['youremail'] = "Please re-enter your email address.";
    }else{
        $formData[2] = $_POST['youremail'];
    }
    
    return $formData;
}

function sendEmail( $mailConfig,$formFields ){
    list( $myemail ) = $mailConfig;
    
    list( $youremail,$yourmessage ) = $formFields;
    
    $headers = "From: $myemail
";
    $headers .= "Reply-to: $youremail
";
    $headers .= "X-Mailer: Contact Form";
    
    $t = new DateTime( '@'.time() );
    $datetime = $t->format( 'r' );
    
    $subject = "Contact Form Submission";
    $message = "
$subject
=======================

 <$youremail> sent you a message.:
----------------------------------------------------------------------
$yourmessage

----------------------------------------------------------------------
Sent on $datetime";
    $message = wordwrap( $message,70 );
    
    if( mail( $myemail,$subject,$message,$headers ) ){
        return true;
    }else{
        return false;
    }
}

function successMessage(){
    $message = "Your message was sent successfully - expect a reply soon!  Thank you!";
    return "<div class='message'>$message</div>";
}

function failureMessage(){
    $message = "We're sorry, we were unable to send your message.  Please try again.";
    return "<div class='message error'>$message</div>";
}

function errorMessage( $errors=array() ){
    if( empty( $errors ) ){ return; }
    $message = implode( "<br>",$errors );
    return "<div class='message error'>$message</div>";
}