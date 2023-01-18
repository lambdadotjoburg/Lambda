<?php

  session_start();

  if (isset($_SESSION['useruid'])) {

    // Do nothing

  }

?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <link rel="stylesheet" href="./assets/css/style.index.css">

    <link rel="icon" type="image/png" href="./assets/images/index/logo/lambda.png">
    
    <title>Index</title>

  </head>

  <body>

    <!-- partial:index.partial.html -->
    <div class="menu-btn" onclick="toggleHamburgerMenu(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>

    <script>
      
    </script>

    <div class="container">

      <!-- Nav -->
      <nav class="main-nav">
        
        <img src="assets/images/index/logo/lambda.png" alt="lambda" class="logo">

        <ul class="main-menu">
          <li><a href="#mission">Mission</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#resources">Resources</a></li>
          <li><a href="#school">School</a></li>
          <li><a href="#vacancies">Vacancies</a></li>
          <li><a href="#collaborate">Collaborate</a></li>
          <li><a href="#FAQ">FAQ</a></li>
        </ul>

        <ul class="right-menu">
          
          <?php

            if (isset($_SESSION['userid'])) {

              ?>

                <li>
                  <a href="profile.php?user=<?php echo $_SESSION['useruid']; ?>">
                    <i class="fas fa-user"></i>
                  </a>
                </li>
                
                <li>
                  <a href="includes/signout.inc.php">
                    Signout
                  </a>
                </li>

              <?php
             
            } else {

              ?>

                <li>
                  <a href="login.php">
                    Login
                  </a>
                </li>  

                <li>
                  <a href="signup.php">
                    Signup
                  </a>
                </li>

              <?php

            }

          ?>

        </ul>

      </nav>

      <!-- Showcase -->
      <header class="showcase" id="apply">

        <h2> &lambda; </h2>

        <p>
          Digital Renaissance
        </p>

        <a href="apply.php" class="btn"> Apply <i class="fas fa-chevron-right"></i></a>

      </header>

      <!-- Home cards 1 -->
      <section class="home-cards">
       
        <div id="mission">

          <img src="assets/images/index/stock/vector_graphics/incandescent_light_bulb.svg" alt="">

          <h3><i class="fas fa-user-graduate"></i> &nbsp; Mission</h3>

          <p>
            We strive for standardizing education across the globe. We aim to unify educational institutions internationally.
          </p>

          <a href="mission.php"> See More <i class="fas fa-chevron-right"></i></a>

        </div>

        <div id="services">

          <img src="assets/images/index/stock/vector_graphics/artificial_intelligence.svg" alt="" />

          <h3><i class="fas fa-user-tie"></i> &nbsp; Services</h3>

          <p>
            Automation is a powerful tool. We do all the hard work, so you don't have to. A minimalistic approach saves time & money.
          </p>

          <a href="services.php"> See More <i class="fas fa-chevron-right"></i></a>

        </div>

        <div id="team">

          <img src="assets/images/index/stock/vector_graphics/einstein.svg" alt="" />

          <h3><i class="fas fa-user-friends"></i> &nbsp; Team</h3>

          <p>
            Our trained professionals are highly skilled. They are the best at what they do. We trust them and so should you.
          </p>

          <a href="team.php"> See More <i class="fas fa-chevron-right"></i></a>

        </div>

        <div id="resources">

          <img src="assets/images/index/stock/vector_graphics/neural_networks.svg" alt="" />
          <!-- <i class="fas fa-cloud-download-alt" style="font-size:100px;"></i> -->

          <h3><i class="fas fa-database"></i> &nbsp; Resources</h3>

          <p>
            Our database is designed to organize all resources in one place. From question papers to research data, we keep track of it all to build predictive models and optimize learning.
          </p>

          <a href="resources.php"> See More <i class="fas fa-chevron-right"></i></a>

        </div>

      </section>

      <!-- Xbox -->
      <section class="xbox" id="vacancies">

        <div class="content">

          <h2>Vacancies</h2>

          <p>
            We value creativity over experience. Creativity is what drives the world forward. If you have a creative spirit, we might need you more than you need us.
          </p>

          <a href="vacancies.php" class="btn"> Vacancies <i class="fas fa-chevron-right"></i></a>

        </div>

      </section>

      <!-- Home cards 2 -->
      <section class="house-cards" id="school">

        <div>

          <img src="assets/images/index/stock/real/exam.jpg" alt="" />

          <h3>Assessment</h3>

          <p>
            Assessment is a type of psychological experiment. Our assessments are standardized to accurately measure cognitive ability.
          </p>

          <a href="assessments.php"> See More <i class="fas fa-chevron-right"></i></a>

        </div>

        <div>

          <img src="assets/images/index/stock/real/robotics.jpg" alt="" />

          <h3>Skills</h3>

          <p>
            Our courses focus on training students to become career-ready. The interplay between creative thinking and correct reasoning is what will lead you to success in your future career.
          </p>

          <a href="skills.php"> See More <i class="fas fa-chevron-right"></i></a>

        </div>

        <div>

          <img src="assets/images/index/stock/real/one-on-one.jpg" alt="" />

          <h3>E-Learning</h3>

          <p>
            The internet is a massive ocean of information. At &lambda; we teach you how to best make use of it. We use technology to our advantage.
          </p>

          <a href="e_learning.php"> See More <i class="fas fa-chevron-right"></i></a>

        </div>

        <div>

          <img src="assets/images/index/stock/real/graduation.jpg" alt="" />

          <h3>Success</h3>

          <p>
            Many of our alumni have become successful as we focus on career-required skills. See what our alumni say about us.
          </p>

          <a href="success.php"> See More <i class="fas fa-chevron-right"></i></a>

        </div>

      </section>
      
      <!-- Carbon -->
      <section class="carbon dark" id="collaborate">

        <div class="content">
          <h2>Collaborate</h2>

          <p>
              For our cause to be impactful, we must collaborate progressive organizations.
          </p>

          <a href="collaborate.php" class="btn"> Learn More <i class="fas fa-chevron-right"></i></a>

        </div>

      </section>

      <!-- Follow -->
      <section class="follow">
        
        <p>Follow &nbsp; <a style="font-size: 24px;">&lambda;</a></p>

        <a href="https://facebook.com">
          <img src="https://i.ibb.co/LrVMXNR/social-fb.png" alt="Facebook">
        </a>

        <a href="https://twitter.com">
          <img src="https://i.ibb.co/vJvbLwm/social-twitter.png" alt="Twitter">
        </a>

        <a href="https://linkedin.com">
          <img src="https://i.ibb.co/b30HMhR/social-linkedin.png" alt="Linkedin">
        </a>

      </section>

    </div>

    <!-- Links -->
    <section class="links" id="FAQ">

      <div class="links-inner">
        
        <ul>
          <li><h3>FAQ</h3></li>
          <li><a href="FAQ.php#4ir">4IR</a></li>
          <li><a href="FAQ.php#fees">Fees</a></li>
          <li><a href="FAQ.php#registration">Registration</a></li>
          <li><a href="FAQ.php#resources">Resources</a></li>
          <li><a href="FAQ.php#assessment">Assessment</a></li>
        </ul>
        <ul>
          <li><h3>Team</h3></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Statistics</a></li>
          <li><a href="#">Training</a></li>
          <li><a href="#">Remuneration</a></li>
          <li><a href="#">Careers</a></li>
        </ul>
        <ul>
          <li><h3>Students</h3></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Account</a></li>
          <li><a href="#">Resources</a></li>
          <li><a href="#">Packages</a></li>          
          <li><a href="#">Pricing</a></li>
        </ul>
        <ul>
          <li><h3>Enterprise</h3></li>
          <li><a href="#">App</a></li>
          <li><a href="#">E-Learning</a></li>
          <li><a href="#">Repository</a></li>
          <li><a href="#">Simulaion</a></li>
          <li><a href="#">Automation</a></li>
        </ul>
        <ul>
          <li><h3>Developer</h3></li>
          <li><a href="#">Content</a></li>
          <li><a href="#">Curriculum</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Research</a></li>
          <li><a href="#">Data Science</a></li>          
        </ul>
        <ul>
          <li><h3>Company</h3></li>
          <li><a href="#">About Lambda</a></li>
          <li><a href="#">Company News</a></li>
          <li><a href="#">Privacy at Lambda</a></li>
          <li><a href="#">Stakeholders</a></li>
          <li><a href="#">Government</a></li>
        </ul>

      </div>

    </section>

    <!-- Footer -->
    <footer class="footer">

      <div class="footer-inner">
        
        <div>
          <i class="fas fa-globe fa-2x"></i> English (American)
        </div>
          
          <ul>
            <li><a href="contact.php">Contact Lambda</a></li>
            <li><a href="https://popia.co.za">Terms & Conditions</a></li>
            <li><a href="#">Privacy & Cookies</a></li>            
            <li><a href="#">&trade; Trademarks</a></li>
            <li><a href="#">&copy; Lambda <?php echo date("Y"); ?></a></li>
          </ul>

      </div>

    </footer>

    <!-- partial -->
    <script  src="./assets/js/script.index.js"></script>

  </body>

</html>

<!-- <a onclick="Share.facebook('URL','TITLE','IMG_PATH','DESC')"> Share to Facebook</a>
<a onclick="Share.twitter('URL','TITLE')"> Tweet about it</a>

<script>

  Share = {

      facebook: function(purl, ptitle, pimg, text) {
          
          url = 'http://www.facebook.com/sharer.php?s=100';
          url += '&p[title]=' + encodeURIComponent(ptitle);
          url += '&p[summary]=' + encodeURIComponent(text);
          url += '&p[url]=' + encodeURIComponent(purl);
          url += '&p[images][0]=' + encodeURIComponent(pimg);

          Share.popup(url);

      },

      twitter: function(purl, ptitle) {
          
          url = 'http://twitter.com/share?';
          url += 'text=' + encodeURIComponent(ptitle);
          url += '&url=' + encodeURIComponent(purl);
          url += '&counturl=' + encodeURIComponent(purl);

          Share.popup(url);

      },

      popup: function(url) {
          
          window.open(url,'','toolbar=0,status=0,width=626, height=436');
          
      }

  };

</script> -->