<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 
 include'../../connection/connection.php';
 $username = $_POST["username"];
 $check = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
 $result = mysqli_query($conn, $check);
 $user = mysqli_fetch_assoc($result);

if ($user) {
    if ($user['username'] == $username) {
?>
<i style="font-size: 14px; color: red;" class="fa fa-times" aria-hidden="true"></i>
<?php
 }
}else{
?>
<i style="color: green;" class="fa fa-check" aria-hidden="true"></i>
<?php
}

?>