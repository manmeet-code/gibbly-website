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
font-size:14px;
}

h2{
height:35px;
border-radius: 10px 10px 0px 0px;
}
</style>
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
<div class="container">
  <div class="content">
    <center><h1 style="font-size:30px;">Elevate Your Teaching with Time-Saving Al Tools!</h1>
    <p id="s">Save time on lesson prep, boost student engagement, and enhance learning by gamifying your classroom. Reclaim your valuable time with Al-enhanced teaching tools.</p></center>
    <div class="plans">
      <div class="plan">
        <h2 style="font-size:20px;background-color:orange;color:white; font-weight:bold;">Starter</h2>
        <div class="price">FREE<span>$0 / month</span></div>
        <center><button onclick="document.location='account.php?q=1'" class="btn btn-default" >Current Plan</button></center>
        <ul>
          <li><i class="fas fa-check-circle"></i> 10K Al text generation tokens/month</li>
          <li><i class="fas fa-check-circle"></i> Host unlimited review games</li>
          <li><i class="fas fa-check-circle"></i> Create unlimited quizzes and lessons</li>
          <li><i class="fas fa-check-circle"></i> Create unlimited classes</li>
          <li><i class="fas fa-check-circle"></i> Unlimited access to Discover content</li>
          <li><i class="fas fa-check-circle"></i> Google exports & Google SSO</li>
        </ul>
      </div>
      <div class="plan">
        <h2 style="font-size:20px;background-color:#3d9af2;color:white; font-weight:bold;">Premium</h2>
        <div class="price">$8.99 USD<span>$11.99 CAD</span></div>
       <center> <button onclick="document.location='https://stripe.com/in'" class="btn btn-default">Upgrade</button></center>
        <ul>
          <li><i class="fas fa-check-circle"></i> Everything in Starter</li>
          <li><i class="fas fa-check-circle"></i> Unlimited Al text generation tokens/month</li>
          <li><i class="fas fa-check-circle"></i> Smarter Al Model</li>
          <li><i class="fas fa-check-circle"></i> Translation capabilities</li>
          <li><i class="fas fa-check-circle"></i> Future LMS integrations</li>
          <li><i class="fas fa-check-circle"></i> Priority support</li>
        </ul>
      </div>
      <div class="plan">
        <h2 style="font-size:20px;background-color:#950bbf;color:white; font-weight:bold;">20 Premium Licences</h2>
        <div class="price">$5.49 USD<span>$7.49 CAD</span></div>
        <center><button onclick="document.location='https://forms.office.com/pages/responsepage.aspx?id=FV1BPM5CzkCEA7FRA9xuuqIWX8zLICVGlnpfz_1zQepUN1FIVVk5SVhEN0M3WkY1NEY5UlBPS0gwRy4u'" class="btn btn-default">Contact Us</button><br></center>
        
        <ul>
          <li><i class="fas fa-check-circle"></i> Everything in Premium</li>
          <li><i class="fas fa-check-circle"></i> Professional development and training</li>
          <li><i class="fas fa-check-circle"></i> Dedicated support and check-ins</li>
          <li><i class="fas fa-check-circle"></i> Customization and branding requests</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</body>
</html>