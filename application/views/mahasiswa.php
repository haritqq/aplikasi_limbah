<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Dashboard
        <small>Control panel</small>
        </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></I>Tambah Data Mahasiswa</button>
      <table class="table">
        <tr>
          <th>NO</th>
          <th>Nama Mahasiswa</th>
          <th>Nim</th>
          <th>Tanggal Lahir</th>
          <th>Jurusan</th>
          <th colspan="2">Aksi</th>
        </tr>
        <?php

        $no = 1;
        foreach ($mahasiswa as $mhs) : ?>

        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $mhs->nama  ?></td>
          <td><?php echo $mhs->nim ?></td>
          <td><?php echo $mhs->tgl_lahir ?></td>
          <td><?php echo $mhs->jurusan ?></td>
          <td><?php echo anchor('mahasiswa/hapus/'.$mhs->id, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>') ?></td>
          <td><div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div></td>
        </tr>

        <?php endforeach; ?>
      </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Mahasiswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'mahasiswa/tambah_aksi' ?>">
            
            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input type="text" name="nama" class="form-control">
            </div>

            <div class="form-group">
              <label>Nim</label>
              <input type="text" name="nim" class="form-control">
            </div>

            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="date" name="tgl_lahir" class="form-control">
            </div>

            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <select class="form-control" name="jurusan">
                  <option>Sistem Informasi</option>
                  <option>Teknik Informastika</option>
                  <option>Teknik Komputer</option>
              </select>
            </div>

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>

</div>