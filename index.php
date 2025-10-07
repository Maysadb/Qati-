<?php session_start(); 
$_SESSION['formStarted'] = true; ?>

<!DOCTYPE html>
<!--[if IE 7 ]> <html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html class="ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="" lang="en"> <!--<![endif]-->
<head>
 <?php   
if (!isset($_SESSION['token']))
{
$token = md5(uniqid(rand(), TRUE));
$_SESSION['token'] = $token;
$_SESSION['token_time']=time();
}

?>
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="keyword" content="تطبيق قاعتي، قاعتي، قاعات للمناسبات، حجز القاعات، قاعات احتفالات، شاليهات، استراحات، تاجير قاعات، تاجير شاليهات، تاجير استراحات">
    <meta name="description" content="تطبيق قاعتي يقدم دليل الكتروني بطريقه إحترافيه لخيارات مناسباتكم وليسهل على المستخدم عملية البحث وكما يحتوي التطبيق على تفاصيل كامله عن قاعات المناسبات بكافة أنواعها">
	

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css" />
	<link rel="icon" href="images/favicon.ico">
	
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">

    <!-- ANIMATION -->
    <link rel="stylesheet" type="text/css" href="css/lib/animate.css">


    <!-- PAGE STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    
    <title>تطبيق قاعتي</title>
</head>
<body id="page-top" data-spy="scroll">

<!-- PRELOADER -->
<div class="preloader">
    <div class="loading-wrap">
        <div class="p-loading" data-loading="Loading">Loading</div>
    </div>
</div>
<!-- END / PRELOADER -->

