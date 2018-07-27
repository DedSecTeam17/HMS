<?php
include('connect.php');
include('session.php'); 
    

    $result=mysqli_query($conn, "SELECT * FROM users WHERE user_id='$session_id'") or die('Error In Session');
    $row = mysqli_fetch_array($result);
    $doc_result = mysqli_query($conn, "SELECT * FROM userbooks WHERE user_name ='".$row['user_name']."' ") or die('Error In Session');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Account</title>
        <link rel="shortcut icon" href="images/if_nurse_45213.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />        
        <link rel="stylesheet" href="css/fontawesome-all.min.css" />
        
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

                    <div class="col-md-12"><div class="logo-container"><img src="images/Logo.png" width="210" height="42" alt="logo" style="img-responsive center-block" /></div></div><!-- logo -->

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
              <ul class="nav navbar-nav linkss nav-right">
                <li ><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="account.php" data-value="BookingNow">My account</a></li>
                <li ><a href="booking.php" data-value="BookingNow">Booking Now</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right links">
                        <div class="dropdown">
                        <button class="btn btn-primary btn-md dropdown-toggle " type="button" id="dropDownMenu1" data-toggle="dropdown" style="margin-left:10px">
                        <i class="fas fa-user" style="margin-right:4px"></i>  
                        <?php echo $row['user_name'];?>
                            <span class="caret" style="margin-left:40px"></span>
                        </button>

                        <ul class="dropdown-menu" rol="menu" area-labelledby="dropDownMenu1">
                            <li class="menuitem" rol="presentaion"><a rol="menuitem"  tabindex="-1" href="logout.php" >Logout</a></li>

                            <li class="menuitem" rol="presentaion"><a rol="menuitem" tabindex="-1" href="#">Edit account</a></li>
                            <li class="menuitem" rol="presentaion"><a rol="menuitem" id="delall" tabindex="-1" href="#" >Delete all my books</a></li>
                            <li class="menuitem" rol="presentaion"><a rol="menuitem" tabindex="-1" href="#" >Delete account</a></li>
                        </ul>
                    </li>
              </ul>
              <!-- Example split danger button -->
            
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>                
        <!-- end navbar -->  
        
        <!-- start section account -->
       
        <!-- end section account -->
        
        <!-- start section account info -->
        <div class="container">
            <!-- col-lg-offset-3 col-md-6 col-md-offset-3 -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                    <h4 class="Profile">Profile</h4>
                    <section class="account-info " >
                        <div class="personal-info" >
                            <div class="head">
                                <div class="body" style="padding: 10px;padding-top:0;">
                                    <div class="card" style="background-color:#fff">
                                       <div class="row">
                                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <h5 class="p_label ">Full name </h5> <p class="p_text rowbor"><i class="fa fa-user" style="margin-right:10px"></i><?php echo $row['user_full_name']?></p>
                                           </div>
                                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <h5 class="p_label ">User name </h5><p class="p_text rowbor"><i class="fa fa-at" style="margin-right:10px"></i><?php echo $row['user_name']?></p> 
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <h5 class="p_label">Email </h5> <p class="p_text rowbor"><i class="fa fa-envelope" style="margin-right:10px"></i><?php echo $row['email']?></p> 
                                           </div>
                                       </div>
                                       <hr />
                                       <div class="row">
                                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <h5 class="p_label">Blood Class </h5> <p class="p_text rowbor"><i class="fa fa-tint" style="margin-right:10px"></i><?php echo $row['blood_class']?></p> 
                                           </div>
                                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <h5 class="p_label">Gender </h5> <p class="p_text rowbor"><i class="fa fa-venus-mars" style="margin-right:10px"></i><?php echo $row['gender']?></p> 
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <?php
                                                    if($row['chronical_disease'] == "Not Sure" || "no"){
                                                        echo "<h5 class='p_text rowbor'>You dont have any chronical disease</h5>";
                                                    }
                                                    else {
                                                        # code...
                                                        echo "<h5>You have a chronical_disease</h5>";
                                                    }
                                                ?>
                                           </div>
                                       </div>
                                        
                                       
                                    </div>
                                </div>
                            
                        </div>
                    <!--<h4>You don't have any active booking</h4>-->
                    </section>
                </div>
                <!-- end section account info -->

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                    <h4 class="Active">Active Bookings <span class="badge"><?php echo ($doc_result -> num_rows)?></span></h4>
                    <?php
                            while ($doc_row =  mysqli_fetch_array($doc_result)) {
                                echo "
                                
                                <div class='card2 col-lg-6 col-md-6 col-sm-12 col-xs-12' style='padding:10px;padding-top:0;'>
                                <form action='deletebooks.php' method='post'>
                                        <div class='card' style='background-color:#fff'>
                                            <h4 class='card-title text-success' name='h4' style='margin-top:0'>".$doc_row["hos_name"]."</h4>
                                            <h5 class='card-title text-success' name='h4'>Dr ".$doc_row["doctor_name"]."</h5>
                                            <h6 class='card-subtitle mb-2 text-muted'>".$doc_row["section_name"]."</h6>
                                            <h6 class='card-text text-muted'>".$doc_row["date"]."</h6>
                                            <input type='hidden' name='user_name' value='".$row['user_name']."'>
                                            <input type='hidden' name='doctor_name' value='".$doc_row['doctor_name']."'>
                                            <button type='submit' name='submit' class='btn btn-sm btn-danger card-link'><i class='fa fa-trash'></i></button>
                                        </div>
                                        
                                </form>
                                </div>
                                    ";
                            }
                    ?>
                    <div class="col-lg-12">
                        <form action="delall.php" method="post" class="text-center">
                            <?php  
                                if(($doc_result -> num_rows) > 0)
                                    echo '<button type="submit" class="btn btn-danger"><i class="fa fa-trash" style="margin-right:10px"></i>Delete All My Books</button>';
                                else 
                                    echo '<button type="submit" class="btn btn-danger" disabled><i class="fa fa-trash" style="margin-right:10px"></i>Delete All My Books</button>';
                            ?>
                        </form>
                    </div>
                </div>
                
            </div>
            
            

                
        </div>
        <!-- end section bokking now -->
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/file.js"></script>       
        
    </body>
</html>