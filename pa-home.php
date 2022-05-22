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
<body style="background-color: rgba(230,230,230);">
<div class="container-fluid " >
    <div class="row" >
    <div class="col-sm-9" style="background-color:white; margin-top:5px;">
      <div class="row" style="  box-shadow: 0 9px 19px rgba(0,0,0,0.2), 0 7px 6px rgba(0,0,0,0.2); padding:2%; height:100%;">

      </div>
    </div>
    <div class="col-sm-3" style="  box-shadow: 0 9px 19px rgba(0,0,0,0.2), 0 7px 6px rgba(0,0,0,0.2); padding:2%; height:100%; background-color:white; margin-top:3px;">
      <div class="row">
        <canvas id="canvas"></canvas>      
        <script src="js/doc-home.js"></script>
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
      
  </div>
</body>
</html>
