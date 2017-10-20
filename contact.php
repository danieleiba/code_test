
<!DOCTYPE html>
<html>

<head>

		<title>karme | contact</title>

	<!-- Meta Zone -->
	<meta charset="utf-8">
	<meta name="description" content="karme.co, life in a bottle." />
	<meta name="keywords" content="karme, kombucha, lisbon, lisboa, portugal beverage, drink.">
	<meta name="robots" content="index, follow, all" />
	<meta name="author" content="Daniel Eiba">
	<meta name="publisher" content="Daniel Eiba">
	<meta name="geo.placename" content="Lisbon">
	<meta name="geo.region" content="PT">
	<meta name="google" content="notranslate" />

	<!-- Viewport -->
	<meta name="viewport" content="initial-scale=1, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-mobile-web-app-title" content="karme">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Javascript -->
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body id="page">

	<header>
		<div id="wrap">
		  	<a href="index.html" title="Home"><img class="logo" src="img/logo.png" alt="Logo"/></a>
		    <nav id="nav">
		      <ul>
		        <li><a href="index.html" title="Home">Home</a></li>
		        <li><a href="products.html" title="Products">Products</a></li>
		        <li><a href="gallery.html" title="Gallery">Gallery</a></li>
		        <li><a class="selected" href="contact.php" title="Contact">Contact</a></li>
		        <li><a href="https://www.instagram.com/karme.co" title="Instagram" target="_blank"/><img class="instagram-header-icon" src="img/instagram-header-icon.png" alt="Instagram Icon"></a></li>
		      </ul>
		    </nav>
		</div>
	</header>

	<div class="hero-image-contact">
	</div>

	<div class="main">

			<?php
				$action=$_REQUEST['action'];
				if ($action=="")
				{
			?>

			<form  action="" method="POST" enctype="multipart/form-data">
			  <p>Whether you are interested in purchasing our products, would like to partner with us, or are eager to join the team - we'd love to hear from you!</p>
			  <p>Please send us a note and we'll be in touch with you shortly.</p>
			<input type="hidden" name="action" value="submit">
			    <input name="name" type="text" value="" size="30" placeholder="First and last name * "/><br>
			    <input name="email" type="text" value="" size="30" placeholder="E-mail *"/><br>
			    <input name="phone" type="text" value="" size="30" placeholder="Phone *"/><br>
			    <input name="subject" type="text" value="" size="30" placeholder="Subject *"/><br>
			    <textarea name="message" rows="7" cols="30" placeholder="Message"></textarea><br>
			    <input type="submit" value="Send"/>
		    </form>


			<?php
				    }
				else
				    {
				    $name=$_REQUEST['name'];
				    $email=$_REQUEST['email'];
				    $phone=$_REQUEST['phone'];
				    $subject=$_REQUEST['subject'];
				    $message=$_REQUEST['message'];
				    if (($name=="")||($email=="")||($phone=="")||($message==""))
				        {
				        echo "<p>Drat! We'll need your name, email, phone to be able to get back to you...</br>Thank you!</p>";
				        }
				    else{
				        $from="From: $name<$email>\r\nReturn-path: $email";
				        $subject="$subject";
				        mail("hello@karme.co", $subject, "
From: 	$name
Phonenumber: 	$phone
E-mail:		$email

$message", $from);
				        echo "<p>Your message was sent.</br>Thank you for your interest in karme.</p>";
				        }
				    }
			?>

		</div>
	</div>

	<footer>
	  <p>&copy; 2017 karme.co</p>
	</footer>

</body>
</html>
