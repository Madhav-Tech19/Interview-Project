<?php
    session_start();
    if(!isset($_SESSION['email']))
       {  
       }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kerala shopping Store</title>
		<link rel="stylesheet" href="homestyle.css">
	</head>
	<body>
		<header>
                        <h1>Welcome to Kerala shopping store</h1>
		</header>
		<nav>
			<ul> 
			<li><a href="logout.php" >Logout</a></li>
			</ul>
		</nav>
		<main>
                    <section>
			<h2>Products</h2>
                                <ul>
                                    <li>
					<h3>Kerala Kurta</h3>
                                        <img src="C:\xampp\htdocs\iinterviewproject\images\kurta2.jpg" alt="Product 1">
                                        <p>red kurta with embroidary</p>
                                        <p><span>₹799</span></p> 
					<form method="post" action="shop.php">
					<input type="hidden"name="product_id" value="1">
					<label for="product1_quantity">Quantity :</label>
					<input type="number" id="product1_quantity" name="product_quantity" value="" min="0" max="10">
					<button type="submit" name="add_to_cart">Add to Cart</button>
					</form>
                                    </li>
                                    <li>
                                        <h3>Kasavu</h3>
                                        <img src="C:\xampp\htdocs\iinterviewproject\images\mundu.jpg" alt="Product 2">
                                        <p>traditional kasavu set</p>
					<p><span>₹890</span></p>
					<form method="post" action="shop.php">
                                            <input type="hidden" name="product_id" value="2">
                                            <label for="product2_quantity">Quantity :</label>
                                            <input type="number" id="product2_quantity" name="product_quantity" value="" min="0" max="10">
                                            <button type="submit" name="add_to_cart"> Add to Cart</button>
					</form>
                                    </li>
                                    <li>
                                        <h3>Kasavu saree</h3>
					<img src="C:\xampp\htdocs\iinterviewproject\images\saree2.jpg" alt="Product 3">
					<p>traditional kasavu saree</p>
					<p><span>₹560</span></p>
					<form method="post" action="shop.php">
					<input type="hidden" name="product_id" value="3">
					<label for="product3_quantity">Quantity:</label>
					<input type="number" id="product3_quantity" name="product_quantity" value=" min="0" max="10">
					<button type="submit" name="add_to_cart">Add to Cart</button>
					</form>
                                    </li>
                                    <li>
					<h3>Kerala Kurta</h3>
                                        <img src="C:\xampp\htdocs\iinterviewproject\images\kurta2.jpg" alt="Product 1">
                                        <p>red kurta with embroidary</p>
                                        <p><span>₹799</span></p> 
					<form method="post" action="shop.php">
					<input type="hidden"name="product_id" value="1">
					<label for="product1_quantity">Quantity :</label>
					<input type="number" id="product1_quantity" name="product_quantity" value="" min="0" max="10">
					<button type="submit" name="add_to_cart">Add to Cart</button>
					</form>
                                    </li>
                                    <li>
                                        <h3>Kasavu</h3>
                                        <img src="C:\xampp\htdocs\iinterviewproject\images\mundu.jpg" alt="Product 2">
                                        <p>traditional kasavu set</p>
					<p><span>₹890</span></p>
					<form method="post" action="shop.php">
                                            <input type="hidden" name="product_id" value="2">
                                            <label for="product2_quantity">Quantity :</label>
                                            <input type="number" id="product2_quantity" name="product_quantity" value="" min="0" max="10">
                                            <button type="submit" name="add_to_cart"> Add to Cart</button>
					</form>
                                    </li>
                                    <li>
                                        <h3>Kasavu saree</h3>
					<img src="C:\xampp\htdocs\iinterviewproject\images\saree2.jpg" alt="Product 3">
					<p>traditional kasavu saree</p>
					<p><span>₹560</span></p>
					<form method="post" action="shop.php">
					<input type="hidden" name="product_id" value="3">
					<label for="product3_quantity">Quantity:</label>
					<input type="number" id="product3_quantity" name="product_quantity" value=" min="0" max="10">
					<button type="submit" name="add_to_cart">Add to Cart</button>
					</form>
                                    </li>
				</ul>
			</section>
		</main>
	</body>
</html>
