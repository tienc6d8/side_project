<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css"></li>
</head>
<body>
	<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../images/admin/admin.jpg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="./Admin" method="POST">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login" >
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password" >
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>