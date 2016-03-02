
<h3>Hello, <?php echo $_SESSION['user']['user_name'] ?></h3>     <a href="content/logout.php">Log out</a>
<br>
<div class="row">
<div class="col-md-10">
<div class= "blue">
<ul>
	<li>User ID: <?php echo $_SESSION['user']['user_id'] ?></li>
	<li>Username: <?php echo $_SESSION['user']['user_name'] ?></li>
	<li>Email: <?php echo $_SESSION['user']['user_email'] ?></li>
	<li>Firstname: <?php echo $_SESSION['user']['f_name'] ?></li>
		<li>LastName: <?php echo $_SESSION['user']['l_name'] ?></li>
</ul>
</div>

</div>
<div class="col-md-2">
</div>


</div>
  