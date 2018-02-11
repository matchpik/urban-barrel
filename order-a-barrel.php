    <!-- 
    Responsive website for Jeff Roberts at Urban Barrel Company.
    Operating out of Ottawa, ON, CANADA.

    1. Website should be user friendly and user should land on a buying page.
    2. User can place order directly on site.
    3. User can see products immediately.
    4. Minimal navigation necessary on user's behalf.
    -->
<?php 
if (isset($_POST['submit'])){
  $to = "mattbbwhite@gmail.com";
  $from = "Urban Barrel Site";
  $name = "Customer name: " . $_POST['customer_name'];
  $email = $_POST['customer_email'];
  $subject = "Order Request from " . $name;
  $subject2 = "Copy of your recent Urban Barrel order.";
  $headers = "From: " . $email;
  $headers2 = "From: " . $to;

  //Order specs
  $size = "Barrel Size: " . $_POST['barrel_size'];
  $metal = "\nHoop Style: " . $_POST['hoop_type'];
  $varnish = "\nAdd Varnish?: " . $_POST['add_varnish'];
  $logo =  "\nAdd Logo?: " . $_POST['add_logo'];
  $message = "\nCustomer Message: " . $_POST['customer_message'];

  $content = $name . $email . $size . $metal . $varnish .$logo . $message . "\n\nEnd of Order."; 

  $headers = "From:" . $from;
  mail($to,$subject,$content,$headers);
  mail($email,$subject2,$content,$headers2); // sends a copy of the message to the sender
  echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

    <title>
    Urban Barrel Company
    </title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-icon.png">
    <link rel="icon" href="../assets/img/favicon.png">
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/material-kit.css?v=2.0.0">
    </head>


    <body class="landing-page ">
    <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="index.html">Urban Barrel Company</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="material-icons">apps</i> About
            </a>
            <div class="dropdown-menu dropdown-with-icons">
            <a href="index.html" class="dropdown-item">
            <i class="material-icons">layers</i> The Product
            </a>

            <a href="#" class="dropdown-item">
            <i class="material-icons">layers</i> The Packages
            </a>
            <hr>
            <a href="#" class="dropdown-item">
            <i class="material-icons">layers</i> The Materials
            </a>

            <a href="#" class="dropdown-item">
            <i class="material-icons">layers</i> The Maintenance
            </a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/urban_barchef" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/Otownbarrels" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/UrbanBarChef" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
              </a>
            </li>  
            </ul>
        </div>
      </div>
    </nav>




    <div class="page-header header-filter" data-parallax="true" style=" background-image: url('../assets/img/backgrounds/speakeasy_bar.jpg'); ">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Watch video
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="main main-raised">
    <div class="container">
    <div class="section text-center">
    <div class="row">
    <div class="col-md-8 ml-auto mr-auto">
    <h2 class="title">Create A Custom Barrel</h2>
    <h4 class="title">For Yourself Or A Loved One</h4>
    <br>
    <h5 class="description">Flow through the list and select the options that you deem appropriate.
    When you&apos;re done, click the confirm order button. You will be prompted to double-check and then re-confirm your order, after which you will be taken to checkout.</h5>
    </div>
    </div>
      <div class="features">
        <div class="row">
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-info">
                <i class="material-icons">camera</i>
              </div>
              <h4 class="info-title">1. Size</h4>
              <p>Barrels are measured in litres and range from 1 to 5 litres in volume.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-success">
                <i class="material-icons">verified_user</i>
              </div>
                <h4 class="info-title">2. Metal</h4>
                <p>Metal refers to the material of the barrel&apos;s rings. The options are galvanized steel, black steel, or brass.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="material-icons">book</i>
              </div>
                <h4 class="info-title">3. Varnish</h4>
                <p>Choose to add a varnish to the inside of the barrel. This helps to extend the barrel&apos;s longevity.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="material-icons">photo size select actual</i>
              </div>
                <h4 class="info-title">4. Personal Touch</h4>
                <p>Upload a picture to have it engraved into the rounded face of the barrel.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- Order Form begins --> 

    <div class="section text-center">
      <h2 class="title">Order Form</h2>
      <hr>
    <form  method="POST" action="order-a-barrel.php" id="barrel_order_form">
      <div class="form-radio">
        <fieldset>
          <legend>Barrel Size (Litres)</legend>
            <input type="radio" name="barrel_size" value="1L" required>1L
            <input type="radio" name="barrel_size" value="2L" required>2L
            <input type="radio" name="barrel_size" value="3L" required>3L
            <input type="radio" name="barrel_size" value="4L" required>4L
            <input type="radio" name="barrel_size" value="5L" required>5L
          <br>
          <hr>
        </fieldset>
        <fieldset>
          <legend>Hoop Style</legend>
            <input type="radio" name="hoop_type" value="black_steele" required>Black Steel
            <input type="radio" name="hoop_type" value="brass" required>Brass
            <input type="radio" name="hoop_type" value="galvanized" required>Galvanized Steel
          <br>
          <hr>
        </fieldset>
        <fieldset>
          <legend>Add Varnish ($8) ?</legend>
            <input type="radio" name="add_varnish" value="yes" required>Yes
            <input type="radio" name="add_varnish" value="no" required>No
          <br>
          <hr>
        </fieldset>
        <fieldset>
          <legend>Add Custom Logo ($14) ?</legend>
            <input type="radio" name="add_logo" value="yes" required>Yes
            <input type="radio" name="add_logo" value="no" required>No
          <br>
          <br>
            <input id="form_button" type="file" name="custom_logo" accept="image/*">
        </fieldset>
      </div>
    <hr>

    <div class="section section-contacts">
    <div class="row">
    <div class="col-md-8 ml-auto mr-auto">
    <h2 class="text-center title">Extra Information</h2>
    <h4 class="text-center description">Give us your name and email address so we can send you a confirmation and copy of your order. We&apos;ve also provided a commentary box for any other comments or requests you may have.</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label class="bmd-label-floating">Your Name</label>
                <input type="text" class="form-control" id="customer_name" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <label class="bmd-label-floating">Your Email Address</label>
                <input type="email" class="form-control" id="customer_email" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
              <textarea type="text" class="form-control" rows="4" id="customer_message"></textarea>
            </div>
            <div class="row">
              <div class="col-md-4 ml-auto mr-auto text-center"></div>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-default">Confirm Order</button>
    </form>
  </div>
</div>


        
<footer class="footer ">    
  <div class="container">
    <div class="copyright pull-left">
     &copy; <script>document.write(new Date().getFullYear())</script>, Urban Barrel Company
    </div>
    <nav class="pull-right">
      <ul>
        <li>
          <a href="https://www.urbanbarchef.com">
            Urban Barchef
          </a>
        </li>
      </ul>
    </nav>      
  </div>
</footer>
<!--   Core JS Files   -->
    <script type="text/javascript" src="../assets/js/submitForm.js"></script>
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/bootstrap-material-design.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js"></script>
  </body>
</html>
