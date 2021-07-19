
        <?php $v->layout("_theme"); ?>
    	<section class="slide-container slide">
            <?php if(!$banner): ?>
            <div class="slick-slide">
                <img src="<?=  theme('/assets/images/banner.jpg'); ?>" alt="" title=""/>
            </div>
            <?php else: ?>
                <?php foreach ($banner as $value): ?>
                
                    <div class="slick-slide">
                        <img src="<?=  url("/storage/{$value->cover}"); ?>" alt="<?= $value->title; ?>" title="<?= $value->title; ?>"/>
                     </div>   
                
               <?php endforeach; ?>
            <?php endif;  ?>
    </section>
    <!-- slide end -->
    <header class="title-header">
            <h1>Nossos Produtos</h1>
    </header>
    <!-- header title -->
    <div class="container">
        <section class="main-section">
            <?php if(!$products): ?>
                <div class="not-data">
                    <h2>Nada econtrado até o momento</h2>
                    <p>Volte mais tarde ou entre em contato conosco</p>
                </div>
            <?php else: ?>
            <?php foreach($products as $value): ?>
                <article class="box-article">
                    <div class="img-container">
                            <img src="<?= url("/storage/{$value->cover}"); ?>" alt="<?= $value->title; ?>" title="<?= $value->title; ?>">
                            <?php foreach($site as $config): ?>
                            <a href="<?= $config->phone_wp; ?>" class="link-budget"><i class="fab fa-whatsapp"></i><span>Compre Agora</span></a>
                        <?php endforeach; ?>
                    </div>
                    <!-- img -->
                            <h2><?= $value->title; ?></h2>
                    <div class="box-group-button">
                            <a href="<?= url("/produto/{$value->uri}"); ?>" class="button btn-more">Veja Mais</a>
                            <a href="<?= url("/orcamento") ?>" class="button btn-budget">Orçamento</a>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
        </section>
    </div>