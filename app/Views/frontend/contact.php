    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="<?= base_url()?>/assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__widget">
                            <a href="<?= base_url()?>">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+250 785 184 851 - +250 785 122 307 </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>Inema Arts Centre, KG 563 St, Kigali <br> Heaven Fitness Center</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <span class="icon_clock_alt"></span>
                        <h4>Working</h4>
                        <p>Monday - Wednseday <br> Saturday - Sunday</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>yogis@yegoyogarwanda.rw</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.5216703843935!2d30.08837431472046!3d-1.9441479372458075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca6eb3bcec111%3A0x16e979d95248b4b!2sYego%20Yoga%20Rwanda!5e0!3m2!1sen!2srw!4v1587814266145!5m2!1sen!2srw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h5>Kigali, Rwanda</h5>
                <ul>
                    <li>Phone: +250 785 184 851</li>
                  <li>Add: Inema Arts Centre, KG 563 St, Kigali <br> Heaven Fitness Center</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Leave Comment Begin -->
    <div class="leave-comment comment-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="leave__comment__text">
                        <h2>Contact Us here</h2>
                        <form action="<?= base_url('manipulate_contact_us');?>" id="contactForm"  method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                <input type="text" name="fname" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lname" placeholder="Last Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Your Email">
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="phone" placeholder="Phone Number">
                            </div>
                                <div class="col-lg-12 text-center">
                                    <textarea name="message" placeholder="Your Comment"></textarea>
                                    <button type="submit" class="site-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Leave Comment End -->
	<!-- Trainers Section end -->
	<script src="<?= base_url('assets/backend/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/sweetalert/sweetalert.min.js');?>"></script>

<script>
  $(function(){

    $(document).on('submit', '#contactForm', function (event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url('manipulate_contact_us') ?>",
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
                            $('#contactForm')[0].reset();
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
  title: "Thank You!",
  text:value ,
  type: "success",
  closeOnConfirm:false

          });
  }
</script>