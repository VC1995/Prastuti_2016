<?php include "templates/header.php" ?>
    <div id="preloader"></div>

    <!-- ***************************** Register button ****************** -->
    <div id="registerButton">
    <a href="registration_form.php#business" class="btn btn-primary wow animated bounceInDown" data-wow-delay="1.5s" style="position: fixed; right: 3%; bottom: 3%;font-size: 2em;background: orange;z-index: 5;">Register Now <i class="ion-log-in"></i></a>
    </div>
    <!-- ****************************** Header ************************** -->
    
    <header class="sticky" id="header">
        <section class="container">
            <section class="row" id="logo_menu" role="navigation">                  
                <div class="col-md-4 col-sm-8 col-xs-2 navbar-brand">
                    <a class="logo" href=""><i class="ion-ios-home" ></i></a>
                </div>
                <div class="col-md-8 col-sm-4 col-xs-10">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav_menu">
                        <i class=" logo ion-navicon"></i>
                    </button>
                    </div>         <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" style="padding-top: 1em" id="nav_menu">
                    <ul class="nav navbar-nav navbar-right" style="overflow-y: hidden; overflow-x: hidden">                 
                        <li style="padding-left: 2em"  class="wow animated bounceInDown" data-wow-delay="0.7s"><a class="nav_menu_item" href="#features" style="font-size: 1.2em"> E<i class="ion-ribbon-a" style="color:yellow"></i>ents</a></li>
                        <li style="padding-left: 2em" class="wow animated bounceInDown" data-wow-delay="0.8s"><a class="nav_menu_item" href="#gallery" style="font-size: 1.2em"> Gues<i class="ion-mic-b" style="color:yellow"></i> Lectures</a></li>
                        <li style="padding-left: 2em" class="wow animated bounceInDown" data-wow-delay="0.9s"><a class="nav_menu_item" href="#updates" style="font-size: 1.2em"> Upda<i class="ion-ios-mic" style="color:yellow"></i>es</a></li>
                        <li style="padding-left: 2em" class="wow animated bounceInDown" data-wow-delay="1s"><a class="nav_menu_item" href="#sponsors" style="font-size: 1.2em"> <i class="ion-social-usd" style="color:yellow"></i>ponsors</a></li>
                        <li style="padding-left: 2em" class="wow animated bounceInDown" data-wow-delay="1.1s"><a class="nav_menu_item" href="team.php" style="font-size: 1.2em"> T<i class="ion-android-call" style="color:yellow"></i>am</a></li>
                        <!--- <li style="padding-left: 2em"><a class="nav_menu_item" href="team.php"><i class="ion-android-people"></i><span class="hidden-sm"> Team</span></a></li> -->               
                    </ul>   
                    </div>          
                </div>  
            </section>          
        </section>
    </header>

    <!-- ****************************** Banner ************************** -->

    <section id="banner" style="height: 100%;">
        <section class="container" style="height: 100%;position:relative">
            <a class="slidedown wow animated zoomIn" data-wow-delay="1s" href="#features"><i class="ion-ios-download-outline" style='color: black'></i></a>
            <section class="row" style="position: relative;top: 44%;transform: translateY(-50%);">                
                <div class="col-md-12">
                    <div class="headings">                                                                        
                        <p class="text-center"><img src="static/img/p16.gif" style="width:55em;"></p>
                        <p style="color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;font-size: 1.4em; padding: 0" class="col-sm-2 col-sm-offset-8">&nbsp&nbsp&nbsp<strong>2<sup>nd</sup> - 4<sup>th</sup> April</strong></p>
                    </div>
                    <div>
                        <p style="color: white;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;font-size: 1.8em;padding: 0 0 0 0;z-index: 2;" class="col-sm-12 ">
                            <span class="text-center col-sm-12">presented by</span><br/><br/>
                            <span class="col-md-6 col-md-offset-2">
                            <strong>Electrical Engineering Society,<br/>Department of Electrical Engineering, <br/>IIT(BHU), Varanasi<strong>
                            </span>
                            <span class="col-md-3">
                                <img src="static/img/logo_img.jpg" style="width:5.5em"></p>
                            </span>              
                            <span class="col-md-1"></span>              
                        </p>                                                
                    </div>
                </div>
            </section>
        </section>
    </section>

    <!-- ****************************** Features Section ************************** -->

    <section id="features" class="block">
        <section class="container">
            <section class="row">
                <div class="title-box"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                Events
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
            <section >
                <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="feature-box wow animated bounceInLeft" data-wow-delay="0.3s">
                        <img src="static/img/bizcraft.jpg" style="width: 10em">
                        <h2><a href="bizcraft.php">biZcraft</a></h2>
                        <p>Winners don't make excuses when the other side plays their game. Which side are you on ?</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="feature-box wow animated bounceInDown" data-wow-delay="0.3s">
                        <img src="static/img/consilium.jpg" style="width: 10em">
                        <h2><a href="consilium.php">Consilium</a></h2>
                        <p> Decipher. Design. Display</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    
                    <div class="feature-box wow animated bounceInDown" data-wow-delay="0.3s">
                        <img src="static/img/idp.jpg" style="width: 10em">
                        <h2><a href="idp.php">IDP</a></h2>
                        <p>Redefining industry by defining its problems</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    
                    <div class="feature-box wow animated bounceInRight" data-wow-delay="0.3s">
                        <img src="static/img/paper.jpg" style="width: 10em">
                        <h2><a href="ppt.php">Paper Presentation</a></h2>
                        <p>Imagination is the highest form of research</p>
                    </div>
                </div>
        </div>
        <div class="clearfix"></div>
                <div class="row">
                <div class="col-sm-6 col-md-3">
                    
                    <div class="feature-box wow animated bounceInLeft" data-wow-delay="0.3s">
                        <img src="static/img/poster.jpg" style="width: 10em">
                        <h2><a href="poster.php">Poster Presentation</a></h2>
                        <p>Simplicity is the ultimate sophistication</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    
                    <div class="feature-box wow animated bounceInUp" data-wow-delay="0.3s">
                        <img src="static/img/recognizance.jpg" style="width: 10em">
                        <h2><a href="recognizance.php">Recognizance</a></h2>
                        <p>Let's give our machines a 'vision'</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    
                    <div class="feature-box wow animated bounceInUp" data-wow-delay="0.3s">
                        <img src="static/img/simulim.jpg" style="width: 10em">
                        <h2><a href="simulim.php">Simulim</a></h2>
                        <p>Power to fabricate the reality</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    
                    <div class="feature-box wow animated bounceInRight" data-wow-delay="0.3s">
                        <img src="static/img/sos.jpg" style="width: 10em">
                        <h2><a href="sos.php">SOS</a></h2>
                        <p>No problem can withstand the assault of sustained thinking</p>
                    </div>
                </div>
                </div>
                <div class="clearfix"></div>
            </section>
            <div class="clearfix"></div>
        </section>
    </section>

        <!-- ****************************** Gallery Section ************************** -->

    <section id="gallery" class="block">
        <section class="container">
            <section class="row">
                <div class="title-box" style="color:#fff;"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left" style="border-color: #fff; "></span>
                <span class="bb-bottom-left" style="border-color: #fff; "></span>
                Guest Lectures
                <span class="bb-top-right" style="border-color: #fff; "></span>
                <span class="bb-bottom-right" style="border-color: #fff; "></span>
                </h1></div>
            </section>
            <section class="row">
                <div class="col-xs-12">
                    <div id="screenshots" class="owl-carousel owl-theme">
                      <div class="item"><img src="static/img/gl.jpg" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="static/img/gl.jpg" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="static/img/gl.jpg" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="static/img/gl.jpg" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="static/img/gl.jpg" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="static/img/gl.jpg" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="static/img/gl.jpg" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="static/img/gl.jpg" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="static/img/gl.jpg" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="static/img/gl.jpg" class="img_res wow animated zoomIn"></div>
                    </div>
                     <div class="customNavigation">
                      <a class="btn prev gallery-nav wow animated bounceInLeft" style="background:rgba(0,0,0,.7);"><i class="ion-ios-arrow-left"></i></a> 
                      <a class="btn next gallery-nav wow animated bounceInRight" style="background:rgba(0,0,0,.7);"><i class="ion-ios-arrow-right"></i></a>
                    </div>
                </div>
            </section>
        </section>
    </section>

    <!-- ****************************** Updates Section ************************** -->

    <section id="updates" class="block">
        <section class="container">
            <section class="row">
                <div class="title-box" style="animation: vibrate 2s 3s infinite;-moz-animation: vibrate 2s 3s infinite;-webkit-animation: vibrate 2s 3s infinite;-o-animation: vibrate 2s 3s infinite;">
                <h1 class="block-title ">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                Updates
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
            <section class="row">
                <div class="col-xs-12">
                    <?php
                    include 'includes/general_functions.php';
                        $db= connect_to_database();
                        if($db->connect_error){
                        echo "<p> 'Sorry, we\'re having some problems' </p>";
                        }else{
                            $result= $db->query("SELECT * FROM updates ORDER BY id DESC LIMIT 5");
                            if($result === false){
                                echo "<p style='color: red'> Error occured</p>";
                            }else
                            while($row = $result->fetch_object()){
                                echo 
                                "<span style='padding:5px;font-size:18px;word-wrap:break-word;'><span style='color:#00967f;font-size:16px;font-weight:bold;'>[".$row->date."]:</span>&nbsp&nbsp".$row->details."</span>
                                <br/><br/>";
                            }
                        }
                    ?>
                    <br/>
                    <div style="text-align:center;"><a class="btn btn-primary" href="updates.php">View All</a></div>
                </div>
            </section>
        </section>
    </section>

    

    <!-- ****************************** Sponsors Section ************************** -->


        <section id="sponsors" class="block" style="background: url(static/img/bg.jpg) no-repeat;background-size: cover;color: #fff;background-attachment: fixed;">
        <section class="container">
            <section class="row">
                <div class="title-box" style="color:#fff;"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left" style="border-color: #fff; "></span>
                <span class="bb-bottom-left" style="border-color: #fff; "></span>
                Sponsors
                <span class="bb-top-right" style="border-color: #fff; "></span>
                <span class="bb-bottom-right" style="border-color: #fff; "></span>
                </h1></div>
            </section>            
            <div class="col-sm-8 col-sm-offset-2 legible">
                <p style="color:#fff"> We're currently looking for sponsors ... Sponsor us !</p>
            </div>
        </section>
    </section>
    <!-- 
    <section class="row">
                <section class="col-md-6 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-75px;height:150px;width:150px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Anvesh reddy</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                        <i class="ion-android-call"></i> : +91 7309859041<br>
                        <i class="ion-android-mail"></i> : banvesh.kumar.eee12@iitbhu.ac.in
                        </p>
                    </div>
                </section>
                <section class="col-md-6 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-75px;height:150px;width:150px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Shubham Goel</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                        <i class="ion-android-call"></i> : +91 8417893863<br>
                        <i class="ion-android-mail"></i> : shubham.goel.eee13@iitbhu.ac.in
                        </p>
                    </div>
                </section>
            </section>
    -->
<?php include "templates/footer.php" ?>