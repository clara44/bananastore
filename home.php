<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="stylebanana.css"/>
		<title>PRODUCTS</title>
		
	</head>
	<header>
	<img src="">
	

	<body>

	<h1> PRODUITS</h1>

	<form action="search.php" method="GET">

		<label>Rechercher</label>
		<input type="text" name="search">
		<button type="submit">envoi</button>

	</form>


		<?php 
		foreach ($list as $id => $product) { 
			echo "<li>";
			echo "name"." : ";
    		echo $product["name"]."</br>";

    		echo "description"." : ";
			echo $product["description"]."</br>";
			
			echo "price"." : ";
			echo $product["price"]."€"."</br>";

			echo "<img src='{$product["image"]}'>";
    		echo "</li>";
		}
		?>
			
</body>
</html>

