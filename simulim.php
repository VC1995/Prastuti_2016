<?php include "templates/header.php" ?>
 <!-- ****************************** Header ************************** -->
    <div id="preloader"></div>
    <header class="sticky" id="header">
        <section class="container">
            <section class="row" id="logo_menu" role="navigation">                  
                <div class="col-md-2 col-sm-8 col-xs-2 navbar-brand">
                    <span style="font-size: 1.2em;letter-spacing:2px;font-weight:bold;"><a href="index.php"><i class="ion-ios-home" ></i></a> | </span><a class="logo" href=""><i class="ion-ios-home hidden-md hidden-lg"></i><span class="hidden-sm hidden-xs" style="letter-spacing:2px;font-weight:bold;">SIMULIM</span></a>
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
                        <li><a href="bizcraft.php">Bizcraft</a></li>
                        <li><a href="consilium.php">Consilium</a></li>
                        <li><a href="idp.php">IDP</a></li>
                        <li><a href="ppt.php">Paper Presentation</a></li>
                        <li><a href="poster.php">Poster Presentation</a></li>
                        <li><a href="recognizance.php">Recognizance</a></li>
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
                        <h1 class="wow animated fadeInDown">SIMULIM</h1>
                        <p class="wow animated fadeInLeft">
                            Power to fabricate the reality
                        </p>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-5">
                                <div>
                                    <a href="registration_form.php#simulim" style="background:rgba(0,0,0,.7);" class="polo-btn store wow animated bounceInUp"><i class="ion-android-checkbox-outline"></i> Register</a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-5">
                                <!-- if you want any button -->
                            </div>
                        </div>
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
            <p>No scientific project goes to field without passing the Simulation Tests – whether it’s launch of a 
            missile or the setup of oil refineries. For industries, the setup and tooling is expensive, and 
            probing the behaviour of system output is extremely difficult. Simulation proves to be a 
            powerful tool for analysing, designing, and operating complex systems. It helps in predicting the 
            course of systems with various possibilities of modification and efficiency improvement.<br/>
            Simulim, as an event, introduces participants to various concepts of Simulink Library of MATLAB 
            and provides a platform to the budding technologists to prove their mettle in simulation and 
            design of innovative solution to real-life industrial problems.</p>
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
            <section class="row legible" style="color:white;text-align:center;">
            <h4>1. Assignments: </h4><p> Three workshops will be conducted for the event. At the end of each
            workshop, questions (along with workshop material) will be posted on the website and 
            Facebook page, answers to which are to be submitted before the given deadline.</p>
            <h4>2. Simulation project: </h4><p>A problem statement will be released after completion of
            workshops. Participants will have to submit their simulations(using MATLAB) pertaining to the 
            problem statement before the given deadline.</p>
            <h4>3. On-spot event</h4><p>On the day of event, a quiz will be conducted to test participants’
            general understanding of simulation. It will be followed by discussion and questioning session 
            regarding the participants’ submissions of simulation project.
            </p>
            <p><strong>Winners will be decided on the basis of successive evaluation of assignments, simulation project 
            and on-spot event.</strong></p>
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
            <section class="row"><p>
            <ol>
                <li> Participants should be registered graduate/undergraduate students of an accredited institute. Participants from different institutes can be a part of a single team.</li>
                <li> Maximum number of members allowed in a team is two. The teams will have to register on the website and should have a team name.</li>
                <li> Participants are required to carry their own laptop and peripherals as required. (Power supply and charging points will be provided by the event co-ordinators).</li>
                <li> Organizers are not responsible for the failure of devices during display and no benefits/relaxations will be provided in such circumstances.</li>
                <li> The best answer to the problem is considered on the basis of speed and accuracy.</li>
                <li> Organizers reserve all rights regarding the declaration of winner.  No objections in this regards will be entertained.</li>
            </ol> 
            </p>
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
                        <img src="static/img/Harsh.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-125px;height:250px;width:250px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Harsh Kumar Kedia</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                            <i class="ion-android-call"></i> : +91 8564866913<br>
                        <i class="ion-android-mail"></i> : harsh.kkedia.eee13@iitbhu.ac.in
                        </p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn legible" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/rajat.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-125px;height:250px;width:250px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Rajat Gupta</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                            <i class="ion-android-call"></i> : +91 7668010319<br>
                        <i class="ion-android-mail"></i> : rajat.gupta.eee13@iitbhu.ac.in
                        </p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn legible" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-125px;height:250px;width:250px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Garlapati Manoj</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                            <i class="ion-android-call"></i> : +91 8960438496<br>
                        <i class="ion-android-mail"></i> : garlapati.manoj.eee13@iitbhu.ac.in
                        </p>
                    </div>
                </section>
            </section>
        </section>
    </section>
<?php include "templates/footer.php" ?>