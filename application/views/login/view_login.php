<div class="container">
	<h2>Silakan Masukan Username dan Password anda</h2>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
		<table>
        <div class="form-group">
			<label for="name">Username : </label>
			<input type="text" class="form-control" name="username" id="Username">	
		</div>
        <div class="form-group">
			<label for="Password">Password : </label>
			<input type="password" class="form-control" name="password" id="Password">	
		</div>
					<button type="submit" class="btn btn-primary float-right"> Login</button>	
		</table>
	</form>
</div>