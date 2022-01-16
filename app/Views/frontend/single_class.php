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
                            <a href="<?= base_url(); ?>">Our Classes</a>
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
                            <h4>Classes Information</h4>
                            
                            <ul class="classes__sidebar__item__id">
                                <li><span class="icon_pin_alt"></span> Heaven Fitness</li>
                                <li><span class="icon_id"></span> <?= $acc['name'];?></li>
                            </ul>
                           
                        </div>
                        <div class="classes__sidebar__item">
                            <h4>About Instructor</h4>
                            <div class="classes__sidebar__instructor">
                                <div class="classes__sidebar__instructor__pic">
                                    <img src="<?=base_url('assets/backend/webimg/class');?>/<?=$acc['inst_profile'];?>" alt="">
                                </div>
                                <div class="classes__sidebar__instructor__text">
                                    <div class="classes__sidebar__instructor__title">
                                        <h4><?= $acc['inst_name'];?></h4>
                                        <span><?= $acc['inst_title'];?></span>
                                    </div>
                                    
                                    <div class="classes__sidebar__instructor__social">
                                        <a href="https://web.facebook.com/yegoyoga.rwanda.37"><span class="social_facebook"></span></a>
                                        
                                        <a href="https://www.instagram.com/yegoyogarwanda/"><span class="social_instagram"></span></a>
                                      
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="classes__details">
                        <div class="classes__details__large">
                            <img src="<?=base_url('assets/backend/webimg/class');?>/<?=$acc['photo'];?>" alt="">
                            <span>All Levels</span>
                        </div>
                        
                        <h2><?= $acc['name'];?></h2>
                        <p><?= $acc['desc'];?></p>
                        
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
                        <h2>Related Class</h2>
                        
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
	                            <a href="<?= base_url("single_class");?>/<?= $inst['id']?>" class="class-btn">View More</a>
	                        </div>
                    	</div>
                	</div>
                	<?php $a++;}?>
               
                </div>
               
            </div>
    </section>
    <!-- Upcoming Classes Section End -->
	