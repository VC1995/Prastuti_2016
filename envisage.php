<?php include "templates/header.php" ?>
 <!-- ****************************** Header ************************** -->
    <header class="sticky" id="header">
        <section class="container">
            <section class="row" id="logo_menu" role="navigation">                  
                <div class="col-md-2 col-sm-8 col-xs-2 navbar-brand">
                    <a class="logo" href=""><i class="ion-ios-home hidden-md hidden-lg"></i><span class="hidden-sm hidden-xs" style="letter-spacing:2px;font-weight:bold;">ENVISAGE</span></a>
                </div>
                <div class="collapse navbar-collapse" style="padding-top:1em;width:auto;" id="nav_menu">
                <ul id="nav_menu" class="nav navbar-nav navbar-right" style="overflow-y: visible; overflow-x: visible">                 
                    <li style="padding-left: 1em"><a class="nav_menu_item" href="#features"><i class="ion-play"></i><span class="hidden-sm"> Introduction</span></a></li>
                    <li style="padding-left: 1em"><a class="nav_menu_item" href="#gallery"><i class="ion-gear-a"></i><span class="hidden-sm"> Event Structure</span></a></li>
                    <li style="padding-left: 1em"><a class="nav_menu_item" href="#rules"><i class="ion-android-checkbox-outline"></i><span class="hidden-sm"> Rules & Guidlines</span></a></li>
                    <li style="padding-left: 1em"><a class="nav_menu_item" href="#team"><i class="ion-android-call"></i><span class="hidden-sm"> Contact Us</span></a></li>
                    <li style="padding-left: 1em;position:relative;">
                        <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="true" style="background:rgba(0,0,0,.7);border:2px solid white;color:white;font-size:16px;">Other Events
                        <span class="caret"></span>
                        </button>
                        <ul id="drop_ul" class="dropdown-menu" aria-labelledby="dropdownMenu1" style="z-index:100;position:absolute;background:rgba(0,0,0,.7);">
                        <li><a href="bizcraft.php">biZcraft</a></li>
                        <li><a href="idp.php">IDP</a></li>
                        <li><a href="ppt.php">Paper Presentation</a></li>
                        <li><a href="poster.php">Poster Presentation</a></li>
                        <li><a href="recognizance.php">Recognizance</a></li>
                        <li><a href="simulim.php">Simulim</a></li>
                        <li><a href="sos.php">SOS</a></li>
                        <li><a href="index.php">HOME</a></li>
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
            <a class="slidedown wow animated zoomIn" data-wow-delay="2s" href="#features"><i class="ion-ios-download-outline"></i></a>
            <section class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="headings">
                        <h1 class="wow animated fadeInDown">CONSILIUM</h1>
                        <p class="wow animated fadeInLeft" style="background:rgba(0,0,0,.7);">It invites all the valuable minds to scream out their ideas and learning</p>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-5">
                                <div style="background:rgba(0,0,0,.7);">
                                    <a href="registration_form.php" class="polo-btn store wow animated bounceInUp"><i class="ion-android-checkbox-outline"></i> Register</a>
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
                <p>Electrical Engineering is a vast field and requires an ensemble of qualities. Designing a
circuit is perhaps one of the most important aspects of Electrical Engineering. But designing 
is not a skill that can be learnt from textbooks. It needs to be learnt by experience and 
wishful thinking. It requires proper ‘Consilium’ and a clear head for incisive planning. 
Through our event, we plan to test a person’s ability to think on their feet and meticulously 
design electric circuits with meagre resources, hence the name ‘CONSILIUM’. Apart from 
this, the event also aims at testing one’s knowledge of electrical circuits and systems.</p>
            </section>
            <div class="clearfix"></div>
        </section>
    </section>

    <!-- ****************************** Gallery Section ************************** -->

    <section id="gallery" class="block">
        <section class="container" style="max-width:65%;text-align:center;">
            <section class="row">
                <div class="title-box" style="color:#fff;"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left" style="border-color: #fff; "></span>
                <span class="bb-bottom-left" style="border-color: #fff; "></span>
                Event Structure
                <span class="bb-top-right" style="border-color: #fff; "></span>
                <span class="bb-bottom-right" style="border-color: #fff; "></span>
                </h1></div>
            </section>
            <section class="row" style="color:white;text-align:center;background:rgba(0,0,0,.7);text-align:left;padding:10px;"><h4>Round 1 (Basic Electrical Quiz)</h4>
                This consists of a small quiz based on electrical and
                electronics. This is not a qualifying round, though the points secured will be included 
                in the final scoring.
                <h4>Round 2</h4>
                Teams will be provided with problems, along with the components
                required. They are required to design an appropriate circuit according to the 
                problem provided. This round will be of 30 minutes duration. After 30 minutes, 
                scoring will be done depending on the progress of the teams. These scores will act as 
                qualifying scores for Round 3.
                <h4>Round 3</h4>
                Teams will have to implement the circuit and provide the required output.
                There might be a TWIST in this round, which (if any) would be introduced during the 
                event. This round will be of 60 minutes duration. 
                <p>After 3rd round, scoring shall be done and then the cumulated score of all three 
                rounds will decide the winning teams.
                Scoring will be done in the following manner:</p>
                <ul>
                    <li>Round 1 – 20 points</li>
                    <li>Round 2 – 30 points</li>
                    <li>Round 3 – 50 points</li>
                </ul>
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
            <ol>
                <li>Participants should be registered graduate/undergraduate students of an accredited institute. The event is open only for 1st and 2nd year students.</li>
                <li>Participants from different institutes can be part of a single team.</li>
                <li>There can be maximum 3 and a minimum of 2 members in each team. The teams will have to register on the website along with all the team members.</li>
                <li>No team is permitted the use of mobile phones or any other source of information. The teams shall design the circuit with their own brainwork and thinking. Any team found using any source may lead to disqualification.</li>
            </ol>
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
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">Anchit Agarwal </h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">+91-7388840074<br/>anchit.agarwal.eee13@iitbhu.ac.in</p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">Amit Kalyan</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">+91-7860561611<br/>amit.kalyan.eee13@iitbhu.ac.in</p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">Anshul Mahawar</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">+91-8009752952<br/>anshul.mahawar.eee13@iitbhu.ac.in</p>
                    </div>
                </section>
            </section>
        </section>
    </section>
<?php include "templates/footer.php" ?>