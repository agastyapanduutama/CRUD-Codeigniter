<div class="container">
	<div class="row-mt-5">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Form Tambah Data </div>	
					<div class="card-body">
						
						<form action="" method="POST">
							<div class="form-group">
								<label for="name">Nama : </label>
								<input type="text" class="form-control" name="nama" id="nama">
								<small class="form-text text-danger"><?php echo form_error('nama') ?></small>
							</div>
							<div class="form-group">
								<label for="nim">NIM : </label>
								<input type="number" class="form-control" name="nim" id="nim">
								<small class="form-text text-danger"><?php echo form_error('nim') ?></small>
							</div>
							<div class="form-group">
								<label for="email">Email : </label>
								<input type="email" class="form-control" name="email" id="email">
								<small class="form-text text-danger"><?php echo form_error('email') ?></small>
							</div>
							<div class="form-group">
								<label for="name">Jurusan : </label>
								<select class="form-control" id="jurusan" name="jurusan">
									<?php foreach($jurusan as $kejur): ?>
									<option value="<?php echo $kejur; ?>"><?php echo $kejur; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>	