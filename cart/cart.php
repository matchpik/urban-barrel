<!DOCTYPE html>
<html>
<head>
	<title>Urban Barrel Cart</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap3.3.6/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="cart.css"/>
</head>
<body>
<div class="container">
	<?php  

	$DB_HOST = 'localhost';
	$DB_USER = 'root';
	$DB_PASSWORD = '9BENJAMIN0';
	$DB_DATABASE = 'cart';
	
	$connect = mysqli_connect('DB_HOST', 'DB_USER', 'DB_PASSWORD', 'DB_DATABASE');

	$query = "SELECT * FROM products ORDER BY id ASC";
	
	$result = mysqli_query($connect, $query);

	if ($result):
		if (mysqli_num_rows($result)>0):
			while($product = mysqli_fetch_assoc($result)):
				print_r($product);
			?>
			<div class="col-sm-4 col-md-3">
				<form method="POST" action="order-a-barrel.php?action=add&id=<?php echo $product['id'];?>">
					<div class="products">
						<img src="../img/materials/whiteoakbarrel.jpg" class="img-responsive"/>
						<h4 class="text-info"><?php echo "Size: " . $product['barrel_size']; ?></h4>
						<h4 class="text-info"><?php echo "Metal: " . $product['hoop_type']; ?></h4>
						<h4 class="text-info"><?php echo "Varnish: " . $product['varnish']; ?></h4>
						<h4 class="text-info"><?php echo "Custom image: " . $product['hoop_type']; ?></h4>
						<input type="text" name="quanity" class="form-control" value="1" />
						<input type="hidden" name="name" value="<?php echo $product['metal']?>">
						<input type="submit" name="add_to_cart" class="btn btn-info" value="Add to Cart" />
					</div>
				</form>
			</div>
			<?php
			endwhile;
		endif;
	endif;
	?>
</div>
</body>
</html>
