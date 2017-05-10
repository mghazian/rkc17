<div class="container-fluid">
	<div class="row">
		<div style="width: 300px; margin-right: 5%" class="pull-right">
			<h2>Login</h2>
			<form class="form" method="POST" action="">
				<div class="form-group">
					<label>Username</label>
					<input type="text" id="username" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" id="username" name="username" class="form-control">
				</div>
				<div class="row">
					<div class="pull-right">
						<input type="submit" value="Masuk" class="btn btn-info">
					</div>
				</div>
				<div class="row p-t-10">
					<div class="pull-right">
						<i>Belum memiliki akun? Silahkan daftar <a href="<?php echo base_url ('home/registrasi'); ?>">disini</a></i>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>