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
		<p>Please fill out the form below and a representative will contact you.</p>
        <form name="form1" method="post" action="contactus.thankyou.php">
              <table id="contactForm" border="0" cellspacing="0">
                <tr>
                  <td class="label"><p>Organization name:</p></td>
                  <td width="200"><input name="name" type="text" id="name"></td>
                  <td class="label">&nbsp;</td>
                  <td width="200">&nbsp;</td>
                </tr>
                <tr>
                  <td class="label"><p>Address:</p></td>
                  <td width="200"><input name="address" type="text" id="address"></td>
                  <td class="label"><p>City:</p></td>
                  <td width="200"><input name="city" type="text" id="city"></td>
                </tr>
                <tr>
                  <td class="label"><p>State:</p></td>
                  <td width="200"><input name="state" type="text" id="state"></td>
                  <td class="label"><p>Zip code: </p></td>
                  <td width="200"><input name="zipcode" type="text" id="zipcode"></td>
                </tr>
                <tr>
                  <td class="label"><p>Contact person: </p></td>
                  <td width="200">
                    <input name="contact_person" type="text" id="contact_person" />
                  </td>
                  <td class="label"><p>Contact title:</p></td>
                  <td width="200"><input name="contact_title" type="text" id="contact_title" /></td>
                </tr>
                <tr>
                  <td class="label"><p>Phone number: </p></td>
                  <td width="200"><input name="phone" type="text" id="phone" /></td>
                  <td class="label"><p>E-mail Address: </p></td>
                  <td width="200"><input name="email" type="text" id="email"></td>
                </tr>
                <tr>
                  <td class="label"><p>Questions:</p></td>
                  <td width="200"><textarea name="comments" rows="5" wrap="VIRTUAL" id="comments"></textarea></td>
                  <td class="label">&nbsp;</td>
                  <td width="200">&nbsp;</td>
                </tr>
                <tr>
                  <td class="label">&nbsp;</td>
                  <td width="200"><input type="submit" name="Submit" value="Submit"></td>
                  <td class="label">&nbsp;</td>
                  <td width="200">&nbsp;</td>
                </tr>
          </table>
    </form>
  </div>
	<div class="footer">&copy; Stage Door Musicals &amp; Linda Uzelac <span id="current_year"></span></div>		
		
	
</div>

</body>
</html>