<!-- PAGE WRAP -->
<div id="page-wrap">

    <!-- HEADER -->
    <header id="header" class="header header-sticky">
        <div class="container">
            <!-- LOGO -->
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="Image">
                </a>
            </div>
            <!-- END / LOGO -->

            <div class="open-menu">
                <span class="item-1"></span>
                <span class="item-2"></span>
                <span class="item-3"></span>
            </div>

            <!-- NAVIGATION -->
            <nav class="on-navigation text-right" data-menu-type="1200">
                <!-- NAV -->
                <ul class="nav">
                    <li class="menu-item"><a href="https://qaati.net/occasions/" target="blank">دخول الأعضاء</a></li>
                    <li class="menu-item"><a href="#contact">تواصل معنا</a></li>
                    <li class="menu-item"><a href="#pricing">حمل التطبيق الآن</a></li>
                    <li class="menu-item"><a href="#team">ميز قاعتك</a></li>
                    <li class="menu-item"><a href="#about">تطبيق قاعتي</a></li>
                    <li class="menu-item"><a href="#page-top">الرئيسية</a></li>
                </ul>
                <!-- END / NAV -->
            </nav>
            <!-- END / NAVIGATION -->
        </div>

    </header>
    <!-- END / HEADER -->
    
    <!-- HERO -->
    <section id="hero" class="hero">
        <div class="slider-wrapper">
            <div class="hero-slider" data-background="bg-static">
                <div class="item-slider">
                    <img src="images/bg/1.jpg" alt="Image">
                </div>
                <div class="item-slider">
                    <img src="images/bg/2.jpg" alt="Image">
                </div>
            </div>
        </div>

        <div class="hero-content text-center">
            <h2 class="h1">تطبيق <span>قاعتي</span></h2>
            <h5 class="text-uppercase">قاعة مناسبتك بين يديك</h5>
        </div>


        <div class="scroll-to">
            <div class="icon"></div>
        </div>
    </section>
    <!-- END / HERO -->

    <!-- ABOUT -->
    <section id="about" class="about">
        <div class="container">

            <!-- SECTION HEAD -->
            <div class="" align="center">
                <h2 class="h4">تطبيق قاعتي</h2>
                <p class="sub-title">وجهتك الاولى لكل مناسباتك</p>
            </div>
            <!-- END / SECTION HEAD -->
            
            <!-- DESCRIPT -->
            <div class="about-descript text-center">
              <p>تطبيق قاعتي يقدم دليل الكتروني بطريقه  إحترافيه لخيارات مناسباتكم وليسهل على المستخدم عملية البحث وكما يحتوي التطبيق على تفاصيل كامله عن قاعات المناسبات بكافة أنواعها</p>
            </div>
            <!-- END / DESCRIPT -->
        </div>
        <div class="about-content">
            <div class="row">

                <!-- ABOUT ITEM -->
                <div class="col-md-3"> 
                    <div class="about-item text-center">
                        <div class="item-heading">
                            <i class="fa fa-map-marker"></i>
                            <h4 class="h6">موقع القاعة</h4>
                        </div>
                        <div class="item-body">
                            <p>تتوفر بالتطبيق معلومات القاعات على الخريطة، حيث يمكن للمستخدم معرفة موقع القاعة من خلال خريطة قوقل</p>
                        </div>
                    </div>
                </div>
                <!-- END / ABOUT ITEM -->

                <!-- ABOUT ITEM -->
                <div class="col-md-3"> 
                    <div class="about-item text-center">
                        <div class="item-heading">
                            <i class="fa fa-search"></i>
                            <h4 class="h6">البحث عن القاعات</h4>
                        </div>
                        <div class="item-body">
                            <p>يتوفر في التطبيق خاصية البحث عن القاعات، حيث يمكن للمستخدم البحث حسب المدينة وحسب المنطقة والحي</p>
                        </div>
                    </div>
                </div>
                <!-- END / ABOUT ITEM -->

                <!-- ABOUT ITEM -->
                <div class="col-md-3"> 
                    <div class="about-item text-center">
                        <div class="item-heading">
                            <i class="fa fa-phone"></i>
                            <h4 class="h6">خاصية الإتصال بالقاعة</h4>
                        </div>
                        <div class="item-body">
                            <p>بعد التوصل لنتيجة مناسبة من خلال البحث، يمكن للمستخدم الاتصال مباشرة من خلال التطبيق بالقاعة وحجز موعد للمناسبة</p>
                        </div>
                    </div>
                </div>
                <!-- END / ABOUT ITEM -->

                <!-- ABOUT ITEM -->
                <div class="col-md-3"> 
                    <div class="about-item text-center">
                        <div class="item-heading">
                            <i class="fa fa-tablet"></i>
                            <h4 class="h6">ادارة معلومات القاعات</h4>
                        </div>
                        <div class="item-body">
                            <p>إذا كنت تمتلك قاعة يمكنك <a href="https://qaati.net/occasions/Login/add_user" target="blank">التسجيل الآن</a>، او بإمكانك في حالة إذا كنت مسجلا إدارة معلومات قاعتك من خلال الموقع الالكتروني</p>
                        </div>
                    </div>
                </div>
                <!-- END / ABOUT ITEM -->
            </div>
        </div>
    </section>
    <!-- END / ABOUT -->
    

    <!-- TEAM -->
    <section id="team" class="team">
        <div class="container">

            <!-- SECTION HEAD -->
            <div class="" align="center">
                <h2 class="h4">ميز قاعتك</h2>
                <p class="sub-title">معلومات القاعات داخل المملكة العربية السعودية بين يديك</p>
            </div>
            <!-- END / SECTION HEAD -->

            <div class="row">
                <!-- TEAM SLIDER -->
                <div class="team-slider">
                    <!-- TEAM ITEM -->
                    <div class="team-item">
                        <div class="image-thumb">
                            <img src="images/team/1.jpg" alt="Image">
                            <div class="icon-hover icon-hover-1"></div>
                            <div class="icon-hover icon-hover-2"></div>
                        </div>
                        <div class="item-body text-left">
                            <div class="">
                                <h4 class="h4">سجل قاعتك الآن</h4>
                            </div>
                            <div class="item-descript">
                                <p>لكي تتصجر قاعتك نتائج البحث لعملائك يمكنك ان تشترك معنا وتقم بتسجيل قاعتك، حيث تزيد من قاعدة عملائك المستهدفين</p>
                            </div>
                        </div>
                    </div>
                    <!-- END / TEAM ITEM -->

                    <!-- TEAM ITEM -->
                    <div class="team-item">
                        <div class="image-thumb">
                            <img src="images/team/2.jpg" alt="Image">
                            <div class="icon-hover icon-hover-1"></div>
                            <div class="icon-hover icon-hover-2"></div>
                        </div>
                        <div class="item-body text-left">
                            <div class="" align="center">
                                <h4 class="h4">المعلومات الجغرافية</h4>
                            </div>
                            <div class="item-descript">
                                <p>يتوفر بالتطبيق خاصية المعلومات الجغرافيه للقاعات، حيث يمكن للمستخدم استخدام نظام الملاحة للوصول للقاعة</p>
                            </div>
                        </div>
                    </div>
                    <!-- END / TEAM ITEM -->

                    <!-- TEAM ITEM -->
                    <div class="team-item">
                        <div class="image-thumb">
                            <img src="images/team/3.jpg" alt="Image">
                            <div class="icon-hover icon-hover-1"></div>
                            <div class="icon-hover icon-hover-2"></div>
                        </div>
                        <div class="item-body text-left">
                            <div class="" >
                                <h4 class="h4">أولوية نتائج البحث </h4>
                            </div>
                            <div class="item-descript">
                                <p>إذا كنت مسؤول قاعة ، يتيح لك التطبيق أولوية الظهور لقاعتك في نتائج البحث بناء على التصنيف الذي تشترك به قاعتك</p>
                            </div>
                        </div>
                    </div>
                    <!-- END / TEAM ITEM -->
                </div>
                <!-- TEAM SLIDER -->
            </div>
        </div>
    </section>
    <!-- END / TEAM -->

    <!-- WE ARE HIRING -->
    <section class="we-are-hiring text-center">
        <div class="bg-color"></div>
        <div class="container">
            <div class="row">
                <div class="item-heading">
                    <h2 class="h3">سجل قاعتك بالتطبيق</h2>
                </div>
                <div class="item-body">
                    <p>إذا كنت تمتلك قاعة للمناسبات يسعدنا ان تضيف قاعتك للتطبيق حيث يمكنك ان تضيف معلومات عن القاعة بالإضافة للصور مجانا، سارع بالاشتراك واشترك الان</p>
                </div>
                <div class="item-footer">
                    <a class="apply-team on-btn btn-style-3" href="https://qaati.net/occasions/Login/add_user" target="blank">سجل الآن</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END / WE ARE HIRING -->
    
    <!-- PRICING TABLE -->
    <section id="pricing" class="pricing">
        <div class="bg-parallax bg-2"></div>
        <div class="bg-overlay"></div>
        <div class="container">
            <!-- SECTION HEAD -->
            <div class="" align="center">
                <h2 class="h4">حمل التطبيق</h2>
                <p class="sub-title">قم بتحميل التطبيق واستمتع بالبحث عن القاعات</p>
            </div>
            <!-- END / SECTION HEAD -->

            <div class="row">
                <!-- PRICING ITEM -->
                <div class="col-md-4">
                    <div class="pricing-item text-center">
                        <div class="item-heading bg-1">
                            <h4 class="h4">Android</h4>
                        </div>
                        <div class="item-price">
                            <span class="currency">SAR</span>
                            <span class="amount">00</span>
                            <span class="mo">شهر</span>
                        </div>
                        <div class="item-body">
                            <ul>
                                <li>تطبيق اندرويد</li>
                                <li>مجاني</li>
                                <li>سهل الاستخدام</li>
                                <li><img src="images/android.png"></li>
                            </ul>
                        </div>
                        <div class="item-footer">
                            <a class="on-btn btn-style-2" href="https://play.google.com/store/apps/details?id=sa.com.halls.smartvisions">حمل الآن</a>
                        </div>
                    </div>
                </div>
                <!-- END / PRICING ITEM -->

                <!-- PRICING ITEM -->
                <div class="col-md-4">
                    <div class="pricing-item light-item text-center">
                        <div class="item-heading bg-2">
                            <h4 class="h4">iPhone</h4>
                        </div>
                       
                        <div class="item-price">
                            <span class="currency">SAR</span>
                            <span class="amount">00</span>
                            <span class="mo">شهر</span>
                        </div>
                        <div class="item-body">
                            <ul>
                                <li>تطبيق أيفون</li>
                                <li>مجاني</li>
                                <li>سهل الاستخدام</li>
                                <li><img src="images/apple.png"></li>
                            </ul>
                        </div>
                        <div class="item-footer">
                            <a class="on-btn btn-style-2" href="#">قريبا</a>
                        </div>
                    </div>
                </div>
                <!-- END / PRICING ITEM -->

                <!-- PRICING ITEM -->
                <div class="col-md-4">
                    <div class="pricing-item text-center">
                        <div class="item-heading bg-3">
                            <h4 class="h4">مالك قاعة</h4>
                        </div>
                        <div class="item-price">
                            <span class="currency">SAR</span>
                            <span class="amount">00</span>
                            <span class="mo">شهر</span>
                        </div>
                        <div class="item-body">
                            <ul>
                                <li>اعلن عن قاعتك</li>
                                <li>رسوم اشتراك رمزية</li>
                                <li>ميز قاعتك</li>
                               <li><img src="images/windows.png"></li>
                            </ul>
                        </div>
                        <div class="item-footer">
                            <a class="on-btn btn-style-2" href="https://qaati.net/occasions/Login/add_user" target="blank">اشترك الآن</a>
                        </div>
                    </div>
                </div>
                <!-- END / PRICING ITEM -->
            </div>
        </div>
    </section>
    <!-- END / PRICING TABLE -->

    <!-- GALLERY IMAGE -->
    <section id="gallery-image" class="photostack photostack-start">
        <article class="bg-overlay"></article>
        <article class="text-overlay">
            <h4 class="h4">معرض الصور</h4>
            <span class="on-btn btn-style-4">اعرض الصور </span>
        </article>
        <div class="gallery">
            <figure>
                <a href="#" class="photostack-img"><img src="images/gallery/1.jpg" alt="img01"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="images/gallery/2.jpg" alt="img02"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="images/gallery/3.jpg" alt="img03"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="images/gallery/4.jpg" alt="img04"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="images/gallery/5.jpg" alt="img05"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="images/gallery/6.jpg" alt="img06"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="images/gallery/7.jpg" alt="img07"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="images/gallery/8.jpg" alt="img08"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="images/gallery/9.jpg" alt="img09"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure>
                <a href="#" class="photostack-img"><img src="images/gallery/10.jpg" alt="img10"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure data-dummy>
                <a href="#" class="photostack-img"><img src="images/gallery/11.jpg" alt="img11"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure data-dummy>
                <a href="#" class="photostack-img"><img src="images/gallery/12.jpg" alt="img12"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure data-dummy>
                <a href="#" class="photostack-img"><img src="images/gallery/13.jpg" alt="img13"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure data-dummy>
                <a href="#" class="photostack-img"><img src="images/gallery/14.jpg" alt="img14"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure data-dummy>
                <a href="#" class="photostack-img"><img src="images/gallery/15.jpg" alt="img15"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
            <figure data-dummy>
                <a href="#" class="photostack-img"><img src="images/gallery/16.jpg" alt="img16"/></a>
                <div>
                    <h4 class="h5 photostack-title"></h4>
                </div>
            </figure>
        </div>
    </section>
    <!-- END / GALLERY IMAGE -->

    <!-- CONTACT -->
    <section id="contact" class="contact">
        <div class="container">
            <!-- SECTION HEAD -->
            <div class="">
                <h2 class="h4">تواصل معنا</h2>
                <p class="sub-title">نرحب بمقترحاتكم واستفساراتكم على مدار اليوم</p>
            </div>
            <!-- END / SECTION HEAD -->

            <div class="row">
        <div class="col-md-6" id="sentMailDiv">

                        <form class="contact-form" method="POST" action="" id="from1">
                            <div class="form-item fl">
                                <input type="text" placeholder="الاسم" id="name" name="name" required="required" />
                            </div>
                            <div class="form-item fr">
                                <input type="email" placeholder="الايميل" id="email" name="email" required="required" />

                            </div>
                            <div class="form-textarea-wrapper">
                                <textarea id="message" Columns="50" Rows="5" placeholder="الرسالة" name="message" required="required"></textarea>
                                <input type="hidden" id="lang" name="lang" value="ar" />
                                <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token'];  ?>" />
                                <input type="hidden" id="token_time" name="token_time" value="<?php echo $_SESSION['token_time'];  ?>" />
                            </div>
                            <div class="form-submit">
                                <input type="button" id="sendMail" class="on-btn btn-style-2" value="أرسل" />                                     
                            </div>
                        </form>
                        <br>
                        <br>
                        <br>
                    </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="address-info">
                        <div class="address">
                            <i class="fa fa-map-marker"></i>
                            <span>المملكة العربية السعودية _الرياض، طريق الملك عبد العزيز</span>
                        </div>
                        <div class="email">
                            <i class="fa fa-envelope"></i>
                            <a href="#">info@qaati.net</a>
                        </div>
                        <div class="phone">
                            <i class="fa fa-phone"></i>
                            <span style="direction:ltr; text-align:right;">+966 114874545</span>
                        </div>
                        <div class="whatsapp">
