<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Plant Shopify | About Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">Who We Are</h3>
          <hr />
          <img
            src="images/plant.jpg"
            class="img-fluid d-block rounded mx-auto image-thumbnail" alt="Plant Shopify plants">
          <p class="mt-2">Plant Shopify is your trusted online destination for beautiful indoor plants, stylish pots, essential gardening tools, and premium fertilizers. Our mission is to help you bring nature into your home, office, or any space that needs a touch of green. We believe that plants can transform lives—adding beauty, purifying air, and boosting well-being. Whether you're a seasoned gardener or a new plant parent, our curated selection and expert tips make it easy to grow your own green paradise!</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title">LIVE PLANT SUPPORT</h1>
            <h3>Expert Guidance | 24/7 Online Help | Personalized Plant Care</h3>
          </span>
          <hr>
          <p>Have questions about your plants or need advice on plant care? Our Plant Shopify team is here to help, every day of the year! Whether you’re curious about watering schedules, repotting, pest control, or choosing the right plant for your space, our plant experts are just a message away. We’re passionate about helping you grow and thrive with your plants—reach out anytime for friendly, knowledgeable support!</p>

        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/f/mnqepvgr" method="POST">
      <h3 class="text-warning pt-3 title mx-auto">Contact Plant Shopify</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Your Email Address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Your Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5" required></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/ecommerce-website/about.php" />
      <button type="submit" class="btn btn-success">Send Message</button>
    </form>
  </div>


  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
