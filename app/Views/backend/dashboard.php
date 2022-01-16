


<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1><?= $title?></h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Dashboard</a></li>

				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<section class="content">
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-gradient-dark">
					<div class="inner">
						<h3><?= $num_event ?></h3>

						<p>Events</p>
					</div>
					<div class="icon">
						<i class="fa fa-chart-bar"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-gradient-info">
					<div class="inner">
						<h3><?= $num_class?></h3>

						<p>Classes</p>
					</div>
					<div class="icon">
						<i class="fa fa-house-user"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-gradient-olive">
					<div class="inner">
						<h3><?= $num_results; ?></h3>

						<p> All Instructors </p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-gradient-navy">
					<div class="inner">
						<h3><?= $num_client?></h3>

						<p>All Subscribers</p>
					</div>
					<div class="icon">
						<i class="fa fa-users"></i>
					</div>
					<a href="<?= base_url('add_client')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
	</div>
</section>

