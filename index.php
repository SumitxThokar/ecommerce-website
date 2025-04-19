<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenLeaf Shop | Your Online Plant Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <!--Header ends-->
    <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding-top:150px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
            <h1>Bring Nature Home</h1>
            <p>Discover beautiful indoor & outdoor plants for every space</p>
            <a href="products.php" class="btn btn-warning btn-lg text-white">Browse Plants</a>

            </div>
            </div>

        </div>
    </div>
    <div class="text-center pt-4 h3">
        * Grow Your Green Paradise *
    </div>
    <!--menu highlights start-->
 <div class="container pt-3">
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#indoor"><img src="images/watch.jpg" class="img-fluid " alt="Indoor Plants" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                      Indoor Plants
                   </div>
                 </a>
             </div>
            <div class="col-6 col-md-3 py-3 " >
                <a href="products.php#pots"><img src="images/clothing.jpg" class="img-fluid " alt="Pots" style="border-radius:0.5rem">
                     <div class="h5 pt-3 font-weight-bolder">
                        Pots
                     </div>
                  </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#tools"><img src="images/shoes.jpg" class="img-fluid " alt="Gardening Tools" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                      Gardening Tools
                   </div>
                 </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#fertilizers"><img src="images/headphones.jpg" class="img-fluid " alt="Fertilizers" style="border-radius:0.5rem">
                 <div class="h5 pt-3 font-weight-bolder">
                    Fertilizers
                 </div>
              </a>
            </div>
        </div>
    </div>

    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>