<?php

session_start();
$user_code = "";
$user_code = "";
$errors = array();

include'connection/connection.php';

?>

<?php
function generateRandomString1($length = 10) {
    $characters = 'abcdefghijklmnopqurstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
  $user_code = generateRandomString1();
?>



<?php

if (isset($_POST['register'])) {
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

if (empty($username)) {
    array_push($errors, "Username is required");
}

if (empty($password_1)) {
    array_push($errors, "Password is required");
}
if ($password_1 != $password_2) {
    array_push($errors, "The two passwords does not match");
}


 $check = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
 $result = mysqli_query($conn, $check);
 $user = mysqli_fetch_assoc($result);

if ($user) {
    if ($user['username'] == $username) {
        array_push($errors, "Username already Exists");
    }
}

$created_on = date('Y-m-d H:i:s');


 if (count($errors) == 0) {
    $password = md5($password_1);
    $query = "INSERT INTO users (user_code, username, password, created_on) VALUES ('$user_code', '$username', '$password', '$created_on')";
       if(mysqli_query($conn, $query)) {
       $_SESSION['user_code'] = $user_code;
       $_SESSION['username'] = $username;
       $_SESSION['success'] = "Succesfully registered!";

       }else{
       echo("Error!" . mysqli_error($conn));
       }

       header("location: app/avatar.php");
 }

}
?>