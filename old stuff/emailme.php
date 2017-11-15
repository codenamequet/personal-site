<!DOCTYPE HTML>

<head>
    
    <title>Marquet Reid</title>
    <link rel="stylesheet" type="text/css" href="main.css">
  
</head>

<body>
    
    <nav>
    <a href="home.html"><img src="Marquet-BW50.png" alt="Marquet Reid's Logo" id=logo></a>
<ul>
    <li><a href="home.html">Home</a></li>
    <li><a href="about-me.html">About</a></li>
    <li><a href=resume.html>Resume</a></li>
    <li><a href=portfolio.html>Portfolio</a></li>
    <li><a href="connect.html">Connect</a></li>
   
    <li><a href="http://www.marquetreid.com/blog">Blog</a></li>
  </li>
</ul>

</nav>
    
<?php
        
$to = "contact@marquetreid.com";
$Subject = "Email from message box at marquetreid.com";

$name = $_POST["user_name"];
$email = $_POST["user_email"];
$message = $_POST["user_message"];

$headers .= "Content-type: text/html;\r\n";
$headers .="From: $email";

mail ($to, $Subject, $message, $headers);

echo "<p style=\"color: white;\">Email has been sent! Thank you $name!</p>";
    
?>

<footer>
    <a href="https://www.linkedin.com/in/marquetreid" target="_blank"><img src="incircle.png" alt="Join me on linkedin"></a>
        <a href="https://www.twitter.com/codenamequet" target="_blank"><img src="twitter-circle.png" alt="Follow me on Twitter"></a>
        <a href="https://www.bitbucket.com/codenamequet" target="_blank"><img src="bitbucket.png" alt="Check out My Code on BitBucket"></a>
</footer>    
</body>

</html>