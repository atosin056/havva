<?php

include 'connect.php';

if (isset($_POST["submit"])) {
	
	$product = $_POST["product"];

	$qty_sup = $_POST["qty_sup"];

	$qty_sold = $_POST["qty_sold"];

	$selling_p = $_POST['selling_p'];


	$insert = "INSERT INTO `products` (`id`, `product_name`, `quantity_supplied`, `quantity_sold`, `unit_selling_price`) VALUES (NULL, '".$product."','".$qty_sup."','".$qty_sold."','".$selling_p."')";

	$insert_query = mysqli_query($conn, $insert);

	if ($insert_query) {
		
		echo "Done inserting";

	}

}

?>

<html>

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<title>DP Project Hack - Tosin👑 !</title>

</head>

<body>

<div style="width: 100% !important;height: 100vh !important;display: flex;justify-content: center;align-items: center;">
	
	<form method="POST" class="col-md-8 col-sm-8 col-lg-8">

		<div style="margin-bottom: 20px;">
			
			<h4>DP - Project Hack!</h4>

		</div>
		
		<div class="form-floating mb-3">
										
			<input required type="text" name="product" placeholder="Product Name" class="form-control fn" id="product" style="font-size: 14px;font-weight: 400;background: #F9F9F9;height: 64px;border-radius: 12px;padding-left: 20px;padding-top: 10px;border: 1px solid #BBBBBB;">

			<label for="product" style="padding-top: 18px;padding-left: 20px;color: #555555;font-weight: 300 !important;">Product Name</label>

		</div>

		<div class="form-floating mb-3">
										
			<input required type="number" name="qty_sup" placeholder="Quantity Supplied" class="form-control fn" id="qty_sup" style="font-size: 14px;font-weight: 400;background: #F9F9F9;height: 64px;border-radius: 12px;padding-left: 20px;padding-top: 10px;border: 1px solid #BBBBBB;">

			<label for="qty_sup" style="padding-top: 18px;padding-left: 20px;color: #555555;font-weight: 300 !important;">Quantity Supplied</label>

		</div>

		<div class="form-floating mb-3">
										
			<input required type="number" name="qty_sold" placeholder="Quantity Sold" class="form-control fn" id="qty_sold" style="font-size: 14px;font-weight: 400;background: #F9F9F9;height: 64px;border-radius: 12px;padding-left: 20px;padding-top: 10px;border: 1px solid #BBBBBB;">

			<label for="qty_sold" style="padding-top: 18px;padding-left: 20px;color: #555555;font-weight: 300 !important;">Quantity Sold</label>

		</div>

		<div class="form-floating mb-3">
										
			<input required type="number" name="selling_p" placeholder="selling_p" class="form-control fn" id="selling_p" style="font-size: 14px;font-weight: 400;background: #F9F9F9;height: 64px;border-radius: 12px;padding-left: 20px;padding-top: 10px;border: 1px solid #BBBBBB;">

			<label for="selling_p" style="padding-top: 18px;padding-left: 20px;color: #555555;font-weight: 300 !important;">Unit Selling Price</label>

		</div>	

		<div class="form-floating mb-3">

			<input type="submit" name="submit" value="submit">

		</div>


	</form>

</div>

</body>

</html>