<?php foreach ($page as $acc){ $a=1;?>                                                                              
	<!-- Blog Hero Begin -->
    <section class="breadcrumb-option blog-hero set-bg" data-setbg="<?= base_url()?>/assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__hero__text">
                        <h2><?= $acc['name']?></h2>
                        <ul>
                            <li>Hosted By <span><?= $acc['host']?></span></li>
                            <li><?= $acc['date']?></li>
                            <li><?= $acc['avenue']?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__categories">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">All</a></li>
                                <li><a href="#">Fuel (20)</a></li>
                                <li><a href="#">Sweat (5)</a></li>
                                <li><a href="#">Play (9)</a></li>
                                <li><a href="#">Live (10)</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-8 order-lg-2 order-1">
                    <div class="blog__details">
                        <div class="blog__details__large">
                            <img src="<?=base_url('assets/backend/webimg/event/');?><?=$acc['photo'];?>" alt="">
                            <span><?= "Hosted ".$acc['host'];?></span>
                        </div>
                       
                        <div class="blog__details__quote">
                            <p><?= $acc['avenue']. "       At ".$acc['date']?></p>
                        </div>
                                                <div class="blog__details__desc">
                            <h4>The Secret to improving</h4>
                            <p><?= $acc['description'];?></p>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
		<?php $a++;}?>