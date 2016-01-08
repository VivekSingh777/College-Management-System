<?php 

include_once("php_includes/check_login_status.php");

?>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/creative.css" type="text/css">

    <!-- style added by Team3 -->
    <link rel="stylesheet" href="../css/home_style.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php">Doodle</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                <?php

                if(isset($_SESSION["userid"]) && isset($_SESSION["password"]) && isset($_SESSION["userType"]) || isset($_COOKIE["id"]) && isset($_COOKIE["password"]) && isset($_COOKIE["userType"])) {

                    $user = $_SESSION["userid"];
                    $userType = $_SESSION["userType"];
                    
                    echo "<li>
                    <a href='user.php?t=" . $userType . "'>" . $user .  "</a>
                    </li>";

                }else{

                    echo "<li>
                        <a href='#' data-toggle='modal' data-target='#login'>Log In</a>
                    </li>";
                    

                }

                 ?>

                    <li>
                        <a href="http://www.iiitvadodara.ac.in" target="_blank">Visit Our Website</a>
                    </li>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



        <!--Form Modal for Login Starts-->
        <div class="modal fade" id="login" role="dialog">
            <div class="modal-dialog">
                <!--Modal Content-->
                <div class="container-fluid form-container modal-content">
                    <!--            Modal Header-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h1 class="modal-title">Login</h1>
                    </div>
                  
                    <!--          Modal Body And  Main Form Container-->
                  
                          <!--form method="post" action="login.php" class="modal-body" id="login_area"-->

                            <form class="modal-body" id="login_area" onsubmit="return false;">
                        <!--Username-->
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <!--<label>Email or Username
                                </label>-->
                                <input type="text" class="form-control required" name="username" id="username" placeholder="Enter Your Username">
                            </div>
                        </div>
                        <!--                Password-->
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <!--<label>Password
                                </label>-->
                                <input type="password" class="form-control required" name="login_password" id="login_password" placeholder="Enter Your Password">
                            </div>
                        </div>

                        <div class="form-group">
                        <!--label for="sel1">Select list:</label-->
                            <select name="user_type" class="form-control" id="user_type">
                            <option value="" disabled selected>Choose a user type</option>
                            <option value="admin">Admin</option>
                            <option value="faculty">Faculty</option>
                            <option value="student">Student</option>
                            </select>
                            </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                
                                <!--a href="forgot_password.html">Forgot Password ?</a-->
                                <label>In case you forgot password contact <a href="mailto:admin@iiitvadodara.ac.in">admin</a></label>

                            </div>
                        </div>
                                                
                        <!--Buttons-->
                        <div class="form-group">
                            <!--input type="submit" id="login" class="btn btn-success" value="Login"-->
                            <input type="button" id="login" class="btn btn-success" value="Login" onclick="checkLogin();">
                        </div>            

                        <div class="form-group row">
             
                        <span id="status"></span>   
                        
                         <div class="col-sm-12">

                            </div>
             
                        </div>

                    </form>
              

                </div>
            </div>
        </div>
        <!--        Form Modal for Login Ends -->

