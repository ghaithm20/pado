<?php include 'navbar.php';?>
<!DOCTYPE html>
<html>
    <head>
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'>
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Abril+Fatface'>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="css/style3.css">
    </head>
    <style>
      canvas {
    padding-left: 50px;
    padding-right: 50px;
    margin-left: auto;
    margin-right: auto;
align: left;
    width: 50%;
    height: 50%;

    
}
    </style>
<body>
  <div class="container-fluid" >
    <div class="col-sm-3" style="  box-shadow: 0 19px 38px rgba(0,0,0,0.2), 0 15px 12px rgba(0,0,0,0.2); padding:2%; height:100%;">
      <div class="row">
        <canvas id="canvas"></canvas>      
        <script>
          var canvas = document.getElementById("canvas");
          var ctx = canvas.getContext("2d");
          var radius = canvas.height / 2;
          ctx.translate(radius, radius);
          radius = radius * 0.90
          setInterval(drawClock, 1000);    
          function drawClock() {
            drawFace(ctx, radius);
            drawNumbers(ctx, radius);
            drawTime(ctx, radius);
          }
        
          function drawFace(ctx, radius) {
            var grad;
            ctx.beginPath();
            ctx.arc(0, 0, radius, 0, 2*Math.PI);
            ctx.fillStyle = 'white';
            ctx.fill();
            grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
            grad.addColorStop(0, '#333');
            grad.addColorStop(0.5, 'white');
            grad.addColorStop(1, '#333');
            ctx.strokeStyle = grad;
            ctx.lineWidth = radius*0.1;
            ctx.stroke();
            ctx.beginPath();
            ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
            ctx.fillStyle = '#333';
            ctx.fill();
          }
        
          function drawNumbers(ctx, radius) {
            var ang;
            var num;
            ctx.font = radius*0.15 + "px arial";
            ctx.textBaseline="middle";
            ctx.textAlign="center";
            for(num = 1; num < 13; num++){
              ang = num * Math.PI / 6;
              ctx.rotate(ang);
              ctx.translate(0, -radius*0.85);
              ctx.rotate(-ang);
              ctx.fillText(num.toString(), 0, 0);
              ctx.rotate(ang);
              ctx.translate(0, radius*0.85);
              ctx.rotate(-ang);
            }
          }
        
          function drawTime(ctx, radius){
            var now = new Date();
            var hour = now.getHours();
            var minute = now.getMinutes();
            var second = now.getSeconds();
            //hour
            hour=hour%12;
            hour=(hour*Math.PI/6)+
            (minute*Math.PI/(6*60))+
            (second*Math.PI/(360*60));
            drawHand(ctx, hour, radius*0.5, radius*0.07);
            //minute
            minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
            drawHand(ctx, minute, radius*0.8, radius*0.07);
            // second
            second=(second*Math.PI/30);
            drawHand(ctx, second, radius*0.9, radius*0.02);
          }
        
          function drawHand(ctx, pos, length, width) {
            ctx.beginPath();
            ctx.lineWidth = width;
            ctx.lineCap = "round";
            ctx.moveTo(0,0);
            ctx.rotate(pos);
            ctx.lineTo(0, -length);
            ctx.stroke();
            ctx.rotate(-pos);
          }
        </script>
      </div>
      <div class="row">
      <div class="datepicker" ></div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script >
          $(document).ready(function() {
            $(".datepicker").datepicker({
              prevText: '<i class="fa fa-fw fa-angle-left"></i>',
              nextText: '<i class="fa fa-fw fa-angle-right"></i>'
            });
          });
        </script>
      </div>  
    </div>      

  </div>
  <div class="container-fluid">
  <div class="col-sm-13">
      <img src="5.jpg" alt="">
    </div>
  </div>
</body>
</html>
