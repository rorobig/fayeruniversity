<?php include('../config/config.php') ?>

<h1>Login</h1>
<br>
<form action="actions/login.php" method="POST">
	<label for="">Username</label>
	<input type="text"  placeholder="username" name="username" class="form-control" required/>
	<br>
	<label for="">Password</label>
	<input type="password" placeholder="******" name="password" class="form-control" required/>
	<br>
	<?php 
		if (isset($_SESSION['message'])) {
			echo '<div class="alert alert-danger">';
			echo $_SESSION['message'];
			echo '</div>';

			$_SESSION['message'] = null;
		}
	 ?>
	<button class="btn btn-primary ">Log in</button>
	<a href="register.php">Not yet a member</a>
</form>

</script>
</head>
<body>
