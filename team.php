<?php include "templates/header.php" ?>
    <!-- ****************************** Header ************************** -->

    <header class="sticky" id="header">
        <section class="container">
            <section class="row" id="logo_menu" role="navigation">                  
                <div class="col-md-4 col-sm-8 col-xs-2 navbar-brand">
                    <a class="logo" href=""><i class="ion-ios-home hidden-md hidden-lg"></i><span class="hidden-sm hidden-xs"><strong>C O R E &nbsp T E A M</strong></span></a>
                </div>
                <div class="col-md-8 col-sm-4 col-xs-10">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav_menu">
                        <i class=" logo ion-navicon"></i>
                    </button>
                    </div>         <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" style="padding-top: 1em" id="nav_menu">
                    <ul class="nav navbar-nav navbar-right" style="overflow-y: visible; overflow-x: visible;">                 
                        <li style="padding-left: 2em"><a class="nav_menu_item" href="#features"><i class="ion-ios-mic"></i><span class="hidden-sm"> Marketing</span></a></li>
                        <li style="padding-left: 2em"><a class="nav_menu_item" href="#publicity"><i class="ion-android-call"></i><span class="hidden-sm"> Publicity</span></a></li>
                        <li style="padding-left: 2em"><a class="nav_menu_item" href="#coordinators"><i class="ion-android-checkbox-outline"></i><span class="hidden-sm"> Co-ordinators</span></a></li>
                        <li style="padding-left: 1em;position:relative;">
                        <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="true" style="background:rgba(0,0,0,.7);border:2px solid white;color:white;font-size:16px;">
                        Events
                        <span class="caret"></span>
                        </button>
                        <ul id="drop_ul" class="dropdown-menu" aria-labelledby="dropdownMenu1" style="z-index:100;position:absolute;background:rgba(0,0,0,.7);">
                        <li><a href="biZcraft.php">biZcraft</a></li>
                        <li><a href="consilium.php">Consilium</a></li>
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

    <section id="banner">
        <section class="container">
            <a class="slidedown wow animated zoomIn" data-wow-delay="2s" href="#features"><i class="ion-ios-download-outline"></i></a>
            <section class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="headings">
                        <h1 class="wow animated fadeInDown">THE TEAM</h1>
                        <p class="wow animated fadeInLeft">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
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
                Marketing
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
            
            <section class="row">
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        
                    </div>
                </section>
            </section>
            <div class="clearfix"></div>
        </section>
    </section>

    <!-- ****************************** Gallery Section ************************** -->

    <section id="publicity" class="block" style="background:url('static/img/bg.jpg');">
        <section class="container">
            <section class="row">
                <div class="title-box" style="color:#fff;"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left" style="border-color: #fff; "></span>
                <span class="bb-bottom-left" style="border-color: #fff; "></span>
                Publicity
                <span class="bb-top-right" style="border-color: #fff; "></span>
                <span class="bb-bottom-right" style="border-color: #fff; "></span>
                </h1></div>
            </section>
            <section class="row" style="color:white;">
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s" style="rgba(0,0,0,.7);padding:5px;">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s" style="rgba(0,0,0,.7);padding:5px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s" style="rgba(0,0,0,.7);padding:5px;">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s" style="rgba(0,0,0,.7);padding:5px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s" style="rgba(0,0,0,.7);padding:5px;">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s" style="rgba(0,0,0,.7);padding:5px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        
                    </div>
                </section>
            </section>
        </section>
    </section>

    <!-- ****************************** Contact Section ************************** -->

        <section id="coordinators" class="block">
        <section class="container">
            <section class="row">
                <div class="col-md-12">
                    <div class="title-box">
                        <h1 class="block-title wow animated rollIn">
                            <span class="bb-top-left"></span>
                            <span class="bb-bottom-left"></span>
                            Co-ordinators
                            <span class="bb-top-right"></span>
                            <span class="bb-bottom-right"></span>
                        </h1>
                    </div>
                </div>
            </section>
            <section class="row">
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </section>
                <section class="col-md-4 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="static/img/propic.jpg" class="img_res team-pic" style="position:relative;left:50%;margin-left:-150px;height:300px;width:300px;">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </section>
            </section>
        </section>
    </section>
<?php include "templates/footer.php" ?>