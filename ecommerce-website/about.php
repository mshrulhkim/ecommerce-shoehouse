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
  <title>Shoehouse | Belanja Sepatu Pilihan Terbaik</title>
  <link rel="icon" href="images/emptycart.png">
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
          <h3 class="text-black pt-3 title">Who We Are ?</h3>
          <hr/>
          <img
            src="images/bertiga.jpeg" 
            class="img-fluid d-block rounded mx-auto image-thumbnail">
            <p class="mt-2">From various different ethnic groups, from all over different schools with the same goal of pursuing a bachelor's degree.
            <br><br>
          Graduation is not the end of everything, but the beginning of struggles and aspirations that will later be useful in various fields, 
          especially the field of informatics engineering with the hope that the knowledge gained will make a professional informatics engineer.</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-black pt-3">
            <h1 class="title" style="font-text:blue">IT UNINDRA 2020</h1>
            <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3>
          </span>
          <hr>
          <div style="text-align:justify;
          text justify: inter-word";>
          <p>Shoehouse is a shoe marketplace designed for selling various types of shoes. This target market is teenagers 
            to adults because there is a lot of interest in casual type shoes and this application is designed to help you 
            choose shoes from the cheapest to the most expensive price range, by considering the needs of your travel destination. 
            This application is very helpful for you in choosing shoe recommendations.
          <br><br>
            The performance of making this application did not escape the prayers and support of several friends, parents 
            and teaching lecturers. The end of this task is not just a mere design, it will even be built into reality.
            <br><br>
            <div class="container text-center"><span class="text-black"><b>
              <br><br>Shoehouse&copy;2024 | Universitas Indraprasta | Fakultas Teknik Informatika 
            </b></span></div>
          </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Form</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
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
