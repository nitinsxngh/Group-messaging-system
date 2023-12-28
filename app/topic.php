<?php
session_start();
include'../connection/connection.php';
$fetch = $_GET["fetch"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Topic: Group Messaging System</title>
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
* {
    margin: 0;
    font-family: sans-serif;
}

/* Desktop Responsive */
@media only screen and (min-width: 940px) {

    .con-div-1 {
        height: 100vh;
        width: 100%;
        background-color: #3f51b5;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1 {
        height: 100vh;
        width: 60%;
        background-color: #ffffff;
        border-radius: 10px;
    }

    .con-div-1-1-1 {
        height: 100vh;
        width: 75%;
        background-color: ;
        float: left;
    }

    .con-div-1-1-1-1 {
        height: 10vh;
        width: 100%;
        background-color: ;
        border-bottom: 1px solid #dbdbdb;
    }

    .con-div-1-1-1-2 {
        height: 80vh;
        width: 100%;
        background-color: #f2f2f2;
        border-right: 1px solid #dbdbdb;
        overflow-x: scroll;
    }

    .con-div-1-1-1-3 {
        height: 10vh;
        width: 100%;
        background-color: #ffffff;
        bottom: 0;
        display;
        flex;
        align-items: center;
        justify-content: center;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .con-div-1-1-2 {
        height: 100vh;
        width: 25%;
        background-color: #ffffff;
        float: right;
        border-top-right-radius: 8px;
    }

    .con-div-1-1-2-1 {
        height: 10vh;
        width: 100%;
        background-color: ;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .topicName {
        padding: 25px 75px;
        color: grey;
    }

    .onlineUser_p {
        color: grey;
    }

    .inputContainer {
        margin-left: 60px;
    }

    input[type=text] {
        padding: 7.5px;
        height: 30px;
        width: 80%;
        margin: 10px auto;
        border-radius: 20px;
        border: 1px solid #bbbbbb;
    }
}

/* Mobile Responsive */
@media only screen and (max-width: 940px) {

    .con-div-1 {
        height: 100vh;
        width: 100%;
        background-color: #3f51b5;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1 {
        height: 100vh;
        width: 100%;
        background-color: #ffffff;
        text-align: center;
    }

    .con-div-1-1-1 {
        height: 100vh;
        width: 100%;
        background-color: ;
        float: left;
    }

    .con-div-1-1-1-1 {
        height: 10vh;
        width: 100%;
        background-color: ;
        border-bottom: 1px solid #dbdbdb;
        text-align: left;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
    }

    .con-div-1-1-1-2 {
        height: 80vh;
        width: 100%;
        background-color: #f2f2f2;
        border-right: 1px solid #dbdbdb;
        overflow-x: scroll;
    }

    .con-div-1-1-1-3 {
        height: 10vh;
        width: 100%;
        background-color: #ffffff;
        bottom: 0;
        display;
        flex;
        align-items: center;
        justify-content: center;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .con-div-1-1-2 {
        height: 100vh;
        width: 0%;
        background-color: #ffffff;
        float: right;
        border-top-right-radius: 8px;
    }

    .con-div-1-1-2-1 {
        height: 10vh;
        width: 100%;
        background-color: ;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .topicName {
        padding: 25px 10px;
        color: grey;
    }

    .onlineUser_p {
        display: none;
    }

    .inputContainer {
        margin-left: 10px;
    }

    input[type=text] {
        padding: 7.5px;
        height: 30px;
        width: 280px;
        margin: 10px auto;
        border-radius: 20px;
        border: 1px solid #bbbbbb;
    }
}

</style>
<body>
    <audio id="buzzer" src="../assets/sent.mp3" type="audio/ogg"></audio>

    <?php 
        $fetchData = "SELECT * FROM topics WHERE topic_id = '$fetch' LIMIT 1";
        $fetchDataResult = mysqli_query($conn, $fetchData);
        if (mysqli_num_rows($fetchDataResult) > 0) {
            while($row = mysqli_fetch_assoc($fetchDataResult)) {
                $topic_name = $row["topic_name"];
                $topic_id = $row["topic_id"];
            }
        } else {
            // Handle the case when there is no data
        }
    ?>

    <div class="con-div-1">
        <div class="con-div-1-1">
            <div class="con-div-1-1-1">
                <div class="con-div-1-1-1-1">
                    <h3 class="topicName"><?php echo $topic_name; ?></h3>
                </div>
                <div class="con-div-1-1-1-2">
                    <span class="loadText"></span>
                </div>
                <div class="con-div-1-1-1-3">
                    <span class="inputContainer">
                        <input id="chat" type="text" name="chat" placeholder="Send...">
                        <button id="sendChat" style="border: none; background-color: #ffffff; cursor: pointer;">
                            <i style="font-size: 22px; color: #ff5722;" class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </span>
                    <input id="topic_id" type="hidden" name="" value="<?php echo $topic_id; ?>">
                    <input id="null1" type="hidden" name="" value="1">
                </div>
            </div>
            <div class="con-div-1-1-2">
                <span id="textStatus_msg"></span>
                <div class="con-div-1-1-2-1">
                    <p class="onlineUser_p">Online users</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    $('document').ready(function(){

        $('#sendChat').click(function(){

            var chat = $("#chat").val(); 
            var topic_id = $("#topic_id").val(); 

            if (chat == "") {
                $('#chat').css({
                    "border-color": "#fa4d4d", 
                    "border-width": "1px", 
                    "border-style": "solid"
                });
                setTimeout(function() {
                    $('#chat').css({
                        "border-color": "#bbbbbb", 
                        "border-width": "1px", 
                        "border-style": "solid"
                    });
                }, 2000);

                return false;
            } else {
                var dataString1 = 'chat=' + chat + '&topic_id=' + topic_id;
                $.ajax({
                    type: 'POST',
                    data: dataString1,
                    url: '../admin/chats/serv-chats.php',
                    success: function(data) {
                        $('#textStatus_msg').append(data);
                        $('#chat').val('');
                        $('#buzzer').get(0).play();
                    }
                });
            }
        });

        $('#chat').keypress(function(e){
            if(e.which == 13) { // Enter key pressed
                $('#sendChat').click(); // Trigger search button click event
            }
        });

        (function loadText() {
            var topic_id = $("#topic_id").val(); 
            var dataString2 = 'topic_id=' + topic_id + '&null1=' + null1;
            $.ajax({
                type: 'POST',
                data: dataString2,
                url: '../app/chats/topic-fetch-text.php', 
                success: function(data) {
                    $('.loadText').html(data);
                },
                complete: function() {
                    setTimeout(loadText, 2000);
                }
            });
        })();

    });
</script>
