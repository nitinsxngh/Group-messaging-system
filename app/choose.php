<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Choose: Group Messaging System</title>
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
* {
    margin: 0;
}

/* Desktop Responsive */
@media only screen and (min-width: 940px) {
    .con-div-1 {
        height: 100vh;
        width: 100%;
        background-color: #3f51b5;
    }

    .x-con-div-1-1 {
        height: 120px;
        width: 100%;
    }

    .con-div-1-1 {
        height: 210px;
        width: 38%;
        background-color: ;
        text-align: center;
        margin: auto;
    }

    .con-div-1-1-1 {
        height: 210px;
        width: 50%;
        float: left;
        background-color: ;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1-1-1 {
        display: flex;
        height: 150px;
        width: 150px;
        background-color: #ffffff;
        border-radius: 8px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        border: 3px solid #ff5722;
    }

    .con-div-1-1-2 {
        height: 210px;
        width: 50%;
        float: right;
        background-color: ;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1-2-1 {
        display: flex;
        height: 150px;
        width: 150px;
        background-color: #ffffff;
        border-radius: 8px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        border: 3px solid #ff5722;
    }

    .con-div-1-2 {
        height: 210px;
        width: 38%;
        background-color: ;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .discover {
        display: none;
        padding: 10px;
        width: 240px;
        margin: 20px 10px 0px 10px;
        cursor: pointer;
        border-radius: 30px;
        background-color: #ff5722;
        color: #ffffff;
        border: 2px solid #dfdfdf;
    }
}

/* Mobile Responsive */
@media only screen and (max-width: 940px) {
    .con-div-1 {
        height: 100vh;
        width: 100%;
        background-color: #3f51b5;
    }

    .x-con-div-1-1 {
        height: 40px;
        width: 100%;
    }

    .con-div-1-1 {
        height: 420px;
        width: 100%;
        background-color: ;
        text-align: center;
    }

    .con-div-1-1-1 {
        height: 210px;
        width: 100%;
        background-color: ;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1-1-1 {
        display: flex;
        height: 150px;
        width: 150px;
        background-color: #ffffff;
        border-radius: 8px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        border: 3px solid #ff5722;
    }

    .con-div-1-1-2 {
        height: 210px;
        width: 100%;
        background-color: ;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .con-div-1-1-2-1 {
        display: flex;
        height: 150px;
        width: 150px;
        background-color: #ffffff;
        border-radius: 8px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        border: 3px solid #ff5722;
    }

    .con-div-1-2 {
        height: 120px;
        width: 100%;
        background-color: ;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .discover {
        display: none;
        padding: 10px;
        width: 240px;
        margin: 20px 10px 0px 10px;
        cursor: pointer;
        border-radius: 30px;
        background-color: #ff5722;
        color: #ffffff;
        border: 2px solid #dfdfdf;
    }
}

</style>
<body>
<div class="con-div-1" style="">
  <div class="x-con-div-1-1" style="">
    
  </div>
	<div class="con-div-1-1" style="">
       <div class="con-div-1-1-1" style="">
       	   <div class="con-div-1-1-1-1" id="con-div-1-1-1-1" style="">
       	   	    <i style="font-size: 64px; color: #c7c7c7; padding: 20px;" class="fa fa-users" aria-hidden="true"></i>
       	   </div>
       </div>
       <div class="con-div-1-1-2" style="">
       	   <div class="con-div-1-1-2-1" id="con-div-1-1-2-1" style="">
       	   	<i style="font-size: 64px; color: #c7c7c7; padding: 20px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
       	   </div>
       </div>
	</div>
  <div class="con-div-1-2" style="">
     <button class="discover" id="discover">Discover</button>
  </div>
</div>
</body>
</html>

<script type="text/javascript">
    // Redirect to 'create/group.php' on click
    var btn1 = document.getElementById('con-div-1-1-1-1');
    btn1.addEventListener('click', function() {
        document.location.href = 'create/group.php';
    });

    // Redirect to 'create/topic.php' on click
    var btn2 = document.getElementById('con-div-1-1-2-1');
    btn2.addEventListener('click', function() {
        document.location.href = 'create/topic.php';
    });

    // Redirect to '../discover.php' on click
    var btn3 = document.getElementById('discover');
    btn3.addEventListener('click', function() {
        document.location.href = '../discover.php';
    });

    // Show element with id 'discover' slowly when document is ready
    $('document').ready(function(){
        $('#discover').show('slow');
    });
</script>
