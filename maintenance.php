<?php // Script 13.11 - index.php
/* This is the home page for this site. It displays:
 - The most recent quote (default)
 - OR, a randomly picked quote
 - OR, a randomly picked favourite quote */

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
	                            <h3 class="title">Take care of your barrel &lt;3</h3>					
								          </div>
	                    </div>
                
    	            </div>
                </div>

                <div class="description text-center" id="product">
                    <h5 class="description">Click on the sheet to enlarge and print.<br>
                        Print a hard copy or print as a PDF and save it directly to your computer for future reference.
                    </h5>
                </div>

				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#instructions" role="tab" data-toggle="tab">
                      <i class="material-icons" onclick="instructions = window.open('./assets/img/barrel_care.jpg');
                            instructions.print();">camera</i>
                      Instructions
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
                  <img src="./assets/img/barrel_care.jpg" class="rounded"
                        alt="printable instructions" onclick="instructions = window.open('./assets/img/barrel_care.jpg');
                            instructions.print();">
                </div>
              </div>
            </div>
        </div>
        </div>
        </div>
	</div>

<?php include('footer.html');?>