

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Electronic Farm</title>
	<script src="https://kit.fontawesome.com/9ad9a54963.js" crossorigin="anonymous"></script>
	<link href="css/styles.css" type="text/css" rel="stylesheet" />
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
</head>

<body>
	<div class="my-content-wrapper">
		<header id="main-header">
			<p><a href="">E-farm</a></p>
			<div id="search">
				<input type="search" name="search" placeholder="Search products, brands and categories" aria-label="Search" />
				<p class="se"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</p>
			</div>
			<div class="dropdown">
				<p><i class="fas fa-user"></i>  Login <i class="fas fa-chevron-down"></i></p>
				<div class="dropdown-content">
					<a href="">LOGIN</a>
					<p>-----OR------</p>
					<a href="register.php">CREATE ACCOUNT</a>
					<p><i class="fas fa-user"></i>  Account</p>
					<p><i class="fas fa-shopping-bag"></i>  Orders</p>
					<p><i class="fas fa-heart"></i>  Saved Items</p>				
				</div>
			</div>
			<div class="dropdown">
				<p><i class="far fa-question-circle"></i> Help <i class="fas fa-chevron-down"></i></p>
				<div class="dropdown-content">
					<a href="">Contact us</a>
					<a href="">Track My order</a>
					<a href="">How to pay</a>
					<a href="">Help Centre</a>				
				</div>
			</div>
			<p><a href=""><i class="fas fa-shopping-cart"></i>  Cart</a></p>
		</header>
		
		
		
		<main id="home-main">
			<aside id="main-menu">
				<div class="aside-accordion">
					<?php for($i=0;$i<10;$i++){					
					?>
					<div class="aside-accordion-item">
						<div class="aside-accordion-item-heading">
							<div class="aside-accordion-item-heading-toggleicon"><i class="fas fa-chevron-down"></i></div>
							<div class="aside-accordion-item-heading-title">Fruits</div>
						</div>
						<div class="aside-accordion-item-content">
							<a href="products.html?p=apples">Apples</a>
							<a href="products.html?p=bananas">Bananas</a>
							<a href="products.html?p=oranges">Oranges</a>
							<a href="products.html?p=mangoes">Mangoes</a>
							<a href="products.html?p=pineapples">Pineapples</a>
							<a href="products.html?p=others">Others</a>
						</div>
					</div>
					<?php } ?>
					
				</div>
			</aside>
			<article id="featured-products">
					<h1 style="width: 100%">Featured Products</h1>
					<div class="item">
						<div class="item-cover">
							<img alt="Fruits" src="images/fruits.jpg" />
						</div>
						<div class="item-content">
							<a href="#">Fruits</a>
							<p class="new-price">Kshs. 200/kg</p>
							<p class="old-price">Kshs. 300/kg</p>
						</div>
					</div>
					
					</div>			
			</article>
		</main>
		
		
		<footer>
			<p>Copyright 2020</p>
		</footer>
	</div>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
