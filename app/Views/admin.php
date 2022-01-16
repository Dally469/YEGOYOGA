
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title;?> - Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?= base_url("assets/img/icon.png"); ?> " rel="icon">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url()?>/assets/backend/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= base_url()?>/assets/backend/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="<?= base_url()?>/assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url()?>/assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url()?>/assets/backend/plugins/summernote/summernote-bs4.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="<?= base_url('admin')?>" class="nav-link">Home</a>
			</li>
		</ul>

		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<!-- Notifications Dropdown Menu -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('logout')?>">
					<i class="fa fa-cog"></i> Logout
				</a>
			</li>

		</ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="<?= base_url()?>/assets/img/icon.png" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<a href="#" class="d-block"><?= $_SESSION['user_name']?></a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
						 with font-awesome or any other icon font library -->
					<li class="nav-item has-treeview">
						<a href="<?= base_url('admin')?>" class="nav-link">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Dashboard
							</p>
						</a>
					</li>

					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-calendar"></i>
							<p>
								Schedule
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?= base_url('add_schedule')?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>New Weekly Schedule</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('manage_schedule')?>" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Manage Schedule</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('add_class')?>" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Class
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('add_instructor')?>" class="nav-link">
							<i class="nav-icon fas fa-user"></i>
							<p>
								Instructor
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('add_client')?>" class="nav-link">
							<i class="nav-icon fas fa-users"></i>
							<p>
								Subscribers
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('add_event')?>" class="nav-link">
							<i class="nav-icon fas fa-chart-area"></i>
							<p>
								Events
							</p>
						</a>
					</li>

				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		  <?= $content; ?>
	</div>
	<!-- /.content-wrapper -->

	<footer class="main-footer">
		<div class="float-right d-none d-sm-block">
			<b>Version</b> 1.1
		</div>
		<strong>Copyright &copy; 2013-2020 <a href="#"> Yego Yoga Rwanda </a>.</strong> All rights
		reserved.
	</footer>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url()?>/assets/backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>/assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>/assets/backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>/assets/backend/dist/js/demo.js"></script>
<script src="<?= base_url()?>/assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>/assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>/assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>/assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url()?>/assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
<script>
	$(function () {
		// Summernote
		$('#summernote').summernote()
	})
</script>
<script>
	$(function () {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": true,
		});
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
		$("#summernote").summernote();
	});
</script>
</body>
</html>
