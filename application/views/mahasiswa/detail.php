<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card" style="width: 18rem;">
			    <div class="card-body">
			    	<h5 class="card-title"><?php echo $mahasiswa['nama']; ?></h5>
			    	<h5 class="card-subtitle mb-2 text-muted"><?php echo $mahasiswa['nim']; ?></h5>
			    	<h5 class="card-title"><?php echo $mahasiswa['email']; ?></h5>
			    	<h5 class="card-title"><?php echo $mahasiswa['jurusan']; ?></h5>
			    	  <a href="<?php echo base_url(); ?>mahasiswa" class="card-link">Kembali</a>
			    </div>
			</div>	
		</div>
	</div>
</div>