<?php include "templates/header.php" ?>

<!-- ***************************** Register button ****************** -->
    <div id="registerButton">
    <a href="registration_form.php#recog" class="btn btn-primary wow animated bounceInDown" data-wow-delay="1.5s" style="position: fixed; right: 3%; bottom: 3%;font-size: 2em;background: orange;z-index: 5;">Register Now <i class="ion-log-in"></i></a>
    </div>
 <!-- ****************************** Header ************************** -->
    <div id="preloader"></div>
    <header class="sticky" id="header">
        <section class="container">
            <section class="row" id="logo_menu" role="navigation">                  
                <div class="col-md-3 col-sm-8 col-xs-2 navbar-brand">
                    <span style="font-size: 1.2em;letter-spacing:2px;font-weight:bold;"><a href="index.php"><i class="ion-ios-home" ></i></a> | </span><a class="logo" href=""><i class="ion-ios-home hidden-md hidden-lg"></i><span class="hidden-sm hidden-xs" style="letter-spacing:2px;font-weight:bold;">RECOGNIZANCE</span></a>
                </div>
                <div class="collapse navbar-collapse" style="padding-top:1em;width:auto;" id="nav_menu">
                <ul id="nav_menu" class="nav navbar-nav navbar-right" style="overflow-y: visible; overflow-x: visible">                 
                    <li style="padding-left: 1em"><a class="nav_menu_item" href="#features"><i class="ion-play"></i><span class="hidden-sm"> Introduction</span></a></li>
                    <li style="padding-left: 1em"><a class="nav_menu_item" href="#gallery"><i class="ion-gear-a"></i><span class="hidden-sm"> Event Structure</span></a></li>
                    <li style="padding-left: 1em"><a class="nav_menu_item" href="#rules"><i class="ion-android-checkbox-outline"></i><span class="hidden-sm"> Rules & Guidlines</span></a></li>
                    <li style="padding-left: 1em"><a class="nav_menu_item" href="#team"><i class="ion-android-call"></i><span class="hidden-sm"> Coordinators</span></a></li>
                    <li style="padding-left: 1em;position:relative;">
                        <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="true" style="background:rgba(0,0,0,.7);border:2px solid white;color:white;font-size:16px;">
                        Other Events
                        <span class="caret"></span>
                        </button>
                        <ul id="drop_ul" class="dropdown-menu" aria-labelledby="dropdownMenu1" style="z-index:100;position:absolute;background:rgba(0,0,0,.7);">
                        <li><a href="bizcraft.php">biZcraft</a></li>
                        <li><a href="consilium.php">Consilium</a></li>
                        <li><a href="idp.php">IDP</a></li>
                        <li><a href="simulim.php">Simulim</a></li>
                        <li><a href="ppt.php">Paper Presentation</a></li>
                        <li><a href="poster.php">Poster Presentation</a></li>
                        <li><a href="sos.php">SOS</a></li>
                        </ul>
                        </div>
                    </li>            
                </ul>   
                </div>          
                </div>  
            </section>          
        </section>
    </header>

    <!-- ****************************** Banner ************************** -->

    <section id="banner" >
        <section class="container">
            <a class="slidedown wow animated zoomIn" data-wow-delay="1s" href="#features"><i class="ion-ios-download-outline" style='color: black'></i></a>
            <section class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="headings">
                        <h1 class="wow animated fadeInDown">RECOGNIZANCE</h1>
                        <p class="wow animated fadeInLeft">Let's give our machines a 'vision'.</p>                        
                    </div>
                </div>
                <div class="col-md-2 hidden-xs hidden-sm">
                    
                </div>
            </section>
        </section>
    </section>

    <!-- ****************************** Features Section ************************** -->

    <section id="features" class="block">
        <section class="container" style="max-width:65%;">
            <section class="row">
                <div class="title-box"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                Introduction
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
            
            <section class="row" style="text-align:center;">
                <p>Computer Vision is an important field in Artificial Intelligence and Robotics. Computer Vision has come a long way from the old days, when taking a photograph took an hour, to the present, when handwriting recognition is widely available. If you have an interest in Machine learning or Computer Vision, Recognizance will supply you with some hands-on experience in the field of machine learning, applied to Computer Vision. One of the biggest hurdles Computer Vision faces at present day is recognition of objects invariant to occlusion, scaling, rotation and blur. This event aims to tackle this problem and provide a platform to build accurate models to solve this issue. </p>
            </section>
            <div class="clearfix"></div>
        </section>
    </section>

    <!-- ****************************** Gallery Section ************************** -->

    <section id="gallery" class="block">
        <section class="container" style="max-width:65%;">
            <section class="row">
                <div class="title-box" style="color:#fff;"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left" style="border-color: #fff; "></span>
                <span class="bb-bottom-left" style="border-color: #fff; "></span>
                Event Structure
                <span class="bb-top-right" style="border-color: #fff; "></span>
                <span class="bb-bottom-right" style="border-color: #fff; "></span>
                </h1></div>
            </section>
            <section class="row legible" style="color:white;text-align:left;padding:10px;">The event consists of two levels as described below :<br>

                <ol>
                    <li> The first level is relatively simple and evaluates the performance of the software built by the respective teams on the MNIST digit recognition dataset. The evaluation metric is relatively simple and is evaluated based on the classification accuracy. </li>
                    <li> The second level confronts a relatively difficult problem. The participants in this level are expected to build a software to classify 10 different classes of objects. The objects classes are taken from the CIFAR – 10 dataset. The software is supposed to make top two predictions and if any of those predictions match the correct answer the test image would be considered correctly labelled but preference would be given to the implementation providing the correct label as its most likely choice.</li>
                </ol>
            </section>
        </section>
    </section>


    <section id="rules" class="block">
        <section class="container" style="max-width:65%;">
            <section class="row">
                <div class="title-box"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                Rules and Guidlines
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
            <p>Each team should have a team-name and should consist maximum of 3 students each. There shouldn't be any attempts of plagiarism or copying of code from any source, else if found, would lead to disqualification straightaway. The decisions of the event coordinators should abide and be final in any situation whatsoever.</p>
            <section class="row">
            </section>
            <div class="clearfix"></div>
        </section>
    </section>

    <!-- ****************************** Contact Section ************************** -->

    <section style="background: url(static/img/bg.jpg);background-size: cover;background-attachment: fixed;position: relative" id="team" class="block">
        <section class="container">
            <section class="row">
                <div class="title-box" style="color:#fff;"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left" style="border-color: #fff; "></span>
                <span class="bb-bottom-left" style="border-color: #fff; "></span>
                Contact Us
                <span class="bb-top-right" style="border-color: #fff; "></span>
                <span class="bb-bottom-right" style="border-color: #fff; "></span>
                </h1></div>
            </section>
            <section class="row" style="color:white;text-align:center;">
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn legible" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/PrakarshSaxena.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-75px;height:125px;width:125px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Prakarsh Saxena</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                            <i class="ion-android-call"></i> : +91 9582281456<br>
                                <i class="ion-android-mail"></i> : prakarsh.saxena.eee13@iitbhu.ac.in
                        </p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn legible" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/GSwaminathan.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-75px;height:125px;width:125px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">G.Swaminathan</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                            <i class="ion-android-call"></i> : +91 8572938422<br>
                            <i class="ion-android-mail"></i> : g.swaminathan.eee13@iitbhu.ac.in
                        </p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn legible" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/nitesh.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-75px;height:125px;width:125px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Nitesh Kumar</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                            <i class="ion-android-call"></i> : +91-9680891895<br>
                            <i class="ion-android-mail"></i> : nitesh.kumar.eee13@iitbhu.ac.in
                        </p>
                    </div>
                </section>
            </section>
        </section>
    </section>
<?php include "templates/footer.php" ?>