<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php include 'navbar.php';?>
	<?php
		include 'product.php';
		include 'connection.php';
		$products = $db->query('SELECT * FROM items');
		foreach($products as $product) {
			$p = new Product($product);
			print '<br>'. $p->getItem() . " " . "<img width=100 height=100 src={$p->getURL()}>" . " " . $p->getQuantity() . " " . ($p->getPrice() / 100) . "$ " . $p->getDescription() . " " . '</br>';
		}
		// Must be set to null when finishing the database for security purposes
		$db = null;
	?>

</body>
</html>