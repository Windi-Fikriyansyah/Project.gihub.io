
<div class="container-fluid project-carousel d-flex justify-content-center">
<div id="carouselExampleControls" class="carousel slide my-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url() ?>/assets/img/7.png" class="d-block w-100" alt="" class="carousel-item1">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url() ?>/assets/img/6.jpg" class="d-block w-100" alt="" class="carausel-item2">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="project-banner d-flex flex-column justify-content-center mx-3">
    <img src="<?php echo base_url() ?>/assets/img/4.jpg" alt="">
    <img src="<?php echo base_url() ?>/assets/img/5.jpg" alt="">

</div>
</div>




<section>
    <div class="container">
    
    <div spellcheck="false" class="text my-5 mx-3" contenteditable="true">
        NOW PLAYING
    </div>
<body>

<div class="thumbnail-slider">
	<div class="thumbnail-container">


    <?php
    foreach($nowplay as $us):
    ?>
		<div class="item">
      <a href="#" title="Luca 2021">
			<img src="<?php echo base_url('assets/foto/' . $us['foto']); ?>" alt="image" class="img8 my-0" >
      </a>
            
            <h2 class="mx-2 my-2"><?= $us['judulfilm']; ?></h2>
            <h3 class="mx-2"><?= $us['durasi'];?> | <?=$us['genre'];?></h3>
            
		</div>
		<?php endforeach; ?>
	</div>
  
  <!-- controls slides -->
  <div class="controls">
  </div>

</div>

</body>
</div>
</section>



