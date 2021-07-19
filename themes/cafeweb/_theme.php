<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="mit" content="2021-03-29T10:32:56-03:00+163467">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?= $head; ?>

    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/css/lightbox.css"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/css/splide.min.css"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/css/slick.css"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/css/slick-theme.css"); ?>"/>

</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>

<!--HEADER-->

   <header class="main-header-top">
        <div class="container">
            <div class="nav-top flex-container">
                <div class="logo-top">
                    <img src="<?= theme('/assets/images/logo.png'); ?>" alt="" title="" />
                </div>
                <!-- end logo -->
                <div class="top-menu">
                    <span class="mobil-button-nav" id="openNav"><i class="fas fa-bars"></i></span>
                    <!-- icon menu open -->
                    <ul class="menu">
                        <li><a href="<?= url(); ?>" class="a-link">Home</a></li>
                        <li><a href="<?= url('/sobre'); ?>" class="a-link">Quem Somos</a></li>
                        <li><a href="<?= url('/produtos'); ?>" class="a-link">Produtos</a></li>
                        <li><a href="<?= url('/orcamento'); ?>" class="a-link">Orçamento</a></li>
                        <li><a href="<?= url('/vagas'); ?>" class="a-link">Trabalhe Conosco</a></li>
                        <li><a href="<?= url('/contato'); ?>" class="a-link">Fale Conosco</a></li>
                    </ul>
                    <span class="target"></span>
                </div>
            </div>
            <!-- nav end -->
        </div>
       <?php $produtos = (new \Source\Models\Service())->find()->fetch(true); ?>
        <div class="nav-carrosel">
            <div class=" carrosel-flex <?php if($produtos > 5) echo 'slide-item'; ?>">
               <?php
                    foreach($produtos as $product): 
                ?>
                    <a href="<?= url("/produto/{$product->uri}") ?>" class="link-carrosel">

                        <div class="img_icon_home">
                            <?php if($product->icon == "" ||  $product->icon == null): ?>
                                <img src="<?= theme("/assets/images/tenda-personalizada-icon.png"); ?>">
                                 <?php else: ?>
                            <img src="<?= url("/storage/$product->icon"); ?>">
                        <?php endif; ?>
                        </div>

                        <span><?= $product->title; ?></span>
                    </a>
               <?php endforeach; ?>
            </div>
        </div>
    </header>
    <!-- end header -->

<!--CONTENT-->
<main class="main-container">
    <?= $v->section("content"); ?>
</main>
<a href="" class="float desktop" >
            <img src="<?= theme("/assets/images/float.png"); ?>" alt="Whatssap">
        </a>

        <!-- vesão mobil -->
        <a href="" class="float smartphone">
            <img src="<?= theme("/assets/images/float.png"); ?>" alt="Whatssap">
        </a>
