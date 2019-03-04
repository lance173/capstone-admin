<?php

	if(isset($_GET['success-msg'])){

		$msg = $_GET['success-msg'];

		print '<div class="alert alert-success">
		<button class="close" data-dismiss="alert">x</button>'.$msg.'</div>';
	}
?>