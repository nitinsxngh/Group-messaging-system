<style type="text/css">
  /* Desktop Responsive */
  @media only screen and (min-width: 940px) {
    .x-con-div-1 {
      height: 40px;
      width: 100%;
    }

    .sender {
      height: 40px;
      width: 80%;
      margin: 0px auto 10px auto;
      background-color: #3f51b5;
      border-radius: 10px;
      margin-right: 40px;
    }

    .receiver {
      height: 40px;
      width: 80%;
      margin: 0px auto 10px auto;
      background-color: #ffffff;
      border-radius: 10px;
    }
  }

  /* Mobile Responsive */
  @media only screen and (max-width: 940px) {
    .x-con-div-1 {
      height: 40px;
      width: 100%;
    }

    .sender {
      height: 40px;
      width: 80%;
      margin: 0px auto 10px auto;
      background-color: #3f51b5;
      border-radius: 10px;
      margin-left: 60px;
      text-align: left;
    }

    .receiver {
      height: 40px;
      width: 80%;
      margin: 0px auto 10px auto;
      background-color: #ffffff;
      border-radius: 10px;
      margin-right: 60px;
      text-align: left;
    }
  }
</style>

<?php
session_start();
include '../../connection/connection.php';
$topic_id = $_POST["topic_id"];
$sess_sender_id = $_SESSION["user_code"];
?>

<div class="x-con-div-1" style="">

</div>

<?php
$fetchData = "SELECT * FROM chats WHERE receiver_id = '$topic_id'";
$fetchDataResult = mysqli_query($conn, $fetchData);
if (mysqli_num_rows($fetchDataResult) > 0) {
  while ($row = mysqli_fetch_assoc($fetchDataResult)) {

    $text_id = $row["text_id"];
    $txt = $row["txt"];
    $sender_id = $row["sender_id"];
    ?>

    <?php
    if ($sender_id == $sess_sender_id) {
    ?>

      <div class="sender" style="">
        <p style="padding: 10px; color: #ffffff;"><?php echo $txt; ?></p>
      </div>

    <?php
    } else {
    ?>

      <div class="receiver" style="">
        <p style="padding: 10px; color: black;"><?php echo $txt; ?></p>
      </div>

    <?php
    }
    ?>

<?php
  }
} else {
}
?>
