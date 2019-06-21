<?php
include "../classes/Adminlogin.php";
$al = new Adminlogin();
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$adminuser = $_POST['adminUser'];
	$adminpass = $_POST['adminPass'];
	$p_info = $al->adminLogin($adminuser, $adminpass);
}
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="post">
			<h1>Admin Login</h1>
<?php
if (isset($p_info)) {
	echo $p_info;
}
?>
			<div>
				<input type="text" placeholder="Username"  name="adminUser"/>
			</div>
			<div>
				<input type="password" placeholder="Password"  name="adminPass"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>