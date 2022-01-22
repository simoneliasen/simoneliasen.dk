<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135196336-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-135196336-1');
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Simon Eliasen: Information-technology student based in Aalborg, studying the depths of the internet one bit at a time." />
  <meta name="keywords" content="Simon Eliasen,Information-technology,student,software developer,Aalborg,entrepreneur" />
  <meta name="theme-color" content="#212529">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <title>Simon Eliasen</title>
</head>

<body>

  <!--Main wrapper for top page  -->
  <div class="mainwrapper">
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
      <div class="intro">
        <h1>ABOUT ME </h1>

        <p id="main">
          Hi, my name is Simon Eliasen, I am 24 years old and currently enrolled at Aalborg University at my 7th semester, studying a master in Computer science. <br><br>
          My background is cross disciplinary, in both business, design, communication and software, as a result of personal hobbies, schooling and a natural curiosity.
          My professional motivation is based on creating/working with state-of-the-art applications/technology. <br><br>
          Through my earlier professional work and my project-work at university, I have honed the skill of creating fully fledged applications in limited timespans, often entailing working on complex problems with hard-set deadlines, while maintaining a relationship with stakeholders or various third parties.
          <br><br>
          I would describe myself as highly motivated, a quick learner and ready to take on a responsibility and adapt to continuous changes on a project and industry-basis.
        </p>
      </div>
    </div>
  </div>

  <h2 id="projectsheader">PROFESSIONAL WORK</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg professional">
        <div class="container">
          <div class="row">
            <div class="col-sm-12" style="position:relative;">
              <!--Static standard (logo)-->
              <img class="hover-cursor" src="img/hover-cursor.png">
              <img class="img-static rounded mx-auto d-block" style="padding-top: 123.09px;" width="250px;" src="img/perfionlogo.png">
              <img class="img-active rounded mx-auto d-block overlay" style="position:absolute;" width="250px;" src="img/perfiondemo/perfionproject1.png">
            </div>
          </div>
        </div>
        <p class="description">
          Perfion Product Information Management (PIM) gives you a single, unified source of product data <br><br>

          A PIM system’s most important task is to help a company manage large amounts of complex product information and distribute all of this information efficiently on the relevant channels.
          <br><br>
          The Perfion Product Information Management (PIM) system gives you full control of your product data, freeing up your valuable time for core tasks instead of searching for information and managing various systems.
          <br><br>
          <u>My involvement with Perfion:</u> <br>
          - Various front-end development with Angular and Typescript. <br>
          - Data visualization and Business Intelligence <br>
          - Involvement with users in the design process of new features.
        </p>
        <div class="technology-wrapper">
          <p id="technologies">Technologies used:</p>
          <div class="pill">JAVASCRIPT</div>
          <div class="pill">SQL</div>
          <div class="pill">NODE.jS</div>
          <div class="pill">HTML</div>
          <div class="pill">ADOBEXD</div>
          <div class="pill">PHOTOSHOP</div>
          <div class="pill">GIT</div>
          <div class="pill">CSS</div>
          <div class="pill">TYPESCRIPT</div>
          <div class="pill">ANGULAR</div>
          <div class="pill">DEVEXTREME</div>
          <div class="pill">CONTENT WRITING</div>

        </div>
      </div>

      <div class="col-lg professional">
        <div class="container" ">
    <div class=" row">
          <div class="col-sm-12" style="position:relative;">
            <img class="hover-cursor" src="img/hover-cursor.png">
            <img class="img-static rounded mx-auto d-block " style="padding-top: 125px;" src="img/ustepperlogo.png">
            <img class="img-active rounded mx-auto d-block overlay" style="position:absolute;" width="250px;" src="img/ustepperdemo/ustepper.PNG">
          </div>
        </div>
      </div>
      <p class="description">

        uStepper is a Kickstarter funded startup developing microcontrollers to remove drawbacks from the stepper motor. The products are both aimed towards hobbyists, professionals, and educators throughout the world. uStepper provides a product range spanning from microcontrollers to robot arms.
        <br><br>
        In relation to my job at uStepper, i was tasked with making a redesign with a focus on modernizing the site aswell as making it appeal to the target group of the product, a focus was also to maintain a high emphasis on usability.
        The website was developed in already established Content management systems, to give the founders control of content posted on the site
        <br> <br>
        <u>My involvement with uStepper:</u> <br>
        - Webdesign and development.<br>
        - Graphic marketing material.<br>
        - Involvement with facebook advertisement.<br>
        - Video production and editing thereof.<br>
        - Creation of sales material.<br>
      </p>

      <div class="technology-wrapper">
        <p id="technologies">Technologies used:</p>
        <div class="pill">PHP</div>
        <div class="pill">SQL</div>
        <div class="pill">CSS</div>
        <div class="pill">HTML</div>
        <div class="pill">WORDPRESS</div>
        <div class="pill">CONTENT WRITING</div>
        <div class="pill">PRESTASHOP</div>
        <div class="pill">PHOTOSHOP</div>
        <div class="pill">ADOBEXD</div>
        <div class="pill">FACEBOOK ADVERTISEMENT</div>
        <div class="pill">VIDEO PRODUCTION</div>
        <div class="pill">VIDEO EDITING</div>
      </div>
    </div>
  </div>
  </div>


  <h2 id="projectsheader">PROJECTS</h2>
  <div class="container" style="padding-bottom: 40px;">
    <div class="row">
      <div class="col-lg projects">
        <div class="container">
          <div class="row">
            <div class="col-sm-12" style="position:relative;">
              <img class="hover-cursor" src="img/hover-cursor.png">
              <img class="img-static rounded mx-auto d-block" height="230px" style="padding-top: 35px" src="img/novefalogo.png">
              <img class="img-active rounded mx-auto d-block overlay" style="position:absolute;" width="250px;" src="img/novefademo/login.PNG">
            </div>
          </div>
        </div>
        <p class="description">
          The purpose of this project has been to
          identify and analyze the processes of a
          business with the intent of optimizing
          them. Furthermore, the integration be-
          tween IT and the processes of the business
          has been the end-goal.
          In this project, a collaboration with
          Novefa, an agricultural company utilizing
          vertical farming, has been established.
          Their processes have been identified and
          analyzed thoroughly through the use of
          interviews. In conjunction with the data,
          the project suggests that the tracking of
          the growing process could be optimized by
          utilizing an IoT system.
          The project follows the principles of Busi-
          ness Process Management, specifically the
          BPM lifecycle, to analyze and investigate
          the processes of the company. This in-
          cludes the use of an as-is and to-be process
          models. Furthermore, an analysis of the
          redesign has been done by the use of the
          Devil’s Quadrangle. This has been done
          in order to evaluate the optimal solution
          that would best fit their needs. Finally, an
          implementation and an evaluation of the
          actual IoT system is found in the end of
          the project.
        </p>
        <div class="technology-wrapper">
          <p id="technologies">Technologies used:</p>
          <div class="pill">JAVASCRIPT</div>
          <div class="pill">NODE.JS</div>
          <div class="pill">AUTHENTICATION</div>
          <div class="pill">HTML</div>
          <div class="pill">CSS</div>
          <div class="pill">BOOTSTRAP</div>
          <div class="pill">SQL</div>
          <div class="pill">API</div>
          <div class="pill">IOT</div>
          <div class="pill">JSBARCODE</div>
        </div>
      </div>
      <div class="col-lg projects">
        <div class="container">
          <div class="row">
            <div class="col-sm-12" style="position:relative;">
              <img class="hover-cursor" src="img/hover-cursor.png">
              <img class="img-static rounded mx-auto d-block" style="max-width: 500px; padding-top: 19.172px" src="img/flatlandlogo.jpg">
              <img class="img-active rounded mx-auto d-block overlay" style="position:absolute;" width="250px;" src="img/flatlanddemo/flatland.gif">
            </div>
          </div>
        </div>
        <p class="description">An automated Traffic Management System
          (TMS) is a prospective solution that can
          address the increase in complexity and
          efficiently manage railway traffic. As such,
          this project investigates the development of
          a Reinforcement Learning (RL) based TMS
          for a simplified 2D grid environment named
          Flatland.
          The developed TMS utilizes an actor-critic
          Proximal Policy Optimization (PPO) architecture, along with a customized tree-based
          observation model. Furthermore, the
          developed TMS has been optimized with
          curriculum learning, frame skipping and
          hyperparameter tuning.
          Overall the developed TMS shows potential
          regarding scalability, adaptability, and generalizability, within the confines of the Flatland
          challenge 3, it achieved a third place in the
          RL submission category. </p>
        <div class="technology-wrapper">
          <p id="technologies">Technologies used:</p>
          <div class="pill">PYTHON</div>
          <div class="pill">PYTORCH</div>
          <div class="pill">NUMPY</div>
          <div class="pill">MULTI-AGENT REINFORCEMENT LEARNING (MARL)</div>
          <div class="pill">PROXIMAL POLICY OPTIMIZATION (PPO)</div>
          <div class="pill">CURRICULUM LEARNING</div>
          <div class="pill">HYPERPARAMETER TUNING</div>
          <div class="pill">WANDB.AI</div>
          <div class="pill">FRAME-SKIPPING</div>
          <div class="pill">ACTION-MASKING</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg projects">
        <div class="container">
          <div class="row">
            <div class="col-sm-12" style="position:relative;">
              <img class="hover-cursor" src="img/hover-cursor.png">
              <img class="img-static rounded mx-auto d-block " style="padding-top: 120px;" height="180px" src="img/cafefrederiksberglogo.png">
              <img class="img-active rounded mx-auto d-block overlay" style="position:absolute;" width="250px;" src="img/cafefrederiksbergdemo/cafefrederiksberg.PNG">
            </div>
          </div>
        </div>
        <p class="description">In relation to a project at Aalborg University in my 2nd semester, with the title "construction and evaluation of an IT-system" we developed a content management system for local business.
          The IT-system was developed with <a href="https://www.amazon.com/Designing-Interactive-Systems-Comprehensive-Interaction/dp/1447920112/ref=sr_1_7?keywords=designing+interactive&qid=1561819268&s=gateway&sr=8-7">Benyon's design principles</a> and was further evaluated according to <a href="https://www.amazon.com/Usability-Engineering-Jakob-Nielsen/dp/0125184069/ref=sr_1_4?keywords=Jakob+nielsen&qid=1561819287&s=gateway&sr=8-4">Jakob Nielsen's Usability heuristics</a> as well as <a href="https://samfundslitteratur.dk/visuelkommunikation">Lisbeth Thorlacius' guidelines for visual communication on digital media</a>.
          The focus on the project was to make a system that reflects Café Frederiksbergs visual identity aswell as making them able to edit content, without the need of a software developer. </p>
        <div class="technology-wrapper">
          <p id="technologies">Technologies used:</p>
          <div class="pill">PHP</div>
          <div class="pill">SQL</div>
          <div class="pill">JAVASCRIPT</div>
          <div class="pill">CSS</div>
          <div class="pill">SKELETON FRAMEWORK</div>
          <div class="pill">HTML</div>
          <div class="pill">ADOBEXD</div>
          <div class="pill">PHOTOSHOP</div>
          <div class="pill">SEO</div>
        </div>
      </div>
      <div class="col-lg projects">
        <div class="container">
          <div class="row">
            <div class="col-sm-12" style="position:relative;">
              <img class="hover-cursor" src="img/hover-cursor.png">
              <img class="img-static rounded mx-auto d-block " style="padding-top: 120px;" height="180px" src="img/carpairlogo.png">
              <img class="img-active rounded mx-auto d-block overlay" style="position:absolute;" width="250px;" src="img/carpairdemo/searchresult.PNG">
            </div>
          </div>
        </div>
        <p class="description">CarPair seeks to establish trust and streamline the car sales process, by establishing a decentralized platform that makes use of a webscraper that scours the web for car listings.
          The gathered data is then further complimented by using Automatic Numberplate Recognition(ANPR) software to extract number plates from car listings, which further enriches the gathered data, by using external API's. This results in a decentralized platform with car listings that have universally enriched data, whose parameters can then be further searched and filtered through. </p>
        <div class="technology-wrapper">
          <p id="technologies">Technologies used:</p>
          <div class="pill">JAVASCRIPT</div>
          <div class="pill">NODE.jS</div>
          <div class="pill">PYTHON</div>
          <div class="pill">SQL</div>
          <div class="pill">YOLOV4</div>
          <div class="pill">COMPUTER VISION</div>
          <div class="pill">OPENCV</div>
          <div class="pill">OPTICAL CHARCHTER RECOGNITION(OCR)</div>
          <div class="pill">CONVOLUTIONAL NEURAL NETWORK(CNN)</div>
          <div class="pill">CSS</div>
          <div class="pill">BOOTSTRAP</div>
          <div class="pill">HTML</div>
          <div class="pill">ADOBEXD</div>
          <div class="pill">PHOTOSHOP</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg projects">
        <div class="container">
          <div class="row">
            <div class="col-sm-12" style="background-color: #129F57; position:relative;">
              <img class="hover-cursor" src="img/hover-cursor.png">
              <img class="img-static rounded mx-auto d-block" style="padding-top: 107.5px;" src="img/teamberlogo.png">
              <img class="img-active rounded mx-auto d-block overlay" style="position:absolute;" width="250px;" src="img/teamberdemo/take-questionnaire.png">
            </div>
          </div>
        </div>
        <p class="description">
          The following report describes the process
          of creating an IT system in order to
          optimize the team creation process, based
          on user-submitted data. An iterative
          and object-oriented approach was used
          to accomplish this. To gain the proper
          knowledge needed to create this system,
          research was conducted on the matter of
          team creation and personality types, and
          a system definition was created, to gain
          a proper understanding of the problem
          at hand. By using the object-oriented
          approach to identify classes, events and
          behaviors etc. the development process
          was aided. The system was developed
          primarily using C#, ASP.NET and Razor
          Pages, which allowed the application to be
          accessible through a web-browser. Visual
          design methodology was used to create
          a basic overview of the website’s design.
          The system was tested throughout the
          development process, assuring that as
          many requirements as possible, would be
          met. In conclusion the system fulfills
          most of the requirements, but does require
          further development and testing in order
          to be deployed in an organisation.
          The content of the report is freely available, but publication (with source reference) may only take place in
          agreement with the authors.
        </p>
        <div class="technology-wrapper">
          <p id="technologies">Technologies used:</p>
          <div class="pill">C#</div>
          <div class="pill">ASP.NET</div>
          <div class="pill">RAZOR PAGES</div>
          <div class="pill">CSS</div>
          <div class="pill">BOOTSTRAP</div>
          <div class="pill">AUTHENTICATION </div>
          <div class="pill">HTML</div>
        </div>
      </div>
      <div class="col-lg projects">
        <h3 class="project-title">OTHER PROJECTS</h3> <!-- Pure slideshow -->
        <div class="container">
          <div class="row">
          </div>
        </div>
        <p class="description">
          <b>Korius: </b> <br> Small personal business, Graphic design, web-development jobs for other small businesses.
          <br> <br>
          <b> COWI:</b> <br>Investigating the involvement of the human factor in IT-security and how safety measures successfully are communicated to employees.
          <br><br>
          <b> ShareOne:</b><br> Research in how companies in the sharing economy communicate trust to the users of their platform, done through usability testing, as a lack of trust, is presented as one of the major challenges in regards to adopting the concept to a business.
          <br><br>
          <b> Festivalg:</b><br> MVP of application that searches through artists attending danish festivals, as well as other information related to festival-attendance
          <br><br>
          <b>2 cardgames and Yahtzee:</b><br>
          <br><br>
          <b> Personal website:</b><br> Oh wow, recursion :-)
      </div>
    </div>
  </div>
  <!-- Contact section -->
  <div class="contactsection">
    <!--Contact formular  -->
    <div class="contactformular">
      <h2 id="contactme"> CONTACT ME </h2>
      <form action="include/send_form.php" method="post" name="contactform">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname">
        <label for="email">E-mail:</label>
        <input type="email" name="email">
        <label for="subject">Subject:</label>
        <input type="text" name="subject">
        <label for="message">Message:</label>
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
        <a href="https://www.linkedin.com/in/simoneliasen/"><img src="img/github.png" alt="link to linkedin" width="35px"></a>
        <a href="https://open.spotify.com/user/simoneliasen.dk?si=fcfa6c59fc684a93"><img src="img/github.png" alt="link to spotify" width="35px"></a>
        <!-- Discord -->
      </div>
    </div>
  </div>
</body>

</html>