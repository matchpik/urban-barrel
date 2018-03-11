    <!-- 
    Responsive website for Jeff Roberts at Urban Barrel Company.
    Operating out of Ottawa, ON, CANADA.

    1. Website should be user friendly and user should land on a buying page.
    2. User can place order directly on site.
    3. User can see products immediately.
    4. Minimal navigation necessary on user's behalf. -->
<?php include('header.html');?>
 
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('./assets/img/backgrounds/banner.jpg');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
               <div class="profile">
                    <div class="avatar">
                        <img src="./assets/img/faces/logo.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                    </div>
                    <div class="name">
                        <h3 class="title">Order a Custom Barrel</h3>          
                    </div>
                </div>          
              <div class="form-group">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="X3J7QR897R8XA">
                  <input type="hidden" name="on0" value="Barrel Size">Barrel Size <br>
                  <select name="os0">
                    <option value="1 Litre">1 Litre $84.00 CAD</option>
                    <option value="2 Litre">2 Litre $96.00 CAD</option>
                    <option value="3 Litre">3 Litre $112.00 CAD</option>
                    <option value="5 Litre">5 Litre $126.00 CAD</option>
                    <option value="10 Litre">10 Litre $164.00 CAD</option>
                    <option value="20 Litre">20 Litre $209.00 CAD</option>
                  </select>
                  <br>
                  <br>
                  <input type="hidden" name="on1" value="Ring Metal">Ring Metal <br>
                  <select name="os1">
                    <option value="Black Steel">Black Steel </option>
                    <option value="Brass">Brass </option>
                    <option value="Galvanized Steel">Galvanized Steel </option>
                  </select>
                  <p><!-- spacer --></p>
                  <br>
                  <input type="hidden" name="currency_code" value="CAD">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
                <p><!-- spacer --></p>
                <br>
                <!-- View Cart -->
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                  ">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
          </div>
        </div>
      </div>
      <div class="features">
        <div class="row">
          <div class="col-md-6">
            <div class="info">
              <div class="icon icon-info">
                <i class="material-icons">camera</i>
              </div>
              <h4 class="info-title">1. Size</h4>
              <p>Barrels are measured in litres and are offered in denominations of 1, 2, 3, 5, 10 and 20 litres.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info">
              <div class="icon icon-success">
                <i class="material-icons">verified_user</i>
              </div>
                <h4 class="info-title">2. Metal</h4>
                <p>Metal refers to the material of the barrel&apos;s rings. The options are galvanized steel, black steel, or brass.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.html');?>
