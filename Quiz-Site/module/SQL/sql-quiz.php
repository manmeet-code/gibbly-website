<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Quiz | Gibbly</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="../../Asseets/Css/bootstrap/css/bootstrap.min.css">

    <!--Style Css-->
    <link rel="stylesheet" href="../../Asseets/Css/style.css">
	<link rel="stylesheet" href="sql.css">

    <!--jQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	
	<!-- Favicons -->
  <link href="../../Asseets/images/favicon.png" rel="icon">
  <link href="../../Asseets/Images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../Asseets/Css/style.css" rel="stylesheet">
	
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
                <a class="navbar-brand" href="#">
                    <img src="../../Asseets/Images/g-logo.png" alt="Logo" width="120" height="40"
                        class="d-inline-block align-text-top">
                    <span class="text-light fw-bold font-monospace"></span>
                </a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-3">
            <div class="row  ">
                <div class="col pt-3">
                    <p class="h5 f-2 fw-bold">SQL Quiz</p>
                </div>
                <div class="col text-end"><a href="../../index-1.php" class="btn btn-primary back-btn">Back</a></div>
            </div>
            <hr>
        </div>


        <div class="container mb-3">
            <div class="alert alert-info" role="alert">
                There are currently no quizzes available. <a href="../../index-1.php" class="alert-link">Back to quizzes</a>
            </div>
        </div>
    </main>

    <footer style="background-color:black;color:white; margin-top:8.7%;">
        <div class="container-fluid bg-dark bg-gradient text-white" style="min-height: 150px;">
            <div class="container-fluid">
                <div class="row pt-4 d-flex justify-content-between">
                    <div class="col-sm-12 col-md-3 mb-3">
                        <h1 style="font-size: 1.1rem;" class="pb-2">ABOUT US</h1>
                        <hr width="100%" style="margin-top: -8px;">

                        <p style="font-size: 0.8rem; text-align:justify; font-weight:400">Gibbly is an online quiz management website through which we allow users i.e. teachers or students to log in to this website for educational purposes. Through this website, users i.e. teachers can create various lesson plans and quiz assignments and give assignments to their students.</p>
                    </div>
                    
					<div class="col-sm-12 col-md-3 mb-3">
                        <h1 style="font-size: 1.1rem;" class="pb-2">DATA SECURITY</h1>
                        <hr width="100%" style="margin-top: -8px;">
                        <p style="font-size: 0.8rem; text-align:justify; font-weight:400">Gibbly website allows its users i.e. teachers or students to log in to this website for educational purposes, Gibbly is committed to keeping its database secure. Gibbly collects and keeps the quizzes and personal information of only those students in the website database who the academic institution or teacher authorizes.</p>
                    </div>
                    
					<div class="col-sm-12 col-md-3 mb-3">
                        <h1 style="font-size: 1.1rem;" class="pb-2">SOCIAL MEDIA</h1>
                        <hr width="100%" style="margin-top: -8px;">

                        <p>
                            <a href="https://www.facebook.com/" style="margin-right: 5px;"><img src="../../Asseets/Images/Social/face.png" alt=""
                                    width="30px"></a>
                            <a href="https://www.linkedin.com/in/"
                                style="margin-right: 5px;"><img src="../../Asseets/Images/Social/Link.png" alt=""
                                    width="30px"></a>
                            <a href="" style="margin-right: 5px;"><img src="../../Asseets/Images/Social/whatsapp-.png" alt=""
                                    width="30px"></a>
                            <a href="https://www.youtube.com/" style="margin-right: 5px;"><img src="../../Asseets/Images/Social/Youtube.png" alt=""
                                    width="30px"></a>
                        </p>
                    </div>
					
					<div class="col-sm-12 col-md-3 mb-3">
                        <h1 style="font-size:1.1rem " class="pb-2">CONTACT US</h1>
                        <hr width="100%" style="margin-top: -8px;">

                        <p>
                            <a href="https://www.gibbly.co/privacy-policy" style="margin-right: 5px; font-size: 0.8rem;"><span style="color:white;">  Privacy Policy</span></a><br>
                            <a href="https://www.gibbly.co/terms-of-service" style="margin-right:5px; font-size: 0.8rem;"><span style="color:white;"> Terms of Service </span>  </a> <br>
							<a href="../../feedback.php" style="margin-right:5px; color:white; font-size: 0.8rem;" onmouseover="this.style('color:yellow')" target="new">Feedback</a>
                        
                        </p>
                    </div>
					
                </div>
                <hr>
				<div class="pb-2" style="font-size: 0.9rem; text-align:Center; font-weight:300;">Created By: Project Flow Innovators</div>
			</div>
		</div>
    	<a href="#" class="back-to-top d-flex align-items-center justify-content-center">↑<i class="bi bi-arrow-up-short"></i></a>
    </footer>
	
	<!-- Template Main JS File -->
  <script src="../Asseets/js/main.js"></script>
	
    <!--JavaScript File-->
    <script src="../../Asseets/Js/script.js"></script>
    <script src="../../Asseets/Css/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>