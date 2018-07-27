<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Signup</title>
        <link rel="shortcut icon" href="images/if_nurse_45213.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css.map" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/media_query.css" />        
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

                    <div class="col-md-12"><div class="logo-container"><img src="images/Logo.png" width="210" height="42" alt="logo" class="img-responsive center-block" /></div></div><!-- logo -->

                </div><!-- row -->
            </div><!-- container -->           

        </header>
        <!-- end header -->      
        
        <!-- start login form -->
        <section class="signup text-center">
            <div class="container">
                <form id="signupfrm" name="signupfrm" method="post" action="insert.php">
                    <label class="user-name-label" for="userName">Full name</label>
                    <input type="text" id="userName" name="userName1" class="user-name" placeholder="1st" maxlength="50" required="required" />
                    <input type="text" id="userName" name="userName2" class="user-name" placeholder="2nd" maxlength="50" required="required" />
                    <input type="text" id="userName" name="userName3" class="user-name" placeholder="3th" maxlength="50" required="required" />
                    <input type="text" id="userName" name="userName4" class="user-name" placeholder="4th" maxlength="50" required="required" />
                    
                    <br />
                    
                    <label class="user-name-label" for="userName">User Name</label>
                    <input type="text" id="userName" name="user_name" class="user-name" placeholder="User name" maxlength="50" required="required" />

                    <br />

                    <label class="user-name-label" for="userName">Email</label>
                    <input type="email" id="userName" name="email" class="user-name" placeholder="Email" maxlength="50" required="required" />
                    <label class="user-blood-class-label">Blood Class</label>
                    <input type="radio" class="user-blood-class" name="userBloodClass" value="A+"  checked/>&nbsp;&nbsp;A+&nbsp;&nbsp;
                    <input type="radio" class="user-blood-class" name="userBloodClass" value="A-" />&nbsp;&nbsp;A-&nbsp;&nbsp;
                    <input type="radio" class="user-blood-class" name="userBloodClass" value="AB" />&nbsp;&nbsp;AB&nbsp;&nbsp;
                    <input type="radio" class="user-blood-class" name="userBloodClass" value="O+" />&nbsp;&nbsp;O+&nbsp;&nbsp;
                    <input type="radio" class="user-blood-class" name="userBloodClass" value="O-" />&nbsp;&nbsp;O-&nbsp;&nbsp;
                    
                    <br />
                    
                    <label class="user-gender-label">Gender</label>
                    <input type="radio" class="user-gender-type" name="userGenderType" value="Male"  checked/>&nbsp;&nbsp;Male&nbsp;&nbsp;
                    <input type="radio" class="user-gender-type" name="userGenderType" value="Female" />&nbsp;&nbsp;Female&nbsp;&nbsp;
                    
                    <br />
                    
                    <label class="user-disease-label">Do You Have Chronical Disease ?</label>
                    <input type="radio" class="user-disease-type" name="userDiseaseType" value="Yes" />&nbsp;&nbsp;Yes&nbsp;&nbsp;
                    <input type="radio" class="user-disease-type" name="userDiseaseType" value="No" />&nbsp;&nbsp;No&nbsp;&nbsp;
                    <input type="radio" class="user-disease-type" name="userDiseaseType" value="Not Sure"  checked/>&nbsp;&nbsp;Not Sure&nbsp;&nbsp;
                    
                    <br />
                    
                    <label class="user-password-label" for="userPassword">Password</label>
                    <input type="password" id="userPassword1" name="userPassword" class="user-password" placeholder="Password here..." maxlength="50" required="required" />
                    
                    <label class="user-password-label" for="userPassword">ٌRe-enter Password</label>
                    <input type="password" id="userPassword2" name="userPassword" class="user-password" placeholder="Password here..." maxlength="50" required="required" />  
                    <p class="errormessage"><span id="errormessage"></span></p>
                    <button id="submitBtn" class="btn btn-default" type="submit" title="Go to next step"><i class="fa fa-arrow-right"></i></button>                    
                    <button class="btn btn-default btn-reset" type="reset" title="Reset your inputs"><i class="fas fa-redo-alt"></i></button>
                    
                </form>
            </div>
        </section>
        <!-- end login form -->    
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/file.js"></script>        
        
        
    </body>
</html>