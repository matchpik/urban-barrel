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
	                            <h3 class="title">Our Blog</h3>					
								          </div>
	                    </div>
                
    	            </div>
                </div>

                <div class="description text-center" id="product">
                    <h5 class="description">Coming Soon.<br></h5>
                </div>
            </div>
        </div>
	</div>

 <?php include('footer.html');?>