<?php require __DIR__ . "/header.php"; ?>
<main class="main-conatiner">
	<section class="slide-container slide">
			<div class="slick-slide">
				<img src="assets/images/banner.jpg" alt="" title=""/>
			</div>
				<div class="slick-slide">
				<img src="assets/images/banner.jpg" alt="" title=""/>
			</div>
				<li class="slick-slide">
				<img src="assets/images/banner.jpg" alt="" title=""/>
			</div>
				<div class="slick-slide">
				<img src="assets/images/banner.jpg" alt="" title=""/>
			</div>
	</section>
	<!-- slide end -->
	<header class="title-header">
			<h1>Nossos Produtos</h1>
	</header>
	<!-- header title -->
	<div class="container">
		<section class="main-section">
			<?php for($i = 1; $i <= 6; $i++): ?>
				<article class="box-article">
					<div class="img-container">
							<img src="assets/images/produto.jpg" alt="" title="">
							<a href="" class="link-budget"><i class="fab fa-whatsapp"></i><span>Compre Agora</span></a>
					</div>
					<!-- img -->
							<h2>Tenda Chapéu de Bruxa</h2>
					<div class="box-group-button">
							<a href="" class="button btn-more">Veja Mais</a>
							<a href="" class="button btn-budget">Orçamento</a>
					</div>
				</article>
			<?php endfor; ?>
		</section>
    </div>
</main>
<?php require __DIR__ . "/footer.php"; ?>