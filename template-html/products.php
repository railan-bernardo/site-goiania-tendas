<?php require __DIR__ . "/header.php"; ?>
<main class="main-conatiner">
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
		<div class="box-paginator">
			<ul class="paginator">
				<li><a href=""><<</a></li>
				<span class="active">1</span>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">>></a></li>
			</ul>
		</div>
    </div>
</main>
<?php require __DIR__ . "/footer.php"; ?>