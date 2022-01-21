<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135196336-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135196336-1');
</script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Simon Eliasen: Information-technology student based in Aalborg, studying the depths of the internet one bit at a time."/>
  <meta name="keywords" content="Simon Eliasen,Information-technology,student,software developer,Aalborg,entrepreneur"/>
  <meta name="theme-color" content="#212529">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <title>Simon Eliasen</title>
</head>
<body>



<!--Main wrapper for top page  -->
<div class="mainwrapper">

<!--INSERT MATRIX GENERATION EFFECT (SCRAMBLING)  -->
<div class="title">
  <pre>
    ,,                                                            ,,    ,,
 .M"""bgd   db                                              `7MM"""YMM  `7MM    db
,MI    "Y                                                     MM    `7    MM
`MMb.     `7MM  `7MMpMMMb.pMMMb.   ,pW"Wq.  `7MMpMMMb.        MM   d      MM  `7MM   ,6"Yb.  ,pP"Ybd  .gP"Ya  `7MMpMMMb.
  `YMMNq.   MM    MM    MM    MM  6W'   `Wb   MM    MM        MMmmMM      MM    MM  8)   MM  8I   `" ,M'   Yb   MM    MM
.     `MM   MM    MM    MM    MM  8M     M8   MM    MM        MM   Y  ,   MM    MM   ,pm9MM  `YMMMa. 8M""""""   MM    MM
Mb     dM   MM    MM    MM    MM  YA.   ,A9   MM    MM        MM     ,M   MM    MM  8M   MM  L.   I8 YM.    ,   MM    MM
P"Ybmmd"  .JMML..JMML  JMML  JMML. `Ybmd9'  .JMML  JMML.    .JMMmmmmMMM .JMML..JMML.`Moo9^Yo.M9mmmP'  `Mbmmd' .JMML  JMML.
  </pre>
</div>

<!-- Portrait swipe  -->
<div class="portrait">
<img src="img/portrait.png" alt="Graphic image of website owner">
</div>
<!--Code:  Add syntax colors -->
<div class="code">
<pre>
  class Person:

      def __init__(self, name, surname, birthdate, location):
          self.name = name
          self.surname = surname
          self.birthdate = birthdate
          self.location = location


      def age(self):
          today = datetime.date.today()
          age = today.year - self.birthdate.year

          if today < datetime.date(today.year, self.birthdate.month, self.birthdate.day):
              age -= 1

          return age

  me = Person(
      "Simon",
      "Eliasen",
      datetime.date(1997, 4, 19),
      "Aalborg, Denmark",
  )
</pre>
</div>

<!-- Mainwrapper end  -->
</div>

<!--My work wrapper  -->
<div class="content">

<div class="introwrapper">

<!--An Introduction to me  -->
<div class="intro">
<h1>MY WORK </h1>
<p id="main"> Self taught software developer, studying the depths of the internet one bit at a time
 I'm a 2nd semester Information-technology student, who wishes to pursue the road of software development </p>
</div>
</div>

<!-- Wrapper for lists  -->
<div class="listwrapper">

<!--Software Development List  -->
<div class="list1">
<h2>Sofware development</h2>
<ul>
  <li>Php</li>
  <li>MySQL</li>
  <li>Javascript</li>
</ul>
</div>

<!-- General Qualifications List -->
<div class="list2">
<h2>Other Qualifications</h2>
<ul>
  <li>Photography</li>
  <li>Graphic design</li>
  <li>Usability evaluation</li>
</ul>
</div>

<!--Future Ventures List  -->
<div class="list3">
<h2>Future Ventures</h2>
<ul>
  <li>Python</li>
  <li>OOP w. Java</li>
  <li>Datastructures & Algorithms</li>
</ul>
</div>

<!--Listwrapper end  -->
</div>

<!--Mywork wrapper end  -->
 </div>

<!-- Projects  -->
<div class="projects">
<br>
<h2 id="projectsheader">PROJECTS </h2>

  <div class="project1">
    <img class="logo" src="img/ustepperlogo.png" alt="uStepper logo" width="17%">
    <!-- <img class="logo" src="img/ustepperlogo.png" alt="ustepper logo" width="17%"> -->
    <a href="https://www.ustepper.com/" target="_blank" rel="noopener" aria-label="uStepper website"><img class="website" src="img/ustepper.PNG" alt="image of ustepper website" width="100%"><br></a>
    <p class="description">In relation to my job at uStepper, i was tasked with making a redesign with a focus on modernizing the site aswell as making it appeal to the target group of the product, a focus was also to maintain a high emphasis on usability.
    The website was developed in already established Content management systems, to give the founders control of content posted on the site </p><br>
    <p id="technologies"><b>Technologies used:</b><br></p><br>
    <div class="pill">PHP</div>
    <div class="pill">SQL</div>
    <div class="pill">CSS</div>
    <div class="pill">HTML</div>
    <div class="pill">WORDPRESS</div>
    <div class="pill">PRESTASHOP</div>
    <div class="pill">PHOTOSHOP</div>
  </div>

<br><br><br>

  <div class="project2">
    <img class="logo" src="img/cafefrederiksberglogo.png" alt="café frederiksberg logo" width="17%">
    <a href="https://www.cafefrederiksberg.dk/" target="_blank" rel="noopener" aria-label="Café Frederiksberg website"><img class="website" src="img/cafefrederiksberg.PNG" alt="image of café frederiksberg website" width="100%"></a><br>
    <p class="description">In relation to a project at Aalborg University in my 2nd semester, with the title "construction and evaluation of an IT-system" we developed a content management system for local business.
      The IT-system was developed with <a href="https://www.amazon.com/Designing-Interactive-Systems-Comprehensive-Interaction/dp/1447920112/ref=sr_1_7?keywords=designing+interactive&qid=1561819268&s=gateway&sr=8-7">Benyon's design principles</a> and was further evaluated according to <a href="https://www.amazon.com/Usability-Engineering-Jakob-Nielsen/dp/0125184069/ref=sr_1_4?keywords=Jakob+nielsen&qid=1561819287&s=gateway&sr=8-4">Jakob Nielsen's Usability heuristics</a> aswell as <a href="https://samfundslitteratur.dk/visuelkommunikation">Lisbeth Thorlacius' guidelines for visual communication on digital media</a>.
    The focus on the project was to make a system that reflects Café Frederiksbergs visual identity aswell as making them able to edit content, without the need of a software developer. </p><br>
    <p id="technologies"><b>Technologies used:</b><br></p><br>
    <div class="pill">PHP</div>
    <div class="pill">SQL</div>
    <div class="pill">JAVASCRIPT</div>
    <div class="pill">CSS</div>
    <div class="pill">SKELETONFRAMEWORK</div>
    <div class="pill">HTML</div>
    <div class="pill">ADOBEXD</div>
    <div class="pill">PHOTOSHOP</div>
    <div class="pill">GIT</div>
    <div class="pill">SEO</div>
  </div>
<br>
</div>

<!-- Contact section -->
<div class="contactsection">
<!--Contact formular  -->
 <div class="contactformular">
  <h2 id="contactme"> CONTACT ME </h2>
  <form action="include/send_form.php" method="post" name="contactform">
   <label for="fullname">Full Name:</label><br>
  <input type="text" name="fullname">
  <label for="email">E-mail:</label><br>
  <input type="email" name="email">
  <label for="subject">Subject:</label><br>
  <input type="text" name="subject">
  <label for="message">Message:</label><br>
  <textarea type="text" name="message" rows="4" cols="22"> </textarea>
  <input type="submit" value="Send">
</form>
</div>

<!--Social media -->
<div class="social media">
<h4 id="stayconnected"> STAY CONNECTED </h4>

<div class="socialmedia">
    <a href="https://github.com/simoneliasen"><img src="img/github.png" alt="link to github" width="35px"></a>
    <a href="https://www.instagram.com/simonsiger_/"><img src="img/instagram.png" alt="link to instagram" width="35px"></a>
	<!-- Linkedin -->
  <!-- Discord -->
  <!-- Spotify -->
  </div>

</div>
<br>
</div>



</body>

</html>
