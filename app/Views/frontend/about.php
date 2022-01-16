<!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="<?= base_url()?>/assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>About Us</h2>
                        <div class="breadcrumb__widget">
                            <a href="<?= base_url()?>">Home</a>
                             <span><?= $subtitle?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
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
    <!-- About Section End -->

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
                                    echo substr($inst['academic'], 0 , $pos).'<span><a href="" style="color:green;"> Read more </a></span>'; 
                                ?></p>

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


