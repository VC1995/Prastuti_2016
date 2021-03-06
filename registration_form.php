<html lang="en">
<head>
    <title>Prastuti 2016</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/registration_form.css">
    <link rel="stylesheet" href="static/css/ionicons.min.css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
<body id="home">
    <div id="preloader"></div>
<div id="content" class="container">
    <!-- ****************************** Header ***************************** -->
    <header>
        <section>
        <div id="animated_div"><a href="index.php">PRASTUTI'16</a></div>
        </section>
        <br>
        <section>                                  
            <ul class="nav nav-pills nav-justified" id="event_chooser">
                <li class="nav_menu_item"><a data-toggle="tab" href="#business">biZcraft</a></li>
                <li class="nav_menu_item"><a data-toggle="tab" href="#consilium">Consilium</a></li>
                <li class="nav_menu_item"><a data-toggle="tab" href="#idp">IDP</a></li>
                <li class="nav_menu_item"><a data-toggle="tab" href="#paper">Paper Presentation</a></li>
                <li class="nav_menu_item"><a data-toggle="tab" href="#poster">Poster Presentation</a></li>
                <li class="nav_menu_item"><a data-toggle="tab" href="#recog">Recognizance</a></li>
                <li class="nav_menu_item"><a data-toggle="tab" href="#simulim">Simulim</a></li>
                <li class="nav_menu_item"><a data-toggle="tab" href="#sos">SOS</a></li>
            </ul>                  
        </section>
    </header>
    <div class="tab-content">
        <div id="biZcraft" class="tab-pane fade in active">
            <br>
            <!-- ***************************** Content *************************** -->
                <div class="container"><h4>
                INSTRUCTIONS :-
                </h4></div>
            <div class="container">
                <p><span class="ion-arrow-right-c"></span> Each team should have a team name.</p>
                <p><span class="ion-arrow-right-c"></span> Each team should consist of three members at most.</p>
            </div>
            <br>
            <div class="well well-md">                
                <section class="row">
                <div class="title-box"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                REGISTRATION FORM
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
                <form id="reg_biZcraft" method="POST" action="register.php">
                    <input name="event_name" value="business" class="hidden">
                    <div class="row">
                    <fieldset class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="team_name">Team name</label>
                        <input type="text" class="form-control " id="team_name" name="team_name" placeholder="Enter your team-name">
                    </fieldset>
                    </div>
                    <div class="row">
                    <fieldset class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="college">College</label>
                        <input type="text" class="form-control" id="college" name="college" placeholder="Enter your college">
                    </fieldset>
                    </div>
                    <br>
                    <h4> Team member details : </h4>
                    <h5>Team representative :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member1_name" name="member1_name" placeholder="name"></div>       
                        <div class="col-lg-5 col-md-5 col-sm-5"><input type="text" class="form-control" id="member1_email" name="member1_email" placeholder="email"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3"><input type="text" class="form-control" id="member1_number" name="member1_number" placeholder="mobile number"></div>     
                    </fieldset>
                    </div>
                    <h5>Member 2 :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member2_name" name="member2_name" placeholder="Enter name"></div>   
                    </fieldset>
                    </div>
                    <h5>Member 3 :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member3_name" name="member3_name" placeholder="Enter name"></div>     
                    </fieldset>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-lg btn-primary" value="submit">Register</button>
                </form>
            </div>
        </div>

        <div id="consilium" class="tab-pane fade">
            <br>
            <!-- ***************************** Content *************************** -->
                <div class="container"><h4>
                INSTRUCTIONS :-
                </h4></div>
            <div class="container">
                <p><span class="ion-arrow-right-c"></span> Each team should have a team name.</p>
                <p><span class="ion-arrow-right-c"></span> There can be maximum 3 and a minimum of 2 members in each team.</p>
                <p><span class="ion-arrow-right-c"></span> The event is open only for 1st and 2nd year students.</p>
            </div>
            <br>
            <div class="well well-md">                
                <section class="row">
                <div class="title-box"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                REGISTRATION FORM
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
                <form id="reg_consilium" method="POST" action="register.php">
                    <input name="event_name" value="business" class="hidden">
                    <div class="row">
                    <fieldset class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="team_name">Team name</label>
                        <input type="text" class="form-control " id="team_name" name="team_name" placeholder="Enter your team-name">
                    </fieldset>
                    </div>
                    <div class="row">
                    <fieldset class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="college">College</label>
                        <input type="text" class="form-control" id="college" name="college" placeholder="Enter your college">
                    </fieldset>
                    </div>
                    <br>
                    <h4> Team member details : </h4>
                    <h5>Team representative :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member1_name" name="member1_name" placeholder="name"></div>       
                        <div class="col-lg-5 col-md-5 col-sm-5"><input type="text" class="form-control" id="member1_email" name="member1_email" placeholder="email"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3"><input type="text" class="form-control" id="member1_number" name="member1_number" placeholder="mobile number"></div>     
                    </fieldset>
                    </div>
                    <h5>Member 2 :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member2_name" name="member2_name" placeholder="Enter name"></div>   
                    </fieldset>
                    </div>
                    <h5>Member 3 (optional) :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member3_name" name="member3_name" placeholder="Enter name"></div>     
                    </fieldset>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-lg btn-primary" value="submit">Register</button>
                </form>
            </div>
        </div>
        
        <div id="idp" class="tab-pane fade">
            <br>
            <!-- ***************************** Content *************************** -->
            <div class="container"><h4>
                INSTRUCTIONS :-
                </h4></div>
            <div class="container">
                <p><span class="ion-arrow-right-c"></span> Each team should have a team-name. </p>
                <p><span class="ion-arrow-right-c"></span> Each team can have maximum 3 members. </p>
            </div>
            <br>
            <!-- ***************************** Content *************************** -->
            <div class="well well-md">            
                <section class="row">
                <div class="title-box"><h1 class="block-title">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                REGISTRATION FORM
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
                <form id="reg_idp" method="POST" action="register.php">
                    <input name="event_name" value="idp" class="hidden">
                    <div class="row">
                    <fieldset class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="team_name">Team name</label>
                        <input type="text" class="form-control " id="team_name" name="team_name" placeholder="Enter your team-name">
                    </fieldset>
                    </div>
                    <div class="row">
                    <fieldset class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="college">College</label>
                        <input type="text" class="form-control" id="college" name="college" placeholder="Enter your college">
                    </fieldset>
                    </div>
                    <br>
                    <h4> Team member details : </h4>
                    <h5>Team Representative :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member1_name" name="member1_name" placeholder="name"></div>       
                        <div class="col-lg-5 col-md-5 col-sm-5"><input type="text" class="form-control" id="member1_email" name="member1_email" placeholder="email"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3"><input type="text" class="form-control" id="member1_number" name="member1_number" placeholder="mobile number"></div>     
                    </fieldset>
                    </div>
                    <h5>Member 2 (optional) :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member2_name" name="member2_name" placeholder="Enter name"></div>    
                    </fieldset>
                    </div>
                    <h5>Member 3 (optional) :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member3_name" name="member3_name" placeholder="Enter name"></div>    
                    </fieldset>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-lg btn-primary" name="submit" value="submit">Register</button>
                </form>
            </div>
        </div>
        
        <div id="paper" class="tab-pane fade">
            <br>
            <!-- ***************************** Content *************************** -->
            <div class="container"><h4>
                INSTRUCTIONS :-
                </h4></div>
            <div class="container">
                <p><span class="ion-arrow-right-c"></span> Each team should have a team name. </p>
                <p><span class="ion-arrow-right-c"></span> There can be at most three members in a team. </p>
            </div>
            <br>
            <!-- ***************************** Content *************************** -->
            <div class="well well-md">            
                <section class="row">
                <div class="title-box"><h1 class="block-title">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                REGISTRATION FORM
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
                <form id="reg_paper" method="POST" action="register.php">
                    <input name="event_name" value="paper" class="hidden">
                    <div class="row">
                    <fieldset class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="team_name">Team name</label>
                        <input type="text" class="form-control " id="team_name" name="team_name" placeholder="Enter your team-name">
                    </fieldset>
                    </div>
                    <div class="row">
                    <fieldset class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="college">College</label>
                        <input type="text" class="form-control" id="college" name="college" placeholder="Enter your college">
                    </fieldset>
                    </div>
                    <br>
                    <h4> Team member details : </h4>
                    <h5>Team Representative :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member1_name" name="member1_name" placeholder="name"></div>       
                        <div class="col-lg-5 col-md-5 col-sm-5"><input type="text" class="form-control" id="member1_email" name="member1_email" placeholder="email"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3"><input type="text" class="form-control" id="member1_number" name="member1_number" placeholder="mobile number"></div>     
                    </fieldset>
                    </div>
                    <h5>Member 2 (optional) :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member2_name" name="member2_name" placeholder="Enter name"></div>    
                    </fieldset>
                    </div>
                    <h5>Member 3 (optional) :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member3_name" name="member3_name" placeholder="Enter name"></div>   
                    </fieldset>
                    </div>                    
                    <br>
                    <button type="submit" class="btn btn-lg btn-primary" name="submit" value="submit">Register</button>
                </form>
            </div>
        </div>
        
        <div id="poster" class="tab-pane fade">
            <br>
            <!-- ***************************** Content *************************** -->
            <div class="container"><h4>
                INSTRUCTIONS :-
                </h4></div>
            <div class="container">
                <p><span class="ion-arrow-right-c"></span> Each team should have a team name. </p>
                <p><span class="ion-arrow-right-c"></span> The presenting team should not consist of more than three participants.</p>
            </div>
            <br>
            <!-- ***************************** Content *************************** -->
            <div class="well well-md">            
                <section class="row">
                <div class="title-box"><h1 class="block-title">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                REGISTRATION FORM
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
                <form id="reg_poster" method="POST" action="register.php">
                    <input name="event_name" value="machine" class="hidden">
                    <div class="row">
                    <fieldset class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="team_name">Team name</label>
                        <input type="text" class="form-control " id="team_name" name="team_name" placeholder="Enter your team-name">
                    </fieldset>
                    </div>
                    <div class="row">
                    <fieldset class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="college">College</label>
                        <input type="text" class="form-control" id="college" name="college" placeholder="Enter your college">
                    </fieldset>
                    </div>
                    <br>
                    <h4> Team member details : </h4>
                    <h5>Team representative :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member1_name" name="member1_name" placeholder="Enter name"></div>       
                        <div class="col-lg-5 col-md-5 col-sm-5"><input type="text" class="form-control" id="member1_email" name="member1_email" placeholder="email"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3"><input type="text" class="form-control" id="member1_number" name="member1_number" placeholder="mobile number"></div>     
                    </fieldset>
                    </div>
                    <h5>Member 2 (optional) :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member2_name" name="member2_name" placeholder="Enter name"></div>   
                    </fieldset>
                    </div>
                    <h5>Member 3 (optional) :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member3_name" name="member3_name" placeholder="Enter name"></div>    
                    </fieldset>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-lg btn-primary" name="submit" value="submit">Register</button>
                </form>
            </div>
        </div>

        <div id="recog" class="tab-pane fade">
            <br>
            <!-- ***************************** Content *************************** -->
                <div class="container"><h4>
                INSTRUCTIONS :-
                </h4></div>
            <div class="container">
                <p><span class="ion-arrow-right-c"></span> Each team should have a team-name. </p>
                <p><span class="ion-arrow-right-c"></span> Each team should consist of a maximum of 3 students each. </p>
                <p><span class="ion-arrow-right-c"></span> Only codes written in MATLAB will be accepted.</p>
            </div>
            <br>
            <div class="well well-md">                
                <section class="row">
                <div class="title-box"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                REGISTRATION FORM
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
                <form id="reg_recog" method="POST" action="register.php">
                    <input name="event_name" value="business" class="hidden">
                    <div class="row">
                    <fieldset class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="team_name">Team name</label>
                        <input type="text" class="form-control " id="team_name" name="team_name" placeholder="Enter your team-name">
                    </fieldset>
                    </div>
                    <div class="row">
                    <fieldset class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="college">College</label>
                        <input type="text" class="form-control" id="college" name="college" placeholder="Enter your college">
                    </fieldset>
                    </div>
                    <br>
                    <h4> Team member details : </h4>
                    <h5>Team representative :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member1_name" name="member1_name" placeholder="name"></div>       
                        <div class="col-lg-5 col-md-5 col-sm-5"><input type="text" class="form-control" id="member1_email" name="member1_email" placeholder="email"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3"><input type="text" class="form-control" id="member1_number" name="member1_number" placeholder="mobile number"></div>     
                    </fieldset>
                    </div>
                    <h5>Member 2 (optional) :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member2_name" name="member2_name" placeholder="Enter name"></div>   
                    </fieldset>
                    </div>
                    <h5>Member 3 (optional) :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member3_name" name="member3_name" placeholder="Enter name"></div>     
                    </fieldset>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-lg btn-primary" value="submit">Register</button>
                </form>
            </div>
        </div>
        <div id="simulim" class="tab-pane fade">
            <br>
            <!-- ***************************** Content *************************** -->
            <div class="container"><h4>
                INSTRUCTIONS :-
                </h4></div>
            <div class="container">
                <p><span class="ion-arrow-right-c"></span> Each team should have a team name.</p>
                <p><span class="ion-arrow-right-c"></span> Each team can have maximum 2 members. </p>
            </div>
            <br>
            <!-- ***************************** Content *************************** -->
            <div class="well well-md">            
                <section class="row">
                <div class="title-box"><h1 class="block-title">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                REGISTRATION FORM
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
                <form id="reg_simulim" method="POST" action="register.php">
                    <input name="event_name" value="simulim" class="hidden">
                    <div class="row">
                    <fieldset class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="team_name">Team name</label>
                        <input type="text" class="form-control " id="team_name" name="team_name" placeholder="Enter your team-name">
                    </fieldset>
                    </div>
                    <div class="row">
                    <fieldset class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="college">College</label>
                        <input type="text" class="form-control" id="college" name="college" placeholder="Enter your college">
                    </fieldset>
                    </div>
                    <br>
                    <h4> Team member details : </h4>
                    <h5>Team Representative :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member1_name" name="member1_name" placeholder="name"></div>       
                        <div class="col-lg-5 col-md-5 col-sm-5"><input type="text" class="form-control" id="member1_email" name="member1_email" placeholder="email"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3"><input type="text" class="form-control" id="member1_number" name="member1_number" placeholder="mobile number"></div>     
                    </fieldset>
                    </div>
                    <h5>Member 2 (optional) :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member2_name" name="member2_name" placeholder="Enter name"></div>     
                    </fieldset>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-lg btn-primary" name="submit" value="submit">Register</button>
                </form>
            </div>
        </div>
        <div id="sos" class="tab-pane fade">
            <br>
            <!-- ***************************** Content *************************** -->
            <div class="container"><h4>
                INSTRUCTIONS :-
                </h4></div>
            <div class="container">
                <p><span class="ion-arrow-right-c"></span> Each team should have a team name</p>
                <p><span class="ion-arrow-right-c"></span> There can be maximum 4 members in the team.</p>
            </div>
            <br>
            <!-- ***************************** Content *************************** -->
            <div class="well well-md">            
                <section class="row">
                <div class="title-box"><h1 class="block-title">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                REGISTRATION FORM
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>
                <form id="reg_sos" method="POST" action="register.php">
                    <input name="event_name" value="sos" class="hidden">
                    <div class="row">
                    <fieldset class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="team_name">Team name</label>
                        <input type="text" class="form-control " id="team_name" name="team_name" placeholder="Enter your team-name" required>
                    </fieldset>
                    </div>
                    <div class="row">
                    <fieldset class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="college">College</label>
                        <input type="text" class="form-control" id="college" name="college" placeholder="Enter your college" required>
                    </fieldset>
                    </div>
                    <br>
                    <h4> Team member details : </h4>
                    <h5>Team Representative :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member1_name" name="member1_name" placeholder="name" required></div>       
                        <div class="col-lg-5 col-md-5 col-sm-5"><input type="text" class="form-control" id="member1_email" name="member1_email" placeholder="email" required></div>
                        <div class="col-lg-3 col-md-3 col-sm-3"><input type="text" class="form-control" id="member1_number" name="member1_number" placeholder="mobile number" required></div>     
                    </fieldset>
                    </div>
                    <h5>Member 2 :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member2_name" name="member2_name" placeholder="Enter name"></div>    
                    </fieldset>
                    </div>
                    <h5>Member 3 :</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member3_name" name="member3_name" placeholder="Enter name"></div>    
                    </fieldset>
                    </div>
                    <h5>Member 4 : (optional)</h5>
                    <div class="row">
                    <fieldset class="form-group">            
                        <div class="col-lg-4 col-md-4 col-sm-4"><input type="text" class="form-control" id="member4_name" name="member4_name" placeholder="Enter name"></div>    
                    </fieldset>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-lg btn-primary" name="submit" value="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- All the scripts -->

    <script src="static/js/jquery-2.1.3.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
     <script src="static/js/wow.min.js"></script>
    <script src="includes/jquery-validation-1.14.0/dist/jquery.validate.js"></script>
    <script src="static/js/registration_form.js"></script>   
</body>
</html>