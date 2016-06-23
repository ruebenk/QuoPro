<html >
	<head>
		<meta charset="UTF-8">
       		<title>User Details</title>
		<script src="js/Validate.js"></script>
    		<link rel="stylesheet" href="css/style.css">
		<style>
			
		</style>
		<script src="js/prefixfree.min.js"></script>
	</head>
	<body>
		<form name="myForm" >
			<div class="question">
				<br>
				<center><img src="img/QuoPro Logo.gif" width="200" height="200"></center>
				<br>
			    	<font size="6px" color="#2A8CA4">User Details</font>
			</div>

		  	<div class="question">
		    		<input type="text" name="name" required/>
		   		<label>Name</label>
		  	</div>

		  	<div class="question">
		    		<input type="text" name="email" required/>
		    		<label>Email</label>
		 	</div>

		  	<div class="question">
		  		<input type="text" name="ph" required/>
		    		<label>Mobile</label>
		  	</div>

		  	<div class="question">
		    		<input type="password" name="pwd" required/>
		    		<label>Password</label>
		  	</div>
			<div class="question">
		    		<input type="password" name ="cpwd" required/>
		    		<label>Confirm Password</label>
		  	</div>
		  	<div class="question" font-style="bold">
		    		<input type="file" name="fileToUpload" id="fileToUpload">
		    		<label>Display Picture</label>
		  	</div>
			<button onclick="return validateForm()">Submit</button>
	  	</form>
  	</body>
</html>
