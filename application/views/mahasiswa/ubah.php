<div class="container">
	<div class="row-mt-5">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Form Ubah Data </div>	
					<div class="card-body">
						
						<form action="" method="POST">
							<input type="hidden" name="id" value=" <?php echo $mahasiswa
							['id']; ?>">
							<div class="form-group">
								<label for="name">Nama : </label>
								<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $mahasiswa['nama']; ?>">
								<small class="form-text text-danger"><?php echo form_error('nama') ?></small>
							</div>
							<div class="form-group">
								<label for="nim">NIM : </label>
								<input type="number" class="form-control" name="nim" id="nim" value="<?php echo $mahasiswa['nim']; ?>">
								<small class="form-text text-danger"><?php echo form_error('nim') ?></small>
							</div>
							<div class="form-group">
								<label for="email">Email : </label>
								<input type="email" class="form-control" name="email" id="email" value="<?php echo $mahasiswa['email']; ?>">
								<small class="form-text text-danger"><?php echo form_error('email') ?></small>
							</div>
							<div class="form-group">
								<label for="name">Jurusan : </label>
								<select class="form-control" id="jurusan" name="jurusan">
									<!-- Cek jurusan -->
									<?php foreach($jurusan as $kejur): ?>
										<?php if ( $kejur == $mahasiswa['jurusan'] ) : ?>
									<option value="<?php echo $kejur; ?>" selected><?php echo $kejur; ?></option>
									<?php else : ?>
									<option value="<?php echo $kejur; ?>"><?php echo $kejur; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
							</div>
							<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>	