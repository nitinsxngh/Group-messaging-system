<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create Topic: Group Messaging System</title>
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
            height: 420px;
            width: 38%;
            background-color: #ffffff;
            border-radius: 10px;
            text-align: center;
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
            height: 420px;
            width: 90%;
            background-color: #ffffff;
            border-radius: 10px;
            text-align: center;
        }
    }
</style>

<body>
    <div class="con-div-1" style="">
        <div class="con-div-1-1" style="">
            <div style="height: 110px; width: 100%; background-color: ; border-top-left-radius: 8px; border-top-right-radius: 8px; display: flex; align-items: center; justify-content: center;">
                <h2 style="font-size: 34px; color: #999999;">Create Topic</h2>
            </div>
            <div style="height: 40px; width: 100%; background-color: ;">

            </div>
            <div style="height: 100px; width: 100%; background-color: ; display: flex; align-items: center; justify-content: center;">
                <input id="topic" class="topic" type="text" name="" placeholder="Topic Name">
            </div>
            <div style="height: 120px; width: 100%; background-color: ; display: flex; align-items: center; justify-content: center;  border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                <button id="createTopic" class="createTopic">Create Topic</button>
                <span id="createTopic_msg"></span>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    $("#createTopic").click(function(e) {
        e.preventDefault();
        var topic = $("#topic").val();
        var null1 = $("#null1").val();

        if (topic == "") {
            $('#topic').css({
                "border-color": "#fa4d4d",
                "border-width": "2px",
                "border-style": "solid"
            });
            setTimeout(function() {
                $('#topic').css({
                    "border-color": "#f1f1f1",
                    "border-width": "1px",
                    "border-style": "solid"
                });

            }, 2000);
            return false;
        } else {

            var dataString1 = 'topic=' + topic + '&null1=' + null1;
            $.ajax({
                type: 'POST',
                data: dataString1,
                url: '../../admin/create/serv-topic.php',
                success: function(data) {
                    $("#createTopic_msg").html(data);
                    setTimeout(function() {
                        window.location.replace("../../discover.php");
                    }, 2000);

                },
                complete: function() { // Stop Extra Event Once Completed
                    setTimeout(function() {

                    }, 250);

                }



            });

        }

    });
</script>

</html>
