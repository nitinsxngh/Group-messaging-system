<?php

session_start();
$user_code = "";
$username = "";
$errors = array();

include'connection/connection.php';

?>

<?php

if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
    	array_push($errors, "Username Is Required");
    }

    if (empty($password)) {
    	array_push($errors, "Password is Required");
    }

    if (count($errors) == 0) {
    	$password = md5($password);
    	$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    	$results = mysqli_query($conn, $query);
    	if (mysqli_num_rows($results) == 1) {
    		$_SESSION['username'] = $username;
    		$_SESSION['success'] = "You are logged in";
            header('location: discover.php');
            /* default username session */
            $select = mysqli_query($conn, "SELECT user_code FROM users WHERE username='$username'");
            $row = mysqli_fetch_array($select);
            $_SESSION['user_code'] = $row['user_code'];
            $sess_user_code = $_SESSION['user_code'];


          //  $last_online = date('Y-m-d H:i:s');
         //   $sql_last_online = "UPDATE users SET last_online='$last_online' WHERE user_code = '$user_code'";
          //  mysqli_query($conn, $sql_last_online);

    	} else {
    		array_push($errors, "Wrong Email/Password Combination");
    	}
    }


}


?>