<!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="<?= base_url()?>/assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Massage</h2>
                        <div class="breadcrumb__widget">
                            <a href="<?= base_url()?>">Home</a>
                            <span>We cordially welcome you to  an hour vacation, on our massage table</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

	<!-- Event Details Section -->
	<section class="event-details-section spad overflow-hidden">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-8">

					<div class="event-preview">
				<img src="<?= base_url("assets/img/massage.jpg"); ?>" alt="">
			</div>
					<div class="event-details">
						<div class="row">
							<div class="col-md-8">
								<h2 style="color: green;">Massage Therapy</h2>
								
							</div>
							<div class="col-md-4 text-left text-md-right">
								<a href="#appointment" class="btn btn-success btn-sm">Request Appointement</a>
							</div>

						</div>
						<hr>
						
							<h4 style="color: green;">Full Body Relaxation Treatment  - RWF 20,000/25,000 (60/90 Min)</h4>
							<p>Experience all benefits of Swedish massage and aromatherapy by using our nature essential oils. This therapy focuses on tight muscles and lymph drainage to improve body relaxation and rejuvenation.</p>
							<h4 style="color: green;">Full Body Deep Tissue Treatment  - RWF 25,000/30,000 (60/90 Min)</h4>
							<p>Inability to let go often expresses itself in the body. Therefore, this type of massage is performed with hands by stretching tight muscles and easing toxins arising from daily stresses. Forearms and Knuckling are deepening movements to manipulate deep layers of muscles and connective tissues. </p>
							<h4 style="color: green;"> Back, Shoulders and Neck Massage  - RWF 15,000 (45 Min) </h4>		<p>The most affective part with tiredness is our back. This treatment helps to release tension from our back resulting into deep body relaxation which may cause you to fall asleep.</p>
							<hr>
						
						
					
					</div>
					
				</div>
				<div class="col-lg-4 col-md-5 col-sm-8 sidebar">
					<div class="sb-widget">
						<div class="footer-widget" id="appointment">
						<div class="about-widget">
							<img src="<?= base_url("assets/img/logo-massage.jpg"); ?> " alt="">
							<p style="text-align: justify;">Massage is not only a luxury, It is also another way towards a Healthy and Happier Life.</p>
							<hr>
						</div>
					</div>
					<h4 class="sb-title" style="color:green;">Appointement form</h4>
						<div class="classes-info">
                          
							<form class="singup-form" method="POST" action="<?= base_url("manipulate_massage");?>"   id="create_instructor_form">
						<div class="row">
							<div class="form-group col-md-12">
								
								<input type="text" class="form-control" name="names" id="names" placeholder="Full Name">
							</div>
							<div class="form-group col-md-12">
								
								<input type="number" class="form-control" name="phone" id="phone" placeholder="Phone">
							</div>
							<div class="form-group col-md-12">
								
								<select name="type" id="type"  class="form-control">
									<option>Full Body Relaxation Treatment</option>
									<option>Full Body Deep Tissue Treatment</option>
									<option>Back, Shoulders and Neck Massage</option>
								</select>
							</div>
							<div class="form-group col-md-12">
								
								<select name="duration" id="durations"  class="form-control">
									<option>45 Minutes</option>
									<option>60 Minutes</option>
									<option>90 Minutes</option>
								</select>
							</div>
                          <div class="form-group col-md-12">
								
								<select name="days" id="days"  class="form-control col-md-12">
									<option>Monday</option>
									<option>Tuesday </option>
									<option>Thursday </option>
                                  <option>Friday  </option>
								</select>
							</div>
							<div class="form-group col-md-12">
								
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
							</div>
							<div class="form-group col-md-12">
								
								<input type="text" class="form-control" name="location" id="location" placeholder="Location Address">
								<hr>
							</div>
							<div class="col-md-12">
								<input type="submit" name="submit" class="btn btn-success btn-block " value="Send via Website">
                             
							</div>
                         
                          <div class="col-md-12">
							 <br>
                             <a class="btn btn-success btn-block" onclick="goToWhatsapp()">
                               <i class="fa fa-whatsapp" style="font-size:24px;color:white"></i>  Send Us on Whatsapp
                            </a>

							</div>
						</div>
					</form>
					<div class="footer-widget">
						<div class="about-widget">
							
							<p style="text-align: justify;">Come once for the experience. Return with benefits of healing hands.</p>
							<hr>
						
							<ul>
								<li><i class="fa fa-phone"></i>(+250) 785 122 307 /  (+250) 785 184 851 </li>
                            	<li><i class="fa fa-envelope"></i> yogis@yegoyogarwanda.rw</li>
                           	 	<li><i class="fa fa-location-arrow"></i> Ituze Mindfulness & Yoga Center</li>
							</ul>
						</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Event Details Section end -->
	 <script src="<?= base_url('assets/backend/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/sweetalert/sweetalert.min.js');?>"></script>

 <script type="text/javascript">    
   
  $(function(){

    $(document).on('submit', '#create_instructor_form', function (event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url('manipulate_massage') ?>",
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache:false,
                async:false,
                success: function (data) {

                    var json = null;
                    try {
                        json = JSON.parse(data);
                        if (json.hasOwnProperty("error")) {
                            done(json.error);
                        } else {
                            done(json.success);
                           
                            $('#create_instructor_form')[0].reset();
                            window.location.reload();
                           
                        }
                    } catch (e) {
                        alert("System error please try again later");
                        console.log(e);
                    }
                }
            });
        });
 
  }) ;


   
 function done(value)
  {
   swal({
  name: "Oops!!",
  text:value ,
  type: "success",
  closeOnConfirm:false

          });
  }

   


  function goToWhatsapp() { 
     
    var phone = document.getElementById('phone').value;
    var names = document.getElementById('names').value;
    var type = document.getElementById('type').value;
    var duration = document.getElementById('durations').value;
    var day = document.getElementById('days').value;
    var email = document.getElementById('email').value;
    var location = document.getElementById('location').value;
    
    var url  = "https://api.whatsapp.com/send?phone=+250785184851&text="
   		
    	+ " YEGO YOGA RWANDA MASSAGE APPOINTMENT " + "%0a%0a"
        + "Client Name : " + names + "%0a"
    	+ "Client Phone : " + phone + "%0a"
    	+ "Massage Type : " + type + "%0a"
    	+ "Massage Duration : " + duration + "%0a"
    	+ "Choice Days : " + day + "%0a"
    	+ "Client Email : " + email + "%0a"
    	+ "Client Address : " + location + "%0a%0a%0a"
        + " VERIFIED SENT FROM OUR WEBSITE " ;
    
    window.open(url,'_blank').focus();
    	    	

    	
        
  } 


</script>
      
      