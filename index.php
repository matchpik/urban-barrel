<?php // Script 13.11 - index.php
/* This is the home page for this site. It displays:
 - The most recent quote (default)
 - OR, a randomly picked quote
 - OR, a randomly picked favourite quote */

 // Include header
 include('header.html');?>
 
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('./assets/img/backgrounds/banner.jpg');"></div>
	<div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar">
	                            <img src="./assets/img/faces/logo.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
	                        </div>
	                        <div class="name">
	                            <h3 class="title">Let&apos;s Talk Product</h3>					
								          </div>
	                    </div>
                
    	            </div>
                </div>

                <div class="description text-center" id="product">
                    <h4 class="description">Create &amp; age your personal blend of bourbon or use your Urban Barrel as a decanter. These specially designed, hand-crafted, small American White Oak barrels are ideal for gifting and home decor.<br><br>
                    You can use Urban Barrels for aging and mellowing liquors like whisky, rum, tequila or even homemade wine. Put a smile on a loved one&apos;s face or indulge yourself. Either way your new oak barrel will bring you years of enjoyment.<br><br>
                    </h4>
                </div>

				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#woods" role="tab" data-toggle="tab">
                      <i class="material-icons">camera</i>
                        Our Barrels
                    </a>
                </li>
              </ul>
            </div>
					</div>
        </div>
        
          <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="woods">
  						<div class="row">
  							<div class="col-md-4 mr-auto">
                  <img src="./assets/img/materials/barrel_sizes.jpg" class="rounded">
                </div>
                <div class="col-md-4 ml-auto">
  								<img src="./assets/img/materials/whiteoak1.jpg" class="rounded">
  							</div>
  							<div class="col-md-4 mr-auto">
  								<img src="./assets/img/materials/whiteoakbarrel.jpg" class="rounded">
  							</div>
                
  						</div>
  					</div>
          </div>
            </div>
        </div>
	</div>

 <?php include('footer.html');?>