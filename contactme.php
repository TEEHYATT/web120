<!DOCTYPE html>
<html>
<head>
<title>Tamerica Hyatt</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
</head>

<body>
    
    
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i>Web120 Portal- Tee's Web Portal!</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Tee</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Tamerica Hyatt</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/glasses.jpg" class="desktop" alt="Me and my sunglasses!" />
 <img src="images/hollywood.jpg" class="desktop" alt="Me in Hollywood!" />
 <img src="images/sip.jpg" class="desktop" alt="Drinkin' some alcohol" />

 <img src="images/glasses.jpg" class="phone" alt="Me and my sunglasses!" />
 <img src="images/hollywood.jpg" class="phone" alt="Me in Hollywood!" />
 <img src="images/sip.jpg" class="phone" alt="Drinkin' some alcohol" />
    
 <img src="images/hollywood.jpg" class="phone" alt="" />

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>About Me!</h3>
 <img src="images/tablet.jpg" class="tablet" alt="" />
 <p>Hello!
<br>
My name is Tamerica Hyatt, although I go by "T" usually.
<br>
<br>
I haven't taken classes since last Spring, so I'm a little bit rusty on the coding stuff. Hopefully I'll get back into the swing of things, quickly, though!
<br>
I live in Seattle, at the top of Queen Anne hill.
<br>
For fun I like to exercise and draw, as well as take care of my pet Senegal parrot, Mateo! I am 29-years-old and he is 23-years-old, so we're both millenials!
<br>
<br>
One of the things I'd love to get better at in this class involves designing web pages that look good on multiple devices. In my previous course, we touched on that a bit but I'm still not too sure of myself when it comes to writing the code required for that.
<br>
My goal is to develop the skills to become a freelance designer.
</p>

</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2021 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Tamerica Hyatt</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>
</html>

