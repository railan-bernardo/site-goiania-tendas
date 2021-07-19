<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Site Goiânia</title>
	<!-- styles -->
	<link rel="stylesheet" href="assets/css/boot.css"/>
	<link rel="stylesheet" href="assets/css/style.css"/>
	<link rel="stylesheet" href="assets/css/lightbox.css"/>
	<link rel="stylesheet" href="assets/css/slick.css"/>
	<link rel="stylesheet" href="assets/css/slick-theme.css"/>
	
</head>
<body>
	<header class="main-header-top">
		<div class="container">
			<div class="nav-top flex-container">
				<div class="logo-top">
					<img src="assets/images/logo.png" alt="" title="" />
				</div>
				<!-- end logo -->
				<div class="top-menu">
					<span class="mobil-button-nav" id="openNav"><i class="fas fa-bars"></i></span>
					<!-- icon menu open -->
					<ul class="menu">
						<li><a href="index.php" class="a-link">Home</a></li>
						<li><a href="sobre.php" class="a-link">Quem Somos</a></li>
						<li><a href="products.php" class="a-link">Produtos</a></li>
						<li><a href="orcament.php" class="a-link">Orçamento</a></li>
						<li><a href="work.php" class="a-link">Trabalhe Conosco</a></li>
						<li><a href="contact.php" class="a-link">Fale Conosco</a></li>
					</ul>
					<span class="target"></span>
				</div>
			</div>
			<!-- nav end -->
	    </div>
	    <div class="nav-carrosel">
	    	<div class="container carrosel-flex slide-item">
			   <?php for($i = 1; $i <= 15; $i++): ?>
					<a href="" class="link-carrosel">
						<i class="fas fa-campground"></i>
						<span>Tenda Piramidal</span>
					</a>
			   <?php endfor; ?>
		    </div>
		</div>
		<div class="nav-carrosel-ca">
	    	<div class="container carrosel-flex slide-item">
			   <?php for($i = 1; $i <= 10; $i++): ?>
					<a href="" class="link-carrosel" style="width: 250px;">
						<i class="fas fa-campground"></i>
						<span>Tenda Piramidal</span>
					</a>
			   <?php endfor; ?>
		    </div>
		</div>
	</header>