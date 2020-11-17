<?php
include 'includes/header.php';
include 'includes/sidebar.php';
?>
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-4">
				<div class="box-content">
					<h4>Add Radio category</h4>
					<hr>
					<form data-toggle="validator">
						<div class="form-group">
							<label for="inputName" class="control-label">Category</label>
							<input type="text" class="form-control rounded-0" id="inputName" placeholder="Name here">
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block rounded-0 waves-effect waves-light">Add Category</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xs-8">
				<div class="box-content">
					<h4>Modify Radio category</h4>
					<hr>
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>S/N</th>
								<th>Category Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Entertainment</td>
								<td><a href="" class="btn btn-info rounded-0"><i class="fa fa-pencil"></i></a> <a href="" class="btn btn-danger rounded-0"><i class="fa fa-trash"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<?php
		include 'includes/footer.php';
		?>