<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  display: flex;
  justify-content: space-between;
  padding: 20px;
}

.sidebar {
  width: 150px;
  
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.sidebar h2 {
  margin-top: 0;
  font-size: 1.2rem;
  color: #333;
}

.sidebar a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #333;
  border-bottom: 1px solid #eee;
}


.sidebar a:hover {
  
}

.sidebar .upgrade-btn {
  display: block;
  padding: 10px;
  background-color: #ff9800;
  color: #fff;
  border: none;
  border-radius: 5px;
  margin-top: 20px;
  text-align: center;
  text-decoration: none;
}


.content {
  flex: 1;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.content h1 {
  margin-top: 0;
  font-size: 2rem;
  color: #333;
}

.content p {
  font-size: 1rem;
  line-height: 1.5;
  color: #666;
}

.plans {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
}

.plan {
  width: 30%;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.plan h2 {
  margin-top: 0;
  font-size: 1.5rem;
  color: #333;
}

.plan .price {
  font-size: 2rem;
  color: #333;
  margin-bottom: 10px;
}

.plan .price span {
  font-size: 1rem;
  color: #666;
}

.plan .btn {
  display: block;
  padding: 10px 20px;
  background-color:light grey;
  color: black;
  border: none;
  border-radius: 5px;
  margin-top: 20px;
  text-align: center;
  text-decoration: none;
}

.plan ul {
  list-style: none;
  padding: 0;
  margin-top: 20px;
}

.plan li {
  margin-bottom: 10px;
}

.plan li i {
  margin-right: 5px;
  color: #4CAF50;
}

.plan .slider {
  width: 100%;
  height: 5px;
  background-color: #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
  position: relative;
}

.plan .slider .thumb {
  width: 20px;
  height: 20px;
  background-color: #ff9800;
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  cursor: pointer;
}
#s{
font-size:18px;
}

h2{
height:35px;
border-radius: 10px 10px 0px 0px;
}
.btn {
      box-shadow: 2px 2px 5px #000000;   
	  background-color: orange;
  .button:hover {
   background-color: blue;	   
  }
  
</style>
</head>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<body>
<div class="container">
  <div class="content">
  
    <center><h1 style="font-size:30px;">Gibbly Academy</h1>
    <p id="s">Check out these videos on how to use Gibbly! Still have questions? Let us know at support@gibbly.app.</p></center>
    
<div class="container-fliud">
                <div class="row">
                    <!--HTML Quiz-->
                    <div class="col-6 col-md-3 col-lg-3 mb-2">
                        <div class="card bg-light bg-gradient">
						<h5 class="card-title"> Navigating the Gibbly Site</h5>
						<iframe width="100%" height="" src="https://www.youtube.com/embed/C9V8e_CVTZY">
						</iframe>
		            </div>
                    </div>
                    <!--END HTML-->
					
					<!--HTML Quiz-->
                    <div class="col-6 col-md-3 col-lg-3 mb-2">
                        <div class="card bg-light bg-gradient">
						<h5 class="card-title">Creating Your First Quiz</h5>
							<iframe width="100%" height="" src="https://www.youtube.com/embed/nAwBlCjh2CY">
							</iframe>
						</div>
                    </div>
					
					<!--HTML Quiz-->
                    <div class="col-6 col-md-3 col-lg-3 mb-2">
                        <div class="card bg-light bg-gradient">
						<h5 class="card-title">Creating Your First Lesson</h5>
							<iframe width="100%" height="" src="https://www.youtube.com/embed/pwJPSFXhMus">
							</iframe>
						</div>
                    </div>
					
					
					<!--HTML Quiz-->
                    <div class="col-6 col-md-3 col-lg-3 mb-2">
                        <div class="card bg-light bg-gradient">
						<h5 class="card-title">Creating Your First Class</h5>
							<iframe width="100%" height="" src="https://www.youtube.com/embed/_OvSt_TCohc">
							</iframe>
						</div>
                    </div>
					
					
					
				</div>
</div>



  </div>
</div>
</body>
</html>