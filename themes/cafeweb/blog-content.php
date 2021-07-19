<?php $v->layout("_theme"); ?>

    	<section class="col-12 m-bottom">
                <header class="header-title-blog bg-blue">
                      	<h1 class="font-blog-mobile"> <?= $post->title; ?></h1>
                </header>
	    		<section class="content-blog position-relative page-hero-post">
             <div class="capa-image position-absolute">
                  <img src="<?= url("/storage/".$post->cover); ?>" alt="<?= $post->title; ?>" title="<?= $post->title; ?>"/>
                   <div class="data-time flex spaceBetween aling-cente">
                   <div class="flex aling-cente">
                      <img class="img-author" alt="<?= "{$post->author()->first_name} {$post->author()->last_name}"; ?>"
                                  title="<?= "{$post->author()->first_name} {$post->author()->last_name}"; ?>"
                                  src="<?= url("/storage/".$post->author()->photo); ?>"/>
                    <span>Por <?= "{$post->author()->first_name} {$post->author()->last_name}"; ?></span> 
                   </div><time>Data:  <?= date_fmt($post->post_at); ?></time>
                  </div>
              </div>
            <article class="htmlchar m-char-bottom">
                 <?= html_entity_decode($post->content); ?>
            </article>
	    		</section>
    		</div>
    	</section>
    	     <section class="col-12">
                <header class="header-title bg-header-category">
                   <div class="content">
                      <h1> Veja Também</h1>
                   </div>
                </header>
        <div class="content">
          <section class="flex wrap spaceBetween">
           <?php foreach ($related as $value) { ?>                   
            <div class="card col-4 margin-bottom-box">
               <a href="<?= url("/blog/{$value->uri}"); ?>" title="<?= $value->title; ?>">    
              <div class="box-image flex">
                <img src="<?= url("/storage/".$value->cover); ?>">
              </div>
              <div class="data-time m-lr"><p><?=$value->category()->title; ?> . Por <?= $value->author()->first_name; ?> <?= $value->author()->last_name; ?> .  <?= date_fmt($value->post_at); ?></p> </div>
                        <h1> <?= $value->title; ?></h1>
                        <p> <?= $value->subtitle; ?></p>
                         </a>
            </div>
            <?php } ?>
          </section>
        </div>
      </section>
