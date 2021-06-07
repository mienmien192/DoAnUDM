<div class="content-wrapper">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Add Product</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->
		<form method="post" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group">
					<label for="inputName">TenSP</label>
					<input type="text" class="form-control" id="inputName" placeholder="tensp" name="tensp">
				</div>
				<div class="form-group">
					<label for="inputName">img</label>
					<input type="file" name="img">
				</div>
				<div class="form-group">
					<label for="inputName">Giá</label>
					<input type="number"  class="form-control"id="inputName" placeholder="gia" name="gia">
				</div>	
				<div class="form-group">
					<label for="inputName">Số lượng</label>
					<input type="number"  class="form-control"id="inputName" placeholder="Số lượng" name="soluong">
				</div>	
				<div class="form-group">
					<label for="inputName">Xuất xứ</label>
					<input type="text"  class="form-control"id="inputName" placeholder="Xuất xứ" name="xuatxu">
				</div>	
				<input type="submit" value="Insert Product" class="btn btn-success float-left px-5 py-3" name="addProduct">
				<!-- /.card-body -->

			</form>
		</div>
	</div>