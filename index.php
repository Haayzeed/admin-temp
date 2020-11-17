<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>
	<link rel="stylesheet" href="assets/styles/style.min.css">
	<style>
	#single-wrapper{
		background-image:url('assets/images/sativa.jpg');
		background-color: #14274E;
		background-blend-mode: overlay;
		overflow:hidden;
		width:100%;
		background-size: cover;
		background-position: center;
	}
	.login-box{
		width: 30%;
		padding: 50px 30px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background: rgb(255, 255, 255);

	}
	input{
		margin-bottom: 15px;
	}
	button{
		border-radius: 0 !important;
		background: #14274E !important;
		color: #fff !important;
	}
	.text-center{
		text-align: center !important;
		margin: 0 auto !important;
	}
	h4{
		color: #14274E;
	}
</style>

</head>

<body>

	<div id="single-wrapper">
		<div class="login-box">

			<form action="dashboard.php" class="frm-">
				<div class="inside">
					<center><i class="fa fa-microphone fa-5x text-center " style="color: #14274E"></i></center>
					<h4 class="text-center" style="margin-bottom: 50px !important; font-weight: bold;">Radio Admin Login</h4>
					<input type="text" placeholder="Username" class="frm-inp form-control">
					<input type="password" placeholder="Password" class="frm-inp form-control">
					<button type="submit" class="frm-submit btn btn-block rounded-0">Login <i class="fa fa-arrow-circle-right"></i></button>
				</div>
			</div>
		</form>
		<!-- /.frm-single -->
	</div><!--/#single-wrapper -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>