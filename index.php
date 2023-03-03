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
<<<<<<< HEAD
			print '<br>'. $p->getItem() . " " . "<img width=100 height=100 src={$p->getURL()}>" . " " . $p->getQuantity() . " " . ($p->getPrice() / 100) . "$ " . $p->getDescription() . " " . '</br>';
=======
			print '<br>'. $p->getItem() . " " . "<img width=100 height=100 src={$p->getURL()}>" . " " . $p->getQuantity() . " " . $p->getPrice() . "$ " . $p->getDescription() . " " . '</br>';
>>>>>>> 2d9ca0430a2c225210160780eb21c7481fb519ca
		}
		// Must be set to null when finishing the database for security purposes
		$db = null;
	?>

</body>
</html>