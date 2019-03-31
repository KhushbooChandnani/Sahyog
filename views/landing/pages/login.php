<?php 
session_start();
require_once('../../includes/bootstrap.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sahyog - Login</title>
	<link href="<?php echo BASEPLUGINS;?>css/login-style2.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo BASEPLUGINS;?>images/logo.png" />
</head>


<body class="align" class="img-responsive" style="background:#50a1ed;position:relative;">

	<div class="contain" style="width:450px;background:white;position:absolute;z-index:9999;box-shadow:0 25px 30px rgba(0,0,0,0.3);">
		<div class="row">
			<div class="col-md-3">
				<p style="cursor: pointer;margin-left:10%;"><a style="color: black;text-decoration:none;font-size:22px;" href="<?php echo BASELANDING;?>pages/index.php"><span><img src="<?php echo BASEPLUGINS;?>images/logo2.png" alt="" width="75px" height="65px">SAHYOG</span> - BE THE CHANGE</a></p>
			</div>
		</div>

		<div class="grid">

			<form action="<?php echo BASELANDING;?>helper/login_routing.php" method="POST" class="form login">
				<div class="form__field">
					<label for="user_email"><svg class="icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use>
						</svg><span class="hidden">Email</span></label>
					<input id="emp_email" type="text" name="user_email" class="form__input" placeholder="Username" required>
				</div>

				<div class="form__field">
					<label for="user_password"><svg class="icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use>
						</svg><span class="hidden">Password</span></label>
					<input id="emp_password" type="password" name="user_password" class="form__input" placeholder="Password" required>
				</div>
				<div class="form__field">
					<input type="submit" value="Log In" name="login_submit">
				</div>

			</form>

			<p class="text--center">Not a member? <a href="<?php echo BASELANDING;?>pages/registerUser.php">Sign up now</a> <svg class="icon">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use>
				</svg></p>

		</div>
	</div>

	<svg xmlns="http://www.w3.org/2000/svg" class="icons">
		<symbol id="arrow-right" viewBox="0 0 1792 1792">
			<path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
		</symbol>
		<symbol id="lock" viewBox="0 0 1792 1792">
			<path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
		</symbol>
		<symbol id="user" viewBox="0 0 1792 1792">
			<path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
		</symbol>
	</svg>
</body>

</html>
