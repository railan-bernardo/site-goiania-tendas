<?php $v->layout("_theme"); ?>
    <header class="title-header">
            <h1><?= $post->title; ?></h1>
    </header>
    <!-- header title -->
    <div class="container">
        <section class="main-section">
            <article>
             
                <div class="box-image">
                  <?php foreach($gallery as $value): ?>
                    <a href="<?= theme('/assets/images/produto.jpg'); ?>" class="img-container">
                            <img src="<?= theme('/assets/images/produto.jpg'); ?>" alt="" title="">
                    </a>
                  <?php endforeach; ?>
                </div>
            </ul>
        </section>
    </div>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
   <script src="<?= theme('/assets/js/lighbox.js'); ?>"></script>

<script>
    (function() {
        var $gallery = new SimpleLightbox('.box-image a', {});
    })();
   
</script>
  <?= $v->section("scripts"); ?>