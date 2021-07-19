
 <?php $v->layout("_theme"); ?>
    	<section class="col-12 m-bottom">
                <header class="header-title default-header m-section-top">
                   <div class="content">
                      <h1>Our SERVICES</h1>
                   </div>
                </header>
    		<div class="content">
	    		<section class="flex wrap-service">
	    			<?php 
           // foreach ($services as $value) {
                foreach ($services as $value) {

             ?>
             
	    			<div class="card card-border card-right card-bottom col-3 margin-bottom-box animate__animated animate__flash">
                        <a href="<?= url("/services/subcategories/{$value->uri}") ?>" title="<?= $value->title; ?>">
	    				<div class="box-image animate__animated animate__rotateIn position-relative flex flex-center aling-cente position-left-right-top-bottom">
	    					
	    					<img src="<?= url("/storage/".$value->cover); ?>" alt="<?= $value->title; ?>">
	    				</div>
	    				 <div class="card-title">
                 
                            <h2><?= $value->title; ?></h2>

                        </div>
                        </a>
	    			</div>
	    			<?php 
          //} 
        } 
        ?>
	    		</section>
	    		<?= $paginator; ?>
    		</div>
    	</section>
    	
