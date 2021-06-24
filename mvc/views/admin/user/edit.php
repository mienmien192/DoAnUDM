<div class="content-wrapper">
	
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title"></h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<form method="post">
			<div class="card-body">
				<div class="form-group">
					<label for="inputName">Username</label>
					<input type="text" class="form-control" id="inputName" name="username" placeholder="username" value="<?php echo $data['user']['email']; ?>">
				</div>
				<div class="form-group">
					<label for="inputName">Password</label>
					<input type="password" class="form-control"id="inputName" name="password" placeholder="Password" value="<?php echo $data['user']['password']; ?>">
				</div>
				<div class="form-group">
					<label for="inputName">Level</label>
					<input type="text"  class="form-control"id="inputName" name="level" placeholder="Level" value="<?php echo $data['user']['level']; ?>">
				</div>	
				<input type="submit" value="Edit User" class="btn btn-success float-left px-5 py-3" name="editUser">
				<!-- /.card-body -->

			</form>
		</div>
	</div>