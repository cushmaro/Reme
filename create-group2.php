<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link href="img/icons/icon-green-24px.png" rel="icon" type="image/png">
    <title>Reme.</title>
    <!-- Bootstrap CSS -->
    <link href="css/my-addition.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="vendors/linericon/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/lightbox/simpleLightbox.css" rel="stylesheet">
    <link href="vendors/nice-select/css/nice-select.css" rel="stylesheet">
    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="scss/style.css" rel="stylesheet">
</head>

<body>

<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img alt="" src="img/icons/Reme-icon.png"></a>
                    <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                            class="navbar-toggler" data-target="#navbarSupportedContent"
                            data-toggle="collapse" type="button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index-connected.html">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                   href="#" role="button">groups</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="index-connected.html">my groups</a>
                                    <li class="nav-item"><a class="nav-link" href="event-details.html">create group</a>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================ End Header Menu Area =================-->


<!--================ Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-background="" data-stellar-ratio="0.9"
             data-stellar-vertical-offset="0"></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Create Group</h2>
                <p>motz</p>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->


<section class="create-group">
    
    <section class="new-group-section">
        <div class="new-group-container">
            
            <form action="#" class="new-group">
                
                <div class="create-title">CREATE A GROUP</div>
                
                <div class="top-part">
                    <div class="group-name-part">
                        <label for="group-name">GROUP NAME: </label>
                        <input class="group-input" id="group-name" placeholder="Name" type="text">
                    </div>
                    
                    <label for="group-image"> </label>
                    <div class="upload-img-container">
                        <img alt=". no image yet" id="my-img" src="#"/>
                    </div>
                    Select image to upload:
                    <input accept="image/gif, image/jpeg, image/png" class="group-input" id="group-image" name="group-image"
                           onchange="readURL(this)" type="file">
                
                </div>
                
                
                <label for="group-description">GROUP DESCRIPTION: </label>
                <textarea class="group-input" id="group-description" placeholder="type group's description"
                          type="text"></textarea>
                
                
                <label>
                    <a id="add-member"><img alt="plus" src="img/plus.png"> add member</a>
                </label>
                
                <br>
                
                <input class="primary_btn" id="submit-group" type="submit">
            
            </form>
        </div>
        </fieldset>
    </section>
    
    
    <section class="group-members-section">
        <div class="members-container">
            <div class="member-list-container">
                <br>
                Group Name : <span id="display-group-name"> <small>no name yet</small></span>
                <br><br>
                <ol id="member-list">
                
                </ol>
            </div>
        </div>
    </section>
    
    <!--================start MODAL======================-->
    
    <section class="modal-section">
        <div class="member-modal" id="id-modal">
            <form action="" class="member-modal-content animate">
                <div class="container">
                    
                    
                    <div class="imgcontainer">
                        <label for="member-img">Add Image</label>
                        <div class="upload-img-container">
                            <img alt=". no image yet" id="my-img2" src="#"/>
                        </div>
                        Select image to upload:
                        <input accept="image/gif, image/jpeg, image/png" id="member-img" onchange="readURL2(this)"
                               type="file">
                    </div>
                    
                    
                    <div class="member-details-container">
                        
                        
                        <label for="mfname"><b>Member Full Name</b></label>
                        <input id="mfname" placeholder="Full Name" required type="text">
                        
                        <label for="member-age"><b>Age</b></label>
                        <input id="member-age" maxlength="2" type="text">
                        
                        <label><b>Gender</b></label> <br>
                        <input id="male" name="gender" type="radio"> <label for="male"> Male </label>
                        <input id="female" name="gender" type="radio"> <label for="female"> Female</label><br>
                        
                        <label for="member-details"><b>Details</b></label>
                        <textarea id="member-details" placeholder="Enter Details"></textarea>
                    
                    </div>
                
                
                </div>
                <div class="container">
                    <button class="primary_btn" id="submit-member" type="submit">Submit Member</button>
                    <button class="primary_btn yellow_btn" id="cancel-member" type="button">Cancel</button>
                </div>
            </form>
        </div>
    </section>
</section>

<!--================end  MODAL======================-->

<!--================end  CREATE GROUP======================-->


<!--================ Start footer Area  =================-->
<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row section_dgap">
                
                <!--our mission-->
                <div class="col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title large_title">Our Mission</h4>
                        <p>
                            So seed seed green that winged cattle in. Gathering thing made fly you're no
                            divided deep moved us lan Gathering thing us land years living.
                        </p>
                        <p>
                            So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep
                            moved
                        </p>
                    </div>
                </div>
                
                <!--contact Us-->
                <div class="col-md-6 contact-us">
                    <div class="single-footer-widget tp_widgets">
                        
                        <h4 class="footer_title large_title">Contact Us</h4>
                        
                        <div class="contact-col">
                            <p class="sm-head">
                                <span class="fa fa-location-arrow"></span>
                                Head Office
                            </p>
                            <p>180, Mechin, Bist</p>
                        </div>
                        
                        <div class="contact-col">
                            <p class="sm-head">
                                <span class="fa fa-phone"></span>
                                Phone Number
                            </p>
                            <p>
                                052-3441543 <br>
                                050-9732671 <br>
                                054-5627055 <br>
                                052-6363059
                            </p>
                        </div>
                        
                        <div class="contact-col">
                            <p class="sm-head">
                                <span class="fa fa-envelope"></span>
                                Email
                            </p>
                            <p>
                                nachamit@post.bgu.ac.il
                            </p>
                        </div>
                    
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex">
                <p class="col-lg-12 footer-text text-center">
                    Copyright ©
                    <script>document.write(new Date().getFullYear());</script>
                    All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


<?php
    $con = mysqli_connect("localhost","root","","reme");
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>
<script src="js/my-addition.js"></script>
</body>
</html>