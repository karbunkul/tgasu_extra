

<div id="main-banner" class="carousel slide">
        <?php $banner_dir = 'http://localhost/devel/' . drupal_get_path('theme', 'tgasu') . '/banner'; ?>
    <!-- Carousel items -->
    <div class="carousel-inner">
    	<div class="active item">
    		<img alt="" src="<?php print $banner_dir; ?>/1.jpg">
        <div class="carousel-caption">
        	<h4>Первый слайд</h4>
          	<p>Ну а тут можно выводить любой текст, в том числе и такие ссылки <a href="/node/1"><button class="btn btn-danger">подробнее</button></a></p></div>
    		</div>
    	<div class="item">
    		<img alt="" src="<?php print $banner_dir; ?>/3.png">
        <div class="carousel-caption">
        	<h4>Второй слайд</h4>
          	<p>Текст для второго слайда</p>
        </div>
    	</div>
    	<div class="item">
    		<img alt="" src="<?php print $banner_dir; ?>/2.jpg">
        <div class="carousel-caption">
        	<h4>Third Thumbnail label</h4>
          	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>
    	</div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#main-banner" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#main-banner" data-slide="next">&rsaquo;</a>
    </div>