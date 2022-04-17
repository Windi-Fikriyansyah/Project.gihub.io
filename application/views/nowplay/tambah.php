<div class="container" style="margin-block-end: 100px;">
<div class="row mt-3">
    <div class="col-md-6 ">

        <div class="card">
        <div class="card-header">
            INPUT DATA
        </div>
        <div class="card-body">
        <?= form_open_multipart('nowplay/tambah'); ?>
            <div class="mb-3">
                <label for="judulfilm" class="form-label">Judul Film</label>
                <input type="text"  name="judulfilm"  class="form-control" id="judulfilm" placeholder="Judul film">
                <small class="form-text text-danger"><?= form_error('judulfilm'); ?> </small>
            </div>

            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" name="tahun"  class="form-control" id="tahun" placeholder="Tahun">
                <small class="form-text text-danger"><?= form_error('tahun'); ?> </small>
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" name="genre"  class="form-control" id="genre" placeholder="Genre">
                <small class="form-text text-danger"><?= form_error('genre'); ?> </small>
            </div>

            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi</label>
                <input type="text" name="durasi"  class="form-control" id="durasi" placeholder="Durasi">
                <small class="form-text text-danger"><?= form_error('durasi'); ?> </small>
            </div>

            <div class="mb-3">
                <label for="sutradara" class="form-label">Sutradara</label>
                <input type="text" name="sutradara"  class="form-control" id="sutradara" placeholder="Sutradara">
                <small class="form-text text-danger"><?= form_error('sutradara'); ?> </small>
            </div>

         

            <div class="mb-3">
            <label for="formFile" class="form-label">Gambar Film</label>
            <input id="foto" name="foto" type="file" class="form-control" >
            </div>
            <button class="btn btn-primary " type="submit" name="tambah"><i class="fa fa-check"></i>&nbsp;Simpan</button>
                
            <?= form_close(); ?>
        </div>
        </div>



        
    </div>

</div>
</div>
