<div class="content-wrapper">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Edit Product</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<form method="post" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group">
					<label for="inputName">TenSP</label>
					<input type="text" class="form-control" id="inputName" placeholder="tensp" name="tensp" value="<?php echo $data['product']['tensp']; ?>">
				</div>
				<div class="form-group">
					<label for="inputName">img</label>
					<div class="input-group">
						<div class="custom-file" style="display: flex;">
							<input type="file" class="custom-file-input" id="exampleInputFile" name="img" value="<?php echo $data['product']['img']; ?>">
							<img style="display: right;" width="50px" src="<?php echo URL.'public/layout/img/product'.$data['product']['img'] ?>">
							<label style="" class="custom-file-label" for="exampleInputFile">Choose file</label>
						</div>
					</div>
					
				</div>
				<div class="form-group">
					<label for="inputName">Giá</label>
					<input type="number"  class="form-control"id="inputName" placeholder="gia" name="gia" value="<?php echo $data['product']['gia']; ?>">
				</div>	
				<div class="form-group">
					<label for="inputName">Số lượng</label>
					<input type="number"  class="form-control"id="inputName" placeholder="Số lượng" name="soluong" value="<?php echo $data['product']['soluong']; ?>">
				</div>	
				<div class="form-group">
					<label for="inputName">Xuất xứ</label>
					<input type="text"  class="form-control"id="inputName" placeholder="Xuất xứ" name="xuatxu" value="<?php echo $data['product']['xuatxu']; ?>">
				</div>	
				<input type="submit" value="Edit Product" class="btn btn-success float-left px-5 py-3" name="editProduct">
				<!-- /.card-body -->

			</form>
		</div>
	</div>