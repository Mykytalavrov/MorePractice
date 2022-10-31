<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Quantum Ai</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="icon" type="image/png" href="/design/t_quantumaiplus/img/favicon.ico" />
    <link href="design/plugins/Bootstrap/bootstrap.css" rel="stylesheet">
    <link href="design/plugins/font-awesome/font-awesome.css" rel="stylesheet">
<!--    <link href="design/plugins/tel-input/tel-input.css" rel="stylesheet">-->
      <link rel="stylesheet" href="design/plugins/intl-tel-input-master/build/css/intlTelInput.css">
    <link href="design/t_quantumaiplus/css/animate.css" rel="stylesheet">
     <link href="design/t_quantumaiplus/css/trades.css" rel="stylesheet">    
     <link href="design/t_quantumaiplus/css/normalize.css" rel="stylesheet">
      <link href="design/t_quantumaiplus/css/angular.css" rel="stylesheet">
      <link href="design/t_quantumaiplus/css/main.css" rel="stylesheet">
     

  </head>
<body>
	<?php include 'blocks/header.php';?>
	<?php include 'blocks/homepage.php';?>


    <script src="design/plugins/jquery/jquery-2.1.3.js"></script>
    <script src="design/plugins/intl-tel-input-master/build/js/intlTelInput.js"></script>
    <script>
        $('a.scroll-to').on('click', function() {

            $('html, body').animate({
                scrollTop: $('.promo__middle-left').offset().top
            }, {
                duration: 370,   // по умолчанию «400»
                easing: "linear" // по умолчанию «swing»
            });

            return false;
        });
    </script>
<script>
    $(".intl-tel-input").intlTelInput();
</script>

    <script>
        let btn = document.querySelector('.play-btn-wrap');
        let shadowFon = document.querySelector('.shadow-fon');
        let videoPause = document.querySelector('.shadow-fon .show-video video');
        btn.onclick = function() {
            shadowFon.style.display = 'flex';
        };

        let close = document.querySelector('.close');
        close.onclick  = function(){
            shadowFon.style.display = 'none';
            videoPause.pause();
        }
    </script>


</body>
</html>

