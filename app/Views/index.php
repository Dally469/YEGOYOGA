<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yego Yoga Rwanda">
    <meta name="description" content="YegoYoga in Rwanda">
    <meta name="description" content="Yego Yoga in Rda">
    <meta name="description" content="rwanda yoga center">
    <meta name="description" content="Rwanda yogis">
    <meta name="description" content="where Yoga located in rwanda">
    <meta name="description" content="Yego Yoga kigali">
    <meta name="description" content="kigali yoga ">
    <meta name="description" content="Yoga in kigali Rwanda">
    <meta name="description" content="Yego Yoga Rwanda">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title?> - Yego Yoga Rwanda </title>
    <link href="<?= base_url("assets/img/icon.png"); ?> " rel="icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu">
        <div class="offcanvas__logo">
            <a href="<?= base_url()?>"><img src="<?= base_url()?>/assets/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <ul>
                <li>Call US: +250 785 184 851 - +250 785 122 307</li>
                <li>Write Us: yogis@yegoyogarwanda.rw</li>
                
            </ul>
           
        </div>
        <nav class="header__menu">
            <ul class="mobile-menu">
                                <li class="active"><a href="<?= base_url(); ?>">Home</a></li>
                                <li><a href="#">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('massage'); ?>">Massage</a></li>
                                        <li><a href="<?= base_url(); ?>">Yoga</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('directions'); ?>">Directions</a></li>
                                <li><a href="#">Schedule</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('class'); ?>">Class</a></li>
                                        <li><a href="<?= base_url('schedule'); ?>">Schedule</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('event'); ?>">Event</a></li>
                                <li><a href="<?= base_url('about'); ?>">About</a></li>
                                <li><a href="<?= base_url('contact'); ?>">Contact</a></li>
                               
                            </ul>
        </nav>
        <div class="offcanvas__social">
            <a href="https://web.facebook.com/yegoyoga.rwanda.37"><i class="fa fa-facebook"></i></a>
            
            <a href="https://www.instagram.com/yegoyogarwanda/"><i class="fa fa-instagram"></i></a>
           
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="header__logo">
                             <a href="<?= base_url()?>"><img src="<?= base_url()?>/assets/img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        
                    </div>
                </div>
                <div class="canvas__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
        <div class="header__nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-9">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="<?= base_url(); ?>">Home</a></li>
                                <li><a href="#">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('massage'); ?>">Massage</a></li>
                                        <li><a href="<?= base_url(); ?>">Yoga</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('directions'); ?>">Directions</a></li>
                                <li><a href="#">Schedule</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('class'); ?>">Class</a></li>
                                        <li><a href="<?= base_url('schedule'); ?>">Schedule</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('event'); ?>">Event</a></li>
                                <li><a href="<?= base_url('about'); ?>">About</a></li>
                                <li><a href="<?= base_url('contact'); ?>">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="header__social">
                            <a href="https://web.facebook.com/yegoyoga.rwanda.37"><i class="fa fa-facebook"></i></a>
                          
                            <a href="https://www.instagram.com/yegoyogarwanda/"><i class="fa fa-instagram"></i></a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

   <?= $content;?>

    <!-- Footer Section Begin -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__about">
                        <img src="<?= base_url()?>/assets/img/logo.png" alt="">
                         <ul>
                            <li>
                            Yego Yoga! Yes Yoga! For we believe Yoga can empower all.</br>
                            In our classes we Flow to create perfect harmony of breath, body and energy to reconnect with ourselves and Balance our busy lives.

                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer__widget">
                        <h5>Yoga Working Time</h5>
                        <ul class="footer-address">
                         <li><i class="material-icons"></i>Mon & Wed:  19h00 PM - 20H30 PM   <i class="fa fa-location-arrow"></i> ( <strong>Inema Arts Centre </strong> )</li>
                         <li><i class="material-icons"></i>Sat:  9h00 AM - 10h30 AM   <i class="fa fa-location-arrow"></i> ( <strong>Heaven Fitness </strong> )</li>
                         <li><i class="material-icons"></i>Sun:  14h00 PM - 15h30 PM  <i class="fa fa-location-arrow"></i> ( <strong>Heaven Fitness </strong> )</li>
                          
                        </ul>
                    </div>
                </div>
               
      			<div class="col-lg-3">
                    <div class="footer__widget">
                        <h5>Massage Working Days</h5>
                        <ul class="footer-address">
                            <li><i class="fa fa-calendar"></i> Monday ( <strong>Ituze Mindfulness & Yoga Center </strong> ) </li>
                            <li><i class="fa fa-calendar"></i> Tuesday ( <strong>Ituze Mindfulness & Yoga Center </strong> ) </li>
                            <li><i class="fa fa-calendar"></i> Thursday ( <strong>Ituze Mindfulness & Yoga Center </strong> ) </li>
                            <li><i class="fa fa-calendar"></i> Friday ( <strong>Ituze Mindfulness & Yoga Center </strong> ) </li>

                        </ul>
                    </div>
                </div>
      
                <div class="col-lg-3">
                    <div class="footer__widget">
                        <h5>Contact Us </h5>
                        <ul class="footer-address">
                            <li><i class="fa fa-phone"></i> (+250) 785 184 851 / (+250) 785 122 307</li>
                            <li><i class="fa fa-envelope"></i> yogis@yegoyogarwanda.rw</li>
                            

                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed  by <a href="#" target="_blank">Qonic Inc</a></p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer__copyright__social">
                            <a href="https://web.facebook.com/yegoyoga.rwanda.37"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/yegoyogarwanda/"><i class="fa fa-instagram"></i></a>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f0031be223d045fcb7b4a97/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <!-- Js Plugins -->
    <script src="<?= base_url()?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.barfiller.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.slicknav.js"></script>
    <script src="<?= base_url()?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url()?>/assets/js/main.js"></script>
</body>

</html>