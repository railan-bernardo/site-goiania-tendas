<?php require __DIR__ . "/header.php"; ?>
<main class="main-conatiner">
	<header class="title-header">
			<h1>Quem Somos</h1>
	</header>
	<!-- header title -->
	<div class="container">
		<article class="content-sobre">
			<p>
				Com sede em Goiânia/ GO a GOIÂNIA TENDAS foi criada 2013 e desde então vem se especializando em infraestruturas para diversos tipos de eventos. Nosso compromisso é cobrir com excelência, beleza e segurança. Hoje
				atendemos todo território brasileiro cobrindo festas, feiras abertas, exposições, camping, workshops, casamentos,
				confraternizações ou qualquer ocasião onde necessite de coberturas de qualidade.
			</p>
			<p>
				A empresa conta com excelente estrutura interna e equipe bem treinada para a produção de tendas e acessórios
			</p>
			<p>
				Estamos constantemente buscando soluções para as necessidades dos clientes. Adquirindo novas tecnologias,
				buscando parcerias com o objetivo de aumentar a vida útil e melhorar a estabilidade do produto final, além de proporcionar requinte e conforto para todos os tipos de evento. 
			</p>
		</article>
		<section class="main-section">
			<ul class="slide-gallery">
			<?php for($i = 1; $i <= 12; $i++): ?>
				<li class="box-article-g">
					<a href="assets/images/produto.jpg" class="img-container">
							<img src="assets/images/produto.jpg" alt="" title="">
					</a>
				</li>
			<?php endfor; ?>
			</ul>
		</section>
    </div>
</main>
<?php require __DIR__ . "/footer.php"; ?>
<script src="assets/js/lighbox.js"></script>
<script>
    (function() {
        var $gallery = new SimpleLightbox('.box-article-g a', {});
    })();
    $('.slide-gallery').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>