<?php

	if(isset($_GET['success-msg'])){

		$msg = $_GET['success-msg'];

		print '<div class="alert alert-success">
		<button class="close" data-dismiss="alert">x</button>'.$msg.'</div>';
	}

	if(isset($_GET['primary-msg'])){

		$msg = $_GET['primary-msg'];

		print '<div class="alert alert-primary">
		<button class="close" data-dismiss="alert">x</button>'.$msg.'</div>';
	}

	if(isset($_GET['info-msg'])){

		$msg = $_GET['info-msg'];

		print '<div class="alert alert-info">
		<button class="close" data-dismiss="alert">x</button>'.$msg.'</div>';
	}

	if(isset($_GET['warning-msg'])){

		$msg = $_GET['warning-msg'];

		print '<div class="alert alert-warning">
		<button class="close" data-dismiss="alert">x</button>'.$msg.'</div>';
	}

	if(isset($_GET['danger-msg'])){

		$msg = $_GET['danger-msg'];

		print '<div class="alert alert-danger">
		<button class="close" data-dismiss="alert">x</button>'.$msg.'</div>';
	}


?>