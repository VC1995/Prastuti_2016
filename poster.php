<?php include "templates/header.php" ?>

<!-- ***************************** Register button ****************** -->
    <div id="registerButton">
    <a href="registration_form.php#poster" class="btn btn-primary wow animated bounceInDown" data-wow-delay="1.5s" style="position: fixed; right: 3%; bottom: 3%;font-size: 2em;background: orange;z-index: 5;">Register Now <i class="ion-log-in"></i></a>
    </div>
 <!-- ****************************** Header ************************** -->
    <div id="preloader"></div>
    <header class="sticky" id="header">
        <section class="container">
            <section class="row" id="logo_menu" role="navigation">                  
                <div class="col-md-3 col-sm-8 col-xs-2 navbar-brand">
                    <span style="font-size: 1.2em;letter-spacing:0.5px;font-weight:bold;"><a href="index.php"><i class="ion-ios-home" ></i></a> | </span><a class="logo" href=""><span class="hidden-sm hidden-xs" style="letter-spacing:0.5px;font-weight:bold;font-size:20px;">POSTER PRESENTATION</span></a>
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
                        <li><a href="ppt.php">Paper Presenntation</a></li>
                        <li><a href="recognizance.php">Recognizance</a></li>
                        <li><a href="simulim.php">Simulim</a></li>
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
                        <h1 class="wow animated fadeInDown">POSTER PRESENTATION</h1>
                        <p class="wow animated fadeInLeft">Simplicity is the ultimate sophistication</p>                        
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
                <p>Posters do much more than simply please the eyes of the viewer. In the academic community, posters 

play an important role in explaining an academic concept or a research idea through a craftily composed 

summary, such that they can educate the audience in little time, as well as help generate their interest 

in the subject matter. Go creative with tables, graphs, images, and drive your idea home to the curious 

viewer at the poster demonstration. You will know you have succeeded when you see the eyes brighten 

up in front of you.</p>
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
            <section class="row legible" style="color:white;text-align:center;padding:10px;text-align:left;">
                <h4>Abstract Submission : </h4>
                <p>An abstract must be submitted online, defining the theme of the poster very concisely and should be limited to 150 words providing a clear outline of the poster.</p>
                <p>Abstracts are invited on any topic belonging to discrete fields namely -</p>
                <ul>
                    <li>Electrical Engineering</li>
                    <li>Electronics Engineering</li>
                    <li>Computer Science Engineering</li>
                    <li>Energy Effective Solutions</li>
                </ul>
                <h4>Poster Submission : </h4>
                <p>Selected teams on the basis of abstract are required to send us a mail at prastuti@iitbhu.ac.in within due date as mentioned in RULES AND GUIDELINES tab, consisting of the following : </p>
                <ul>
                    <li>Digital form of your poster</li>
                    <li>Details of all the team members: Names, Department, Phone numbers, College etc. in a tabular format</li>
                </ul>
                <h4>Final Presentation : </h4>
                <ul>
                    <li>Selected teams will have to bring and present their painted posters on the day of Prastuti'16.</li>
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
            <section class="row">
            <ol>
                <li> Team participating in both paper presentation and poster presentation must select distinct topics.</li>
                <li> The poster should be limited to 3ft in height and 4ft in width.</li>
                <li> The poster should be printed on a flex of the above dimensions.</li>
                <li> The presenting team should not consist of more than three participants.</li>
                <li> The participants should hand over the posters in the very beginning of the day before the start of the event. Any submissions after the start of event won’t be entertained.</li>
                <li> The poster must contain the title, author names, and the institution where the work was conducted, in large letters centered at the top of the poster.</li>
                <li> The time allotted for poster presentation is about 10 minutes per visitor/judge.</li>
                <li> The abstract submission date is 15th February 2016.</li>
                <li> The final date of submission of digital form of poster is 5th March 2016.</li>
            </ol>
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
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-75px;height:125px;width:125px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Akshay Paliwal</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                        <i class="ion-android-call"></i> : +91 8953838839<br>
                        <i class="ion-android-mail"></i> : akshay.paliwal.eee13@iitbhu.ac.in
                        </p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn legible" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-75px;height:125px;width:125px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Deepak Gautam</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                        <i class="ion-android-call"></i> : +91 7754942019<br>
                        <i class="ion-android-mail"></i> : deepak.gautam.eee13@iitbhu.ac.in
                        </p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn legible" data-wow-delay=="0.3s" style="position:relative;">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-75px;height:125px;width:125px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Shiv Kumar</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">
                        <i class="ion-android-mail"></i> : kvs.ramakrishna.eee14@itbhu.ac.in
                        </p>
                    </div>
                </section>
            </section>
        </section>
    </section>
<?php include "templates/footer.php" ?>