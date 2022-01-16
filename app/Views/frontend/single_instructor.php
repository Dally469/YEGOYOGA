<?php foreach ($page as $acc){ $a=1;?>
	<!-- Breadcrumb Begin -->
	<section class="breadcrumb-option set-bg" data-setbg="<?= base_url()?>/assets/img/breadcrumb.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb__text">
						<h2><?= $acc['name'];?></h2>
						<div class="breadcrumb__widget">
							<a href="<?= base_url(); ?>">Home</a>
							<a href="<?= base_url(); ?>">Our Instructor</a>
							<span><?= $acc['name'];?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb End -->

	<!-- Classes Section Begin -->
	<section class="classes-details spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">

					<div class="classes__sidebar">
						<div class="classes__sidebar__item classes__sidebar__item--info">
							<h4>Instructor Information</h4>
							<ul class="classes__sidebar__item__widget">
								<li>
									<img src="<?=base_url('assets/backend/webimg/instructor');?>/<?=$acc['profile'];?>" class="img-tuse" alt="">

								</li>
							</ul>
							<ul class="classes__sidebar__item__id">
								<li><span class="fa fa-user"></span><?= $acc['name'];?></li>
								<li> <?= $acc['title'];?></li>
							</ul>

						</div>


					</div>
				</div>
				<div class="col-lg-8">
					<div class="classes__details">

						<p  style="text-align: justify"><?= $acc['academic'];?></p>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Classes Section End -->
	<?php $a++;}?>


<!-- Upcoming Classes Section Begin -->
<section class="upcoming-classes spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title normal-title">
					<h2>Our Classes</h2>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="team__slider owl-carousel">

				<?php foreach ($related as $inst) { $a=1;?>
					<div class="col-lg-6">
						<div class="classes__item">
							<div class="classes__item__pic set-bg" data-setbg="<?=base_url('assets/backend/webimg/class');?>/<?=$inst['photo'];?>">
								<span>For <?= $inst['cost']." Frw";?></span>
							</div>
							<div class="classes__item__text">
								
								<h4><a href="<?= base_url("single_class");?>/<?= $inst['id']?>"><?= $inst["name"]?></a></h4>
								<h6><?= $inst["inst_name"]?> <span>- <?= $inst["inst_title"]?></span></h6>
								
							</div>
						</div>
					</div>
					<?php $a++;}?>

			</div>

		</div>
</section>
<!-- Upcoming Classes Section End -->

