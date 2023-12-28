<?php

session_start();

include'../../connection/connection.php';

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
  $topic_id = generateRandomString1();
?>



<?php

$topic_name = mysqli_real_escape_string($conn, $_POST['topic']);

if (empty($topic_name)) {
  echo"Topic Name Required!";
}else{


$created_by = $_SESSION["user_code"];
$created_on = date('Y-m-d H:i:s');


    $query = "INSERT INTO topics (topic_id, topic_name, created_by, created_on) VALUES ('$topic_id', '$topic_name', '$created_by', '$created_on')";
       if(mysqli_query($conn, $query)) {

       }else{
       echo("Error!" . mysqli_error($conn));
       }

}

?>