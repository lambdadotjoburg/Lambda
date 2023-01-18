<?php

    session_start();

    if (isset($_SESSION['useruid'])) {

        $_SESSION['useruid'];

    }

?>

<!DOCTYPE html>

<html lang="en" >

    <head>
        
        <meta charset="UTF-8">
      
        <title>CodePen - Card Article UI</title>
    
        <link href='https://fonts.googleapis.com/css?family=Montserrat:700|Lato:400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="./assets/css/style.assessments.css">
        
    </head>

    <body>
        
	<div class="center">
		<h1>Assessments</h1>
	</div>
        
        <!-- partial:index.partial.html -->
        <div class="site__wrapper">
         
          <div class="grid">
              <div class="card">
                <div class="card__image">
                  <img src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED" alt="">
    
                  <div class="card__overlay card__overlay--indigo">
                    <div class="card__overlay-content">
                      <ul class="card__meta">
                        <li><a href="#0"><i class="fa fa-tag"></i> Exam/Test </a></li>
                        <li><a href="#0"><i class="fa fa-clock-o"></i> 1 hour </a></li>
                      </ul>
    
                      <a href="#0" class="card__title">Preparing for Exams is now as easy as 1, 2, 3, ... </a>
    
                      <ul class="card__meta card__meta--last">
                        <li><a href="#0"><i class="fas fa-book-open"></i> &lambda; </a></li>
                        <li><a href="#0"><i class="fas fa-user-graduate"></i> Share</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    
          <div class="grid">
              <div class="card">
                <div class="card__image">
                  <img src="https://unsplash.it/400/300?image=100" alt="">
    
                  <div class="card__overlay card__overlay--blue">
                    <div class="card__overlay-content">
                      <ul class="card__meta">
                        <li><a href="#0"><i class="fa fa-tag"></i> UI/UX</a></li>
                        <li><a href="#0"><i class="fa fa-clock-o"></i> 2 days ago</a></li>
                      </ul>
    
                      <a href="#0" class="card__title">How to create a card based article with HTML5 &amp; CSS3</a>
    
                      <ul class="card__meta card__meta--last">
                        <li><a href="#0"><i class="fa fa-book"></i> Mithicher</a></li>
                        <li><a href="#0"><i class="fa fa-user"></i> Share</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    
          <div class="grid">
              <div class="card">
                <div class="card__image">
                  <img src="https://unsplash.it/400/300?image=200" alt="">
    
                  <div class="card__overlay card__overlay--indigo">
                    <div class="card__overlay-content">
                    <ul class="card__meta">
                        <li><a href="#0"><i class="fa fa-tag"></i> UI/UX</a></li>
                        <li><a href="#0"><i class="fa fa-clock-o"></i> 2 days ago</a></li>
                      </ul>
    
                      <a href="#0" class="card__title">How to create a card based article with HTML5 &amp; CSS3</a>
    
                      <ul class="card__meta card__meta--last">
                        <li><a href="#0"><i class="fa fa-user"></i> Mithicher</a></li>
                        <li><a href="#0"><i class="fa fa-facebook-square"></i> Share</a></li>
                      </ul>    
                    </div>
                  </div>
                </div>
              </div>
          </div>
    
          <div class="grid">
              <div class="card">
                <div class="card__image">
                  <img src="https://unsplash.it/400/300?image=300" alt="">
    
                  <div class="card__overlay card__overlay--indigo">
                    <div class="card__overlay-content">
                      <ul class="card__meta">
                        <li><a href="#0"><i class="fa fa-tag"></i> Tutorials</a></li>
                        <li><a href="#0"><i class="fa fa-clock-o"></i> 2 days ago</a></li>
                      </ul>
    
                      <a href="#0" class="card__title">How to create a card based article with HTML5 &amp; CSS3</a>
    
                      <ul class="card__meta card__meta--last">
                        <li><a href="#0"><i class="fa fa-user"></i> Mithicher</a></li>
                        <li><a href="#0"><i class="fa fa-facebook-square"></i> Share</a></li>
                      </ul>   
                    </div>
                  </div>
                </div>
              </div>
          </div>
    
          <div class="grid">
              <div class="card">
                <div class="card__image">
                  <img src="https://unsplash.it/400/300?image=400" alt="">
    
                  <div class="card__overlay card__overlay--blue">
                    <div class="card__overlay-content">
                      <ul class="card__meta">
                        <li><a href="#0"><i class="fa fa-tag"></i> Tutorials</a></li>
                        <li><a href="#0"><i class="fa fa-clock-o"></i> 2 days ago</a></li>
                      </ul>
    
                      <a href="#0" class="card__title">How to create a card based article with HTML5 &amp; CSS3</a>
    
                      <ul class="card__meta card__meta--last">
                        <li><a href="#0"><i class="fa fa-user"></i> Mithicher</a></li>
                        <li><a href="#0"><i class="fa fa-facebook-square"></i> Share</a></li>
                      </ul>   
                    </div>
                  </div>
                </div>
              </div>
          </div>		
          
        </div><!-- @end site__wrapper -->
        <!-- partial -->
      
    </body>

</html>
