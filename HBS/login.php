<?php session_start(); ?>
<?php
if (isset($_SESSION['user_id'])) {
    # code...
    header('location:account.php');
}
    $con = mysqli_connect("localhost","root","","medcal");

    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>







  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Login</title>
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
        
        <!-- start login form -->
        <section class="login text-center">
            <div class="container">
                <form method="post" action="">
                    <label class="user-name-label" for="userName">User Name</label>
                    <input type="text" id="userName" name="userName" class="user-name" placeholder="user name here..." max-length="50" required="required" />
                    
                    <label class="user-password-label" for="userPassword">Password</label>
                    <input type="password" id="userPassword" name="userPassword" class="user-password" placeholder="password here ..." max-length="50" required="required" />                    
                    
                    <button class="btn btn-default" name="login" type="submit" title="Go to your account"><i class="fa fa-arrow-right"></i></button>
                    <button class="btn btn-default btn-reset" type="reset" title="Reset your inputs"><i class="fas fa-redo-alt"></i></button>
                    
                </form>
<?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['userName']);
			$password = md5(mysqli_real_escape_string($con, $_POST['userPassword']));
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and user_name='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
        
          if ($num_row > 0) 
             {			
               
                $_SESSION['user_id'] = $row['user_id'];
                setcookie("conn", "conn", time() + (86400 * 30), "/");
                header('location:account.php'); 
             }
             else
            {
                        echo '<div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                            <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top:10px">
                            <strong>Sorry! </strong> Invalid user name or password.<a href="#" class="alert-link">Forgot Your Password</a>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            ';
            }
        }
?>
            </div>
        </section>
        <!-- end login form -->
        
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/file.js"></script>
    </body>
</html>