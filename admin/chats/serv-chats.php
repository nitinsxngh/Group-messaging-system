<?php

session_start();

$sender_id = $_SESSION['user_code'];

include'../../connection/connection.php';

?>

<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
  $text_id = generateRandomString();
?>



<?php
    $text = $_POST['chat'];
    $text = mysqli_real_escape_string($conn, $_POST['chat']);
    $receiver_id = $_POST['topic_id'];
    $receiver_id = mysqli_real_escape_string($conn, $_POST['topic_id']);

    $sended_on = date("Y-m-d H:i:s");

  $query = "INSERT INTO chats (text_id, sender_id, receiver_id, txt) VALUES ('$text_id', '$sender_id', '$receiver_id', '$text')";




if (mysqli_query($conn, $query)) {
 // echo"Success!";
} else {
   echo("Error description: " . mysqli_error($conn));

}


?>