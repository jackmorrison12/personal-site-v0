<?php 
$errors = '';
$myemail = 'jack1morrison@icloud.com';
if(empty($_POST['name']))
{
    $errors .= "\n Please enter your name.";
}
if(empty($_POST['email']))
{
    $errors .= "\n Please enter your email.";
}
if(empty($_POST['message']))
{
    $errors .= "\n Please enter a message.";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 
$ip = $_SERVER['REMOTE_ADDR'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Your email address is invalid.";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission from $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: \n$name \n\n Email:\n $email_address \n\n Message: \n $message \n\n IP address:  $ip"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);

} 

if( empty($errors))
{
	$to = $email_address; 
	$email_subject = "Thank You for filling out a contact form!";
	$email_body = "Thank You for filling out a contact form. ".
	" You submitted the following information:\n\n Name: $name \n\n Email: $email_address \n\n Message: \n $message \n\n Please reply to this email if you would like to contact me any further. I will reply soon. \n\n Regards, \n Jack Morrison \n http://v0.jackmorrison.xyz"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $myemail";
	
	mail($to,$email_subject,$email_body,$headers);

	header('Location: contact-form-thank-you');
} 
?>

<!DOCTYPE html>
<html>

<meta name="description" content="Description">
<meta name="keywords" content="Jack, Morrison, Error, Westcliff">
<meta name="author" content="Jack Morrison">
<meta charset="UTF-8">

    <head>


<link rel="apple-touch-icon-precomposed" sizes="57x57" href="logos/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="logos/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="logos/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="logos/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="logos/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="logos/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="logos/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="logos/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="logos/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="logos/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="logos/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="logos/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="logos/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="logos/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="logos/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="logos/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="logos/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="logos/mstile-310x310.png" />



       <title>Error</title> 
       <style>
html {
  overflow-y: scroll;
}

P { text-align: center }
h1 { text-align: center }
h2.centerHeader { text-align: center }
FORM { text-align:center }


table {
    margin-left:auto; 
    margin-right:auto;
    body {text-align:center;}
  }

IMG.logo {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 55px; 
    height:100px}

table, th, td {
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;
}
table#t01 th	{
    background-color:#ba0f04;
    color: white;
}


body {background-color:white}

body {
padding: 0;
margin: 0;
}

#navigation {
position: fixed;
top: 0;
width: 100%;
color: #ffffff;
height: 35px;
text-align: center;
padding-top: 15px;
-webkit-box-shadow: 0px 0px 8px 0px #000000;
-moz-box-shadow: 0px 0px 8px 0px #000000;
box-shadow: 0px 0px 8px 0px #000000;
background-color: rgba(186,  15,  4,  1);
color: rgba(186,  15,  4,  1);
}
#navigation a {
font-size: 14px;
padding-left: 15px;
padding-right: 15px;
color: white;
text-decoration: none;
font-weight: bold;
text-transform: uppercase;
}


#navigation a:hover {
color: #820a02;
} 

</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69344812-1', 'auto');
  ga('send', 'pageview');

</script>

    </head>
    
    <body style='font-family: "arial";'>


        <a href="/"><img class="logo" src="Drawing (3).png" alt="Jack Morrison, Westcliff High School for Boys"></a>

<div id="navigation">  

    <a href="/">Home</a>
    
    <a href="cv">CV</a>
    
    <a href="portfolio">Portfolio</a>
    
    <a href="aboutme">About Me</a>
    
    <a href="contact">Contact Me</a>
 
</div>
 

    
<h1>Error</h1>

<p>
<?php
echo nl2br($errors);
?>
</p>

<FORM><INPUT Type="button" VALUE="Try Again" onClick="history.go(-1);return true;"></FORM>

    </body>
</html>