<?php
include 'includes/header.php';
include 'includes/sidebar.php';
?>
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<h4>Add Radio</h4>
					<hr>
					<form data-toggle="validator">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputName" class="control-label">Radio Name</label>
									<input type="text" class="form-control rounded-0" id="inputName" placeholder="Name here">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputName" class="control-label">Radio Category</label>
									<select class="form-control rounded-0">
										<option>--Select Radio category--</option>
										<option>Entertainment</option>
										<option>Sports</option>
										<option>Politics</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="inputName" class="control-label">Radio Link</label>
							<input type="text" class="form-control rounded-0" id="inputName" placeholder="Link">
						</div>
						<div class="form-group">
							<label for="inputName" class="control-label">Radio Description</label>
							<input type="text" class="form-control rounded-0" id="inputName" placeholder="Description">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block rounded-0 waves-effect waves-light">Add Radio</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="box-content">
					<h4>Modify Radio</h4>
					<hr>
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>S/N</th>
								<th>Radio Name</th>
								<th>Category Name</th>
								<th>Radio Link</th>
								<th>Radio Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>channel 1</td>
								<td>entertainment</td>
								<td>http://www.goole.com</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
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