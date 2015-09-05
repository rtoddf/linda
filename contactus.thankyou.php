<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Stage Door Musicals - Contact Us</title>
<link href="styles/mainstyles.css" rel="stylesheet" type="text/css" />
<link href="styles/contentstyles.css" rel="stylesheet" type="text/css" />
<link href="styles/navstyles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://www.stagedoormusicals.com/scripts/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var theDate=new Date()
	$('.footer #current_year').html(theDate.getFullYear());
});
</script>
</head>

<body>

<div id="wrapper">
  <div id="content">
		<div id="branding"></div>
		<ul id="mainnavigation">
			<li><a href="index.html">Home</a></li>
                <li><a href="musicals.html">Musicals</a></li>
                <li><a href="choral.html">Choral Works</a></li>
                <li><a href="recordings.html">Recordings</a></li>
                <li><a href="collect.html">Collectibles</a></li>
                <li><a href="collaborators.html">Collaborators</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
    	</ul>
		
	
		<div class="divider"></div>
		<h1>Perusals requests and inquiries </h1>
		<p><?

/*Here we are going to declare the variables*/
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$contact_person = $_POST['contact_person'];
$contact_title = $_POST['contact_title'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comments = $_POST['comments'];
//Save visitor name and entered message into one variable:
$formcontent="ORGANIZATION NAME: $name\n\nORGANIZATION ADDRESS: $address, $city, $state $zipcode\n\nCONTACT PERSON: $contact_person($contact_title)\n\nPHONE NUMBER: $phone\n\nCOMMENTS: $comments";
$recipient = "lindamusic@gmail.com";
$subject = "Stage Door Musicals Contact Form";

$mailheader = "From: $email\r\n";
$mailheader .= "Reply-To: $email\r\n";
$mailheader .= "MIME-Version: 1.0\r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Failure");
echo "Thank You! Please feel free to explore the site.";

/*
$name = $_GET['name'] ;
$email = $_GET['email'] ;
$message = $_GET['message'] ;
mail( "rtoddf@mindspring.com", "Test subject", $message, "From: $email" );
print "Congratulations $name your email has been sent";
*/
?></p>

<div class="footer">&copy; Stage Door Musicals &amp; Linda Uzelac <span id="current_year"></span></div>	
		

  </div>

	
</div>

</body>
</html>
