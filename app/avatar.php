<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Choose Avatar: Group Messaging System</title>
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
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .con-div-1-1 {
    height: 420px;
    width: 50%;
    background-color: #ffffff;
    text-align: center;
    border-radius: 8px;
  }

  .con-div-1-2 {
    display: none;
  }

  #avatar-1,
  #avatar-2,
  #avatar-3,
  #avatar-4,
  #avatar-5,
  #avatar-6,
  #avatar-7,
  #avatar-8 {
    height: 120px;
    width: 120px;
    cursor: pointer;
    border-radius: 50%;
    border: 4px solid #e7e7e7;
    margin-top: 20px;
    margin-left: 20px;
  }

  #avatar-1:hover,
  #avatar-2:hover,
  #avatar-3:hover,
  #avatar-4:hover,
  #avatar-5:hover,
  #avatar-6:hover,
  #avatar-7:hover,
  #avatar-8:hover {
    border: 4px solid #bfbfbf;
  }

  .check {
    display: none;
  }

  .next {
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
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .con-div-1-1 {
    display: none;
  }

  .con-div-1-2 {
    height: 480px;
    width: 90%;
    background-color: #ffffff;
    border-radius: 8px;
  }

  #avatar-m-1,
  #avatar-m-2,
  #avatar-m-3,
  #avatar-m-4,
  #avatar-m-5,
  #avatar-m-6,
  #avatar-m-7,
  #avatar-m-8 {
    height: 120px;
    width: 120px;
    cursor: pointer;
    border-radius: 50%;
    border: 4px solid #e7e7e7;
    margin-top: 20px;
    margin-left: 20px;
  }

  #avatar-m-1:hover,
  #avatar-m-2:hover,
  #avatar-m-3:hover,
  #avatar-m-4:hover,
  #avatar-m-5:hover,
  #avatar-m-6:hover,
  #avatar-m-7:hover,
  #avatar-m-8:hover {
    border: 4px solid #bfbfbf;
  }

  .check-m {
    display: none;
  }

  .next-m {
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

/* Product Slide */
.column2 {
  float: left;
  width: 50%;
  height: 380px;
  border-radius: 8px;
}

.row2:after {
  content: "";
  display: table;
  clear: both;
}

.column2 {
  width: 100%;
}

.column2 h2 {
  text-align: center;
}

.column2 p {
  text-align: center;
}

.display-2 {
  height: 440px;
}

.myProductSlide {
  display: none;
}

.productSlideContainer {
  max-width: 90%;
  position: relative;
  margin: 40px auto;
}

.productSlidePrev,
.productSlideNext {
  cursor: pointer;
  position: absolute;
  background-color: #f3f3f3;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.productSlideNext {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.productSlidePrev:hover,
.productSlideNext:hover {
  background-color: rgba(173, 173, 173, 0.8);
  color: #ffffff;
}

.productSlideText {
  display: none;
  color: grey;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.productSlideNumbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.productSlideDot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.productSlideActive,
.productSlideDot:hover {
  background-color: #717171;
}

.productSlideFade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {
    opacity: .4;
  }

  to {
    opacity: 1;
  }
}

@keyframes fade {
  from {
    opacity: .4;
  }

  to {
    opacity: 1;
  }
}

@media only screen and (max-width: 300px) {
  .productSlidePrev,
  .productSlideNext,
  .productSlideText {
    font-size: 11px;
  }
}

@media screen and (max-width: 640px) {
  .productSlideContainer {
    width: 100%;
  }
}


</style>
<body>
<div class="con-div-1" style="">
  <div class="con-div-1-1" style="">
    <div style="height: 340px; width: 100%; background-color: #ffffff; border-top-left-radius: 8px; border-top-right-radius: 8px;">
      <div style="height: 170px; width: 100%; background-color: ; border-top-left-radius: 8px; border-top-right-radius: 8px; display: inline-block;">
        <img id="avatar-1" class="avatar" avatar-extract="avatar-1" src="avatar/avatar-1.png" style="">
        <img id="avatar-2" class="avatar" avatar-extract="avatar-2" src="avatar/avatar-2.png" style="">
        <img id="avatar-3" class="avatar" avatar-extract="avatar-3" src="avatar/avatar-3.png" style="">
        <img id="avatar-4" class="avatar" avatar-extract="avatar-4" src="avatar/avatar-4.png" style="">
      </div>
      <div style="height: 170px; width: 100%; background-color: ;">
        <img id="avatar-5" class="avatar" avatar-extract="avatar-5" src="avatar/avatar-5.png" style="">
        <img id="avatar-6" class="avatar" avatar-extract="avatar-6" src="avatar/avatar-6.png" style="">
        <img id="avatar-7" class="avatar" avatar-extract="avatar-7" src="avatar/avatar-7.png" style="">
        <img id="avatar-8" class="avatar" avatar-extract="avatar-8" src="avatar/avatar-8.png" style="">
      </div>
    </div>
    <span id="check" class="check" style=""><img src="../check.gif" style="height: 60px; width: 60px;"></span>
    <button id="next" class="next">Next</button>
  </div>

<!------------------->
  <div class="con-div-1-2" style="">
             <div class="column2" style="background-color:#fff;">
          
            <div class="productSlideContainer">

               <div class="myProductSlide productSlideFade">
                <div class="productSlideNumbertext"></div>
                  <div style="width:100%; height: 240px; background-color: #ffffff; display: flex; align-items: center; justify-content: center;">
                    <img id="avatar-m-1" class="avatar-m" avatar-m-extract="avatar-1" src="avatar/avatar-1.png" style="">
                  </div>
                <div class="productSlideText">Product Display</div>
               </div>

               <div class="myProductSlide productSlideFade">
                <div class="productSlideNumbertext"></div>
                <div style="width:100%; height: 240px; background-color: #ffffff; display: flex; align-items: center; justify-content: center;">
                  <img id="avatar-m-2" class="avatar-m" avatar-m-extract="avatar-2" src="avatar/avatar-2.png" style="">
                </div>
                <div class="productSlideText">Product Display</div>
               </div>

               <div class="myProductSlide productSlideFade">
                <div class="productSlideNumbertext"></div>
                 <div style="width:100%; height: 240px; background-color: #ffffff; display: flex; align-items: center; justify-content: center;">
                  <img id="avatar-m-3" class="avatar-m" avatar-m-extract="avatar-3" src="avatar/avatar-3.png" style="">
                </div>
                <div class="productSlideText">Product Display</div>
               </div>

               <div class="myProductSlide productSlideFade">
                <div class="productSlideNumbertext"></div>
                 <div style="width:100%; height: 240px; background-color: #ffffff; display: flex; align-items: center;justify-content: center;">
                  <img id="avatar-m-4" class="avatar-m" avatar-m-extract="avatar-4" src="avatar/avatar-4.png" style="">
                 </div>
                 <div class="productSlideText">Product Display</div>
               </div>

               <div class="myProductSlide productSlideFade">
                <div class="productSlideNumbertext"></div>
                 <div style="width:100%; height: 240px; background-color: #ffffff; display: flex; align-items: center; justify-content: center;">
                  <img id="avatar-m-5" class="avatar-m" avatar-m-extract="avatar-5" src="avatar/avatar-5.png" style="">
                 </div>
                 <div class="productSlideText">Product Display</div>
              </div>

              <div class="myProductSlide productSlideFade">
                <div class="productSlideNumbertext"></div>
                 <div style="width:100%; height: 240px; background-color: #ffffff; display: flex; align-items: center; justify-content: center;">
                  <img id="avatar-m-6" class="avatar-m" avatar-m-extract="avatar-6" src="avatar/avatar-6.png" style="">
                 </div>
                 <div class="productSlideText">Product Display</div>
               </div>

               <div class="myProductSlide productSlideFade">
                <div class="productSlideNumbertext"></div>
                 <div style="width:100%; height: 240px; background-color: #ffffff; display: flex; align-items: center; justify-content: center;">
                  <img id="avatar-m-7" class="avatar-m" avatar-m-extract="avatar-7" src="avatar/avatar-7.png" style="">
                 </div>
                <div class="productSlideText">Product Display</div>
               </div>

               <div class="myProductSlide productSlideFade">
                <div class="productSlideNumbertext"></div>
                 <div style="width:100%; height: 240px; background-color: #ffffff; display: flex; align-items: center; justify-content: center;">
                  <img id="avatar-m-8" class="avatar-m" avatar-m-extract="avatar-8" src="avatar/avatar-8.png" style="">
                 </div>
                 <div class="productSlideText">Product Display</div>
               </div>

             <a class="productSlidePrev" onclick="plusSlides(-1)">&#10094;</a>
             <a class="productSlideNext" onclick="plusSlides(1)">&#10095;</a>
         </div>
         
      </div>
      <div style="height: 100px; width: 100%; background-color: ; display: flex; align-items: center; justify-content: center;">
         <span id="check-m" class="check-m" style=""><img src="../check.gif" style="height: 100px; width: 100px;"></span>
         <button id="next-m" class="next-m">Next</button>
         <span id="avatar_m_msg"></span>
      </div>
  </div>
<!-------------------->
</div>
</body>
</html>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("mainSlideDot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" productSlideActive", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " productSlideActive";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>
<!---------------Product Slide--------------------->

<script>
var slideIndex = 1;
showSlides1(slideIndex);

function plusSlides(n) {
  showSlides1(slideIndex += n);
}

function currentSlide(n) {
  showSlides1(slideIndex = n);
}

function showSlides1(n) {
  var i;
  var slides = document.getElementsByClassName("myProductSlide");
  var dots = document.getElementsByClassName("productSlideDot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


<script type="text/javascript">
  // Avatar button
  var avatarBtns = [...document.querySelectorAll(".avatar")];
  avatarBtns.forEach(function(btn){
  btn.onclick = function() {
    var avatar = btn.getAttribute('avatar-extract');
    // document.getElementById(avatar).style.border = "4px solid green";
    $("#next").hide();

    var dataString1 = 'avatar='+avatar;

    (function useAvatar() {
        // $('#likeSound').get(0).play();

        $.ajax({
        type: 'POST',
        async: true,
        data: dataString1,
        url: '../admin/avatar/serv-avatar.php',
        success:function(data) {
         $("#avatar_msg").html(data);
         $("#check").show();
          document.getElementById(avatar).style.border = "4px solid green";
         setTimeout(function() {
          $("#check").hide();
          $("#next").show('slow');
          document.getElementById(avatar).style.border = "4px solid grey";
         }, 4000);
        },
        complete: function() { 
          setTimeout(function(){
            // Do Something (Complete)
          }, 250);
          
        }

      });
   })();

  }
});
  
</script>





<script type="text/javascript">
  // Avatar button
  var avatarBtns = [...document.querySelectorAll(".avatar-m")];
  avatarBtns.forEach(function(btn){
  btn.onclick = function() {
    var avatar = btn.getAttribute('avatar-m-extract');
    // document.getElementById(avatar).style.border = "4px solid green";
    $("#next-m").hide();

    var dataString1 = 'avatar='+avatar;

    (function useAvatar() {
        // $('#likeSound').get(0).play();

        $.ajax({
        type: 'POST',
        async: true,
        data: dataString1,
        url: '../admin/avatar/serv-avatar.php',
        success:function(data) {
         $("#avatar_m_msg").html(data);
         $("#check-m").show();
          document.getElementById(avatar).style.border = "4px solid green";
         setTimeout(function() {
          $("#check-m").hide();
          $("#next-m").show('slow');
          document.getElementById(avatar).style.border = "4px solid grey";
         }, 4000);
        },
        complete: function() { 
          setTimeout(function(){
            // Do Something (Complete)
          }, 250);
          
        }

      });
   })();

  }
});
  
</script>

  <script>
    var btn = document.getElementById('next');
    btn.addEventListener('click', function() {
      document.location.href = 'choose.php';
    });


    var btn = document.getElementById('next-m');
    btn.addEventListener('click', function() {
      document.location.href = 'choose.php';
    });
  </script>
