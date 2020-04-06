<?php require('nav_bar.php');?>
<style>
body
{
background:#990000;

background-size:cover;
}


h1, h2, h3, h4, h5, h6, p, a, div, .h3, ul, li, span {
    font-family: Segoe UI !important;
}
.login-right{padding: 0px 10%;}
.login-right h3{margin: 0 auto; padding: 15px 0px 5px; text-align: center;color: #188FFE; border-bottom: 2px solid #188FFE; width: 100px;text-transform: capitalize; font-size: 20px; margin-bottom: 20px}
.login-right .form-group label{text-transform: lowercase; color:#188FFE; font-size: 15px; }
.login-right .form-group label::first-letter{text-transform: capitalize;}
.login-right .form-group input.form-control{border-bottom: 2px solid #188FFE !important; border: none; border-radius: 0px;}
.login-right .form-group input.form-control:focus, .login-right .form-group input.form-control:active{outline: none; border-bottom: 2px solid #188FFE !important; border: none; box-shadow: none;}
.login-right .form-group{margin-bottom: 40px;}
.register-right .form-group{margin-bottom: 15px !important;position: relative;}
.login-right .form-group label.container-check{color: #b5b3b3;font-size: 15px;}
button.custum-btn{padding: 8px 70px; margin: 0 auto; background:#272262; border: none; color: #fff; border-radius: 25px; font-size: 18px; text-transform: capitalize;cursor: pointer;}
button.custum-btn:focus, button.custum-btn:active{outline: none;}

.bottom-text p{color: #505050; font-size: 16px;}
.bottom-text p a{text-decoration: none; font-weight: 600;color: #188FFE;}

/* Customize the label (the container) */
.container-check {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container-check input {
  position: absolute;
  opacity: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #ccc;
}

/* On mouse-over, add a grey background color */
.container-check:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container-check input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container-check input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container-check .checkmark:after {
  left: 8px;
    top: 2px;
    width: 10px;
    height: 16px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
@media screen and (max-width: 768px) {

  .login-right {
      padding: 0px 10%;
  }
  
  
  button.custum-btn{padding:  8px 35px;
  }
  .login-right .form-group label.container-check{font-size: 12px;
  }
  h2.plan-heading{font-size: 16px;
  }
}
.login-right {
background:rgba(255,255,255,0.8);
border-radius:10px; 
padding-bottom:10px;
margin-top:80px;
}

#snackbar {
   /* visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 600px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
   /* background-color: #333; /* Black background color */
   /* color: #fff; /* White text color */
    /*text-align: center; /* Centered text */
    border-radius: 10px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 39%; /* Center the snackbar */
    bottom: 584px; /* 30px from the bottom */
}


</style>


  
 
</head>

<body class="fixed-nav sticky-footer" id="page-top">

<?php 

?>
 <div class="container">
        <div class="row">
            <?php
      if(!empty($_GET['error'])) {
   echo'<div class="alert alert-warning alert-dismissible fade show" id="snackbar">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong>&nbsp; Wrong E-Mail or Activation Code. <a href="active.php">Retry Again</a> !!!.
  </div>';
}

 if(!empty($_GET['success'])) {
   echo'<div class="alert alert-success alert-dismissible fade show" id="snackbar">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong>&nbsp;Your Account Activated Now. Please Login with Email and Password.</span>
  </div>';
}
 if(!empty($_GET['login_error'])) {
   echo'<div class="alert alert-danger alert-dismissible fade show" id="snackbar">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Error!</strong> &nbsp; &nbsp;E-Mail Id or Password Incorrect!!!.
  </div>';
}
 if(!empty($_GET['logout'])) {
   echo'  <div class="alert alert-info alert-dismissible  fade show" id="snackbar">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <strong>Logout!</strong>&nbsp;&nbsp; Logout Successfully Come Again!!!.
  </div>';
}

      ?>
              <div class="col-sm-3 col-md-3 "></div>
            <div class="col-sm-6 col-md-6 ">
                <div class="login-right" >
                   
                     <h3>Login</h3>
                        <form action="signin_db_quick.php" method="post" name="form_1" >
                        <div class="form-group">
                            <label>Username</label>
                            <input type="email" id="loginemail" name="user" autofocus="autofocus" autocomplete="off" class="form-control" placeholder="Enter your email" tabindex="1" required="required" style="background:transparent;">
                            <p id="error_email" class="text-danger error"></p>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="loginpassword" name="password" class="form-control" autocomplete="off" placeholder="Enter your password" tabindex="2" required="required" style="background:transparent;">
                             <p id="error_password" class="text-danger error"></p>
                        </div>
                      
                        <div class="form-group text-center">
                            <button class="custum-btn" id="signin" name="submit" type="submit" tabindex="4">Login</button>
                        </div>
                   
                  
                </div>
                </form>
            </div>

                      <div class="col-sm-3 col-md-3 "></div>

         
        </div>
        </div>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

