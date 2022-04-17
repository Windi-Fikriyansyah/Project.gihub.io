<div class="container">
<div class="row mt-3">
    <div class="col-md-6 ">

            <div class="card">
        <div class="card-header">
            UPDATE DATA
        </div>

        <div class="card-body">
        <?= form_open_multipart('nowplay/ubah'); ?>
        <input type="hidden" name="id" value="<?= $ubah_nowplay['id_nowplay']; ?>">
            <div class="mb-3">
                <label for="judulfilm" class="form-label">Judul Film</label>
                <input type="text"  name="judulfilm" value="<?= $ubah_nowplay['judulfilm']; ?>"  class="form-control" id="judulfilm" placeholder="Judul film">
                <small class="form-text text-danger"><?= form_error('judulfilm'); ?> </small>
            </div>

            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" name="tahun" value="<?= $ubah_nowplay['tahun']; ?>"  class="form-control" id="tahun" placeholder="Tahun">
                <small class="form-text text-danger"><?= form_error('tahun'); ?> </small>
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" name="genre" value="<?= $ubah_nowplay['genre']; ?>"  class="form-control" id="genre" placeholder="Genre">
                <small class="form-text text-danger"><?= form_error('genre'); ?> </small>
            </div>

            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi</label>
                <input type="text" name="durasi" value="<?= $ubah_nowplay['durasi']; ?>"  class="form-control" id="durasi" placeholder="Durasi">
                <small class="form-text text-danger"><?= form_error('durasi'); ?> </small>
            </div>

            <div class="mb-3">
                <label for="sutradara" class="form-label">Sutradara</label>
                <input type="text" name="sutradara" value="<?= $ubah_nowplay['sutradara']; ?>" class="form-control" id="sutradara" placeholder="Sutradara">
                <small class="form-text text-danger"><?= form_error('sutradara'); ?> </small>
            </div>

           

            <div class="form-group">
                <label for="inputName">Foto</label>
                <div class="col-sm-3">
							<img src="<?php echo base_url('assets/foto/'.$ubah_nowplay['foto']) ?>" class="img-thumbnail">
					    </div>
                    <div class="custom-file">
                        
                    <input type="hidden" name="image" value="<?= $ubah_nowplay['foto']; ?>">
                        <input id="foto" name="foto" type="file" class="form-control">
                        <label for="logo" class="custom-file-label"></label>
                    </div> 
        </div>
            <button class="btn btn-primary " type="submit" name="ubah"><i class="fa fa-check"></i>&nbsp;Ubah</button>
                
            <?= form_close(); ?>
        </div>
        </div>



        
    </div>

</div>
</div>