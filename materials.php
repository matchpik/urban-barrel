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
	                            <h3 class="title">Materials involved</h3>					
								          </div>
	                    </div>
                
    	            </div>
                </div>

                <div class="description text-center" id="product">
                    <h5 class="description">Wood: American White Oak.<br> 
                      Metal: black steel, galvanized steel or brass.
                    </h5>
                </div>

				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#woods" role="tab" data-toggle="tab">
                      <i class="material-icons">camera</i>
                      Wood
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#metals" role="tab" data-toggle="tab">
                      <i class="material-icons">timeline</i>
                        Metals
                    </a>
                </li>
              </ul>
            </div>
					</div>
        </div>
        
          <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="woods">
  						<div class="row">
  							<div class="col-md-3 ml-auto">
  								<img src="./assets/img/materials/whiteoak1.jpg" class="rounded">
  							</div>
  							<div class="col-md-3 mr-auto">
  								<img src="./assets/img/materials/whiteoakbarrel.jpg" class="rounded">
  							</div>
  						</div>
  					</div>
            <div class="tab-pane text-center gallery" id="metals">
  						<div class="row">
  							<div class="col-md-4 ml-auto">
                  <img src="./assets/img/materials/blacksteel.jpg" class="rounded" alt="blacksteel">
                  <img src="./assets/img/materials/brass.jpg" class="rounded" alt="brass">
  							</div>
  							<div class="col-md-4 mr-auto">
                  <img src="./assets/img/materials/galvanizedsteel.jpg" class="rounded" alt="galvanized steel">
  							</div>
  						</div>
  					</div>
          </div>
            </div>
        </div>
	</div>

<?php include('footer.html');?>