<!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="<?= base_url()?>/assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Our Weekly Schedule</h2>
                        <div class="breadcrumb__widget">
                            <a href="<?= base_url()?>">Home</a>
                            <span><?= $subtitle;?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

	<!-- Start schedule Area -->
	<section class="trainers-page-section spad overflow-hidden">
		
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12">
					<div class="section-title-wrap text-center">
						<h2>Schedule your Fitness Process</h2>
						
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="table-wrap col-lg-11">
					<table class="schdule-table table ">
						<thead class="thead-light">
							<tr>
								<th class="head" scope="col">Date</th>
								<th class="head" scope="col">Time</th>
								<th class="head" scope="col" colspan="2">Class , Instructor & Venue</th>
							</tr>
						</thead>
						<tbody>
							<?php
                          $i = 1;
                               foreach ($schedule as $sch) {
                                           ?>
							<tr>
								<td rowspan="3"> <?= $sch['date'];?></td>
								<td rowspan="3"> <?= $sch['fromtime'] ." - ".$sch['totime'] ;?></td>
								<td rowspan="1" style="color: green;" colspan="2"><strong><?= $sch['class'];?></strong>  </td>
							</tr>
							<tr>
								<td colspan="2"><strong>  <?= $sch['instructor'];?> </strong> </td>
							</tr>
							<tr>
								<td style="color: orange;"> <strong> <?= $sch['venue'];?> </strong> </td>
								<td> 
									<?php 
                                        switch ($sch['status']) {
                                            case 0:
                                                  echo '<strong style="color:red;"> Canceled </strong>';
                                                   break;
                                            case 1:
                                                echo '<strong style="color:green;"> Active </strong>';
                                                break;
                                                default:
                                                    echo "None";
                                                    break;
                                         }
                                    ?>
                                                            	
                                </td>
							</tr>
							<?php
                                 $i++;
                                  }

                                ?>
						
						</tbody>
					</table>
					<hr>
				</div>
			</div>
			<img class="featured-img img-fluid" src="<?= base_url("assets/img/hero-slider/3.png"); ?>" alt="">
		</div>
	</section>
	<!-- End schedule Area -->
