<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Gibbly</title>
    <link rel="stylesheet" href="setting.css">
</head>

<style>
  .btn {
      box-shadow: 2px 2px 5px #000000;   
	  background-color: orange;
  .button:hover {
   background-color: blue;	   
  }
</style> 

<body style="background-color:white;">

    <main class="container">
        <form action="account.php?q=5">
		<div class="settings">
           <h2>Settings</h2>
            <div class="section">
                <h3>Account Information</h3>
                <div class="field">
                    <label for="username">Username:</label>
                    <input type="text" required id="username" >
                    <span class="edit-icon"></span>
                </div>
                <div class="field">
                    <label for="role">Role:</label>
                    <select id="role">
                        <option value="teacher">Teacher</option>
                        <option value="student" selected>Student</option>
                        
                    </select>
                </div>
                <div class="field">
                    <label for="output-language">Output Language:</label>
                    <select id="output-language">
                        <option value="English">English</option>
                        <option value="French">French</option>
                    </select>
                </div>
                <div class="field">
                    <label for="preferred-model">Preferred Model:</label>
					<select id="output-language">
                        <option value="Faster">Faster</option>
                        <option value="Smarter">Smarter</option>
                    </select>
		         </div>
                <div class="field">
                    <label for="date-joined">Date Joined:</label>
                    <input type="date" required id="date-joined">
                </div>
                <div class="field">
                    <label for="plan">Plan:</label>
					<select id="output-language">
                        <option value="Starter">Starter</option>
                        <option value="Premium">Premium</option>
						<option value="20 Premium Licences">20 Premium Licences</option>
                        
                    </select>
					
                </div>
                <div class="field">
                    <label for="tokens">Tokens:</label>
                    <span class="tokens">Base: 10,000</span>
                    <span class="tokens">Bonus: 0</span>
                </div>
		
<Center>					<button type="submit" style="align:left;" href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal">Upgrade</button>
</Center>

	
  </div>
</div>
</div>
            </div>
      </form>
    </main>

    <script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>
</body>
</html>
