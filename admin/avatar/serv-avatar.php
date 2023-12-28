<?php
session_start();
$sess_user_code = $_SESSION["user_code"];
include'../../connection/connection.php';
?>


<?php

$avatar = $_POST["avatar"];

$sql = "UPDATE users SET avatar='$avatar' WHERE user_code = '$sess_user_code'";

if (mysqli_query($conn, $sql)) {

} else {
  echo "Error updating record: " . mysqli_error($conn);
}

?>