<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>

<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value; 
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="Name must be filled out.";
    return false;
  }
  var br = document.forms["form"]["branch"].value;
  if (br == "") {
    document.getElementById("errormsg").innerHTML="Please select your branch";
    return false;
  }
  if (m.length < 10) {
    document.getElementById("errormsg").innerHTML="Passwordr must be 12 digits long";
    return false;
  }
  var g = document.forms["form"]["gender"].value;
  if (g=="") {
    document.getElementById("errormsg").innerHTML="Please select your gender";
    return false;
  }
  var x = document.forms["form"]["username"].value;
  if (x.length == 0) {
    document.getElementById("errormsg").innerHTML="Please enter a valid username";
    return false;
  }
  if (x.length < 4) {
    document.getElementById("errormsg").innerHTML="Username must be at least 4 characters long";
    return false;
  }
  var m = document.forms["form"]["phno"].value;
  if (m.length != 10) {
    document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == ""){
    document.getElementById("errormsg").innerHTML="Password must be filled out";
    return false;
  }
  if(a.length<4 || a.length>15){
    document.getElementById("errormsg").innerHTML="Passwords must be 4 to 15 characters long.";
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b){
    document.getElementById("errormsg").innerHTML="Passwords must match.";
    return false;
  }
}
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicover Quizzes | Giblly</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="Asseets/Css/bootstrap/css/bootstrap.min.css">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/2759fd8f76.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Asseets/Css/style.css">

    <!--jQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	
	<!-- Favicons -->
  <link href="Asseets/images/favicon.png" rel="icon">
  <link href="Asseets/Images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Asseets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Asseets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Asseets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Asseets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Asseets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
   <!-- Template Main CSS File -->
 <link href="Asseets/Css/style.css" rel="stylesheet">
  
  <link  rel="stylesheet" href="css/bootstrap.min.css"/>
  <link  rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>
  <link  rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	</head>



 <style>
  .btn {
      box-shadow: 2px 2px 5px #000000;   
	  background-color: orange;
  .button:hover {
   background-color: blue;	   
  }
</style> 
<body>

    <header>
        <nav class="navbar pt-2 shadow pb-2 bg-primary bg-gradient">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                   <img style="margin-top:-10px; margin-left:-50px;" src="Asseets/Images/g-logo.png" alt="Logo" width="130" height="50"
                        class="d-inline-block align-text-top">
                    <span class="text-light fw-bold font-monospace"></span>
                </a>
            
<!-- LOGIN -->
<div class="col-md-2 col-md-offset-3">
<button style="align:left;" href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal">Login</button></div>


<div class="col-md-2 col-md-offset-3">
<button style="align:left;" href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#login">Dashboard</button></div>

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Student Login</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="username"></label>  
  <div class="col-md-6">
  <input id="username" name="username" placeholder="Username" class="form-control input-md" type="username">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
	  <button type="submit" class="btn btn-primary">Log in</button>
	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="button" onclick="document.location='student.php'" class="btn btn-default" data-dismiss="modal">Signup</button>
        
        
    </fieldset>
</form>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:darkblue;font-size:12px;font-weight: bold">Teacher Login</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Username" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="30" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
<button type="button" onclick="document.location='teacher.php'" class="btn btn-default" data-dismiss="modal">Signup</button>
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
    </div>
  </div>
</div>







</header>

<main>


</div>
</div>
</div>
        </nav>
   
<div style="margin: 30px; margin-top:-15px; padding margin:10px; font-size:16px;">

            <div class="container mt-3 >
                <p style="margin-left:10px;font-size:20px;" class="h5 f-2 fw-bold"><br></p>
                <p style="margin-left:10px;font-size:20px;" class="h5 f-2 fw-bold">Hello Test Your Skills With These Quizzes.</p>
				
				<hr>

                <div class="row">

                    <div class="col-12 d-sm-block d-md-none col-md-4">
                        <div class="text-center">
                            <img src="Asseets/Images/h-logo.png" alt="" class="img-fluid" width="250px">
                        </div>
                    </div>

                    <div class="col-12 col-md-8 m">
					
                        <p class="h5 f-2 text-primary fw-bold font-monospace d-none d-md-block" style="font-size:22px;">Discover Quizzes</p>
                        <p class="h5 f-2 text-primary fw-bold font-monospace d-md-none" style="font-size:22px;">Discover Quizzes</p>

                        <p style="text-align:justify">Practice pre-existing quizzes on various topics and evaluate your answers.<br> 
						The following quizzes contain 10-15 questions, you get 1 point for each correct answer, <br>and at the end of each quiz, you get your total score.</br></p>

                        <p style="text-align:justify">When you finish the quiz, you can go through each question with the correct answer.</p>
						
						
						
                    </div>

                    <div class="col-12 col-md-4 d-none d-md-block">
                        <div class="text-center">
                            <img src="Asseets/Images/h-logo.png" alt="" class="img-fluid" width="250px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <!--HTML Quiz-->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card bg-light bg-gradient">
                            <img src="Asseets/Images/html-5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">HTML</h5>
                                <p class="card-text">10 Questions covering the basics of HTML</p>

                                <p class="card-text">Good luck! <i class="fa fa-smile-o" aria-hidden="true"></i></p>
                                <a href="module/HTML/html-quiz.php" class="btn btn-primary">Start the HTML Quiz</a>
                            </div>
                        </div>
                    </div>
                    <!--END HTML-->


                    <!--Css Quiz-->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card bg-light bg-gradient">
                            <img src="Asseets/Images/css.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Css</h5>
                                <p class="card-text">10 Questions covering the basics of CSS</p>
                                <p class="card-text">Good luck! <i class="fa fa-smile-o" aria-hidden="true"></i></p>
                                <a href="module/Css/css-quiz.php" class="btn btn-primary">Start the Css Quiz</a>
                            </div>
                        </div>
                    </div>
                    <!--END Css-->


                    <!--PHP Quiz-->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card bg-light bg-gradient">
                            <img src="Asseets/Images/php.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">PHP</h5>
                                <p class="card-text">10 Questions covering the basics of PHP</p>
                                <p class="card-text">Good luck! <i class="fa fa-smile-o" aria-hidden="true"></i></p>
                                <a href="module/PHP/php-quiz.php" class="btn btn-primary">Start the PHP Quiz</a>
                            </div>
                        </div>
                    </div>
                    <!--END PHP-->

                    <!--JavaScript Quiz-->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card bg-light bg-gradient">
                            <img src="Asseets/Images/javascript.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">JavaScript</h5>
                                <p class="card-text">10 Questions covering the basics of JavaScript</p>
                                <p class="card-text">Good luck! <i class="fa fa-smile-o" aria-hidden="true"></i></p>
                                <a href="module/JavaScript/javascript-quiz.php" class="btn btn-primary">Start the
                                    JavaScript Quiz</a>
                            </div>
                        </div>
                    </div>
                    <!--END JavaScript-->

                    <!--Java Quiz-->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card bg-light bg-gradient">
                            <img src="Asseets/Images/java.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Java</h5>
                                <p class="card-text">10 Questions covering the basics of Java</p>
                                <p class="card-text">Good luck! <i class="fa fa-smile-o" aria-hidden="true"></i></p>
                                <a href="module/Java/java-quiz.php" class="btn btn-primary">Start the Java Quiz</a>
                            </div>
                        </div>
                    </div>
                    <!--END Java-->

                    <!--SQL Quiz-->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card bg-light bg-gradient">
                            <img src="Asseets/Images/sql.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">SQL</h5>
                                <p class="card-text">10 Questions covering the basics of SQL</p>
                                <p class="card-text">Good luck! <i class="fa fa-smile-o" aria-hidden="true"></i></p>
                                <a href="module/SQL/sql-quiz.php" class="btn btn-primary">Start the SQL Quiz</a>
                            </div>
                        </div>
                    </div>
                    <!--END SQL-->

                    <!--SQL Python-->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card bg-light bg-gradient">
                            <img src="Asseets/Images/python.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Python</h5>
                                <p class="card-text">10 Questions covering the basics of Python</p>
                                <p class="card-text">Good luck! <i class="fa fa-smile-o" aria-hidden="true"></i></p>
                                <a href="module/Python/python-quiz.php" class="btn btn-primary">Start the Python Quiz</a>
                            </div>
                        </div>
                    </div>
                    <!--END Python-->

                </div>
            </div>
        </main>
    </div>

</div>
   

<div class="col-sm-16">
<?php include 'footer.php';?>
</div>






<script>
        var myValue = localStorage.getItem("myValue");
        document.getElementById('uName').innerHTML = myValue;
    </script>

</body>
</html>
