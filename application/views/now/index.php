<section>
    <div class="container-fluid project-now d-flex justify-content-center">
    <div class="container">
    
    <div spellcheck="false" class="text1 my-5 mx-3" contenteditable="true">
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
</div>
</section>