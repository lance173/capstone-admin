<?php 	
	require('header.php');
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
				
				<form name="signupForm" class="form-signin" method="POST" action="#">
              		              
		              <input name="username" type="text" class="input-block-level" placeholder="Username" required>		          
		              <input name="password" type="password" class="input-block-level" placeholder="Password" required>
		              <button name="submit" class="btn btn-large btn-login" type="submit">Log In</button>
            	</form>

            	<div class="loginfooter">

            		 USC Library System 2.0 - All rights reserved © 2018.
            		 <br> <br>
            		 <img src="../assets/img/usc-completelogo-whitetxt.png" class="login-usclogo">
            	</div>


			</div>				
		</div>
	</div>
</div>









<!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="../assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="../assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="../assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="../assets/js/scripts/chartjs_demo.js" type="text/javascript"></script>
</body>

</html>