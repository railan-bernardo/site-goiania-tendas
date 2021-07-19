<?php require __DIR__ . "/header.php"; ?>
<main class="main-conatiner">
	<header class="title-header">
			<h1>Tenda Piramidial</h1>
	</header>
	<!-- header title -->
	<div class="container">
		<div class="header-line">
        <div class="info-header right-span-item">
          <h2>Tamanhos Disponiveis</h2>
            <div class="tm-img">
                <span class="span-item">3x3</span>
                <span class="span-item">3x3</span>
                <span class="span-item">3x3</span>
                <span class="span-item">3x3</span>
                <span class="span-item">3x3</span>
            </div>
        </div>
        <div class="info-header">
          <h2>Cores Disponiveis</h2>
            <div class="tm-img bg-colors">
                <span class="span-item"></span>
                <span class="span-item"></span>
                <span class="span-item"></span>
                <span class="span-item"></span>
                <span class="span-item"></span>
            </div>
        </div>
        <div class="info-header">
          <h2><span>Contato</span></h2>
            <div class="box-group-button">
                <a href="tel:" class="button btn-more"><i class="fas fa-phone-alt"></i>Ligue Fácil</a>
                <a href="" class="button sp-bg-green btn-budget"><i class="fab fa-whatsapp"></i>Compre Agora</a>
            </div>
        </div>
		</div>
		<section class="box-section">
			 <article class="article">
            <div class="image-full-dt">
              <img src="assets/images/product-full.jpg" alt="" title=""/> 
            </div> 
       </article>
       <article class="article">
            <p>Produzidas em diferentes cores e tamanhos, nossas
            tendas piramidais são ideais para todos os tipos de eventos, sejam eles de pequeno, médio ou grande porte.
            Podem ser desenvolvidas em formatos especiais com
            medidas adaptadas ao ambiente a ser coberto.
            </p>
            <p>
              Sua estrutura permite o encaixe de uma na outra, de
              modo a cobrir áreas maiores tornando-as perfeitas para
              atendender a eventos, feiras, pontos de venda,
              workshops, exposições, armazenagem de produtos, maquinários entre outros. Fale com nossa equipe e conheça
              hoje a tenda ideal para seu projeto.
           </p>
       </article>
		</section>
    <!-- box section -->
    </div>
     <div class="desc-footer">
      <div class="container desc-flex">
          <div class="box-desc">
              <h2>Especificação Técnica</h2>
              <p>
                Cobertura: Lona PVC – material extra durável, aditivado
                contra raios ultravioletas (UV) e oxidação, contém blackout ( impede 40% do calor ), não propagador de
                chamas, anti-mofo, anti-ressecamento e impermeável.
                Junção com rádio frequência e reforços nos pontos de
                maior desgaste, garantindo maior durabilidade. Durabilidade média de 5 anos com exposição ao sol e chuva.
              </p>
          </div>
          <div class="box-desc">
              <h2>Estrutura</h2>
              <p>
                Elaborada com sistema de encaixe, unidas com parafusos e conexões em aço pelo sistema MIG de soldagem,
                tratamento antiferruginoso ( galvanização ) e fixação
                por cordas ou cabos.
              </p>
          </div>
    </div>
  </div>
    <!-- description -->
    <div class="container">
      <section class="section-footer">
          <div class="box-table">
              <div class="table-header">
                  <span>Tamanho</span>
                  <span>Peso</span>
                  <span>Pessoas</span>
              </div>
              <div class="container-table">
                <?php for($i = 1; $i <= 5; $i++): ?>
                  <div class="tr-item">
                      <span class="td-item">3x3</span>
                      <span class="td-item">76kg</span>
                      <span class="td-item">15</span>
                  </div>
                <?php endfor; ?>
              </div>
          </div>
          <!-- table -->
          <div class="form-defaul-right">
              <h2>Orçamento Fácil</h2>
                <form class="form-role" action="" method="post">
                    <div class="label-lg2">
                          <input type="text" name="name" placeholder="Nome" >
                          <input type="text" name="email" placeholder="E-mail">
                    </div>
                    <div class="label-lg2">
                          <input type="text" name="phone" placeholder="Telefone">
                          <input type="text" name="message" placeholder="Mensagem">
                    </div>
                    <button type="submit" class="btn-send">Enviar</button>
                </form>
          </div>
      </section>
    </div>
</main>
<?php require __DIR__ . "/footer.php"; ?>
