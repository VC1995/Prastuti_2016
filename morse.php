<?php include "templates/header.php" ?>
 <!-- ****************************** Header ************************** -->
    <header class="sticky" id="header">
        <section class="container">
            <section class="row" id="logo_menu" role="navigation">                  
                <div class="col-md-3 col-sm-8 col-xs-2 navbar-brand">
                    <a class="logo" href=""><i class="ion-ios-home hidden-md hidden-lg"></i><span class="hidden-sm hidden-xs" style="letter-spacing:2px;font-weight:bold;">MORSE MYSTERY</span></a>
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
                        <li><a href="bizcraft.php">BIZCRAFT</a></li>
                        <li><a href="envisage.php">Envisage</a></li>
                        <li><a href="idp.php">IDP</a></li>
                        <li><a href="jaribio.php">Jaribio</a></li>
                        <li><a href="ppt.php">Paper Presentation</a></li>
                        <li><a href="recognizance.php">Recognizance</a></li>
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
                        <h1 class="wow animated fadeInDown">MORSE MYSTERY</h1>
                        <p class="wow animated fadeInLeft" style="background:rgba(0,0,0,.8);">Have you ever tried to encrypt or decrypt some code? Try decoding this:<br>
.--. .-. .- ... - ..- - ..</p>
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
                <p>
                    Morse code is a method of transmitting text information as a series of on-off tones, lights, or clicks that can be directly understood by a skilled listener or observer without special equipment. In 1836, Samuel Morse demonstrated the ability of a telegraph system to transmit information over wires. The information was sent as a series of electrical signals. Short signals are referred to as dits (represented as dots). Long signals are referred to as dahs (represented as dashes). With the advent of radio communications, an international version of Morse code became widely used.</p>
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
            <section class="row" style="color:white;text-align:center;background:rgba(0,0,0,.7);">PRASTUTI’ 15 introduces a new event to appreciate the importance of this code. The challenge would be to develop their own Telegram Machine working on the principle of MORSE CODE and wireless communications. This machine would include two modules, one for sending message in Morse Code and other for receiving the signals and displaying it in the form of Morse Code on LCD Display.
                <h2 style="color:white;text-align:center;">Problem Statement</h2>
                <section class="row" style="color:white;text-align:center;text-align:left;padding:10px;"><ul>
<li>One participant from each team would be provided with a “Secret Message” on Sending End. This member has to send the message to other team members sitting on the Receiving End.</li>
<li>Communication between two ends should be done using IR LEDs and TSOP Sensors.</li>
<li>Sending End should have manual system to send Dots, Dashes and Spaces.</li>
<li>Receiving End should have a audio/display to display deceived signal.</li>
<li>Remaining team members have to decode the received signals</li>
<li>Teams decoding the message correctly with minimum time would be declared as winner.</li>
</ul>
            </section>
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
                <li>Team strength should not exceed four.</li>
                <li>Participants have to use INTERNATIONAL MORSE CODE only during the event.</li>
                <li>Only basic ICs (4xxx and 7xxx) and 8-bit microcontrollers are allowed. Use of any other IC should be intimated to us and verified.</li>
                <li>Using unfair means would result in disqualification of the team.</li>
                <li>Judges decision shall be final and binding on all. The organizers reserve the rights to change any or all of the above rules as they deem fit. Change in rules, if any will be highlighted on the website and notified to the registered participants</li>
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
                Coordinators
                <span class="bb-top-right" style="border-color: #fff; "></span>
                <span class="bb-bottom-right" style="border-color: #fff; "></span>
                </h1></div>
            </section>
            <section class="row" style="color:white;text-align:center;">
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/dev-1.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/dev-2.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/dev-3.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s" style="background:rgba(0,0,0,.7);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </section>
            </section>
        </section>
    </section>
<?php include "templates/footer.php" ?>