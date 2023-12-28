<?php 
include"admin/login/serv-login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login: Group Messaging System</title>
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">

* {
    margin: 0;
}

/* Desktop Responsive */
@media only screen and (min-width: 940px) {
    input[type=text],
    input[type=password] {
        padding: 10px;
        width: 280px;
        margin: 10px auto;
        border-radius: 20px;
        border: 1px solid #bbbbbb;
    }

    input[type=submit] {
        padding: 10px;
        width: 240px;
        margin: 20px 10px 0px 10px;
        cursor: pointer;
        border-radius: 30px;
        background-color: #ff5722;
        color: #ffffff;
        border: 2px solid #dfdfdf;
    }

    .con-div-1 {
        height: 100vh;
        width: 100%;
        background-color: #3f51b5;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1 {
        height: 420px;
        width: 38%;
        background-color: #ffffff;
        border-radius: 10px;
        text-align: center;
    }

    .con-div-1-1-1 {
        height: 50px;
        width: 90%;
        background-color: #ffffff;
        margin: 20px auto;
        border-radius: 5px;
    }

    .con-div-1-1-3 {
        height: 40px;
        width: 280px;
        margin: auto;
        background-color: #ffffff;
    }

    .con-div-1-1-3-left {
        height: 40px;
        width: 40%;
        background-color: #ffffff;
        float: left;
    }

    .con-div-1-1-3-left-1 {
        height: 20px;
        width: 100%;
        background-color: #ffffff;
        border-bottom: 1px solid #d9d9d9;
    }

    .con-div-1-1-3-center {
        height: 40px;
        width: 20%;
        background-color: #ffffff;
        float: left;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        color: #999999;
    }

    .con-div-1-1-3-right {
        height: 40px;
        width: 40%;
        background-color: #ffffff;
        float: right;
    }

    .con-div-1-1-3-right-1 {
        height: 20px;
        width: 100%;
        background-color: #ffffff;
        border-bottom: 1px solid #d9d9d9;
    }

    .register {
        padding: 10px;
    }
}

/* Mobile Responsive */
@media only screen and (max-width: 940px) {
    input[type=text],
    input[type=password] {
        padding: 10px;
        width: 280px;
        margin: 10px auto;
        border-radius: 20px;
        border: 1px solid #bbbbbb;
    }

    input[type=submit] {
        padding: 10px;
        width: 240px;
        margin: 20px 10px 0px 10px;
        cursor: pointer;
        border-radius: 30px;
        background-color: #ff5722;
        color: #ffffff;
        border: 2px solid #dfdfdf;
    }

    .con-div-1 {
        height: 100vh;
        width: 100%;
        background-color: #3f51b5;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1 {
        height: 420px;
        width: 90%;
        background-color: #ffffff;
        border-radius: 10px;
        text-align: center;
    }

    .con-div-1-1-1 {
        height: 50px;
        width: 90%;
        background-color: #ffffff;
        margin: 20px auto;
        border-radius: 5px;
    }

    .con-div-1-1-3 {
        height: 40px;
        width: 280px;
        margin: auto;
        background-color: #ffffff;
    }

    .con-div-1-1-3-left {
        height: 40px;
        width: 40%;
        background-color: #ffffff;
        float: left;
    }

    .con-div-1-1-3-left-1 {
        height: 20px;
        width: 100%;
        background-color: #ffffff;
        border-bottom: 1px solid #d9d9d9;
    }

    .con-div-1-1-3-center {
        height: 40px;
        width: 20%;
        background-color: #ffffff;
        float: left;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        color: #999999;
    }

    .con-div-1-1-3-right {
        height: 40px;
        width: 40%;
        background-color: #ffffff;
        float: right;
    }

    .con-div-1-1-3-right-1 {
        height: 20px;
        width: 100%;
        background-color: #ffffff;
        border-bottom: 1px solid #d9d9d9;
    }

    .register {
        padding: 10px;
    }
}


</style>
<body>
<div class="con-div-1" style="">
	<div class="con-div-1-1" style="">
		<div class="con-div-1-1-1" style="">
		 <?php
          include'errors/errors.php';
         ?>
		</div>
		<div class="con-div-1-1-2">
		<form method="POST" action="">
		 <input type="text" name="username" placeholder="Username">
		 <br>
		 <input type="password" name="password" placeholder="Password">
		 <div style="height: 40px; width: 100%; background-color: ;">
		 	
		 </div>
		 <br>
          <input type="submit" name="login">
        </form>
	    </div>
	    <div class="con-div-1-1-3" style="">
	    	<div class="con-div-1-1-3-left" style="">
	    		<div class="con-div-1-1-3-left-1" style="">
	    			
	    		</div>
	    	</div>
	    	<div class="con-div-1-1-3-center" style="">
	    		<span>OR</span>
	    	</div>
	    	<div class="con-div-1-1-3-right" style="">
	    	    <div class="con-div-1-1-3-right-1" style="">
	    			
	    		</div>
	    	</div>
	    </div>
	     <div>
           <p class="register" style=""><a style="color: grey;" href="index.php">Register</a></p>
	    </div>
	</div>
</div>
</body>
</html>