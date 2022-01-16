<!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="<?= base_url()?>/assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Our Instructors</h2>
                        <div class="breadcrumb__widget">
                            <a href="./index.html">Home</a>
                            <span><?= $subtitle;?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Classes Section Begin -->
    <section class="classes spad">
        <div class="container">
            <div class="classes__filter">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <div class="class__filter__select">
                                <p>Filter By Day:</p>
                                <select>
                                    <option>All</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="class__filter__select">
                                <p>Level:</p>
                                <select>
                                    <option>All Levels</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="class__filter__select">
                                <p>Teacher:</p>
                                <select>
                                    <option>All Teachers</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="class__filter__select">
                                <p>Style:</p>
                                <select>
                                    <option>All Styles</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="class__filter__btn">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
            	<?php foreach ($instructor as $inst) { $a=1;?>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="<?=base_url('assets/backend/webimg/instructor/');?><?=$inst['profile'];?>"  alt=""  height="280">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4><a style="color: green;" href="<?= base_url("single_instructor");?>/<?= $inst['id']?>"><?= $inst['name']; ?></a></h4>
                                    <span><?= $inst['title'];?></span>
                                </div>
                                <p class="col-md-7" style="text-align: justify;"><?php 
									$pos = 100;
									echo substr($inst['academic'], 0 , $pos).'<span><a href="" style="color:green;"> Read more </a></span>'; 
								?></p>
                                <div class="team__item__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $a++;}?>
                
                <div class="col-lg-12">
                    <div class="classes__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#"><span class="arrow_carrot-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->