<!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="<?= base_url()?>/assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Our Classes</h2>
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

    <!-- Classes Section Begin -->
    <section class="classes spad">
        <div class="container">
            <div class="classes__filter">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="row" action="#">
                         <h2 class="text-success h3">REQUEST TO ATTEND CLASS</h2>
                            <div class="class__filter__select">
                                <p>Fullname:</p>
                              <input type="text"  name="names" class="form-control" id="names" placeholder="First name">
                                <p>Select Day:</p>
                                <select id="days">
                                    <option>All Days</option>
                                    <option>Monday</option>
                                    <option>Wesnesday</option>
                                    <option>Saturday</option>
                                  <option>Sunday</option>
                                </select>
                            </div>
                            
                            <div class="class__filter__select">
                                <p>Email</p>
                               <input type="email" name="email" id="email" class="form-control"  placeholder="Email address">
                                <p>Instructor:</p>
                                <select >
                                    <option>All Teachers</option>
                                  	<?php foreach ($instructor as $row) { $a=1;?>
                                    	<option><?= $row['name']?></option>
                                  	<?php $a++;}?>
                                  
                                </select>
                            </div>
                            <div class="class__filter__select">
                                <p>Phone number:</p>
                              <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                <p>Class:</p>
                                <select id="session">
                                    <option>All Styles</option>
                                    <?php foreach ($class as $row) { $a=1;?>
                                    	<option><?= $row['name']?></option>
                                  	<?php $a++;}?>
                                </select>
                            </div>
                            <div >
                                <button class="btn btn-success mt-4" onclick="RequestAttendWhatsapp()"><i class="fa fa-whatsapp"></i> Request via Whatsapp</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
            	<?php foreach ($class as $row) { $a=1;?>
                <div class="col-lg-4 col-md-6">
                    <div class="classes__item classes__item__page">
                        <div class="classes__item__pic set-bg" data-setbg="<?=base_url('assets/backend/webimg/class');?>/<?=$row['photo'];?>">
                            <span>All Levels</span>
                        </div>
                        <div class="classes__item__text">
                            
                            <h4><a href="<?= base_url("single_class");?>/<?= $row['id']?>"><?= $row['name'];?></a></h4>
                            <h6><?= $row['inst_name'];?><span>- <?= $row['inst_title'];?></span></h6>
                            <a href="<?= base_url("single_class");?>/<?= $row['id']?>" class="class-btn">View more</a>
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

<script>
  
  function RequestAttendWhatsapp() { 
     
    var phone = document.getElementById('phone').value;
    var names = document.getElementById('names').value;
    var email = document.getElementById('email').value;
    var session = document.getElementById('session').value;
    var days = document.getElementById('days').value;
   
    var url  = "https://api.whatsapp.com/send?phone=+250785184851&text="
   		
    	+ " CLIENT REQUEST TO ATTEND SESSION OR CLASS  " + "%0a%0a"
        + "Client Name : " + names + "%0a"
    	+ "Client Phone : " + phone + "%0a"
    	+ "Client Email : " + email + "%0a"
        + " INFORMATION OF CLASS  " + "%0a%0a"
        + " Class : " + session + "%0a"
    	+ "Class Timetable : " + days + "%0a"
    	+ " Register NOW !: %0a%0a%0a"
        + " https://www.yegoyogarwanda.rw/login " ;
    
    window.open(url,'_blank').focus();
    	    	

    	
        
  } 


</script>