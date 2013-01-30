<div id="main-banner" class="carousel slide" style="max-width: <?php print $max_width; ?>; min-height: <?php print $min_height; ?>;">
  <!-- slider items -->
  <div class="carousel-inner">
	<?php foreach ($slides AS $key => $slide): ?>
		<div class="<?php $active == $key ? print "active " : print "" ?>item">
		  <?php print $slide['content']; ?>
			<div class="carousel-caption">
			  <h4><?php print $slide['title']; ?></h4>
			  <p><?php print $slide['description']; ?></p>
			</div>
		</div>
	<?php endforeach; ?>
  </div>
  <!-- slider navigation -->
  <a class="carousel-control left" href="#main-banner" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#main-banner" data-slide="next">&rsaquo;</a>
</div>