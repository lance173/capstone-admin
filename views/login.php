<?php 	
	require('header.php');
?>
<?php 
	session_start();
	session_unset();
  	session_destroy(); 
?>

<div id="login" class="admin-loginbg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<center>
					<img src="../assets/img/usclibsystem-transp-whitetxt.png" class="login-uscliblogo">	
				</center>
				<div class="loginheading">
					<h1> Admin Log In </h1>
					 USC Library Personnel can only login to this section. 
				</div>
				<form name="loginForm" class="form-signin" method="POST" action="../controllers/loginController.php">
              		              
		              <input name="emailORid" type="text" class="input-block-level" placeholder="Email / ID Number" required>		          
		              <input name="password" type="password" class="input-block-level" placeholder="Password" required>
		              <button name="submit" class="btn btn-large btn-login" type="submit">Log In</button>
            	</form>

            	<div class="loginfooter">

            		 USC Library System Website 2.0 - All rights reserved © 2019.
            		 <br> <br>
            		 <img src="../assets/img/usc-completelogo-whitetxt.png" class="login-usclogo">
            	</div>
			</div>				
		</div>
	</div>
</div>


<!-- END PAGA BACKDROPS-->
<!-- CORE PLUGINS-->

</body>

</html>