<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "elias.heggernes@gmail.com";
    $email_subject = "Multicore Mail";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->
<html lang="NOR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Takk for at du kontakter oss</title>
<script src="https://kit.fontawesome.com/911551dd30.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" type="image/x-icon" href="../logo/favicon.ico">
<link href="../CSS/my-style.css" rel="stylesheet" type="text/css">
<link href="../CSS/end class.css" rel="stylesheet" type="text/css">
<script src="../Java-Script/style.js"></script>
<script src="../Java-Script/my-style.js"></script>
</head>
<body>

<div id="menu-scroll">
			<a href="../index.html" ><img src="../logo/logo.svg"
		 alt ="Logo"
		 height="45px"
		 style="" class="logomenu"></a>
		<div class="scroll">
		<nav>
		<a href="../html/Products.html" class="menutext productsmenu"><d>Produkter</d></a>
		<a href="../html/Graphic-menu.html" class="menutext"><d>Grafisk Design</d></a>
		<a href="../html/Photo.html" class="menutext"><d>Foto</d></a>
		<a href="../html/contact.html" style="float: right;" class="menutext"><d>Kontakt Meg</d></a>
		</nav>
	</div>
</div>
<div id="hide"></div>

<div id="menu-2-con">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="../index.html" class="menutext-phone"><d>Hjem</d></a>
		<br>
		<a href="../html/Products.html" class="menutext-phone"><d>Produkter</d></a>
		<br>
		<a href="../html/Graphic-menu.html" class="menutext-phone"><d>Grafisk Design</d></a>
		<br>
		<a href="../html/Photo.html" class="menutext-phone"><d>Foto</d></a>
		<br>
		<a href="../html/contact.html" class="menutext-phone"><d>Kontakt Meg</d></a>
</div>
<span class="fas fa-ellipsis-h" onclick="openNav()"></span>
</div>
		
	
			
	<div id="contact-form-thanks" style="background-color: #F4F4F4; color: black; padding: 300px 0px;">
 <p style="text-align: center;">Thank you for contacting us. We will be in touch with you very soon.</p>
</div>
	
<footer>
	<div class="end">
		<div class="end-text">
			<div class="end-text-left">
			<d style="opacity: 0.7;">Phone:</d>
			<br>
			<d style="opacity: 0.7;">Mail:</d>
			<br>
			<d style="opacity: 0.7;">Photo:</d>
			<br>
			</div>
			<div class="end-text-right">
			<d style="opacity: 0.7;"> +47 451 53 051</d>
			<br>
                <div class="end-text-link">
                    <d><a href="mailto:eliasheggernes@gmail.com"
                          style="color: #EDEFFB; text-decoration: none; opacity: 0.7;">


                        eliasheggernes@gmail.com</a></d>
                </div>
                <br>

			<div class="end-text-link"><d><a href="https://www.instagram.com/anna.monstad/"	   
style="color: #EDEFFB; text-decoration: none; opacity: 0.7;" target="_blank">
Anna Silgjerd Monstad,</a></d></div>
			<div class="end-text-link"><d><a href="https://www.instagram.com/eliasheggernes/"	   
style="color: #EDEFFB; text-decoration: none; opacity: 0.7;" target="_blank">
Elias Fjøren Heggernes</a></d></div>
			<br>
			</div>
			
		</div>
			<img src="../Pictures-all/copyright 1.png"
			 alt="Copyright"
			 height="30px;"
			 style="float: right;">
	</div>
</footer>
</body>



<?php
}
?>