<i class=""><img src="777.png" width="20" high="20"></i>
<span>00966-500158833</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="map" data-map-zoom="14" data-map-latlng="24.810031, 46.647611" data-snazzy-map-theme="grayscale" data-map-marker="images/marker.png" data-map-marker-size="22*31"></div>
    </section>
    <!-- END / CONTACT -->

    <!-- FOOTER -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                جميع الحقوق محفوطة ©<a href="http://smartvisions.com.sa/ar/index.php"> لشركة الرؤى الذكية</a>
            </div>
            <!--<div class="foot-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>-->
        </div>
    </footer>
    <!-- END / FOOTER -->
    

</div>
<!-- END / PAGE WRAP -->

<!-- LOAD JQUERY -->
<script type="text/javascript" src="js/lib/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHhtPeivnoBYZ56XNhhGLiqTQp8ACSrcE&callback=initMap"></script>
<script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="js/lib/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/lib/jquery.owl.carousel.js"></script>
<script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/lib/polaroids-gallery.js"></script>
<script type="text/javascript" src="js/lib/retina.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script>
    $(document).ready(function () {

        $("#sendMail").click(function () {
            $(".validate").remove();
            
            if(! isValidEmailAddress($("#email").val()) ) {
                $(".validate").show();
               $("#sentMailDiv").prepend("<p class='bg-danger validate' style='padding:5px'>البريد الالكتروني غير صحيح </p>"); 
            }
            
            if (isValidEmailAddress($("#email").val()) && requiredName() && requiredMessage()) {
                $(this).val("يتم الارسال").css("background-color", "gray");
                $.ajax({
                    url: './send.php',
                    type: 'POST',
                    data: {message: $("#message").val(), name: $("#name").val(), email: $("#email").val(), lang: $("#lang").val(), token_time: $("#token_time").val()},
                    success: function (result) {
                        if(result=='لقد انتهى الزمن المتاح لإرسال الرسالة'){
                        $("#sentMailDiv").prepend("<p class='bg-warning' style='padding:5px'>" + result + "</p>");
                        $("#sendMail").val("اعادة الارسال").css("background-color", "gray"); }
                        else{
                        $("#sentMailDiv").prepend("<p class='bg-success' style='padding:5px'>" + result + "</p>");
                        $("#sendMail").val("تم الارسال").css("background-color", "gray");
                    }
                    },
                    error: function (error) {
                        console.log(error);
                        $("#sentMailDiv").prepend("<p class='bg-danger'>" + error + "</p>");
                    }
                });
            }
        });
    });
    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    }
    function requiredName() {
        
        if($("#name").val() == "") {
             $("#sentMailDiv").prepend("<p class='bg-danger validate' style='padding:5px'>Name field is required</p>");
             return false;
        } else {
            return true;
        }
    }
    function requiredMessage() {
        
        if($("#message").val() == "") {
             $("#sentMailDiv").prepend("<p class='bg-danger validate' style='padding:5px'>Message field is required</p>");
             return false;
        } else {
            return true;
        }
    }
</script>
</body>
</html>
