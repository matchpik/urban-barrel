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
  // Company info
  $to = "mattbbwhite@gmail.com";
  $from = "Urban Barrel Site";

  //Order info
  $size = "\nBarrel Size: " . $_POST['barrel_size'];
  $metal = "\nHoop Style: " . $_POST['hoop_type'];
  $varnish = "\nAdd Varnish?: " . $_POST['add_varnish'];
  $logo =  "\nAdd Logo?: " . $_POST['add_logo'];
  $message = "\nCustomer Message: " . $_POST['customer_message'];

  // Shipping Info
  $customer_name = "\n" . $_POST['customer_name'];
  $customer_email = "\n" . $_POST['customer_email'];
  $address_1 = "\n" . $_POST['address_line1'];
  $address_2 = "\n" . $_POST['address_line2'];
  $city = "\n" . $_POST['city'];
  $region = "\n" . $_POST['region'];
  $country = "\n" . $_POST['country'];

  // Email Content
  $content = $customer_name . $customer_email . $size . $metal . $varnish .$logo . $message . "\n\nShipping info: " . $address_1 . $address_2 . $city . $region . $country . "\n\nEnd Of Order"; 

  $headers = "From:" . $from;
  mail($to,$subject,$content,$headers);
  mail($email,$subject2,$content,$headers2); // sends a copy of the message to the sender
}   
 include('header.html');?>




    <div class="page-header header-filter" data-parallax="true" style=" background-image: url('./assets/img/backgrounds/speakeasy_bar.jpg'); ">
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
    <h5 class="description">Flow through the list and select the desired options.
    When you&apos;re done, click the &apos;confirm order&apos; button. You will be prompted to double-check and then re-confirm your order, after which you will be taken to checkout.</h5>
    </div>
    </div>
      <div class="features">
        <div class="row">
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-info">
                <i class="material-icons">camera</i>
              </div>
              <h4 class="info-title">1. Size</h4>
              <p>Barrels are measured in litres and range from 1 to 20 litres in volume.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-success">
                <i class="material-icons">verified_user</i>
              </div>
                <h4 class="info-title">2. Metal</h4>
                <p>Metal refers to the material of the barrel&apos;s rings. The options are galvanized steel, black steel or brass.</p>
            </div>
          </div>
          <div class="col-md-4">
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
              <div class="icon icon-info">
                <i class="material-icons">camera</i>
              </div>
              <h4 class="info-title">4. Personal Touch</h4>
              <p>Upload a picture to have it engraved into your barrel.</p>
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
            <input type="radio" name="barrel_size" value="5L" required>5L
            <input type="radio" name="barrel_size" value="10L" required>10L
            <input type="radio" name="barrel_size" value="20L" required>20L
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
          <hr>
        </fieldset>
      </div>

    <div class="section section-contacts">
    <div class="row">
    <div class="col-md-8 ml-auto mr-auto">
    <h2 class="text-center title">Shipping Information</h2>
    <h4 class="text-center description">This information will be used to complete your order. We&apos;ve also provided a commentary box for any other comments or requests you may have.</h4>
            <div class="row">
              <!-- Full Name input -->
              <div class="col-md-6">
                <div class="form-group">
                  <input id="customer_name" class="form-control" name="customer_name" type="text" placeholder="Full Name"
                  class="input-xlarge" required>
                  <p class="help-block"></p>
                </div>
              </div>
              <!-- Email input -->
              <div class="col-md-6">
                <div class="form-group">
                <input type="email" class="form-control" id="customer_email" placeholder="Email Address" required>
                </div>
              </div>
              <!-- address-line1 input-->
              <div class="col-md-6">
                <div class="form-group">
                        <input id="address_line1" class="form-control" name="address_line1" type="text" placeholder="Address Line 1"
                        class="input-xlarge" required>
                        <p class="help-block">Street address, P.O. box, company name, c/o</p>
                </div>
              </div>
                <!-- address-line2 input-->
                <div class="col-md-6">
                <div class="form-group">
                        <input id="address_line2" class="form-control" name="address_line2" type="text" placeholder="Address Line 2" 
                        class="input-xlarge">
                        <p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
                </div>
                </div>
                <!-- city input-->
                <div class="col-md-6">
                <div class="form-group">
                  <input id="city" class="form-control" name="city" type="text" placeholder="City / Town" class="input-xlarge" required>
                  <p class="help-block"></p>
                </div>
                </div>
                <!-- region input-->
                <div class="col-md-6">
                <div class="form-group">
                  <input id="region" class="form-control" name="region" type="text" placeholder="Province / State / Region"
                  class="input-xlarge" required>
                  <p class="help-block"></p>
                </div>
                </div>
                <!-- postal-code input-->
                <div class="col-md-6">
                <div class="form-group">
                  <input id="postal_code" class="form-control" name="postal_code" type="text" placeholder="Postal Code"
                  class="input-xlarge" required>
                  <p class="help-block"></p>
                </div>
                </div>
                <!-- country select -->
                <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label">Country</label>
                    <select id="country" name="country" class="input-xlarge" required>
                      <option value="" selected="selected">(please select a country)</option>
                      <option value="CA">Canada</option>
                      <option value="US">United States</option>
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <textarea type="text" class="form-control" placeholder="Your Message" rows="4" id="customer_message"></textarea>
                </div>
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

<?php include('footer.html');?>