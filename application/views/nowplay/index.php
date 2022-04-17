<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="ibox-title" style="margin: 5px 120px;">
            <a href="<?= base_url('nowplay/tambah'); ?>" class="btn btn-w-m btn-primary">Tambah Data</a>
        </div>

<div class="container" style="text-align: center;">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Judul Film</th>
        <th>Tahun</th>
        <th>Genre</th>
        <th>Durasi</th>
        <th>Sutradara</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
                $no=1;
                foreach($nowplay as $us):
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><img class="img-thumbnail" alt="image" src="<?php echo base_url('assets/foto/' . $us['foto']); ?>" width="80"></td>
                    <td><?= $us['judulfilm']; ?></td>
                    <td><?= $us['tahun']; ?></td>
                    <td><?= $us['genre']; ?></td>
                    <td><?= $us['durasi']; ?></td>
                    <td><?= $us['sutradara'] ?></td>
                   
                    <td>
                    <a href="<?= base_url() ?>nowplay/ubah/<?= $us['id_nowplay']; ?>" ><button class="btn btn-info " type="button"><i class="fa fa-paste"></i> Edit</button></a>
                    <a href="<?= base_url() ?>nowplay/hapus/<?= $us['id_nowplay']; ?>" onclick="return confirm('Yakin Data Akan dihapus..?');" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                    
                </td>
                </tr>
                <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>
