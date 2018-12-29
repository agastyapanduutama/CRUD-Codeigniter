
<div class="container">
<?php if ($this->session->flashdata('flash')): ?>
<div class="row-mt-3">
	<div class="col-md-6">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data mahasiswa <strong>Berhasil</strong><?php echo $this->session->flashdata('flash'); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="row">
	<div class="col-md-6">
		<a href="<?php echo base_url();?>mahasiswa/tambahkeun" class="btn btn-primary">Tambah Data</a>
	</div>
</div>

 	<div class="row mb-3">
      <div class="col-lg-6">
        <form action="" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari mahasiswa" name="keyword" >
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

	<div class="row">
		<div class="col-md-6">
			<h1>Daftar Pelajar </h1>
			<ul class="list-group">
				<?php foreach($mahasiswa as $siswa) : ?>
				<li class="list-group-item">
					<?php echo $siswa['nama']; ?>
					
					<a href="<?php echo base_url(); ?>mahasiswa/hapusdata/<?php echo $siswa['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ingin menghapus data')">Hapus</a>

					<a href="<?php echo base_url(); ?>mahasiswa/ubah/<?php echo $siswa['id']; ?>" class="badge badge-success float-right ml-1">Ubah</a>

					<a href="<?php echo base_url(); ?>mahasiswa/details/<?php echo $siswa['id']; ?>" class="badge badge-info float-right ml-1">details</a>

				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>