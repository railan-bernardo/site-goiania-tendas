<?php $v->layout("_theme"); ?>
<header class="title-header">
    <h1>Nossos Produtos</h1>
</header>
<!-- header title -->
<div class="container">
    <section class="main-section">
        <?php foreach($products as $product): ?>
        <article class="box-article">
            <div class="img-container">
                <img src="<?= url("/storage/{$product->cover}"); ?>" alt="<?= $product->title; ?>"
                    title="<?= $product->title; ?>">
                <a href="" class="link-budget"><i class="fab fa-whatsapp"></i><span>Compre Agora</span></a>
            </div>
            <!-- img -->
            <h2><?= $product->title; ?></h2>
            <div class="box-group-button">
                <a href="<?= url("/produto/{$product->uri}"); ?>" class="button btn-more">Veja Mais</a>
                <a href="<?= url('/orcamento') ?>" class="button btn-budget">Orçamento</a>
            </div>
        </article>
        <?php endforeach; ?>
        <?php if($pub): ?>
        <div class="pub" style="width: 66%; height: 387px;">
            <?php foreach($pub as $banner): ?>
            <img src="<?= url("/storage/{$banner->cover}") ?>" alt="<?= $banner->name; ?>"
                style="width: 100%; height: 100%; object-fit: cover;" />
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </section>
    <div class="box-paginator">
        <?= $paginator; ?>
    </div>
</div>