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
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- font awsom labrary   -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- our CSS file  -->
        <link href="css/style.css" rel="stylesheet">
        <!-- Midia Quiry file -->
        <link href="css/quiry.css" rel="stylesheet">
        <link href="css/quiry-web.css" rel="stylesheet">
        <!-- our hover file -->
        <link href="css/hover.css" rel="stylesheet">
        <!-- our contact file -->
        <link href="css/contact-en.css" rel="stylesheet">
        <!-- our  animat labrary -->
        <link href="css/animate.css" rel="stylesheet">
                <!-- our  languge file -->
        <link href="css/languge.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  
                  <body>
                                         <!-- START NAVBAR section -->

                        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse ">

                         <div class="container-fluid">
                             <a href="index.html"><img src="images/logo2.jpg" alt="logo2" class="hvr-grow"></a>
                                 <!-- start our languge proparity -->

                             <div class="btn-group" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Languge
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a href="contact-us-ar.php">Arabic</a></li>
                                    <li><a href="contact-us.php">English</a></li>
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
                               <li><a href="index.html" class="hvr-float">HOME <span class="sr-only">(current)</span></a></li>
                                 <li class="dropdown">
                                     <a href="#" class="dropdown-toggle hvr-float" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">UNIVERSITIES OF  <span class="caret"></span></a>
                                     <ul class="dropdown-menu ">
                                         <li><a href="minsk.html">MINSK</a></li>
                                         <li><a href="grodno.html">GRODNO</a></li>
                                         <li><a href="brest.html">BRIST</a></li>
                                         <li><a href="gomal.html">GOMEL</a></li>
                                         <li><a href="maglive.html">MAGILEV</a></li>
                                         <li><a href="vietbsk.html">VITEBSK</a></li>

                                     </ul>
                                 </li>
                                 <li><a href="belarus.html" class="hvr-float">ABOUT BELARUS</a></li>
                                 <li><a href="president-belarus.html" class="hvr-float">PRESIDENT OF BELARUS</a></li>
                                 <li><a href="important-information.html" class="hvr-float">IMPORTANT INFORMATION</a></li>
                                 <li class="active"><a href="contact-us.php" class="hvr-float">CONTACT US</a></li>
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
                                                    <div class="col-md-6">
                                                        <h1>GET IN TOUCH</h1>
                                                        <P class="lead">Feel Free To Contact Us Anytime</P>
                                                        <h3>Telephon Number :</h3>
                                                        <p class="lead">+375259149901</p>
                                                         <h3>E-Mail :</h3>
                                                        <p class="lead">azhrstar90@mail.ru</p>
                                                         <h3>Viber :</h3>
                                                        <p class="lead">+9647706247981</p>
                                                    </div>
                                                         <div class="col-md-6">
                                                        <h1 class="text-center">OUR LOCATION</h1>
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4724.447584362829!2d23.8409346!3d53.696458199999995!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2siq!4v1489095921157" width="600" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                         </div>
                                                </div>
                                            </div>
                                        </section>

                                        
                                        <section class="contact-us1">
                                            <div class="row">
                                                <div class="back-contact">
                                                    <div class="container">
                                                    <i fa fa-headphones fa-5x></i>
                                                    <h1 class="text-center">TEXT US</h1>
                                                    <P class="lead text-center">Send Us Message</P>
                                                   <form class="contact-form1" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                                        <?php if (! empty($_formErrors)) { ?>
                                                    <div class="alert alert-danger alert-dismissible" role"start">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>

                                                        <?php

                                                            foreach($formErrors as $error)
                                                                {
                                                                    echo $error . '<br/>';
                                                                }
                                                        ?>
                                                        </div>
                                                        <?php } ?>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input 
                                                             type="text"
                                                             name="username"
                                                             value="<?php if(isset($user)) { echo $user ; } ?>"
                                                             class="form-control input-lg username" 
                                                             placeholder="Pleas Type Your Name"
                                                             style="padding-left:40px">
                                                             <i class="fa fa-user lara"></i>
                                                            <span class="user">*</span>
                                                        <div class="alert alert-danger custom-alert">
                                                            Username Must Be Larger Than <strong>3</strong> Characters
                                                        </div>
                                                        </div> 
                                                           <div class="form-group">
                                                            <input 
                                                            type="email"
                                                            name="email"
                                                            value="<?php if(isset($mail)) { echo $mail ; } ?>"                                                            
                                                            class="form-control input-lg email"
                                                            placeholder="Pleas Type A Vailod E-mail"
                                                            style="padding-left:40px">
                                                            <i class="fa fa-envelope lara"></i>

                                                           <div class="alert alert-danger custom-alert">
                                                                Email can't be  <strong>Empty</strong>
                                                           </div>
                                                           </div> 
                                                           <div class="form-group">
                                                            <input 
                                                            type="text"
                                                            name="cellphon" 
                                                             value="<?php if(isset($cell)) { echo $cell; } ?>"
                                                            class="form-control input-lg" 
                                                            placeholder="cell phone"
                                                            style="padding-left:40px">
                                                            <i class="fa fa-phone lara"></i>
                                                            
                                                        </div>
                                                    </div>
                                                          <div class="col-md-6">
                                                           <div class="form-group">
                                                            <textarea 
                                                            class="form-control input-lg message" 
                                                            name="message"
                                                            value="<?php if(isset($msg)) { echo $msg; } ?>"
                                                            placeholder="Your Message!"></textarea>
                                                            <span class="msg">*</span>

                                                             <div class="alert alert-danger custom-alert">
                                                                Message Can Not Be Less Than <strong>10</strong> Characters
                                                             </div>
                                                           </div>
                                                         <div>
                                                            <input 
                                                            type="submit"
                                                            value="Send Message" 
                                                            class="btn btn-primary btn-lg btn-block"/>
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
                                        <h2 class="text-center">CONTACT US</h2>
                                        <div class="contact">
                                           <img src="images/social/telephon.png" alt="telephon" class="center-block">
                                            <h3>Telephon</h3><p>+375259149901</p>
                                            <img src="images/social/viber.png" alt="viber">
                                            <h3>Viber</h3><p>+9647706247981</p>
                                            <img src="images/social/massige.png" alt="massige">
                                            <h3>E-mail</h3><p>azhrstar90@mail.ru</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                                        <div class="menu-list1">
                                            <h2 class="text-center">OUR MENU</h2>
                                            <ul class="list-unstyled ">
                                                <li> <a href="index.html"><h4>HOME</h4></a></li>
                                                <li> <a href="important-information.html"><h4>IMPORTANT INFORMATION</h4></a></li>
                                                <li><a href="president-belarus.html"><h4>PRESIDENT OF BELARUS</h4></a></li>
                                                <li><a href="belarus.html"><h4>ABOUT BELARUS</h4></a></li>
                                                <li> <a href="contact-us.php"><h4>CONTACT US</h4></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow zoomIn" data-wow-duration="2s"  data-wow-offset="350">
                                        <div class="address">
                                                <h2 class="text-center">OUR ADDRESS AND SOCIAL</h2>
                                            <div class="adrees2">
                                                <h5>Belarus</h5><br>
                                                <h5>Grodno</h5><br>
                                                <h5>Dzirzhinska 25</h5><br>
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