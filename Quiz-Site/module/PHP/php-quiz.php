<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz | Gibbly</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="../../Asseets/Css/bootstrap/css/bootstrap.min.css">

    <!--Style Css-->
    <link rel="stylesheet" href="../../Asseets/Css/style.css">
	<link rel="stylesheet" href="php.css">

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
                    <p class="h6 f-2 fw-bold">PHP Quiz</p>
                </div>
                <div class="col text-end"><a href="../../index-1.php" class="btn btn-primary back-btn">Back</a></div>
            </div>
            <hr>
        </div>


        <div class="container mt-5">
            <!--Quiz 01 -->
            <div class="card mb-3" id="quiz-1">
                <div class="card-header">
                    Question 1 of <span class="total-quiz"></span>:
                </div>
                <div class="card-body">
                    <h6 class="card-title">What does PHP stand for?</h6>
                    <!--Anser 01-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-1" id="ans-1-1">
                                <label class="form-check-label w-100 m-hover" for="ans-1-1">
                                    PHP: Hypertext Preprocessor
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 01-->

                    <!--Anser 02-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-1" id="ans-1-2">
                                <label class="form-check-label w-100 m-hover" for="ans-1-2">
                                    Personal Hypertext Processor
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 02-->

                    <!--Anser 03-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-1" id="ans-1-3">
                                <label class="form-check-label w-100 m-hover" for="ans-1-3">
                                    Private Home Page
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 03-->
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-success" id="ans-btn-1">Next Quiz<span style="margin-left: 5px;"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                </div>
            </div>
            <!--End Quiz 01-->


            <!--Quiz 02 -->
            <div class="card mb-3" id="quiz-2">
                <div class="card-header">
                    Question 2 of <span class="total-quiz"></span>:
                </div>
                <div class="card-body">
                    <h6 class="card-title">PHP server scripts are surrounded by delimiters, which?</h6>
                    <!--Anser 01-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-2" id="ans-2-1">
                                <label class="form-check-label w-100 m-hover" for="ans-2-1">
                                    <<span class="d-none">.</span>?php...?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 01-->

                    <!--Anser 02-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-2" id="ans-2-2">
                                <label class="form-check-label w-100 m-hover" for="ans-2-2">
                                    <<span class="d-none">.</span>?php>...<<span class="d-none">.</span>/?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 02-->

                    <!--Anser 03-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-2" id="ans-2-3">
                                <label class="form-check-label w-100 m-hover" for="ans-2-3">
                                    <<span class="d-none">.</span>&>...<<span class="d-none">.</span>/&>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 03-->

                    <!--Anser 04-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-2" id="ans-2-4">
                                <label class="form-check-label w-100 m-hover" for="ans-2-4">
                                    <<span class="d-none">.</span>script>...<<span class="d-none">.</span>/script>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 04-->
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-success" id="ans-btn-2">Next Quiz<span style="margin-left: 5px;"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                </div>
            </div>
            <!--End Quiz 02-->


            <!--Quiz 03 -->
            <div class="card mb-3" id="quiz-3">
                <div class="card-header">
                    Question 3 of <span class="total-quiz"></span>:
                </div>
                <div class="card-body">
                    <h6 class="card-title">How do you write "Hello World" in PHP</h6>
                    <!--Anser 01-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-3" id="ans-3-1">
                                <label class="form-check-label w-100 m-hover" for="ans-3-1">
                                    "Hello World";
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 01-->

                    <!--Anser 02-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-3" id="ans-3-2">
                                <label class="form-check-label w-100 m-hover" for="ans-3-2">
                                    echo "Hello World";
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 02-->

                    <!--Anser 03-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-3" id="ans-3-3">
                                <label class="form-check-label w-100 m-hover" for="ans-3-3">
                                    Document.Write("Hello World");
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 03-->
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-success" id="ans-btn-3">Next Quiz<span style="margin-left: 5px;"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                </div>
            </div>
            <!--End Quiz 03-->


            <!--Quiz 04 -->
            <div class="card mb-3" id="quiz-4">
                <div class="card-header">
                    Question 4 of <span class="total-quiz"></span>:
                </div>
                <div class="card-body">
                    <h6 class="card-title">All variables in PHP start with which symbol?</h6>
                    <!--Anser 01-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-4" id="ans-4-1">
                                <label class="form-check-label w-100 m-hover" for="ans-4-1">
                                    $
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 01-->

                    <!--Anser 02-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-4" id="ans-4-2">
                                <label class="form-check-label w-100 m-hover" for="ans-4-2">
                                    !
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 02-->

                    <!--Anser 03-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-4" id="ans-4-3">
                                <label class="form-check-label w-100 m-hover" for="ans-4-3">
                                    &
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 03-->
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-success" id="ans-btn-4">Next Quiz<span style="margin-left: 5px;"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                </div>
            </div>
            <!--End Quiz 04-->


            <!--Quiz 05 -->
            <div class="card mb-3" id="quiz-5">
                <div class="card-header">
                    Question 5 of <span class="total-quiz"></span>:
                </div>
                <div class="card-body">
                    <h6 class="card-title">The PHP syntax is most similar to:</h6>
                    <!--Anser 01-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-5" id="ans-5-1">
                                <label class="form-check-label w-100 m-hover" for="ans-5-1">
                                    VBScript
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 01-->

                    <!--Anser 02-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-5" id="ans-5-2">
                                <label class="form-check-label w-100 m-hover" for="ans-5-2">
                                    JavaScript
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 02-->

                    <!--Anser 03-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-5" id="ans-5-3">
                                <label class="form-check-label w-100 m-hover" for="ans-5-3">
                                    Perl and C
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 03-->
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-success" id="ans-btn-5">Next Quiz<span style="margin-left: 5px;"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                </div>
            </div>
            <!--End Quiz 05-->

            <!--Quiz 06 -->
            <div class="card mb-3" id="quiz-6">
                <div class="card-header">
                    Question 6 of <span class="total-quiz"></span>:
                </div>
                <div class="card-body">
                    <h6 class="card-title">How do you get information from a form that is submitted using the "get"
                        method?</h6>
                    <!--Anser 01-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-6" id="ans-6-1">
                                <label class="form-check-label w-100 m-hover" for="ans-6-1">
                                    Request.Form;
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 01-->

                    <!--Anser 02-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-6" id="ans-6-2">
                                <label class="form-check-label w-100 m-hover" for="ans-6-2">
                                    $_GET[];
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 02-->

                    <!--Anser 03-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-6" id="ans-6-3">
                                <label class="form-check-label w-100 m-hover" for="ans-6-3">
                                    Request.QueryString;
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 03-->
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-success" id="ans-btn-6">Next Quiz<span style="margin-left: 5px;"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                </div>
            </div>
            <!--End Quiz 06-->

            <!--Quiz 07 -->
            <div class="card mb-3" id="quiz-7">
                <div class="card-header">
                    Question 7 of <span class="total-quiz"></span>:
                </div>
                <div class="card-body">
                    <h6 class="card-title">Include files must have the file extension ".inc"</h6>
                    <!--Anser 01-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-7" id="ans-7-1">
                                <label class="form-check-label w-100 m-hover" for="ans-7-1">
                                    False
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 01-->

                    <!--Anser 02-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-7" id="ans-7-2">
                                <label class="form-check-label w-100 m-hover" for="ans-7-2">
                                    True
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 02-->
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-success" id="ans-btn-7">Next Quiz<span style="margin-left: 5px;"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                </div>
            </div>
            <!--End Quiz 07-->

            <!--Quiz 08 -->
            <div class="card mb-3" id="quiz-8">
                <div class="card-header">
                    Question 8 of <span class="total-quiz"></span>:
                </div>
                <div class="card-body">
                    <h6 class="card-title">What is the correct way to include the file "time.inc" ?</h6>
                    <!--Anser 01-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-8" id="ans-8-1">
                                <label class="form-check-label w-100 m-hover" for="ans-8-1">
                                    <<span class="d-none">.</span>?php include "time.inc"; ?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 01-->

                    <!--Anser 02-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-8" id="ans-8-2">
                                <label class="form-check-label w-100 m-hover" for="ans-8-2">
                                    <<span class="d-none">.</span>?php include file="time.inc"; ?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 02-->

                    <!--Anser 03-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-8" id="ans-8-3">
                                <label class="form-check-label w-100 m-hover" for="ans-8-3">
                                    <<span class="d-none">.</span>!-- include file="time.inc" -->
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 03-->

                    <!--Anser 04-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-8" id="ans-8-4">
                                <label class="form-check-label w-100 m-hover" for="ans-8-4">
                                    <<span class="d-none">.</span>?php include:"time.inc"; ?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 04-->
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-success" id="ans-btn-8">Next Quiz<span style="margin-left: 5px;"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                </div>
            </div>
            <!--End Quiz 08-->

            <!--Quiz 09 -->
            <div class="card mb-3" id="quiz-9">
                <div class="card-header">
                    Question 9 of <span class="total-quiz"></span>:
                </div>
                <div class="card-body">
                    <h6 class="card-title">What is the correct way to create a function in PHP?</h6>
                    <!--Anser 01-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-9" id="ans-9-1">
                                <label class="form-check-label w-100 m-hover" for="ans-9-1">
                                    new_function myFunction()
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 01-->

                    <!--Anser 02-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-9" id="ans-9-2">
                                <label class="form-check-label w-100 m-hover" for="ans-9-2">
                                    function myFunction()
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 02-->

                    <!--Anser 03-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-9" id="ans-9-3">
                                <label class="form-check-label w-100 m-hover" for="ans-9-3">
                                    create myFunction()
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 03-->
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-success" id="ans-btn-9">Next Quiz<span style="margin-left: 5px;"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                </div>
            </div>
            <!--End Quiz 09-->

            <!--Quiz 10 -->
            <div class="card mb-3" id="quiz-10">
                <div class="card-header">
                    Question 10 of <span class="total-quiz"></span>:
                </div>
                <div class="card-body">
                    <h6 class="card-title">What is the correct way to open the file "time.txt" as readable?</h6>
                    <!--Anser 01-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-10" id="ans-10-1">
                                <label class="form-check-label w-100 m-hover" for="ans-10-1">
                                    fopen("time.txt","r+");
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 01-->

                    <!--Anser 02-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-10" id="ans-10-2">
                                <label class="form-check-label w-100 m-hover" for="ans-10-2">
                                    open("time.txt");
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 02-->

                    <!--Anser 03-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-10" id="ans-10-3">
                                <label class="form-check-label w-100 m-hover" for="ans-10-3">
                                    open("time.txt","read");
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 03-->

                    <!--Anser 04-->
                    <div>
                        <div class="shadow-none p-3 mb-1 bg-light rounded">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans-10" id="ans-10-4">
                                <label class="form-check-label w-100 m-hover" for="ans-10-4">
                                    fopen("time.txt","r");
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--End Answer 04-->
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-success" id="ans-btn-10">Finish Attempt<span style="margin-left: 5px;"><i
                                class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                </div>
            </div>
            <!--End Quiz 10-->


            <!--score -->
            <div class="container" id="scor">
                <div class="row d-flex justify-content-center">
                    <div class="col col-md-6">
                        <div class="card mb-3">
                            <div class="card-header fs-2">
                                Result:
                            </div>
                            <div class="card-body text-center">

                                <img src="../../Asseets/Images/Jan-Success_1.jpg" alt="" class="img-fluid" width="300px" id="success-img">

                                <div class="fs-4"><span id="score"></span> of 10</div>

                                <div class="fs-5"><span id="avg"></span> %</div>

                                <div class="fs-5"><span id="mes"></span></div>
                            </div>
                            <div class="card-footer">
                                <div class="row ">
                                    <div class="col-12 col-lg-5 mb-2"><a href="php-answer.php" class="btn btn-success">Check the answers</a></div>
                                    <div class="col-12 col-lg-3 mb-2"><a href="php-quiz.php" class="btn btn-primary">Try Again</a>
                                    </div>
                                    <div class="col-12 col-lg-4"><a href="../../index-1.php" class="btn btn-warning">Back to Quizzes</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--score-->

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
    <script src="php.js"></script>
    <script src="../../Asseets/Js/script.js"></script>
    <script src="../../Asseets/Css/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>