 <!-- Hero Section Begin -->
 <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="<?= base_url()?>/assets/img/hero/imgs_1.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h1 >Become a part of Kigali Yoga Community</h1>
                                <p style="text-align: justify; color: white;font-weight: 300px;  font-size: 20px; margin-top:20px;">Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully</p>
                                <a href="#register" class="primary-btn">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero__items set-bg" data-setbg="<?= base_url()?>/assets/img/hero/hero_bg.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h1 >Attend a Class</h1>
                                <p style="text-align: justify; color: white; font-weight: 300px; font-size: 20px; margin-top:20px;">Yego Yoga is a pop-up studio offering yoga classes and massage in Kigali at convenient locations around town. We offer weekday and weekend classes, here is our current class schedule. We also offer private and small group classes. Please contact us to make a request.</p>
                                <a href="#register" class="primary-btn">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero__items set-bg" data-setbg="<?= base_url()?>/assets/img/hero/hero-m.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h1 style="color: green;">Book A Massage</h1>
                                <p style="text-align: justify; color: green;font-weight: 300px;  font-size: 20px; margin-top:20px;">Massage is not only a luxury, It is also another way towards a Healthy and Happier Life.</p>
                                <a href="<?= base_url('massage')?>" class="primary-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero__items set-bg" data-setbg="<?= base_url()?>/assets/img/hero/hero-2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h1>Stay Connected</h1>
                                <p style="text-align: justify; color: white; font-weight: 300px; font-size: 20px; margin-top:20px;">Follow us on Facebook to receive our updates on class schedule, special events, workshops, retreats and trainings in Rwanda and in East Africa. <br>Follow us Instagram for yoga inspiration. We feature images of yogis, classes and yoga happenings in Rwanda and on the continent. #yoga africa your posts to be featured!</p>
                                <a href="#" class="primary-btn">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero__items set-bg" data-setbg="<?= base_url()?>/assets/img/hero/hero.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h1>Teach a Class </h1>
                                <p style="text-align: justify; color: white;font-weight: 300px;  font-size: 20px; margin-top:20px;">Are you an aspiring yogi, want to know more about our teaching and training opportunities? Are you a yoga instructor, would you like to teach a class while you are in Kigali? Please contact us, we are always looking for more students and instructors, we are excited to hear from you, even if you’re here for a short visit.</p>
                                <a href="#register" class="primary-btn">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home__about__pic">
                        <div class="home__about__pic__item large-item set-bg" data-setbg="<?= base_url()?>/assets/img/imgs_11.jpg"></div>
                        <div class="home__about__pic__item">
                            <div class="home__about__pic__item__inner set-bg" data-setbg="<?= base_url()?>/assets/img/woassa.jpg"></div>
                            <div class="home__about__pic__item__inner set-bg" data-setbg="<?= base_url()?>/assets/img/saasa.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home__about__text">
                        <div class="section-title">
                           
                             <h2>Our Moto is simple</h2>
                            <hr>
        
                        </div>
                       
                        <p class="para-2">
                        The breath slows down the nervous system, allowing you to manage stress and emotions with more patience and Clarity.</p>
                        <ul>
                                <li>Do Yoga</li>
                                <li>Take deep breaths</li>
                                <li>Enjoy life </li>
                                    
                            </ul>
                          <br>
                          <br>
                        <a href="<?= base_url('about')?>" class="primary-btn">MORE ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->



    <!-- Classes Section Begin -->
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

                	<?php foreach ($class as $inst) { $a=1;?>
                    <div class="col-lg-6">
                    <div class="classes__item">
                        <div class="classes__item__pic set-bg" style="height: 350px;" data-setbg="<?=base_url('assets/backend/webimg/class');?>/<?=$inst['photo'];?>">
                            <span>For <?= $inst['cost']." Frw";?></span>
                        </div>
                        <div class="classes__item__text">
                           
                            <h4><a href="<?= base_url("single_class");?>/<?= $inst['id']?>"><?= $inst["name"]?></a></h4>
                            <h6><?= $inst["inst_name"]?> <span>- <?= $inst["inst_title"]?></span></h6>
                            <a href="#register" class="class-btn">Join Now</a>
                        </div>
                    </div>
                </div>
                <?php $a++;}?>
               
                </div>
               
            </div>
        </div>
    </section>
    <!-- Classes Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <h2>Our Gallery</h2>
                        <p>This is the beautiful yogi and yoginis that have shared their journey and growth with<br />
                            us. Take a look!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="<?= base_url()?>/assets/img/gallery/galllery-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="<?= base_url()?>/assets/img/gallery/galllery-4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="<?= base_url()?>/assets/img/gallery/galllery-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="<?= base_url()?>/assets/img/gallery/galllery-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="<?= base_url()?>/assets/img/gallery/galllery-5.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="<?= base_url()?>/assets/img/gallery/galllery-6.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="<?= base_url()?>/assets/img/gallery/galllery-7.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="<?= base_url()?>/assets/img/gallery/galllery-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

       <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img src="img/icon.png" alt="">
                        <h2>Meet Our Instructors</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team__slider owl-carousel">
                    <?php foreach ($instructor as $inst) { $a=1;?>
                    <div class="col-lg-6">
                        <div class="team__item">
                            <div class="team__item__pic">
                                <img src="<?=base_url('assets/backend/webimg/instructor');?>/<?=$inst['profile'];?>" class="img-tuse" alt="">
                            </div>
                            <div class="team__item__text">
                                <div class="team__item__title">
                                    <h4><?= $inst['name']?></h4>
                                    <span><?= $inst['title']?></span>
                                </div>
                                <p class="col-lg-7"><?php 
                                    $pos = 100;
                                    echo substr($inst['academic'], 0 , $pos); 
                                ?><a href="<?= base_url('single_instructor')?>/<?= $inst['id']?>" > Read More</a></p>

                                <div class="team__item__social">
                                    <a href="https://web.facebook.com/yegoyoga.rwanda.37"><i class="fa fa-facebook"></i></a>
                                 
                                    <a href="https://www.instagram.com/yegoyogarwanda/"><i class="fa fa-instagram"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $a++;}?>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

   

    <!-- Appoinment Section Begin -->
    <section class="appointment" id="register">
        <div class="container">
            <div class="appointment__text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Register with Us</h2>
                        </div>
                    </div>
                </div>
                <form  method="POST" action="<?= base_url("manipulate_client");?>" id="create_instructor_form" class="appointment__form">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text"  name="firstname" placeholder="First name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="lastname"  placeholder="Last name">
                        </div>
                        <div class="col-lg-12">
                            <input type="email" name="email"  placeholder="Email address">
                            <button type="submit">Register</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Appoinment Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="testimonial__slider owl-carousel">
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p style="text-align: justify; font-size:20px;">I have always had an attraction, I would even call it almost an “addiction” (in a good way), to challenges! By practicing yoga, I had an honor to get challenged in all the best ways possible: Physically,psychologically,emotionally and spiritually.</p>
                                <img src="<?= base_url()?>/assets/img/cla.jpg" alt="">
                                <h5>SHIMWA Claudia <span>- Yoga Instructor</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p style="text-align: justify; font-size:20px;">Abdoul MUJYAMBERE is rwandan-based 200hrs certified yoga teacher from Baron Baptiste institute. He is currently a yoga teacher at Yego Yoga and he travels teaching in other communities around the world; Madagascar, Senegal, Kenya, Mauritius, Sri Lanka and Belgium among others. </p>
                                <img src="<?= base_url()?>/assets/img/abu.jpg" alt="">
                                <h5>MUJYAMBERE Abdoul <span>- Yoga Instructor</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p style="text-align: justify; font-size:20px;">I'm Intern Dr Celestin TWIRINGIYIMANA, I Completed 200 hours Yoga training with AYP .I completed hands-on assist training and Mind body wellbeing with AYP. I've been doing Yoga since 2015 and now a yoga instructor for 2 years.</p>
                                <img src="<?= base_url()?>/assets/img/dr.jpg" alt="">
                                <h5>Dr Celestin TWIRINGIYIMANA <span>- Yoga Instructor</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p style="text-align: justify; font-size:20px;">I had never realized the positive benefits of yoga and massage until I merged them. Joseph is Yoga instructor and Spa Therapist who has been practicing yoga over 10 years focusing on Ashtanga and Baptiste Power Vinyasa Flow. </p>
                                <img src="<?= base_url()?>/assets/img/jo.jpg" alt="">
                                <h5>Joseph Maniraguha <span>- Yoga Instructor</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p style="text-align: justify; font-size:20px;">I like to think I teach students to awaken bliss in their bodies from the inside out, while developing an approach to exercise that is healing. I believe that a consistent yoga practice with an honest approach transforms the body and mind.</p>
                                <img src="<?= base_url()?>/assets/img/ali.jpg" alt="">
                                <h5>Allie Huttinger <span>- Co-founder & Instructor</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p style="text-align: justify; font-size:20px;">A practitioner of yoga faces life not as a victim but as a master, in control of his or her life. Regular practice will bring you to look at yourself and your goals in a new light.</p>
                                <img src="<?= base_url()?>/assets/img/aline.jpg" alt="">
                                <h5>Aline Mazimpaka <span>- Yoga Instructor</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p style="text-align: justify; font-size:20px;">Philosophy: Yoga is the perfect harmony of breath and energy to reconnect with ourselves and balance our busy lives. I find yoga is the ultimate opportunity to practice gratitude and compassion towards others and, most importantly, towards ourselves.</p>
                                <img src="<?= base_url()?>/assets/img/testimonial/testimonial-1.png" alt="">
                                <h5>Mary-Patton Davis <span>- Co-founder & Instructor</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

        <!-- Sign up Section end -->
        <script src="<?= base_url('assets/backend/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/sweetalert/sweetalert.min.js');?>"></script>

 <script type="text/javascript">    
   
  $(function(){

    $(document).on('submit', '#create_instructor_form', function (event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url('manipulate_client') ?>",
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



  function myFunction() { 
       
        $("#update_guide_model").modal("show");
} 


</script>
