<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
    
<body>
    @extends('welcome')
    @section('mmm')
    @parent
    @endsection
    @section('nnn')
<div class="loginbox">
	<img src="http://www.lopezfit.org/pictures/1457899384.png"class="avatar">
    <h1>Login Here</h1>
    <form>
    <p>Username</p>
        <input type="text" name="" placeholder="Enter Username">
        <p>Password</p>
        <input type="password" name="" placeholder="Enter Password">
        <input type="submit" name="" value="Login">
        <a href="#">Forget Password?</a><br>
        
    </form>

</div>
    <div class="signupbox">
        <img src="http://www.lopezfit.org/pictures/1457899384.png"class="avatar">
        <h2> Sign-up Here</h2>
        <form>
            <p>Signup ID</p>
            <input type="text" name="" placeholder="Enter Signup ID">
            <p>Password</p>
        <input type="password" name="" placeholder="Enter Password">
                  <p> Confirm Password</p>
        <input type="password" name="" placeholder="Confirm Password">
            <input type="submit" name="" value="Signup">
        </form>
    </div>
                    
                    

	

</body>
</html>