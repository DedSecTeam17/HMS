<?php
include('connect.php');
include('session.php'); 
    $result=mysqli_query($conn, "SELECT * FROM users WHERE user_id='$session_id'") or die('Error In Session');
    $row = mysqli_fetch_array($result);

    $hos_result = mysqli_query($conn, "SELECT * FROM hospitals") or die('Error In Session');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Booking</title>
        <link rel="shortcut icon" href="images/if_nurse_45213.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css.map" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />        
        <link rel="stylesheet" href="css/fontawesome-all.min.css" />
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
                <li ><a href="account.php" data-value="BookingNow">My account</a></li>
                <li class="active"><a href="booking.php" data-value="BookingNow">Booking Now</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right links">
                <div class="dropdown">
                      <button class="btn btn-primary btn-md dropdown-toggle" type="button" id="dropDownMenu1" data-toggle="dropdown" style="margin-left:10px">
                        <i class="fas fa-user" style="margin-right:4px"></i> 
                        <?php echo $row['user_name'];?>
                        <span class="caret" style="margin-left:40px"></span>
                      </button>

                    <ul class="dropdown-menu" rol="menu" area-labelledby="dropDownMenu1">
                        <li class="menuitem" rol="presentaion"><a rol="menuitem"  tabindex="-1" href="logout.php" >Logout</a></li>
                        <li class="menuitem" rol="presentaion"><a rol="menuitem" tabindex="-1" href="#">Edit account</a></li>
                        <li class="menuitem" rol="presentaion"><a rol="menuitem"  tabindex="-1" href="deleteBooks.php" >Delete all my books</a></li>
                        <li class="menuitem" rol="presentaion"><a rol="menuitem" tabindex="-1" href="#" >Delete account</a></li>
                    </ul>
                 </div>
              </ul>
              <!-- Example split danger button -->
            
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>                
        <!-- end navbar -->   
        <!-- start section booking -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom:10px;padding-left:0px">
                    <form action="#" method="post">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-10" style="">
                            
                            <select class="form-control form-control-lg " name="hos_name1">
                                <?php
                                    while ($hos_row =  mysqli_fetch_array($hos_result)) {
                                        echo "<option>".$hos_row['hos_name']."</option>";
                                    }
                                ?> 
                            </select>
                            <small class="text-muted">Select a hospital</small>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-2">
                            <button  type="submit" name="hos_submit" value="hos_submit" class="btn btn-primary"><i class="fas fa-check"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 " >
                    <form action="" method="post" style="width:100%">
                        <div class="input-group" >
                            <span class="input-group-addon">Search</span>
                            <input class="form-control " type="text" id="search" name="search" placeholder="Search Doctore">
                        </div>
                        <small  class="text-muted">You can search by doctor name or speciality</small>

                    </form>
                </div>
            </div>
            <div class="row">
                <div id="result" class="col-lg-12" style="margin-top:30px;padding:0">
                    <?php
                        if (isset($_POST['hos_submit'])) {
                            # code...
                            #echo $_POST['hos_name1'];
                            $handel = $_POST['hos_name1'];
                            $doc_result = mysqli_query($conn, "SELECT * FROM doctors WHERE hos_name ='".$handel."' ") or die('Error In Session');
                            while ($doc_row =  mysqli_fetch_array($doc_result)) {
                                echo "
                                
                                <div class='card2 col-lg-3 col-md-3 col-sm-4 col-xs-12' style='padding:10px'>
                                <form action='insertbooks.php' method='post'>
                                        <div class='card' style='background-color:#fff'>
                                            <h4 class='card-title text-primary' name='h4'>".$doc_row["doc_name"]."</h4>
                                            <h6 class='card-subtitle mb-2 text-muted'>".$doc_row["section_name"]."</h6>
                                            <h6 class='card-text'>The doctor work at ".$doc_row["am_pm"]."</h6>
                                            <h6 class='card-text text-danger'>".$doc_row["date"]."</h6>

                                            <input type='hidden'  name='doc_name' value='".$doc_row["doc_name"]."'>
                                            <input type='hidden'  name='hos_name' value='".$doc_row["hos_name"]."'>
                                            <input type='hidden'  name='section_name' value='".$doc_row["section_name"]."'>
                                            <input type='hidden'  name='doc_apm' value='".$doc_row["am_pm"]."'>
                                            <input type='hidden'  name='doc_date' value='".$doc_row["date"]."'>
                                            <button type='submit' name='submit' class='btn btn-sm btn-primary card-link'>Book</button>
                                        </div>
                                        
                                </form>
                                    </div>
                                    ";
                            }
                        }
                        else {
                            echo '
                            <div class="alert alert-warning alert-dismissible" role="alert">
                            <strong>Please!</strong> You should select a hospital .
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
        
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/file.js"></script>        
        
    </body>
</html>
