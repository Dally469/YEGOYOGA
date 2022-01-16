<!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="<?= base_url()?>/assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2><?= $subtitle?></h2>
                        <div class="breadcrumb__widget">
                            <a href="<?= base_url()?>">Home</a>
                            <span><?= $title?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-lg-1 order-2">
                    <div class="blog__sidebar">
						<h2 style="color: #0b2e13">Rise and Shine</h2>
						<hr>
						<div class="embed-responsive embed-responsive-16by9">

							<iframe  class="embed-responsive-item" src="<?= base_url()?>/assets/video/meetaline.mp4" allowfullscreen></iframe>
						</div>
						<h2 style="color: #0b2e13">Rise and Shine Rwanda</h2>
						<hr>
						<div class="embed-responsive embed-responsive-16by9">

							<iframe  class="embed-responsive-item" src="<?= base_url()?>/assets/video/riseandshine.mp4" allowfullscreen></iframe>
						</div>
						<h2 style="color: #0b2e13; font-size: 20px;">Rise and Shine</h2><hr>
						<div class="embed-responsive embed-responsive-16by9">

							<iframe  class="embed-responsive-item" src="<?= base_url()?>/assets/video/ashntanga.mp4" allowfullscreen></iframe>
						</div>
                       
                    </div>
                </div>
                <div class="col-lg-7 order-lg-2 order-1">
                    <div class="row">
                    	<?php foreach ($event as $row) { $a=1;?>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?=base_url('assets/backend/webimg/event/');?><?=$row['photo'];?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?= $row['date']?></li>
                                        <li><i class="fa fa-user"></i> <?= $row['host']?></li>
                                    </ul>
                                    <h5><a href="<?= base_url("single_event");?>/<?= $row['id']?>"><?= $row['name']?></a></h5>
                                    <p><?= $row['description']?> </p>
                                    <a href="<?= base_url("single_event");?>/<?= $row['id']?>" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                         <?php $a++;}?>
                        
                        
                        <div class="col-lg-12">
                            <div class="classes__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#"><span class="arrow_carrot-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
