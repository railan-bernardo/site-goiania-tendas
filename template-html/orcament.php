<?php require __DIR__ . "/header.php"; ?>
<main class="main-conatiner">
	<header class="title-header">
			<h1>Orçamento</h1>
	</header>
	<!-- header -->
	<div class="container">
			<section class="main-form">
				<article class="form-default-oc">
					<form class="form-orcament">
						<div class="label-lg2-oc">
							<select name="juridic" class="input-margin-r">
								<option value="Pessoa Fisica">Pessoa Fisica</option>
								<option value="Pessoa Juridica">Pessoa Juridica</option>
							</select>
							 <input type="text" name="name" placeholder="Nome">
						</div>
						<div class="label-lg2-oc">
							 <input class="input-margin-r" type="text" name="company" placeholder="Empresa">
							 <input type="text" name="email" placeholder="E-mail">
						</div>
						<div class="label-lg2-oc">
							 <input class="input-margin-r" type="text" name="telephone" placeholder="Telefone">
							 <input type="text" name="phone" placeholder="Celular">
						</div>
						<div class="label-lg2-oc">
							 <select class="input-margin-r" name="state">
							 	<option disabled selected>Estado</option>
							 </select>
							 <select name="city">
							 	<option disabled selected>Cidade</option>
							 </select>
						</div>
						<div class="label-lg2-oc">
							 <input class="input-margin-r" type="text" name="address" placeholder="Endereço">
							 <input type="text" name="zipcode" placeholder="CEP">
						</div>
						<div class="label-lg2-oc">
							 <textarea name="items" rows="8" cols="12" placeholder="Itens para Orçamento"></textarea>
						</div>
						<button type="submit" class="send-orcament">Enviar</button>
					</form>
				</article>
				<article class="right-contact">
					<h1>Ligue para Nossa Central <br>de Vendas</h1>
			            <div class="box-group-button">
			                <a href="tel:" class="button btn-more"><i class="fas fa-phone-alt"></i>Ligue Fácil</a>
			            </div>
			            <span>Siga nos:</span>
			 			<div class="social-midia-footer oc-midia">
			 				<a href="" class="social-midia" title="Siga no Instagram"><i class="fab fa-instagram"></i></a>
			 				<a href="" class="social-midia" title="Acompanhe no Facebook"><i class="fab fa-facebook-f"></i></a>
			 			</div>
				</article>
			</section>
		</div>
</main>
<?php require __DIR__ . "/footer.php"; ?>