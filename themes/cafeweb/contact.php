<?php $v->layout("_theme"); ?>
<header class="title-header">
      <h1>Fale Conosco</h1>
  </header>
  <!-- header -->
  <div class="container">
      <section class="main-form">
        <article class="form-default-oc">
          <form class="form-orcament" action="<?= url("/contato/post"); ?>" methos="post">
                      <div class=""><?= flash(); ?></div>
                    <?= csrf_input(); ?>
                    <input type="hidden" name="action" value="create"/>
            <div class="label-lg2-oc">
              <input name="first_name" class="input-margin-r" placeholder="Nome">
               <input type="text" name="email" placeholder="E-mail">
            </div>
            <div class="label-lg2-oc">
               <input class="input-margin-r" type="text" name="phone" placeholder="Telefone">
               <input type="text" name="subject" placeholder="Assunto">
            </div>
            
            <div class="label-lg2-oc">
               <textarea name="msg" rows="8" cols="12" placeholder="Mensagem"></textarea>
            </div>
            <button type="submit" class="send-orcament">Enviar</button>
          </form>
        </article>
        <article class="right-contact">
          <h1>Ligue para Nossa Central <br>de Vendas</h1>
                  <div class="box-group-button">
                     <?php foreach($sites as $site): ?>
                      <a href="tel:<?= $site->phone_wp; ?>" class="button btn-more"><i class="fas fa-phone-alt"></i>Ligue Fácil</a>
                       <?php endforeach; ?>
                  </div>
                  <span>Siga nos:</span>
            <div class="social-midia-footer oc-midia">
               <?php foreach($sites as $site): ?>
              <a target="_blank" href="<?= $site->instagram; ?>" class="social-midia" title="Siga no Instagram"><i class="fab fa-instagram"></i></a>
              <a target="_blank" href="<?= $site->facebook; ?>" class="social-midia" title="Acompanhe no Facebook"><i class="fab fa-facebook-f"></i></a>
              <?php endforeach; ?>
            </div>
        </article>
      </section>
    </div>
      
               
