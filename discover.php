<?php

session_start();
include'connection/connection.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Discover: Group Messaging System</title>
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">

* {
    margin: 0;
    font-family: sans-serif;
}

input[type=text] {
    padding: 7.5px;
    height: 30px;
    width: 280px;
    margin: 10px auto;
    border-radius: 20px;
    border: 1px solid #bbbbbb;
    text-align: center;
}

button {
    padding: 12px;
    width: 240px;
    margin: 20px 10px 0px 10px;
    cursor: pointer;
    border-radius: 30px;
    background-color: #ff5722;
    color: #ffffff;
    border: 2px solid #dfdfdf;
    font-size: 16px;
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
        height: 50px;
        width: 100%;
        background-color: ;
    }

    .con-div-1-1-1-1,
    .con-div-1-1-1-2 {
        height: 50px;
        width: 49%;
        background-color: #3f51b5;
        float: left;
        border-radius: 8px;
        border: 1px solid #d5d5d5;
        cursor: pointer;
        text-align: center;
    }

    .con-div-1-1-2 {
        height: 720px;
        width: 100%;
        background-color: #ffffff;
        overflow-x: scroll;
    }

    .con-div-1-1-2-1 {
        height: 40px;
        width: 100%;
    }

    .con-div-1-1-2-1-1 {
        height: 90px;
        width: 80%;
        background-color: #ffffff;
        margin: 0px auto 10px auto;
        border-radius: 8px;
        cursor: pointer;
        border: 2px solid #ebebeb;
    }

    .con-div-1-1-2-1-1-1 {
        height: 90px;
        width: 20%;
        background-color: ;
        float: left;
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
    }

    .con-div-1-1-2-1-1-1-1,
    .con-div-1-1-2-1-1-1-2 {
        height: 60px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1-2-1-1-2 {
        height: 30px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1-2-1-1-2 {
        height: 80px;
        width: 80%;
        background-color: ;
        float: right;
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
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
        height: 50px;
        width: 100%;
        background-color: ;
    }

    .con-div-1-1-1-1,
    .con-div-1-1-1-2 {
        height: 50px;
        width: 49%;
        background-color: #3f51b5;
        float: left;
        border-radius: 8px;
        border: 1px solid #d5d5d5;
        cursor: pointer;
        text-align: center;
    }

    .con-div-1-1-2 {
        height: 720px;
        width: 100%;
        background-color: #ffffff;
        overflow-x: scroll;
    }

    .con-div-1-1-2-1 {
        height: 40px;
        width: 100%;
    }

    .con-div-1-1-2-1-1 {
        height: 90px;
        width: 90%;
        background-color: #ffffff;
        margin: 0px auto 10px auto;
        border-radius: 8px;
        cursor: pointer;
        border: 2px solid #ebebeb;
    }

    .con-div-1-1-2-1-1-1 {
        height: 90px;
        width: 20%;
        background-color: ;
        float: left;
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
    }

    .con-div-1-1-2-1-1-1-1,
    .con-div-1-1-2-1-1-1-2 {
        height: 60px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1-2-1-1-2 {
        height: 30px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1-2-1-1-2 {
        height: 80px;
        width: 80%;
        background-color: ;
        float: right;
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
    }
}


</style>
<body>
<div class="con-div-1">
    <div class="con-div-1-1">
        <div class="con-div-1-1-1">
            <div id="con-div-1-1-1-1" class="con-div-1-1-1-1">
                <h3 style="padding: 10px; color: #ffffff;">Topics</h3>
            </div>
            <div id="con-div-1-1-1-2" class="con-div-1-1-1-2">
                <h3 style="padding: 10px; color: #999999;">Groups</h3>
            </div>
        </div>
        <div id="loadGroupData"></div>
        <div id="loadTopicData"></div>
        <div id="con-div-1-1-2" class="con-div-1-1-2">
            <div class="con-div-1-1-2-1"></div>
            <?php
                $queryData = "SELECT * FROM topics LIMIT 10";
                $queryDataResult = mysqli_query($conn, $queryData);

                if (mysqli_num_rows($queryDataResult) > 0) {
                    while ($row = mysqli_fetch_assoc($queryDataResult)) {
                        $topic_id = $row["topic_id"];
                        $topic_name = $row["topic_name"];
                        $created_by = $row["created_by"];
                        $userData = "SELECT * FROM users WHERE user_code = '$created_by' LIMIT 1";
                        $userDataResult = mysqli_query($conn, $userData);

                        if (mysqli_num_rows($userDataResult) > 0) {
                            while ($row = mysqli_fetch_assoc($userDataResult)) {
                                $userDataUsername = $row["username"];
                                $userDataAvatar = $row["avatar"];
                            }
                        }
            ?>
                        <a href="app/topic.php?fetch=<?php echo $topic_id; ?>">
                            <div class="con-div-1-1-2-1-1">
                                <div class="con-div-1-1-2-1-1-1">
                                    <div class="con-div-1-1-2-1-1-1-1">
                                        <img src="app/avatar/<?php echo $userDataAvatar ?>.png" style="height: 50px; width: 50px; border-radius: 50%; border: 2px solid #ebebeb;">
                                    </div>
                                    <div class="con-div-1-1-2-1-1-1-2">
                                        <p style="color: #707070;"><?php echo $userDataUsername; ?></p>
                                    </div>
                                </div>
                                <div class="con-div-1-1-2-1-1-2">
                                    <h3 style="padding: 8px 20px; color: #707070;"><?php echo "$topic_name"; ?></h3>
                                </div>
                            </div>
                        </a>
            <?php
                    }
                } else {
                    // Handle case when there are no topics
                }
            ?>
        </div>
    </div>
</div>

</body>
</html>


<script type="text/javascript">

  $("#con-div-1-1-1-2").click(function(e) {
        e.preventDefault();
        var null1 = $("#null1").val(); 
        var dataString = 'null1='+null1;

        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'app/groups/fetch-group.php',
            success:function(data) {
                $("#loadGroupData").html(data);
                $("#loadTopicData").show();
                $("#loadGroupData").show();
                $("#con-div-1-1-2").hide();
                setTimeout(function() {

                }, 2000);
            }
        });

    });  

    $("#con-div-1-1-1-1").click(function(e) {
        e.preventDefault();
        var null1 = $("#null1").val(); 
        var dataString = 'null1='+null1;

        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'app/groups/fetch-topic.php',
            success:function(data) {
                //$("#loadTopicData").html(data);
                $("#loadGroupData").hide();
                $("#con-div-1-1-2").show();
                setTimeout(function() {

                }, 2000);
            }
        });

    });  

</script>

