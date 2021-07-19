<?php $v->layout("_theme"); ?>
<header class="title-header">
            <h1>Orçamento</h1>
    </header>
    <!-- header -->
    <div class="container">
            <section class="main-form">
                <article class="form-default-oc">
                    <form class="form-orcament" action="<?= url("/orcamento/posts"); ?>">
                    <div class=""><?= flash(); ?></div>
                    <?= csrf_input(); ?>
                  <input type="hidden" name="action" value="create"/>
                        <div class="label-lg2-oc">
                            <select name="juridic" class="input-margin-r">
                                <option value="Pessoa Fisica">Pessoa Fisica</option>
                                <option value="Pessoa Juridica">Pessoa Juridica</option>
                            </select>
                             <input type="text" name="first_name" placeholder="Nome">
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
                             <select class="input-margin-r" name="state" id="estados">
                                <option></option>
                             </select>
                             <select name="city" id="cidades">
                           
                             </select>
                        </div>
                        <div class="label-lg2-oc">
                             <input class="input-margin-r" type="text" name="address" placeholder="Endereço">
                             <input type="text" name="zipcode" placeholder="CEP">
                             <input type="hidden" name="msg" value="vazio" placeholder="CEP">
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
            <input type="hidden" id="path" value="<?= theme("/assets/js/cidades_estados.json"); ?>">
        </div>
            <script src="<?= url("/shared/scripts/jquery.min.js"); ?>"></script>
        <script src="<?= theme("/assets/js/buscacidades.js"); ?>"></script>