<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Document</title>
</head>
<body style="background-color: #A5243D;">
	<?php include 'navbar.php';?>
	
		<?php
			include 'product.php';
			include 'connection.php';
			$products = $db->query('SELECT * FROM items');
			foreach($products as $product) {
				$p = new Product($product);
				$price = $p->getPrice() / 100;
				print '<div class="container" style="height: calc(100vh - 200px);">';
					print "<div class='d-flex justify-content-evenly' style='margin-top: 100px;'>";
						print "<div>";
							print "<div style='height: 100px;'>";
								print "<div class='text-center fs-1'>{$p->getItem()}</div>";
							print "</div>"; 
							print "<img src={$p->getURL()} height=500px style='background: transparent no-repeat center; background-size: cover;'>";
						print '</div>';
						print "<div class='d-flex flex-column justify-content-start align-items-start' style='width: 500px'>";
							print "<div>";
								print "<div class='text-start fs-1 h-5'>How many in stock</div>";
								print "<div class='text-start fs-2 h-5'>{$p->getQuantity()} {$p->getItem()}s</div>"; 
							print "</div>";
							print "<div>";
								print "<div class='text-start fs-1 h-5'>Price</div>";
								print "<div class='text-start fs-2 h-5'>\${$price} each</div>"; 
							print "</div>";
							print "<div>";
								print "<div class='text-start fs-1 h-5'>Description</div>";
								print "<div class='text-start fs-5 h-5'>{$p->getDescription()}</div>";
							print "</div>";
						print '</div>';
					print "</div>";
				print "</div>";
			}
		?>
	<?php
		// Must be set to null when finishing the database for security purposes
		$db = null;
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>