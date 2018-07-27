<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Hospital</title>
        <link rel="shortcut icon" href="images/if_nurse_45213.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css.map" />
        <link rel="stylesheet" href="css/style.css" />       
        <link rel="stylesheet" href="css/fontawesome-all.min.css" />
        <link rel="stylesheet" href="css/media_query.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:900" />
        
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <[endif]-->
    </head>
    <body>
        
        <!-- start header -->
        <header class="website-header">
            <div class="container text-center">
                <div class="row">

                    <div class="col-md-12"><div class="logo-container"><img src="images/Logo.png" width="210" height="42" alt="logo" class="img-responsive center-block" /></div></div><!-- logo -->

                </div><!-- row -->
            </div><!-- container -->           

        </header>
        <!-- end header -->
        
        <!-- start navbar -->
        <nav class="navbar navbar-default" style="font-family: 'Roboto', sans-serif;">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav linkss">
                <li class="active">
                    <a href="#">
                        <i class="fas fa-home" title="Home Page"></i>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-value="ser">
                        <i class="fab fa-servicestack" title="Services Section"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-value="part">
                        <i class="fas fa-handshake" title="Our Partenerts Section"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-value="about">
                        <i class="fas fa-users" title="About Us Section"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-value="gallery">
                        <i class="far fa-images" title="Gallery Section"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-value="ourTeam">
                        <i class="fas fa-user-md" title="Our Forigen Doctors Section"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-value="adv">
                        <i class="fab fa-adversal" title="Our Advices Section"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-value="BookingNow">
                        <i class="fas fa-clipboard-check" title="Booking Section"></i>
                    </a>
                </li>
            </ul>
            <?php
            if (isset($_COOKIE["conn"])) {
                # code...
                echo '
                    <ul class="nav navbar-right">
                        <li style="display:inline-block">
                            <a href="account.php">
                                <i class="fas fa-user" style="font-size:20px;display:inline-block"></i>
                            </a>
                        </li>
                        <li style="display:inline-block">
                            <a href="logout.php">
                                <i class="fas fa-sign-out-alt" style="font-size:20px;display:inline-block"></i>
                            </a>
                        </li>
                    </ul>
                ';
            } else {
                # code...
                echo '
                    <ul class="nav navbar-right">
                        <li style="display:inline-block">
                            <a href="signup.php">
                                <i class="fas fa-user-plus" style="font-size:20px;"></i>
                            </a>
                        </li>
                        <li style="display:inline-block">
                            <a href="login.php" >
                                <i class="fas fa-sign-in-alt" style="font-size:20px;display:inline-block"></i>
                            </a>
                        </li>
                    </ul>
                ';
            }
            
            ?>
            
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>                
        <!-- end navbar -->  
        
        <!-- start bannar section -->
        <section class="bannar">
            <div class="container">
                <div class="content text-center">
                    <h1 style="font-family: 'Roboto', sans-serif;">We have Best Medicare plan options for you</h1>
                    <p class="lead" style="font-family: 'Raleway', sans-serif;">Sed ut perspiciatis unde omnis iste natus error sit vo-<br />luptatem accusantium doloremque laudantium.</p>
                    <button class="btn btn-default"><i class="fab fa-readme" style="font-size:30px"></i></button>
                </div>
            </div><!-- container -->
        </section><!-- bannar -->
        <!-- end bannar section -->
        
        <!-- start section services -->
        <section id="ser" class="ser text-center">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="box-one">
                            <i class="fas fa-stethoscope fa-3x"></i>
                            <h3 style="font-family: 'Roboto', sans-serif;">Best Treatment</h3>
                            <p class="lead" style="font-family: 'Raleway', sans-serif;">Prevention is better than cure is a proverb which teaches us to follow prevention methods and be careful always to remain away from the problems.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="box-two">
                            <i class="fas fa-phone fa-3x"></i>
                            <h3 style="font-family: 'Roboto', sans-serif;">Emergency Help</h3>
                            <p class="lead" style="font-family: 'Raleway', sans-serif;">Assistance is provided by a qualified team at the official tourism agency or by police officers. They help tourists lodge complaints or fill in forms.</p>                           
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="box-three">
                            <i class="fas fa-user-md fa-3x"></i>
                            <h3 style="font-family: 'Roboto', sans-serif;">Medical Staff</h3>
                            <p class="lead" style="font-family: 'Raleway', sans-serif;">Medical professionals include doctors, nurses, hospice workers, emergency medical technicians, and other trained caregivers.</p>                        
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="box-four">
                            <i class="fas fa-ambulance fa-3x"></i>
                            <h3 style="font-family: 'Roboto', sans-serif;">Qualified Doctors</h3>
                            <p class="lead" style="font-family: 'Raleway', sans-serif;">Doctors use several methods and tests to diagnose an ailment afflicting a person. They use clinical, pathological and radiological tests for this purpose.</p>                        
                        </div>
                    </div>                    
                    
                </div>
            </div>
        </section>
        <!-- end section services -->
        
        <!-- start section our parteners -->
        <section id="part" class="our-parteners">
            <div class="overlay">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xs-6">
                        <div class="box">
                            <img src="images/parteners-3.jpg" width="1024" height="313" alt="parteners" class="img-responsive center-block" />
                        </div>
                    </div>
                    
                    <div class="col-xs-6">
                        <div class="box">
                            <img src="images/parteners-8.jpg" width="1317" height="354" alt="parteners" class="img-responsive center-block" />
                        </div>
                    </div> 
                    
                    <div class="col-xs-12">
                        <div class="box">
                            <img src="images/parteners-9.jpg" width="925" height="237" alt="parteners" class="img-responsive center-block" />
                        </div>
                    </div>  
                    
                    <div class="col-xs-6">
                        <div class="box">
                            <img src="images/parteners-6.jpg" width="1024" height="313" alt="parteners" class="img-responsive center-block" />
                        </div>
                    </div>   
                    
                    <div class="col-xs-6">
                        <div class="box">
                            <img src="images/parteners-4.jpg" width="800" height="300" alt="parteners" class="img-responsive center-block" />
                        </div>
                    </div>                    
                    
                </div>
            </div>
            </div>
        </section>
        <!-- end section our parteners -->
        
        <!-- start section why choose us -->
        <section class="why-choose-us">
            <div class="container">
                <header class="text-center">
                    <h2 style="font-family: 'Roboto', sans-serif;">why choose us ?</h2>
                    <p style="font-family: 'Raleway', sans-serif;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                </header>
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <i class="fas fa-cog"></i> Professional
                        <p class="text-left" style="font-family: 'Raleway', sans-serif;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                    
                    <div class="col-md-6">
                        <i class="fas fa-pills"></i> Professional
                        <p class="text-left" style="font-family: 'Raleway', sans-serif;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                    
                    <div class="col-md-6">
                        <i class="fab fa-medrt"></i> Professional
                        <p class="text-left" style="font-family: 'Raleway', sans-serif;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                    
                    <div class="col-md-6">
                        <i class="fas fa-venus-mars"></i> Professional
                        <p class="text-left" style="font-family: 'Raleway', sans-serif;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>                    
                    
                </div>
                
            </div>
        </section>
        <!-- end section why choose us -->
        
        <!-- start section about -->
        <section id="about" class="about">
            <div class="overlay">
            
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-3">
                            <div class="content text-center">
                                <i class="fas fa-hand-holding-heart fa-3x"></i>
                                <p style="font-family: 'Raleway', sans-serif;">1000+</p>
                                <h6 style="font-family: 'Roboto', sans-serif;">
                                    Happy<br />Customers
                                </h6>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="content text-center">
                                <i class="fas fa-heartbeat fa-3x"></i>
                                <p style="font-family: 'Raleway', sans-serif;">2018</p>
                                <h6 style="font-family: 'Roboto', sans-serif;">
                                    Top<br />Hospitality
                                </h6>
                            </div>
                        </div>  
                        
                        <div class="col-md-3">
                            <div class="content text-center">
                                <i class="fas fa-plane fa-3x"></i>
                                <p style="font-family: 'Raleway', sans-serif;">1105</p>
                                <h6 style="font-family: 'Roboto', sans-serif;">
                                    Innovative<br />Approach
                                </h6>
                            </div>
                        </div>   
                        
                        <div class="col-md-3">
                            <div class="content text-center">
                                <i class="fas fa-briefcase-medical fa-3x"></i>
                                <p style="font-family: 'Raleway', sans-serif;">3700</p>
                                <h6 style="font-family: 'Roboto', sans-serif;">
                                    AID<br />Replacment
                                </h6>
                            </div>
                        </div>                        
                        
                    </div>
                </div>
            
            </div>
        </section>
        <!-- end section about -->
        
        <!-- start section gallery -->
        <section id="gallery" class="gallery">
            <div class="overlay">
                <div class="container">
                    <header class="text-center">
                        <h2 style="font-family: 'Roboto', sans-serif;">Gallery</h2>
                        <p style="font-family: 'Raleway', sans-serif;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </header>
                    
                    <div class="row">
                        
                        <div class="col-md-4"><img src="images/5.png" width="350" height="234" alt="gallery" /></div>
                        <div class="col-md-4"><img src="images/2.png" width="350" height="234" alt="gallery" /></div>
                        <div class="col-md-4"><img src="images/2.png" width="350" height="234" alt="gallery" /></div>
                        
                        <div class="col-md-4"><img src="images/5.png" width="350" height="234" alt="gallery" /></div>
                        <div class="col-md-4"><img src="images/5.png" width="350" height="234" alt="gallery" /></div>
                        <div class="col-md-4"><img src="images/2.png" width="350" height="234" alt="gallery" /></div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- end section gallery -->
        
        <!-- start section our team -->
        <section id="ourTeam" class="our-team text-center">
            <div class="container">
                <header>
                    <h2 style="font-family: 'Roboto', sans-serif;">Professional foreign doctors</h2>
                    <p style="font-family: 'Raleway', sans-serif;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </header>
                
                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="box-one">
                            <div class="img-cont"><img src="images/team-person1.png" width="314" height="317" alt="Dr.Ajabeen" class="img-responsive center-block" /></div>
                            <h5 style="font-family: 'Roboto', sans-serif;">Dr.Ajabeen</h5>
                            <p style="font-family: 'Raleway', sans-serif;">Assistant Surgeon</p>
                            <a href="https://web.facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://plus.google.com" target="_self"><i class="fab fa-google-plus-g"></i></a>
                            <a href="https://twitter.com" target="_self"><i class="fab fa-twitter"></i></a>                          
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="box-one">
                            <div class="img-cont"><img src="images/team-person2.png" width="295" height="297" alt="Dr.Ahraf" class="img-responsive center-block" /></div>
                            <h5 style="font-family: 'Roboto', sans-serif;">Dr.Ahraf</h5>
                            <p style="font-family: 'Raleway', sans-serif;">Assistant Surgeon</p>
                            <a href="https://web.facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://plus.google.com" target="_self"><i class="fab fa-google-plus-g"></i></a>
                            <a href="https://twitter.com" target="_self"><i class="fab fa-twitter"></i></a>                           
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="box-one">
                            <div class="img-cont"><img src="images/team-person3.png" width="296" height="300" alt="Dr.Amtinan" class="img-responsive center-block" /></div>
                            <h5 style="font-family: 'Roboto', sans-serif;">Dr.Amtinan</h5>
                            <p style="font-family: 'Raleway', sans-serif;">Assistant Surgeon</p>
                            <a href="https://web.facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://plus.google.com" target="_self"><i class="fab fa-google-plus-g"></i></a>
                            <a href="https://twitter.com" target="_self"><i class="fab fa-twitter"></i></a>                           
                        </div>
                    </div>  
                    
                    <div class="col-md-3">
                        <div class="box-one">
                            <div class="img-cont"><img src="images/team-person4.png" width="296" height="298" alt="Dr.Ahmed" class="img-responsive center-block" /></div>
                            <h5 style="font-family: 'Roboto', sans-serif;">Dr.Ahmed</h5>
                            <p style="font-family: 'Raleway', sans-serif;">Assistant Surgeon</p>
                            <a href="https://web.facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://plus.google.com" target="_self"><i class="fab fa-google-plus-g"></i></a>
                            <a href="https://twitter.com" target="_self"><i class="fab fa-twitter"></i></a>                            
                        </div>
                    </div>                    
                    
                </div>
                
            </div>
        </section>
        <!-- end section our team -->
        
        <!-- start section advices -->
        <section id="adv" class="advices text-center">
            
            <div class="panel panel-default">
                <div class="panel-heading" style="font-family: 'Roboto', sans-serif;">Advice #1</div>
              <div class="panel-body">
                <h3 style="font-family: 'Roboto', sans-serif;">Doctor Ajibean</h3>
                <p style="font-family: 'Raleway', sans-serif;">Avoid Processed Junk Food (Eat Real Food Instead).</p>

              </div>
              <div class="panel-footer">
                <a href="https://web.facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                <a href="https://plus.google.com" target="_self"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://twitter.com" target="_self"><i class="fab fa-twitter"></i></a>    
              </div>
            </div><!-- 1# -->
            
            <div class="panel panel-default">
                <div class="panel-heading" style="font-family: 'Roboto', sans-serif;">Advice #2</div>
              <div class="panel-body">
                <h3 style="font-family: 'Roboto', sans-serif;">Doctor Ashraf</h3>
                <p style="font-family: 'Raleway', sans-serif;">Take Care of Your Gut Health With Probiotics and Fiber.</p>

              </div>
              <div class="panel-footer">
                <a href="https://web.facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                <a href="https://plus.google.com" target="_self"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://twitter.com" target="_self"><i class="fab fa-twitter"></i></a>   
              </div>
            </div><!-- 2# -->  
            
            <div class="panel panel-default">
                <div class="panel-heading" style="font-family: 'Roboto', sans-serif;">Advice #3</div>
              <div class="panel-body">
                <h3 style="font-family: 'Roboto', sans-serif;">Doctor Ahmed</h3>
                <p style="font-family: 'Raleway', sans-serif;">Drink Some Water, Especially Before Meals.</p>

              </div>
              <div class="panel-footer">
                <a href="https://web.facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                <a href="https://plus.google.com" target="_self"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://twitter.com" target="_self"><i class="fab fa-twitter"></i></a>  
              </div>
            </div><!-- 3# -->
            
            <div class="panel panel-default">
                <div class="panel-heading" style="font-family: 'Roboto', sans-serif;">Advice #4</div>
              <div class="panel-body">
                <h3 style="font-family: 'Roboto', sans-serif;">Doctor Mohammed</h3>
                <p style="font-family: 'Raleway', sans-serif;">Take Vitamin D3 If You Don't Get Much Sun.</p>

              </div>
              <div class="panel-footer">
                <a href="https://web.facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                <a href="https://plus.google.com" target="_self"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://twitter.com" target="_self"><i class="fab fa-twitter"></i></a>   
              </div>
            </div><!-- 4# -->            
            
            <div class="panel panel-default">
                <div class="panel-heading" style="font-family: 'Roboto', sans-serif;">Advice #5</div>
              <div class="panel-body">
                <h3 style="font-family: 'Roboto', sans-serif;">Doctor Amtinan</h3>
                <p style="font-family: 'Raleway', sans-serif;">Make Sure to Eat Enough Protein.</p>

              </div>
              <div class="panel-footer">
                <a href="https://web.facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                <a href="https://plus.google.com" target="_self"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://twitter.com" target="_self"><i class="fab fa-twitter"></i></a>   
              </div>
            </div><!-- 5# -->  
            
            <div class="panel panel-default">
                <div class="panel-heading" style="font-family: 'Roboto', sans-serif;">Advice #6</div>
              <div class="panel-body">
                <h3 style="font-family: 'Roboto', sans-serif;">Doctor John</h3>
                <p style="font-family: 'Raleway', sans-serif;">Don't Smoke or do Drugs, and Only Drink in Moderation.</p>

              </div>
              <div class="panel-footer">
                <a href="https://web.facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                <a href="https://plus.google.com" target="_self"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://twitter.com" target="_self"><i class="fab fa-twitter"></i></a>   
              </div>
            </div><!-- 6# -->            
            
        </section>
        <!-- end section advices -->
        
        <!-- start  section booking -
        <section id="BookingNow" class="booking text-center">
            <div class="container">
                <div class="row">
                
                    <div class="col-xs-12"><h3 style="font-family: 'Roboto', sans-serif;"><a href="signup.htm"><i class="fas fa-user-plus"></i></a></h3></div>
                    <div class="col-xs-12"><hr /></div>
                    <div class="col-xs-12"><h3 style="font-family: 'Roboto', sans-serif;"><a href="login.php" ><i class="fas fa-sign-in-alt"></i></a></h3></div>
                    
                </div>
            </div>
        </section>
        <!-- end section booking -->
        
        <!-- start footer -->
        <footer class="website-footer">
            <div class="contaier text-center">
                <p style="font-family: 'Raleway', sans-serif;">Copyright &copy; 2018 | All Right Reserved.</p>
                <ul class="nav links">
                    <li style="display:inline-block">
                        <a href="https://web.facebook.com" target="_self" class="none-hover">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li style="display:inline-block">
                        <a href="https://plus.google.com" target="_self" class="none-hover">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li style="display:inline-block">
                        <a href="https://twitter.com" target="_self" class="none-hover">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li style="display:inline-block">
                        <a href="https://www.youtube.com" target="_self" class="none-hover">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li style="display:inline-block">
                        <a href="https://www.linkedin.com" target="_self" class="none-hover">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
        <!-- end footer -->
        
        <!-- start div back to top button -->
        <div class="back-to-top">
            <i class="fa fa-arrow-up"></i>
        </div>
        <!-- end div back to top button -->
        
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/file.js"></script>
    </body>
</html>