<!--FOOTER-->
<footer class="main-footer">
    <div class="optin-footer">
        <div class="container flex-container">
            <div class="col-wd-3">
                <div class="item-opt">
                    <span class="opt-awesome"><i class="fas fa-map-marked-alt"></i></span>
                        <h2>
                            ENTREGA EM TODO<br>
                            TERRITÓRIO BRASILEIRO
                        </h2>
                </div>
            </div>
            <div class="col-wd-3">
                <div class="item-opt">
                    <span class="opt-awesome"><i class="fas fa-credit-card"></i></span>
                        <h2>
                            EPARCELAMENTO EM<br>
                            ATÉ 12X SEM JUROS
                        </h2>
                </div>
            </div>
            <div class="col-wd-3">
                <div class="item-opt">
                    <span class="opt-awesome"><i class="fas fa-industry"></i></span>
                        <h2>
                            FABRICAÇÃO<br>
                            PRÓPRIA
                        </h2>
                </div>
            </div>
        </div>
    </div>
    <?php 
    use \Source\Models\SitePost;
    $site = (new SitePost())->find("", "phone, phone_wp, email, facebook, instagram")->fetch(true);
     ?>
    <!-- optin footer -->
    <div class="container">
        <div class="nav-footer">
            <div class="col-wd-5">
                <h2>Nossos Produtos</h2>
                <ul class="menu-footer">
             <?php
              $pro = (new \Source\Models\Products())->find();
              $pager = new \Source\Support\Pager("/s/");
              $pager->pager($pro->count(), 5, (!empty($data["page"]) ? $data["page"] : 1));

             $posts = $pro->limit($pager->limit())->offset($pager->offset())->order("RAND()")->fetch(true); ?>
             <?php foreach($posts as $post): ?>
                    <li><a href="<?= url("/produto/{$post->uri}"); ?>"><?= $post->title; ?></a></li>
            <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-wd-5">
                <h2>Goiânia Tendas</h2>
                <ul class="menu-footer">
                    <li><a href="<?= url('/sobre'); ?>">Quem Somos</a></li>
                    <li><a href="<?= url('/produtos'); ?>">Produtos</a></li>
                    <li><a href="<?= url('/vagas'); ?>">Trabalhe Conosco</a></li>
                    <li><a href="<?= url('/contato'); ?>">Fale Conosco</a></li>
                    <li><a href="<?= url('/orcamento'); ?>">Orçamento</a></li>
                </ul>
            </div>
            <div class="col-wd-5">
                <h2>Endereço</h2>
                <div class="menu-footer">
                    <span>Avenida Frei Miguelino, 638</span>
                    <span>Góia II</span>
                    <span>Goiânia - GO</span>
                    <span>74485-382</span>
                    <span>Brasil</span>
                </div>
            </div>
            <div class="col-wd-5">
                <h2>Fale Conosco</h2>
                <ul class="menu-footer">
                    <?php foreach($site as $config): ?>
                        <?php
                            $phone = str_replace('/', "<br>", $config->phone);
                         ?>
                    <span><?= $phone; ?></span>
                <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-wd-5">
                <div class="logo-footer">
                    <img src="<?= theme('/assets/images/logo.png'); ?>" alt="" title="" />
                </div>
                <div class="social-midia-footer">
                     <?php foreach($site as $config): ?>
                    <a target="_blank" href="<?= $config->instagram; ?>" class="social-midia" title="Siga no Instagram"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="<?= $config->facebook; ?>" class="social-midia" title="Acompanhe no Facebook"><i class="fab fa-facebook-f"></i></a>
                     <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- nav footer -->
       <div class="form-of-payment">
            <div class="payment img_contain">
                <h5>Formas de<br>Pagamento</h5>
                <img src="<?= theme('/assets/images/payment.jpg'); ?>" alt="Forma de Pagamentos" title="Forma de Pagamentos">
            </div>
            <div class="payment img_contains">
                <h5>Segurança</h5>
                <img src="<?= theme('/assets/images/seguro.jpg'); ?>" alt="Site Seguro" title="Site Seguro">
            </div>
       </div>
       <?php foreach($site as $config): ?>
       <p class="copy">
           <?= $config->copyright; ?>
       </p>
        <?php endforeach; ?>
     </div>
 </footer>

    <script src="https://kit.fontawesome.com/86f5b0a58f.js" crossorigin="anonymous"></script>
<!--     <script src="<?php //theme("/assets/js/nav.js"); ?>"></script> -->
       <script src="<?= url("/shared/scripts/jquery.min.js"); ?>"></script>
       <script src="<?= theme("/assets/scripts.js"); ?>"></script>


<script src="<?= url("/shared/scripts/jquery.form.js"); ?>"></script>
<script src="<?= url("/shared/scripts/jquery-ui.js"); ?>"></script>
<script src="<?= url("/shared/scripts/jquery.mask.js"); ?>"></script>
<script src="<?= url("/shared/scripts/tinymce/tinymce.min.js"); ?>"></script>
<script src="<?= url("/themes/cafeadm/assets/js/scripts.js", CONF_VIEW_ADMIN); ?>"></script>
<?= $v->section("scripts"); ?>
</body>
</html>
