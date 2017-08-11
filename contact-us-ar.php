<?php

// check if user coming from a requst

if ($_SERVER ['REQUEST_METHOD'] == 'POST') 
{

    // assign vailible
    
    $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $cell = filter_var($_POST['cellphon'], FILTER_SANITIZE_NUMBER_INT);
    $msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    
    // creating array of errors

    $formErrors = array();
    if (strlen($user) < 4) {
        $formErrors[] = 'Username Must Be Larger Than <strong>3</strong> Characters';
    }

    
    if (strlen($msg) < 10){
        $formErrors[] = 'Message Can Not Be Less Than <strong>10</strong> Characters';

    }
    // if no error send mail 
    $headers = 'From: ' .$mail . '\r\n';
    $myemail = 'azhrstar90@mail.ru';
    $subject = 'Contact Form';

    if(empty($formErrors)){
        mail($myemail, $subject, $msg, $headers);

    $user = '' ;
    $mail = '' ;
    $cell = '' ;
    $msg =  '' ;

    }

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- IE meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- first mobile meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>INTERNATIONAL EDUCATION WEBSITE </title>

        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Mada" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Changa" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- font awsom labrary   -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- our CSS file  -->
        <link href="css/style-ar.css" rel="stylesheet">
        <!-- Midia Quiry file -->
        <link href="css/quiry.css" rel="stylesheet">
        <!-- our hover file -->
        <link href="css/hover.css" rel="stylesheet">
        <!-- our contact file -->
        <link href="css/contact-ar.css" rel="stylesheet">
        <!-- our  animat labrary -->
        <link href="css/animate.css" rel="stylesheet">
        <!--our arabic Bootstrap -->
        <link href="css/bootstrap-ar.css" rel="stylesheet">
           <!-- our  languge file -->
        <link href="css/languge.css" rel="stylesheet">
                        <!-- Midia Quiry file -->
        <link href="css/quiry-web.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  
                  <body>
                                        <body>
                          <!-- START NAVBAR section -->

                        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse ">

                         <div class="container-fluid">
                             <a href="index.html"><img src="images/logo2.jpg" alt="logo2" class="hvr-grow"></a>
                               <!-- start our languge proparity -->

                             <div class="btn-group" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    اللــغـــة
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a href="contact-us-ar.php">الــعربية</a></li>
                                    <li><a href="contact-us.php">الأنكلـيزية</a></li>
                                    </ul>
                                </div>
                            </div>
                              <!-- start our languge proparity -->
                           <!-- Brand and toggle get grouped for better mobile display -->
                           <div class="navbar-header">
                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                             </button>
                           </div>

                           <!-- Collect the nav links, forms, and other content for toggling -->
                           <div class="collapse navbar-collapse navbar-right " id="bs-example-navbar-collapse-1">
                             <ul class="nav navbar-nav">
                               <li class="active"><a href="contact-us-ar.php" class="hvr-float">أتصــــــل بـــــــنا<span class="sr-only">(current)</span></a></li>
                                 <li><a href="belarus_ar.html" class="hvr-float">عن روسيا البيضاء</a></li>
                                 <li><a href="president-belarus_ar.html" class="hvr-float">رئيس روسيا البيضاء </a></li>
                                 <li><a href="important-information_ar.html" class="hvr-float">معلومات مهــــــــمة </a></li>
                                    <li class="dropdown">
                                     <a href="#" class="dropdown-toggle hvr-float" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">جـــــامعــات<span class="caret"></span></a>
                                     <ul class="dropdown-menu ">
                                         <li><a href="minsk_ar.html">مــنســـــك </a></li>
                                         <li><a href="grodno_ar.html">كـرودنــــــا</a></li>
                                         <li><a href="brest_ar.html">بـريســـــت </a></li>
                                         <li><a href="gomal_ar.html">كومـــــــل </a></li>
                                         <li><a href="maglive_ar.html">ماكلـــــيف </a></li>
                                         <li><a href="vietbsk_ar.html">فيتـــبســك</a></li>

                                     </ul>
                                 </li>
                                 <li><a href="index_ar.html" class="hvr-float">الرئــــيســــــــية</a></li>
                             </ul>
                           </div>
                         </div>
                       </nav>
                         <!-- end NAVBAR section -->

                         <!-- start our head -->

                        <section class="our-head wow bounce" data-wow-duration="2s" data-wow-delay="2s" data-wow-offset="150" >
                            <div class="container">
                                <div class="row">
                                    <div class=" col-xs-12">
                                        <img src="images/logo1.png" alt="logo1" class="center-block" id="logo1">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- End our head  -->

                             
  <!-- star defin contact us -->

                                        <section class="contact-us">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6" dir="rtl">
                                                    <h1>موقعنا في روسيا البيضاء</h1>
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4724.447584362829!2d23.8409346!3d53.696458199999995!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2siq!4v1489095921157" width="600" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>

                                                    </div>
                                                         <div class="col-md-6" dir="rtl">
                                                        <h1>أتــــصل بـــــنا</h1>
                                                        <P class="lead">لمعلومات اكثر يرجى الاتصال بأحد الأرقام التالية :-</P>
                                                        <h3>رقم التلفون :- </h3>
                                                        <p class="lead">375259149901+</p>
                                                        <h3>فايبر :-</h3>
                                                        <p class="lead">9647706247981+</p>
                                                        <h3>البريد الالكتروني :- </h3>
                                                        <p class="lead">azhrstar90@mail.ru</p>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        
                                        <section class="contact-us1">
                                            <div class="row">
                                                <div class="back-contact">
                                                    <div class="container">
                                                    <i fa fa-headphones fa-5x></i>
                                                    <h1 class="text-center">أكـــــتب لـــــنا </h1>
                                                    <P class="lead text-center">أرســــــــل رســـــــالة</P>
                                                   <form class="contact-form1" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                                        <?php if (! empty($_formErrors)) { ?>
                                                
                                                        <?php } ?>
                                                    <div class="col-md-6" dir="rtl">
                                                        <div class="form-group">
                                                            <input 
                                                             type="text"
                                                             name="username"
                                                             value="<?php if(isset($user)) { echo $user ; } ?>"
                                                             class="form-control input-lg username" 
                                                             placeholder="يرجى كتابة أسم المستخدم"
                                                             style="padding-left:33px">
                                                             <i class="fa fa-user lara"></i>
                                                            <span class="user">*</span>
                                                        <div class="alert alert-danger custom-alert" dir="rtl">
                                                            أسم المستخدم يجب ان يكون اكثر من  <strong>3</strong> حروف
                                                        </div>
                                                        </div> 
                                                           <div class="form-group">
                                                            <input 
                                                            type="email"
                                                            name="email"
                                                            value="<?php if(isset($mail)) { echo $mail ; } ?>"                                                            
                                                            class="form-control input-lg email"
                                                            placeholder="يرجى كتابة البريد الألكتروني"
                                                            style="padding-left:33px">
                                                             <i class="fa fa-envelope lara"></i>

                                                           <div class="alert alert-danger custom-alert" dir="rtl">
                                                                خانة البريد الالكتروني يجب ان لا يكون   <strong>فارغ</strong>
                                                           </div>
                                                           </div> 
                                                           <div class="form-group">
                                                            <input 
                                                            type="text"
                                                            name="cellphon" 
                                                             value="<?php if(isset($cell)) { echo $cell; } ?>"
                                                            class="form-control input-lg" 
                                                            placeholder="رقم الهاتف"
                                                            style="padding-left:33px">
                                                             <i class="fa fa-phone lara"></i>
                                                            
                                                        </div>
                                                    </div>
                                                          <div class="col-md-6" dir="rtl">
                                                           <div class="form-group">
                                                            <textarea 
                                                            class="form-control input-lg message" 
                                                            name="message"
                                                            value="<?php if(isset($msg)) { echo $msg; } ?>"
                                                            placeholder="الـــــرســــالة!"></textarea>
                                                            <span class="msg">*</span>

                                                             <div class="alert alert-danger custom-alert" dir="rtl">
                                                               يجب أن لا يقل عن <strong>10</strong> رموز
                                                             </div>
                                                           <div>
                                                            <input 
                                                            type="submit"
                                                            value="أرسال الرسالة" 
                                                            class="btn btn-primary btn-lg btn-block"/>
                                                            <i class="fa fa-paper-plane lara"></i>
                                                          </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            </div>
                                        </section>

                                        <!-- end defin contact us -->

         
                        <!-- start our Footer -->

                        <footer>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft " data-wow-duration="2s" data-wow-offset="400">
                                        <h2 class="text-center">أتصــــــل بنا</h2>
                                        <div class="contact">
                                           <img src="images/social/telephon.png" alt="telephon" class="center-block">
                                            <h3>الهاتف</h3><p>+375259149901</p>
                                            <img src="images/social/viber.png" alt="viber">
                                            <h3>فايبر</h3><p>+9647706247981</p>
                                            <img src="images/social/massige.png" alt="massige">
                                            <h3>البريد الالكتروني</h3><p>azhrstar90@mail.ru</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                                        <div class="menu-list1">
                                            <h2 class="text-center">القــــائمة</h2>
                                            <ul class="list-unstyled ">
                                                <li> <a href="index_ar.html"><h4>الرئيسية</h4></a></li>
                                                <li> <a href="important-information_ar.html"><h4>معلومات مهمة</h4></a></li>
                                                <li><a href="president-belarus_ar.html"><h4>رئيس روسيا البيضاء</h4></a></li>
                                                <li><a href="belarus_ar.html"><h4>عن روسيا البيضاء</h4></a></li>
                                                <li> <a href="contact-us-ar.php"><h4>أتصــــــل بنا</h4></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow zoomIn" data-wow-duration="2s"  data-wow-offset="350">
                                        <div class="address">
                                                <h2 class="text-center">موقعنا وخدمات التواصل الاجتماعي </h2>
                                            <div class="adrees2">
                                                <h5>روسيا البيضاء</h5><br>
                                                <h5>كرودنا</h5><br>
                                                <h5>دزيجينسكفا 25</h5>
                                            </div>
                                        </div>
                                            <div class="social-list">

                                                    <ul class="list-unstyled social-list2">
                                                        <li><a href="#"><img src="images/social/facebook.png" alt="facebook"></a></li>
                                                        <li><a href="#"><img src="images/social/youtube.png" alt="youtube"></a></li>
                                                        <li><a href="#"><img src="images/social/twitter.png" alt="twitter"></a></li>
                                                        <li><a href="#"><img src="images/social/google+.png" alt="google+"></a></li>
                                                        <li><a href="#"><img src="images/social/vk.png" alt="vk"></a></li>
                                                    </ul>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <!-- start our copy right receve -->
                        <section class="copy-right">
                             <div class="container-fluid" style="margin-top: 0">
                                <h5 class="text-center">Copy Right <i class="fa fa-copyright" aria-hidden="true"></i> All Right Recived By <span>Eng.Al-zubaidi Azhar</span></h5>
                             </div>
                        </section>
                        <!-- end our copy right receve -->

                        <!-- End our Footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- our wow .js labrary -->
     <script src="js/wow.js"></script>
    <!-- our custom file -->
     <script src="js/custom1.js"></script>
                        <script>
                            new WOW().init();
                        </script>

  </body>
</html>