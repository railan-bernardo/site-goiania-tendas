<?php $v->layout("_theme"); ?>
<header class="title-header">
    <h1><?= $post->title; ?></h1>
</header>
<!-- header title -->
<div class="container">
    <div class="header-line">
        <div class="info-header right-span-item">
            <h2>Tamanhos Disponiveis</h2>
            <div class="tm-img splide js-splide-secondary">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php foreach($images as $image): ?>
                        <?php if($post->id == $image->id_service){ ?>
                        <span class="span-item splide__slide" style="width: 45px !important; height: 45px !important;">
                            <img style="width: 45px !important; height: 45px !important;"
                                src="<?= url("/storage/{$image->cover}"); ?>" alt="<?= $image->title; ?>" /><small
                                class="tag"><?= $image->title; ?></small></span>
                        <?php } endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-header">
            <h2><span>Contato</span></h2>
            <div class="box-group-button">
                <?php foreach ($site as $config): ?>
                <a href="tel:<?= $config->phone_wp; ?>" class="button btn-more"><i class="fas fa-phone-alt"></i>Ligue
                    Fácil</a>
                <a href="<?= $config->phone_wp; ?>" class="button sp-bg-green btn-budget"><i
                        class="fab fa-whatsapp"></i>Compre Agora</a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <section class="box-section">
        <article class="article">
            <div id="gallery">
                <div class="js-splide-primary" id="splide">
                    <div class="splide__track">
                        <div class="image-full-dt splide__list">
                            <?php foreach($images as $image): ?>
                            <?php if($post->id == $image->id_service){ ?>
                            <img class="splide__slide" src="<?= url("/storage/{$image->cover}"); ?>"
                                alt="<?= $image->title; ?>" />
                            <?php } endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="article">
            <?= html_entity_decode($post->content); ?>
            <h2 id="cor-title">Cores Disponiveis</h2>
            <div class="color-artc">
                <?php foreach($sizes as $size): ?>
                <?php if($post->id == $size->idpost){ ?>
                <span class="span-item" style="background: <?= $size->color; ?>; padding: 15px;"></span>
                <?php } endforeach; ?>
            </div>
        </article>
    </section>
    <!-- box section -->
</div>

<?php if(!empty($post->specification) || !$post->specification == null): ?>
<div class="desc-footer">
    <div class="container desc-flex">
        <div class="box-desc">
            <h2>Especificação Técnica</h2>
            <p>
                <?= $post->specification; ?>
            </p>
        </div>
        <div class="box-desc">
            <h2>Estrutura</h2>
            <p>
                <?= $post->structure; ?>
            </p>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- description -->
<div class="container">
    <section class="section-footer">
        <div class="box-table">
            <?php foreach($sizes as $size): ?>
            <?php if($post->id == $size->idpost){ ?>

            <?php if($size->idpost){ ?>
            <div class="table-header">
                <span>Tamanho</span>
                <span>Peso</span>
                <span>Pessoas</span>
            </div>
            <?php } ?>
            <?php break; }  endforeach; ?>
            <div class="container-table">
                <?php foreach($sizes as $size): ?>
                <?php if($post->id == $size->idpost){ ?>
                <?php if($size->idpost){ ?>
                <div class="tr-item">
                    <span class="td-item"><?= $size->size; ?></span>
                    <span class="td-item"><?= $size->weight; ?></span>
                    <span class="td-item"><?= $size->persons; ?></span>
                </div>
                <?php } ?>
                <?php } endforeach; ?>
            </div>
        </div>
        <!-- table -->
        <div class="form-defaul-right">
            <h2>Orçamento Fácil</h2>
            <form class="form-role app_form" action="<?= url("/produto/{$post->uri}"); ?>" method="post">
                <div class=""><?= flash(); ?></div>
                <?= csrf_input(); ?>
                <input type="hidden" name="action" value="create" />
                <div class="label-lg2">
                    <input type="text" name="first_name" placeholder="Nome">
                    <input type="text" name="email" placeholder="E-mail">
                </div>
                <div class="label-lg2">
                    <input type="text" name="phone" placeholder="Telefone">
                    <input type="text" name="msg" placeholder="Mensagem">
                </div>
                <div class="label-lg2" style="display: none;">
                    <input type="text" name="juridic" value="vazio" placeholder="Telefone">
                    <input type="text" name="telephone" value="vazio" placeholder="Mensagem">
                    <input type="text" name="state" value="vazio" placeholder="Mensagem">
                    <input type="text" name="city" value="vazio" placeholder="Mensagem">
                    <input type="text" name="address" value="vazio" placeholder="Mensagem">
                    <input type="text" name="zipcode" value="vazio" placeholder="Mensagem">
                    <input type="text" name="company" value="vazio" placeholder="Mensagem">
                    <input type="text" name="items" value="vazio" placeholder="Mensagem">
                </div>
                <button type="submit" class="btn-send">Enviar</button>
            </form>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?= theme("/assets/js/splide.min.js"); ?>"></script>

<script>
// Create and mount the thumbnails slider.
var secondarySlider = new Splide('.js-splide-secondary', {
    rewind: true,
    fixedWidth: 100,
    fixedHeight: 64,
    isNavigation: true,
    gap: 10,
    focus: 'center',
    pagination: false,
    cover: true,
    breakpoints: {
        '600': {
            fixedWidth: 66,
            fixedHeight: 40,
        }
    }
}).mount();

// Create the main slider.
var primarySlider = new Splide('.js-splide-primary', {
    type: 'fade',
    heightRatio: 0.5,
    pagination: false,
    arrows: false,
    cover: true,
});

// Set the thumbnails slider as a sync target and then call mount.
primarySlider.sync(secondarySlider).mount();
</script>