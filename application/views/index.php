<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="zxx"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Tech Cloud Ltd. | A team of juvenile talents ready to accept the risks and challenges involved to make the journey successful together.">
    <meta name="author" content="mixturethemes">
	<meta name="keywords" content="Responsive, minimal, animation, photography, freelancer, photographer, portfolio, html5, css3, elegant, bootstrap, clean, agency, modern, personal, creative, onepage">

	<title>Tech Cloud Ltd. | Global Information Technology Enabled Services (ITES) Provider</title>

	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo base_url()?>/public/images/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>public/images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>public/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>public/images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>public/images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>public/images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>public/images/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>public/images/apple-touch-icon-152x152.png">

	<!-- Required Css Files -->

<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url()?><!--public/css/allrequired.css">-->



	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/tooltip-flip.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/magnific-popup.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/validationEngine.jquery.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/responsive.css">



	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="<?php echo base_url()?>public/js/modernizr.custom.js"></script>
    
    <style>
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        #mySidenav{z-index: 9999;}

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 200px;
            font-size: 36px;
            margin-left: 50px;
        }
		

		#loader_site_title {
			position:relative;
			width:100%;
			height:105vh;
			display:-webkit-inline-box;
			display:-ms-inline-flexbox;
			display:inline-flex;
			-webkit-box-pack:center;
				-ms-flex-pack:center;
					justify-content:center;
			-webkit-box-align:center;
				-ms-flex-align:center;
					align-items:center;
		}
		
		#loader_site_title h3 {
			z-index:99;
			margin-top:-5vh;
			position:relative;
			width:120px;
			height:120px;
			color:#333;
			display:-webkit-inline-box;
			display:-ms-inline-flexbox;
			display:inline-flex;
			-webkit-box-pack:center;
				-ms-flex-pack:center;
					justify-content:center;
			-webkit-box-align:center;
				-ms-flex-align:center;
					align-items:center;
			margin-top:0px;
			text-transform:uppercase;
			font-weight:700;
			letter-spacing:1.3px;
			font-size:72px;
		}
		
		#loader_site_title h3:after {
			position:absolute;
			content:'';
			width:100%;
			height:100%;
			background:#DDDDDD;
			left:0;
			top:0;
			z-index:-1;
			-webkit-transform:rotate(45deg);
				-ms-transform:rotate(45deg);
					transform:rotate(45deg);
		}
		
		
		#loader_site_title h3 a {
			text-decoration:none;
			color:#fff;
		}
		
		#loader_site_title h4 {
			margin-left:-225px;
			opacity:0;
			transition:all 0.4s ease-in-out;
		}
		
		header:hover #loader_site_title h4 {
			opacity:1;
			margin-left:50px;
			font-weight:700;
			letter-spacing:1.3px;
		}
		
		#myDiv {
		  display: none;
		  text-align: center;
		}
		
		/* Large Mobile :480px. */
		@media only screen and (min-width: 480px) and (max-width: 767px) {
			
			#loader_site_title h3 {
				width:120px;
				height:120px;
				transition:all 0.3s ease-in-out;
			}
			
			header:hover #loader_site_title h3 {
				width:100px;
				height:100px;
				font-size:52px;
			}
			
			#loader_site_title h4 {
				font-size:14px;
				margin-left:-175px;
			}
			
			header:hover #loader_site_title h4 {
				margin-left:50px;
			}
			
		}
		
		/* small mobile :320px. */
		@media only screen and (max-width: 479px) {
			
			#loader_site_title h3 {
				width:120px;
				height:120px;
				transition:all 0.3s ease-in-out;
			}
			
			header:hover #loader_site_title h3 {
				width:50px;
				height:50px;
				font-size:32px;
			}
			
			#loader_site_title h4 {
				font-size:14px;
				margin-left:-175px;
			}
			
			header:hover #loader_site_title h4 {
				margin-left:20px;
			}
			
		}

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }

    </style>
</head>

<body onload="myFunction()" class="transparent_light only_image" >

	<div id="loader" style="background:#fff">
		<header id="header">
			<div id="loader_site_title">
				<a href="#"><img src="<?php echo base_url()?>public/images/tcl-logo.png" alt="TCL Logo" width="100" style="margin-top: -15px"></a>
				<h4>Your secure digital workspace</h4>
			</div>
		</header>
	</div>

	<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="<?php echo base_url()?>about">About</a>
        <a href="<?php echo base_url()?>csr">CSR</a>
        <a href="<?php echo base_url()?>office-culture">Office Culture</a>
        <a href="<?php echo base_url()?>contact">Contact</a>
        <a href="<?php echo base_url()?>privacy-policy">Privacy Policy</a>
    </div>


    <span style="font-size:40px;cursor:pointer; position:absolute; z-index:9999; right:35px; top: 7px; color: #38ACEC;" onclick="openNav()">&#9776;</span>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

	<!-- Body Wrapper Start -->
	<div id="body_wrapper">
		<div id="site_title">
<!--			<h3><a href="#"><img src="--><?php //echo base_url()?><!--public/images/tcl-logo.png" alt="TCL Logo" width="70" style="margin-top: -15px"></a></h3>-->
			<h3><a href="#"><img src="<?php echo base_url('public/images/'.thumb('public/images/tcl-logo.png','70','60')); ?>" alt="TCL Logo" width="70" height="60" style="margin-top: -15px"></a></h3>
		</div>
		<!-- Body Content Start -->
		<div id="body_content" class="body_content">
			
			<!-- About Section Start -->
			<section id="about" class="web">
				<div class="andazi_front">
					<i class="icon ion-android-laptop"></i>
					<h3>Web App Development</h3>
				</div>
				
				<div class="andazi_back">
					<div class="sub_hero_title">
<!--						<h3 class="inside_site_title"><img src="--><?php //echo base_url()?><!--public/images/tcl-logo.png" alt="TCL Logo" width="80"></h3>-->
						<h3 class="inside_site_title"><img src="<?php echo base_url('public/images/'.thumb('public/images/tcl-logo.png','80','66')); ?>" alt="TCL Logo" width="80"></h3>
						<span class="andazi-close icon ion-ios-close-outline"></span>
						<div class="sub_title">
							<h3>Web App Development</h3>
							<hr />
						</div>
					</div>
					
					<!-- Section Main Content Wrapper Start -->
					<div class="main_content_wrapper">
						<div class="container">
                        	<div class="row">
                            	<div class="content_title" style="padding-bottom:0">
									<h3>We Offer</h3>
									<hr />
                                    
                                        <ul id="blog_posts" class="grid-layout andazi_multioption_items" style="margin-bottom:0; margin-top:0; height:625.8px">
                                        <!-- post 01 -->
                                        <li class="col-sm-6 masonry_item">
                                            <div class="single_post">
                                                <a href="#" class="super_overlay" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/web-design.jpg" alt="" />-->
                                                    <img height="330" width="550" src="<?php echo base_url('public/images/'.thumb('public/images/web-design.jpg','550','330')); ?>" alt="" />
                                                </div></a>
                                                <div class="post_content">
                                                    <h4><a href="#." class="super_overlay">WEBSITE DEVELOPMENT</a></h4>
                                                    
                                                    <hr />
                                                  
                                                    <ul class="list-ic vertical" style="margin-top:40px;">
                                                        <li>
                                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                            &nbsp;Commercial websites
                                                        </li><br>
                                                        <li>
                                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                            &nbsp;CMS website
                                                        </li><br>
                                                        <li>
                                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                            &nbsp;E-commerce websites
                                                        </li><br>
                                                        <li>
                                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                            &nbsp;Blog / community website
                                                        </li>
                                                    </ul>	
                                                  
                                                </div>
                                            </div>
                                        </li>
                                        <!-- post 02 -->
                                        <li class="col-sm-6 masonry_item">
                                            <div class="single_post">
                                                <a href="#" class="super_overlay" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/admin-dashboard.png" alt="" />-->
                                                    <img height="330" width="550" src="<?php echo base_url('public/images/'.thumb('public/images/admin-dashboard.png','550','330')); ?>" alt="" />
                                                </div></a>
                                                <div class="post_content">
                                                    <h4><a href="" class="super_overlay" data-panel="panel-1">WEB APPLICATION DEVELOPMENT</a></h4>
    
                                                    <hr />
                                                  
                                                    <ul class="list-ic vertical" style="margin-top:40px; margin-bottom:42px;">
                                                        <li>
                                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                            &nbsp;Web Application Development
                                                        </li><br>
                                                        <li>
                                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                            &nbsp;Web Application Up-gradation
                                                        </li><br>
                                                        <li>
                                                            <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                            &nbsp;Software Development
                                                        </li>
                                                    </ul>
                                                   
                                                </div>
                                            </div>
                                        </li>								
                                    </ul>
								</div>  
                            </div>
                            
                            <div class="row" >
                            	<div class="content_title" style="padding-bottom:0; padding-top:40px">
									<h3>Our Expertise & Tools</h3> 
									<hr />
<!--									<img class="img-responsive" src="--><?php //echo base_url()?><!--public/images/lc.jpg">-->
									<img class="img-responsive" src="<?php echo base_url('public/images/'.thumb('public/images/lc.jpg','1752','758')); ?>">

                                   
								</div>  
                            </div>
                            
                            <div class="row" >
                            	<div class="content_title" style="padding-bottom:0">
									<h3>Our Team</h3>
									<hr />
<!--									<img class="img-responsive" src="--><?php //echo base_url()?><!--public/images/team-web.png">-->
									<img class="img-responsive"  src="<?php echo base_url('public/images/'.thumb('public/images/team-web.png','1446','1092')); ?>">
								</div>
                            </div>
                            
                            <!--<div class="row">
                            	<div class="content_title" style="padding-bottom:0">
									<h3>Development Methodologies</h3>
									<hr />
                                    <div class="col-md-6">
                                        <ul class="list-ic vertical">
                                            <li>
                                                <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                <a href="#">&nbsp;Flexible to choose methodology based on project</a>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                <a href="#">&nbsp;Mainly we follow either Agile or Waterfall</a>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                <a href="#">&nbsp;We choose waterfall for small size project</a>
                                            </li>
                                        </ul>		
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-ic vertical">
                                            <li>
                                                <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                <a href="#">&nbsp;We choose Agile for medium or large project</a>
                                            </li>
                                            <li>
                                                <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                <a href="#">&nbsp; In any methodology we are flexible to embrace change during the development phase</a>
                                            </li>
                                        </ul>		
                                    </div>
								</div>  
                            </div>-->
                            
                            <div class="row content_title designed-grid-box" style="padding-bottom:0">
									<h3>Development Methodologies</h3>
									<hr />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 200px;">
                                                <li>
                                                    <span><i class="fa fa-code" aria-hidden="true"></i></span>
                                                    <h4>Flexible to choose methodology based on project</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 200px;">
                                                <li>
                                                    <span><i class="fa fa-code" aria-hidden="true"></i></span>
                                                    <h4>Mainly we follow either Agile or Waterfall</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 200px;">
                                                <li>
                                                    <span><i class="fa fa-code" aria-hidden="true"></i></span>
                                                    <h4>We choose waterfall for small size project</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 200px;">
                                                <li>
                                                    <span><i class="fa fa-code" aria-hidden="true"></i></span>
                                                    <h4>We choose Agile for medium or large project</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 200px;">
                                                <li>
                                                    <span><i class="fa fa-code" aria-hidden="true"></i></span>
                                                    <h4>In any methodology we are flexible to embrace change during the development phase</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="row" >
                            	<div class="col-md-6">
                                	<div class="content_title" style="padding-bottom:0">
                                        <h3 style="font-size:23px">Web Application Agile Development Cycle</h3>
                                        <hr />
                                        <ul id="grid-list" class="grid-layout text-center">
                                            <li class="col-md-12 col-sm-12 masonry_item">
<!--                                                <a href="--><?php //echo base_url()?><!--public/images/agile development cycle-large.png" data-group="1" class="galleryItem" title=""><div class="work_content">-->
                                                <a href="<?php echo base_url('public/images/'.thumb('public/images/agile development cycle-large.png','1494','840')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/agile development cycle.png" alt="" />-->
                                                    <img  src="<?php echo base_url('public/images/'.thumb('public/images/agile development cycle.png','1494','840')); ?>" alt="" />

                                                    <div class="work-overlay">
                                                        <div class="valign">
                                                            <span class="icon ion-ios-search"></span>
                                                        </div>
                                                    </div>
                                                </div></a>
                                            </li>
                                        </ul>
                                    </div>  
                                </div>
                                <div class="col-md-6">
                                	<div class="content_title" style="padding-bottom:0">
                                        <h3>Web Development Phases Overview</h3>
                                        <hr />
                                        <ul id="grid-list" class="grid-layout text-center">
                                            <li class="col-md-12 col-sm-12 masonry_item">
                                                <a href="<?php echo base_url('public/images/'.thumb('public/images/development phases.jpg','960','528')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/development phases.jpg" alt="" />-->
                                                    <img src="<?php echo base_url('public/images/'.thumb('public/images/development phases.jpg','960','528')); ?>" alt="" />
                                                    <div class="work-overlay">
                                                        <div class="valign">
                                                            <span class="icon ion-ios-search"></span>
                                                        </div>
                                                    </div>
                                                </div></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>	
                            </div>
   
                            <div class="row">
                                <div class="content_title">
                                    <h3>Our recent web application projects</h3>
                                    <hr style="margin-bottom: 20px;" />
                                    <p>Check out our portfolio. We love to make creative and modern things. Explore our portfolio before hiring us... </p>
                                </div>

                               <div class="col-md-6">
                                   <div class="" style="padding-bottom:0">
                                       <h3>Foodoo</h3>
                                       <hr />
                                       <div id="our_works">
                                       <ul id="grid-list" class="grid-layout">
                                           <!-- Works Item 01 -->
                                           <li class="col-md-4 col-sm-6 masonry_item webd web">
                                               <a href="<?php echo base_url('public/images/foodoo/'.thumb('public/images/foodoo/checkout.jpg','1920','1698')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
<!--                                                   <img src="--><?php //echo base_url()?><!--public/images/foodoo/checkout.jpg" alt="" />-->
                                                   <img src="<?php echo base_url('public/images/foodoo/'.thumb('public/images/foodoo/checkout.jpg','165','146')); ?>" alt="" />
                                                   <div class="work-overlay">
                                                       <div class="valign">
                                                           <span class="icon ion-ios-search"></span>
                                                       </div>
                                                   </div>
                                                   </div></a>
                                           </li>
                                           <!-- Works Item 02 -->
                                           <li class="col-md-4 col-sm-6 masonry_item webd graphics">
                                               <a href="<?php echo base_url('public/images/foodoo/'.thumb('public/images/foodoo/checkout-without register.jpg','1920','1854')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                   <img src="<?php echo base_url('public/images/foodoo/'.thumb('public/images/foodoo/checkout-without register.jpg','165','159')); ?>" alt="" />
                                                   <div class="work-overlay">
                                                       <div class="valign">
                                                           <span class="icon ion-ios-search"></span>
                                                       </div>
                                                   </div>
                                                   </div></a>
                                           </li>
                                           <!-- Works Item 03 -->
                                           <li class="col-md-4 col-sm-6 masonry_item webd">
                                               <a href="<?php echo base_url('public/images/foodoo/'.thumb('public/images/foodoo/items Page 2.jpg','1920','974')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                   <img src="<?php echo base_url('public/images/foodoo/'.thumb('public/images/foodoo/items Page 2.jpg','165','84')); ?>" alt="" />
                                                   <div class="work-overlay">
                                                       <div class="valign">
                                                           <span class="icon ion-ios-search"></span>
                                                       </div>
                                                   </div>
                                                   </div></a>
                                           </li>
                                           <!-- Works Item 03 -->
                                           <li class="col-md-4 col-sm-6 masonry_item webd">
                                               <a href="<?php echo base_url('public/images/foodoo/'.thumb('public/images/foodoo/user Login.jpg','1920','925')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                   <img src="<?php echo base_url('public/images/foodoo/'.thumb('public/images/foodoo/user Login.jpg','165','79')); ?>" alt="" />
                                                   <div class="work-overlay">
                                                       <div class="valign">
                                                           <span class="icon ion-ios-search"></span>
                                                       </div>
                                                   </div>
                                                   </div></a>
                                           </li>
                                           <!-- Works Item 03 -->
                                           <li class="col-md-4 col-sm-6 masonry_item webd">
                                               <a href="<?php echo base_url('public/images/foodoo/'.thumb('public/images/foodoo/user Registration.jpg','1920','1576')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                   <img src="<?php echo base_url('public/images/foodoo/'.thumb('public/images/foodoo/user Registration.jpg','165','135')); ?>" alt="" />
                                                   <div class="work-overlay">
                                                       <div class="valign">
                                                           <span class="icon ion-ios-search"></span>
                                                       </div>
                                                   </div>
                                                   </div></a>
                                           </li>
                                       </ul>
                                       </div>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="" style="padding-bottom:0">
                                        <h3>Order Management System (OMS)</h3>
                                        <hr />
                                        <div id="our_works">
                                            <ul id="grid-list" class="grid-layout">
                                                <!-- Works Item 01 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd web">
                                                    <a href="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/add new item.jpg','1920','1047')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                        <img src="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/add new item.jpg','165','90')); ?>" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 02 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd graphics">
                                                    <a href="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/all User List.jpg','1920','1225')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                        <img src="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/all User List.jpg','165','105')); ?>" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 03 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd">
                                                    <a href="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/category page.jpg','1920','1045')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                        <img src="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/category page.jpg','165','90')); ?>" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 03 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd">
                                                    <a href="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/dashboard.jpg','1920','974')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                        <img src="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/dashboard.jpg','165','84')); ?>" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 03 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd">
                                                    <a href="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/items update page.jpg','1920','925')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                        <img src="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/items update page.jpg','165','79')); ?>" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 03 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd">
                                                    <a href="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/order summary page.jpg','1920','1267')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                        <img src="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/order summary page.jpg','165','109')); ?>" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 03 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd">
                                                    <a href="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/reporting.jpg','1920','1031')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                        <img src="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/reporting.jpg','165','89')); ?>" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 03 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd">
                                                    <a href="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/user review page.jpg','1920','925')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                        <img src="<?php echo base_url('public/images/oms/'.thumb('public/images/oms/user review page.jpg','165','79')); ?>" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
							</div>
   
                            <div class="row">
                               <div class="col-md-6">
                                   <div class="" style="padding-bottom:0">
                                       <h3>Production management system (PMS)</h3>
                                       <hr />
                                       <div id="our_works">
                                       <ul id="grid-list" class="grid-layout">
                                           <!-- Works Item 01 -->
                                           <li class="col-md-4 col-sm-6 masonry_item webd web">
                                               <a href="<?php echo base_url('public/images/pms/'.thumb('public/images/pms/deadline.png','1920','2327')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                   <img src="<?php echo base_url('public/images/pms/'.thumb('public/images/pms/deadline.png','165','199')); ?>" alt="" />
                                                   <div class="work-overlay">
                                                       <div class="valign">
                                                           <span class="icon ion-ios-search"></span>
                                                       </div>
                                                   </div>
                                                   </div></a>
                                           </li>
                                           <!-- Works Item 02 -->
                                           <li class="col-md-4 col-sm-6 masonry_item webd graphics">
                                               <a href="<?php echo base_url('public/images/pms/'.thumb('public/images/pms/invoice.png','1630','931')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                   <img src="<?php echo base_url('public/images/pms/'.thumb('public/images/pms/invoice.png','165','94')); ?>" alt="" />
                                                   <div class="work-overlay">
                                                       <div class="valign">
                                                           <span class="icon ion-ios-search"></span>
                                                       </div>
                                                   </div>
                                                   </div></a>
                                           </li>
                                           <!-- Works Item 03 -->
                                           <li class="col-md-4 col-sm-6 masonry_item webd">
                                               <a href="<?php echo base_url('public/images/pms/'.thumb('public/images/pms/job history-thumb.png','1630','931')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                   <img src="<?php echo base_url('public/images/pms/'.thumb('public/images/pms/job history-thumb.png','165','94')); ?>" alt="" />
                                                   <div class="work-overlay">
                                                       <div class="valign">
                                                           <span class="icon ion-ios-search"></span>
                                                       </div>
                                                   </div>
                                                   </div></a>
                                           </li>
                                           <!-- Works Item 02 -->
                                           <li class="col-md-4 col-sm-6 masonry_item webd graphics">
                                               <a href="<?php echo base_url('public/images/pms/'.thumb('public/images/pms/Reporting.png','1630','910')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                   <img src="<?php echo base_url('public/images/pms/'.thumb('public/images/pms/Reporting.png','165','78')); ?>" alt="" />
                                                   <div class="work-overlay">
                                                       <div class="valign">
                                                           <span class="icon ion-ios-search"></span>
                                                       </div>
                                                   </div>
                                                   </div></a>
                                           </li>
                                       </ul>
                                       </div>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="" style="padding-bottom:0">
                                        <h3>Client Relationship Management (CRM)</h3>
                                        <hr />
                                        <div id="our_works">
                                            <ul id="grid-list" class="grid-layout">
                                                <!-- Works Item 01 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd web">
                                                    <a href="<?php echo base_url('public/images/'.thumb('public/images/600x450.png','600','450')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                        <img src="<?php echo base_url('public/images/'.thumb('public/images/600x450.png','165','78')); ?>" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 02 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd graphics">
                                                    <a href="<?php echo base_url('public/images/'.thumb('public/images/600x450.png','600','450')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                        <img src="<?php echo base_url('public/images/'.thumb('public/images/600x450.png','165','78')); ?>" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 03 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd">
                                                    <a href="<?php echo base_url('public/images/'.thumb('public/images/600x450.png','600','450')); ?>" data-group="1" class="galleryItem" title=""><div class="work_content">
                                                        <img src="<?php echo base_url('public/images/'.thumb('public/images/600x450.png','165','78')); ?>" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
							</div>
							
							
                            <!-- Section Main Content Wrapper Start -->
                            <div class="main_content_wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="content_title">
                                            <h3>Our recent website development projects</h3>
                                            <hr style="margin-bottom: 20px;" />
                                            <p>Check out our portfolio. We love to make creative and modern things. Explore our portfolio before hiring us... </p>
                                        </div>

                                        <div id="our_works">
   

                                            <!-- Works Grid Start -->
                                            <ul id="grid-list" class="grid-layout">
                                                <!-- Works Item 01 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd web">
                                                    <a href="<?php echo base_url()?>public/images/web/afrah.png" data-group="1" class="galleryItem" title="Project One"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/afrah.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 02 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd graphics">
                                                    <a href="<?php echo base_url()?>public/images/web/ariaty.png" data-group="1" class="galleryItem" title="Project Two"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/ariaty.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 03 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd">
                                                    <a href="<?php echo base_url()?>public/images/web/business-riders.png" data-group="1" class="galleryItem" title="Project Three"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/business-riders.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 04 -->
                                                <li class="col-md-4 col-sm-6 masonry_item web">
                                                    <a href="<?php echo base_url()?>public/images/web/fairpriceauto.png" data-group="1" class="galleryItem" title="Project Four"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/fairpriceauto.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 05 -->
                                                <li class="col-md-4 col-sm-6 masonry_item web graphics">
                                                    <a href="<?php echo base_url()?>public/images/web/fundhub.png" data-group="1" class="galleryItem" title="Project Five"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/fundhub.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 06 -->
                                                <li class="col-md-4 col-sm-6 masonry_item web">
                                                    <a href="<?php echo base_url()?>public/images/web/gulshan-tours.png" data-group="1" class="galleryItem" title="Project Six"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/gulshan-tours.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 07 -->
                                                <li class="col-md-4 col-sm-6 masonry_item graphics">
                                                    <a href="<?php echo base_url()?>public/images/web/icon-college.png" data-group="1" class="galleryItem" title="Project Seven"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/icon-college.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 08 -->
                                                <li class="col-md-4 col-sm-6 masonry_item webd">
                                                    <a href="<?php echo base_url()?>public/images/web/jaadcar.png" data-group="1" class="galleryItem" title="Project Eight"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/jaadcar.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 09 -->
                                                <li class="col-md-4 col-sm-6 masonry_item web">
                                                    <a href="<?php echo base_url()?>public/images/web/kabic.png" data-group="1" class="galleryItem" title="Project Nine"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/kabic.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 09 -->
                                                <li class="col-md-4 col-sm-6 masonry_item web">
                                                    <a href="<?php echo base_url()?>public/images/web/p2services.png" data-group="1" class="galleryItem" title="Project Nine"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/p2services.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 09 -->
                                                <li class="col-md-4 col-sm-6 masonry_item web">
                                                    <a href="<?php echo base_url()?>public/images/web/servicehub.png" data-group="1" class="galleryItem" title="Project Nine"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/servicehub.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 09 -->
                                                <li class="col-md-4 col-sm-6 masonry_item web">
                                                    <a href="<?php echo base_url()?>public/images/web/smashpay.png" data-group="1" class="galleryItem" title="Project Nine"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/smashpay.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                                <!-- Works Item 09 -->
                                                <li class="col-md-4 col-sm-6 masonry_item web">
                                                    <a href="<?php echo base_url()?>public/images/web/tekno-visual.png" data-group="1" class="galleryItem" title="Project Nine"><div class="work_content">
                                                        <img src="<?php echo base_url()?>public/images/web/tekno-visual.png" alt="" />
                                                        <div class="work-overlay">
                                                            <div class="valign">
                                                                <span class="icon ion-ios-search"></span>
                                                            </div>
                                                        </div>
                                                        </div></a>
                                                </li>
                                            </ul>
                                            <!-- Works Grid End -->
                                        </div>

                                    </div>
                                </div>
                            </div>
							
						</div>
					</div>
					<!-- Section Main Content Wrapper End -->
					
					<!-- Footer Section Start -->
					<div class="container-fluid">
						<div class="row">
							<div class="section_footer">
								<div class="col-sm-6">
									<div class="copyright">
										<p>&copy;  Copyright - 2018&nbsp; | &nbsp;<a href="http://techcloudltd.com/" class="highlighted tooltip tooltip-effect-2">Tech Cloud Ltd.</a>&nbsp; | &nbsp;All Rights Reserved.</p>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="float-bar">
										<div class="float-bar-inn-wrap">
											<div class="float-bar-inn">
												<!--Social network share icon-->
												<div class="float-bar-social-share">
													<button class="social-share-facebook" onclick="javascript:window.open('http://www.facebook.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></button>
													<button class="social-share-twitter" onclick="javascript:window.open('https://twitter.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></button>
													<button class="social-share-google-plus" onclick="javascript:window.open('https://plus.google.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></button>
													<button class="social-share-pinterest" onclick="javascript:window.open('http://pinterest.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></button>
													<button class="social-share-vk" onclick="javascript:window.open('http://vkontakte.ru/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-vk"></i></button>
													<button class="social-share-linkedin" onclick="javascript:window.open('http://www.linkedin.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin"></i></button>
												</div>
											</div>
											<!--End float inn wrap-->
										</div><!--End float inn-->
										<div class="float-bar-triggler"><i class="float-bar-triggler-inn"></i></div> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Footer Section End -->
				</div>
			</section>
			<!-- About Section End -->
			
			<!-- Work Section Start -->
			<section id="work" class="andazi_multioption2 ppd">
				<div class="andazi_front">
					<i class="icon ion-wand"></i>
					<h3>Image Post Production</h3>
				</div>
				
				<div class="andazi_back">
					<div class="sub_hero_title">
						<h3 class="inside_site_title"><img src="<?php echo base_url('public/images/'.thumb('public/images/tcl-logo.png','80','69')); ?>" alt="TCL Logo" width="80"></h3>
<!--						<h3 class="inside_site_title"><img src="--><?php //echo base_url()?><!--public/images/tcl-logo.png" alt="TCL Logo" width="80"></h3>-->
						<span class="andazi-close icon ion-ios-close-outline"></span>
						<div class="sub_title">
							<h3>Image Post Production</h3>
							<hr />
						</div>
					</div>
					
					<!-- Section Main Content Wrapper Start -->
					<div class="main_content_wrapper layout2">
						<div class="container">
                        	<div class="row content_title designed-grid-box" style="padding-bottom:0">
									<h3>We Offer</h3>
									<hr />
                                   	<p style="margin:0"><strong>Tech Cloud Ltd.</strong> has an expert team of about 200 people to support the image retouching or post production jobs on daily basis including image clipping path, layer masking, retouching, shadowing, ghost mannequin etc. 
                                    We are specialized in manipulating the hollow man view or ghost mannequin view of different apparel styles. 
                                    Our retouching team is pretty much capable of doing high end retouching including glamor, fashion, editorial retouch. 
                                    And we are confident to take the challenge to meet your deadline anytime with even a short notice.</p>
                            </div>
                        </div>
                        
                        <div class="container">
                            <div class="row">
								<div class="content_title">
									<h3>Recent Works</h3>
									<hr />
									<p>The world is changing all around us. To continue to thrive as a 
									business over the next ten years and beyond, we must look ahead, 
									understand the trends and forces that will shape our business. </p>
								</div>
								
								<div id="our_works">
									<!-- Works Grid Start -->
									<ul id="blog_posts" class="grid-layout andazi_multioption_items">
                                        <!-- post 01 -->
                                        <li class="col-md-4 masonry_item">
                                            <div class="single_post">
                                                <a href="" class="super_overlay" data-panel="panel-1" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/ppd-portfolio/ghost-mannequin/item_1.png" alt="" />-->
                                                    <img src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_1.png','370','261')); ?>" alt="" />
                                                </div></a>
                                                
                                                    <div class="post_date">
                                                        <span class="post_date_inner">
                                                            <span class="date">Ghost Mannequin</span>
                                                        </span>
                                                    </div>
                                              
                                            </div>
                                        </li> 
                                        <!-- post 01 -->
                                        <li class="col-md-4 masonry_item">
                                            <div class="single_post">
                                                <a href="" class="super_overlay" data-panel="panel-2" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/ppd-portfolio/coloring/item_8.jpg" alt="" />-->
                                                    <img src="<?php echo base_url('public/images/ppd-portfolio/coloring/'.thumb('public/images/ppd-portfolio/coloring/item_8.jpg','370','261')); ?>" alt="" />
                                                </div></a>
                                                
                                                    <div class="post_date">
                                                        <span class="post_date_inner">
                                                            <span class="date">Coloring</span>
                                                        </span>
                                                    </div>
                                              
                                            </div>
                                        </li> 
                                        <!-- post 01 -->
                                        <li class="col-md-4 masonry_item">
                                            <div class="single_post">
                                                <a href="" class="super_overlay" data-panel="panel-3" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/ppd-portfolio/wrinkle-removing/item_2.jpg" alt="" />-->
                                                    <img src="<?php echo base_url('public/images/ppd-portfolio/wrinkle-removing/'.thumb('public/images/ppd-portfolio/wrinkle-removing/item_2.jpg','370','261')); ?>" alt="" />
                                                </div></a>
                                                
                                                    <div class="post_date">
                                                        <span class="post_date_inner">
                                                            <span class="date">Wrinkle Removing</span>
                                                        </span>
                                                    </div>
                                              
                                            </div>
                                        </li> 
                                        <!-- post 01 -->
                                        <li class="col-md-4 masonry_item">
                                            <div class="single_post">
                                                <a href="" class="super_overlay" data-panel="panel-4" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/ppd-portfolio/hair-masking/item_2.jpg" alt="" />-->
                                                    <img src="<?php echo base_url('public/images/ppd-portfolio/hair-masking/'.thumb('public/images/ppd-portfolio/hair-masking/item_2.jpg','370','261')); ?>" alt="" />
                                                </div></a>
                                                
                                                    <div class="post_date">
                                                        <span class="post_date_inner">
                                                            <span class="date">Hair Masking</span>
                                                        </span>
                                                    </div>
                                              
                                            </div>
                                        </li> 
                                        <!-- post 01 -->
                                        <li class="col-md-4 masonry_item">
                                            <div class="single_post">
                                                <a href="" class="super_overlay" data-panel="panel-5" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/ppd-portfolio/jewelry-retouching/item_2.jpg" alt="" />-->
                                                    <img src="<?php echo base_url('public/images/ppd-portfolio/jewelry-retouching/'.thumb('public/images/ppd-portfolio/jewelry-retouching/item_2.jpg','370','261')); ?>" alt="" />
                                                </div></a>
                                                
                                                    <div class="post_date">
                                                        <span class="post_date_inner">
                                                            <span class="date">Jewelry Retouching</span>
                                                        </span>
                                                    </div>
                                              
                                            </div>
                                        </li> 
                                        <!-- post 01 -->
                                        <li class="col-md-4 masonry_item">
                                            <div class="single_post">
                                                <a href="" class="super_overlay" data-panel="panel-6" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/ppd-portfolio/product-retouching/item_1.jpg" alt="" />-->
                                                    <img src="<?php echo base_url('public/images/ppd-portfolio/product-retouching/'.thumb('public/images/ppd-portfolio/product-retouching/item_1.jpg','370','261')); ?>" alt="" />
                                                </div></a>
                                                
                                                    <div class="post_date">
                                                        <span class="post_date_inner">
                                                            <span class="date">Product Retouching</span>
                                                        </span>
                                                    </div>
                                              
                                            </div>
                                        </li> 
                                        <!-- post 01 -->
                                        <li class="col-md-4 masonry_item">
                                            <div class="single_post">
                                                <a href="" class="super_overlay" data-panel="panel-7" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/ppd-portfolio/reflection/item_2.jpg" alt="" />-->
                                                    <img src="<?php echo base_url('public/images/ppd-portfolio/reflection/'.thumb('public/images/ppd-portfolio/reflection/item_2.jpg','370','261')); ?>" alt="" />
                                                </div></a>
                                                
                                                    <div class="post_date">
                                                        <span class="post_date_inner">
                                                            <span class="date">Reflection</span>
                                                        </span>
                                                    </div>
                                              
                                            </div>
                                        </li> 
                                        <!-- post 01 -->
                                        <li class="col-md-4 masonry_item">
                                            <div class="single_post">
                                                <a href="" class="super_overlay" data-panel="panel-8" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/ppd-portfolio/shadow/item_2.jpg" alt="" />-->
                                                    <img src="<?php echo base_url('public/images/ppd-portfolio/shadow/'.thumb('public/images/ppd-portfolio/shadow/item_2.jpg','370','261')); ?>" alt="" />
                                                </div></a>
                                                
                                                    <div class="post_date">
                                                        <span class="post_date_inner">
                                                            <span class="date">Shadow</span>
                                                        </span>
                                                    </div>
                                              
                                            </div>
                                        </li> 
                                        <!-- post 01 -->
                                        <li class="col-md-4 masonry_item">
                                            <div class="single_post">
                                                <a href="" class="super_overlay" data-panel="panel-9" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/ppd-portfolio/skin-retouching/item_4.jpg" alt="" />-->
                                                    <img src="<?php echo base_url('public/images/ppd-portfolio/skin-retouching/'.thumb('public/images/ppd-portfolio/skin-retouching/item_4.jpg','370','261')); ?>" alt="" />
                                                </div></a>
                                                
                                                    <div class="post_date">
                                                        <span class="post_date_inner">
                                                            <span class="date">Skin Retouching</span>
                                                        </span>
                                                    </div>
                                              
                                            </div>
                                        </li> 
                                        <li class="col-md-4 masonry_item">
                                            <div class="single_post">
                                                <a href="" class="super_overlay" data-panel="panel-10" title="Post One"><div class="post_overlay">
<!--                                                    <img src="--><?php //echo base_url()?><!--public/images/ppd-portfolio/back-ground-retouch/item_2.jpg" alt="" />-->
                                                    <img src="<?php echo base_url('public/images/ppd-portfolio/back-ground-retouch/'.thumb('public/images/ppd-portfolio/back-ground-retouch/item_2.jpg','370','261')); ?>" alt="" />
                                                </div></a>
                                                
                                                    <div class="post_date">
                                                        <span class="post_date_inner">
                                                            <span class="date">Back Ground Retouch</span>
                                                        </span>
                                                    </div>
                                              
                                            </div>
                                        </li>
                                    </ul>
                                        <!-- Works Grid End -->
								</div>
							</div>
                        </div> 
                            
                        <div class="container">
                        	<div class="row content_title designed-grid-box" style="padding-bottom:0; padding-top:0">
									<h3>Our Strength</h3>
									<hr />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical">
                                                <li>
                                                    <span><i class="fa fa-bolt" aria-hidden="true"></i></span>
                                                    <h4>Industry standard quality</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical">
                                                <li>
                                                    <span><i class="fa fa-bolt" aria-hidden="true"></i></span>
                                                    <h4>Affordable cost</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical">
                                                <li>
                                                    <span><i class="fa fa-bolt" aria-hidden="true"></i></span>
                                                    <h4>Working on complex requirements</h4>
                                                </li>        
                                            </ul>		
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical">
                                                <li>
                                                    <span><i class="fa fa-bolt" aria-hidden="true"></i></span>
                                                    <h4>Round the clock shift for different region</h4>
                                                </li>               
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical">
                                                <li>
                                                    <span><i class="fa fa-bolt" aria-hidden="true"></i></span>
                                                    <h4>Demo/Trial option for any new project</h4>
                                                </li>
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical">
                                                <li>
                                                    <span><i class="fa fa-bolt" aria-hidden="true"></i></span>
                                                    <h4>24x6 online support via email, skype, phone or other IM.</h4>
                                                </li>      
                                            </ul>		
                                        </div>
								</div>  
                            </div>
                        </div> 
                            
                        <div class="container">
                            <div class="row content_title designed-grid-box" style="padding-bottom:0">
									<h3>Turnaround Time</h3>
									<hr />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 225px;">
                                                <li>
                                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                    <h4>We maintain 18 – 24 hrs turnaround time usually</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 225px;">
                                                <li>
                                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                    <h4>We are also able to maintain 12hrs turnaround time in some case depending on the situation</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 225px;">
                                                <li>
                                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                    <h4>If you have new project with volume 300- 500 a day on regular basis give us a 2/3 weeks prior notice to prepare ourselves.</h4>
                                                </li>        
                                            </ul>		
                                        </div>
                                    </div>
                            </div>
                        </div>
                        
                        <div class="container-fluid" style="padding-top:0px; padding-bottom:0">
                        	<div class="container">
                                <div class="row content_title">
                                        <h3>File Transfer Method</h3>
                                        <hr />
                                        <p style="margin:0">As <strong>Tech Cloud Ltd.</strong> is an oversees company all our jobs need to transfer through a secure and faster method. 
                                        In most of the cases we use SFTP (secure FTP) with high speed internet backbone full duplex mode 
                                        and on average we transfer 80-150GB data daily to our different partners or client worldwide.</p><br>
                                        <p>*** We can also use wetransfer or dropbox or your own file transfer system</p>
                                </div> 
                            </div>
                        </div>
                        
                        <div class="container">
                            <div class="row content_title designed-grid-box" style="padding-bottom:0; padding-top:0px;">
									<h3>Pricing</h3>
									<hr />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 205px;">
                                                <li>
                                                    <span><i class="fa fa-money" aria-hidden="true"></i></span>
                                                    <h4>You send TRIAL jobs, we will return you the edited version, you see the quality then we move forward</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 205px;">
                                                <li>
                                                    <span><i class="fa fa-money" aria-hidden="true"></i></span>
                                                    <h4>Price will vary based on the complexity of jobs & effort</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 205px;">
                                                <li>
                                                    <span><i class="fa fa-money" aria-hidden="true"></i></span>
                                                    <h4>Rates can be in USD/EURO/GBP whichever is convenient</h4>
                                                </li>        
                                            </ul>		
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row content_title designed-grid-box" style="padding-bottom:0">
									<h3>Payments</h3>
									<hr />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 225px;">
                                                <li>
                                                    <span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                                    <h4>At the end of each month we will send an invoice for all the job done (we can send invoice individually for each project too if require)</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 225px;">
                                                <li>
                                                    <span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                                    <h4>Invoice should be paid within 15-30 days from invoice date</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 225px;">
                                                <li>
                                                    <span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                                                    <h4>Payment should be wire to our Bank account directly with SWIFT code provided</h4>
                                                </li>        
                                            </ul>		
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="container-fluid" style="padding-top:0px; padding-bottom:90px">
                        	<div class="container">
                                <div class="row content_title" >
                                        <h3>Milestones</h3>
                                        <hr />
                                        <p style="margin:0">As <strong>Tech Cloud Ltd.</strong> has been selected as one of the top 30 IT companies in Bangladesh to create 
                                        and support jobs by enhancing the export competitiveness of its ITES sector, 
                                        by International Trade Center with the help of BASIS (Bangladesh Association of Software & Information Services) 
                                        & NTF III (Netherlands Trust Fund Phase III),</p><br>
                                        <p>Reference link - <a href="http://www.intracen.org/itc/projects/ntf-3/bangladesh/" target="_blank">www.intracen.org/itc/projects/ntf-3/bangladesh</a></p><br>
                                        <p>Also <strong>Tech Cloud</strong> served and currtently serving few fortune 500 companies around the world including Mango, Diesel, DSQR2, Adlofo Dominquez etc. 
                                        on their image post production need with our experienced and skilled retouching team over last 4 years. 
                                        And currently our post production team is processing over 4000 images per day for different e-commerce retailers or fashion icons around the world.</p>
                                </div> 
                            </div>
                        </div> 
					</div>
					<!-- Section Main Content Wrapper End -->
					
					<!-- Footer Section Start -->
					<div class="container-fluid">
						<div class="row">
							<div class="section_footer">
								<div class="col-sm-6">
									<div class="copyright">
										<p>&copy;  Copyright - 2018&nbsp; | &nbsp;<a href="http://techcloudltd.com/" class="highlighted tooltip tooltip-effect-2">Tech Cloud Ltd.</a>&nbsp; | &nbsp;All Rights Reserved.</p>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="float-bar">
										<div class="float-bar-inn-wrap">
											<div class="float-bar-inn">
												<!--Social network share icon-->
												<div class="float-bar-social-share">
													<button class="social-share-facebook" onclick="javascript:window.open('http://www.facebook.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></button>
													<button class="social-share-twitter" onclick="javascript:window.open('https://twitter.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></button>
													<button class="social-share-google-plus" onclick="javascript:window.open('https://plus.google.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></button>
													<button class="social-share-pinterest" onclick="javascript:window.open('http://pinterest.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></button>
													<button class="social-share-vk" onclick="javascript:window.open('http://vkontakte.ru/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-vk"></i></button>
													<button class="social-share-linkedin" onclick="javascript:window.open('http://www.linkedin.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin"></i></button>
												</div>
											</div>
											<!--End float inn wrap-->
										</div><!--End float inn-->
										<div class="float-bar-triggler go_to_top"><i class="float-bar-triggler-inn"></i></div> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Footer Section End -->
				</div>
			</section>
			<!-- Work Section End -->
			
			<!-- Blog Section Start -->
			<section id="blog" class="andazi_multioption dtp">
				<div class="andazi_front">
					<i class="icon ion-images"></i>
					<h3>Graphic Design</h3>
				</div>
				
				<div class="andazi_back">
					<div class="sub_hero_title">
						<h3 class="inside_site_title"><img src="<?php echo base_url()?>public/images/tcl-logo.png" alt="TCL Logo" width="80"></h3>
						<span class="andazi-close icon ion-ios-close-outline"></span>
						<div class="sub_title">
							<h3>Graphic Design</h3>
							<hr />
						</div>
					</div>
					
					<!-- Section Main Content Wrapper Start -->
					<div class="main_content_wrapper">
                    	<div class="container">
                            <div class="row content_title">
									<h3>Our Offer</h3>
									<hr />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Logo Design
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical">
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Banner / Poster Design
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Catalog Design
                                                </li>        
                                            </ul>		
                                        </div>
                                        
                                    </div><br>
                                    <div class="row">
                                    	<div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Pharma Visual Aid / Promotion
                                                </li>        
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Mailer / Flyer Design
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Packaging Design
                                                </li>       
                                            </ul>		
                                        </div>
                                    </div><br>
                                    <div class="row">
                                    	<div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Image color correction
                                                </li>        
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical">
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Business Stationery Design
                                                </li>        
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Brochure Design
                                                </li>       
                                            </ul>		
                                        </div>
                                    </div><br>
                                    <div class="row">
                                    	<div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Booklet / Manual / Directory design
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Material Design
                                                </li>        
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Newsletter Design
                                                </li>        
                                            </ul>		
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Copy paste / Language Alternation
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" >
                                                <li>
                                                    <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                                    &nbsp; Garments Hang tag/Sticker
                                                </li>       
                                            </ul>		
                                        </div>
                                    </div>
                            </div>
                        </div>
						<div class="container">
							<div class="row">
								<div class="content_title" style="padding-top:0">
									<h3>Some of Our Good Works</h3>
									<hr />
									<p>The world is changing all around us. To continue to thrive as a 
									business over the next ten years and beyond, we must look ahead, 
									understand the trends and forces that will shape our business. </p>
								</div>
								
								<div id="our_works">
									<!-- Grid Filter Start 
									<ul class="grid-filter text-center">
										<li>
											<a class="selected" href="0" data-filter="*">
											<span><span class="icon ion-ios-keypad-outline"></span> All</span>
											</a>
										</li>
										<li>
											<a class="" href="0" data-filter=".web">
											<span><span class="icon ion-ios-snowy"></span> Web design</span>
											</a>
										</li>
										<li>
											<a class="" href="0" data-filter=".webd">
											<span><span class="icon ion-ios-photos-outline"></span> Web development</span>
											</a>
										</li>
										<li>
											<a class="" href="0" data-filter=".graphics">
											<span><span class="icon ion-ios-pie-outline"></span> Graphics</span>
											</a>
										</li>  
</ul> -->
									<!-- Grid Filter End -->
									
									<!-- Works Grid Start -->
									<ul id="grid-list" class="grid-layout">
										<!-- Works Item 01 -->
										<li class="col-md-4 col-sm-6 masonry_item webd web">
											<a href="<?php echo base_url()?>public/images/graphics/3.jpg" data-group="1" class="galleryItem" title="Project One"><div class="work_content">
                                                <img src="<?php echo base_url()?>public/images/graphics/3-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
										<!-- Works Item 02 -->
										<li class="col-md-4 col-sm-6 masonry_item webd graphics">
											<a href="<?php echo base_url()?>public/images/graphics/Everestbangla.jpg" data-group="1" class="galleryItem" title="Project Two"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/Everest-thubm.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
										<!-- Works Item 03 -->
										<li class="col-md-4 col-sm-6 masonry_item webd">
											<a href="<?php echo base_url()?>public/images/graphics/Ariston.jpg" data-group="1" class="galleryItem" title="Project Three"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/Ariston-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
										<!-- Works Item 04 -->
										<li class="col-md-4 col-sm-6 masonry_item web">
											<a href="<?php echo base_url()?>public/images/graphics/SAITKnife.jpg" data-group="1" class="galleryItem" title="Project Four"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/SAITKnife-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
										<!-- Works Item 05 -->
										<li class="col-md-4 col-sm-6 masonry_item web graphics">
											<a href="<?php echo base_url()?>public/images/graphics/brochure.jpg" data-group="1" class="galleryItem" title="Project Five"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/brochure-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
										<!-- Works Item 06 -->
										<li class="col-md-4 col-sm-6 masonry_item web">
											<a href="<?php echo base_url()?>public/images/graphics/7.jpg" data-group="1" class="galleryItem" title="Project Six"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/7-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
										<!-- Works Item 07 -->
										<li class="col-md-4 col-sm-6 masonry_item graphics">
											<a href="<?php echo base_url()?>public/images/graphics/land.jpeg" data-group="1" class="galleryItem" title="Project Seven"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/land-thumb.jpeg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
										<!-- Works Item 08 -->
										<li class="col-md-4 col-sm-6 masonry_item webd">
											<a href="<?php echo base_url()?>public/images/graphics/Mockup1.jpg" data-group="1" class="galleryItem" title="Project Eight"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/Mockup-1-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
										<!-- Works Item 09 -->
										<li class="col-md-4 col-sm-6 masonry_item web">
											<a href="<?php echo base_url()?>public/images/graphics/SAITWelding.jpg" data-group="1" class="galleryItem" title="Project Nine"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/SAITWelding-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
                                        <!-- Works Item 10 -->
										<li class="col-md-4 col-sm-6 masonry_item graphics">
											<a href="<?php echo base_url()?>public/images/graphics/roots-Brochure.jpg" data-group="1" class="galleryItem" title="Project Seven"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/roots-Brochure-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
                                        <!-- Works Item 11 -->
										<li class="col-md-4 col-sm-6 masonry_item web">
											<a href="<?php echo base_url()?>public/images/graphics/cm.jpg" data-group="1" class="galleryItem" title="Project Nine"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/cm-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
                                        <!-- Works Item 12 -->
										<li class="col-md-4 col-sm-6 masonry_item webd">
											<a href="<?php echo base_url()?>public/images/graphics/jibraan-card.jpg" data-group="1" class="galleryItem" title="Project Nine"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/jibraan-card-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
                                        <!-- Works Item 12 -->
										<li class="col-md-4 col-sm-6 masonry_item webd">
											<a href="<?php echo base_url()?>public/images/graphics/name.jpg" data-group="1" class="galleryItem" title="Project Nine"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/name-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
                                        <!-- Works Item 12 -->
										<li class="col-md-4 col-sm-6 masonry_item webd">
											<a href="<?php echo base_url()?>public/images/graphics/Leaflet-Final.jpg" data-group="1" class="galleryItem" title="Project Nine"><div class="work_content">
												<img src="<?php echo base_url()?>public/images/graphics/Leaflet-Final-thumb.jpg" alt="" />
												<div class="work-overlay">
													<div class="valign">
														<span class="icon ion-ios-search"></span>
													</div>
												</div>
											</div></a>
										</li>
									</ul>
									<!-- Works Grid End -->
								</div>
								
							</div>
						</div>     
                        <div class="container">
                            <div class="row">
                                <div class="content_title" style="padding-bottom:0; padding-top:0">
                                    <h3>How It Works</h3>
                                    <hr />
                                    <img class="img-responsive" src="<?php echo base_url()?>public/images/dtp-workflow.jpg">
                                </div>  
                             </div>
                        </div>
                        <div class="container" style="padding-bottom:80px">
                             <div class="row">
                                 <div class="content_title" style="padding-bottom:0">
                                    <h3>Our Team</h3>
                                    <hr />
                                    <img class="img-responsive" src="<?php echo base_url()?>public/images/team-dtp.png">
                                </div>  
                             </div>
                        </div>
                        <div class="container">
                            <div class="row content_title designed-grid-box" style="padding-bottom:90; padding-top:0">
									<h3>Our Offer</h3>
									<hr />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 180px;">
                                                <li>
                                                    <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                                    <h4>All our resources are available for you</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 180px;">
                                                <li>
                                                    <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                                    <h4>Dedicated team of designers for your project is negotiable</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-ic vertical" style="height: 180px;">
                                                <li>
                                                    <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                                    <h4>Tech Cloud is instantly ready for any new projects with free trial option</h4>
                                                </li>        
                                            </ul>		
                                        </div>
                                    </div>
                            </div>
                        </div>
					</div>
					<!-- Section Main Content Wrapper End -->
					
					<!-- Blog Section Footer Start -->
					<div class="container-fluid">
						<div class="row">
							<div class="section_footer">
								<div class="col-sm-6">
									<div class="copyright">
										<p>&copy;  Copyright - 2018&nbsp; | &nbsp;<a href="http://techcloudltd.com/" class="highlighted tooltip tooltip-effect-2">Tech Cloud Ltd.</a>&nbsp; | &nbsp;All Rights Reserved.</p>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="float-bar">
										<div class="float-bar-inn-wrap">
											<div class="float-bar-inn">
												<!--Social network share icon-->
												<div class="float-bar-social-share">
													<button class="social-share-facebook" onclick="javascript:window.open('http://www.facebook.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></button>
													<button class="social-share-twitter" onclick="javascript:window.open('https://twitter.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></button>
													<button class="social-share-google-plus" onclick="javascript:window.open('https://plus.google.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></button>
													<button class="social-share-pinterest" onclick="javascript:window.open('http://pinterest.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></button>
													<button class="social-share-vk" onclick="javascript:window.open('http://vkontakte.ru/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-vk"></i></button>
													<button class="social-share-linkedin" onclick="javascript:window.open('http://www.linkedin.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin"></i></button>
												</div>
											</div>
											<!--End float inn wrap-->
										</div><!--End float inn-->
										<div class="float-bar-triggler"><i class="float-bar-triggler-inn"></i></div> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Blog Section Footer End -->
				</div>
			</section>
			<!-- Blog Section End -->
			
			<!-- Contact Section Start -->
			<section id="contact" class="dm">
				<div class="andazi_front">
					<i class="icon ion-ios-briefcase"></i>
					<h3>Digital Marketing</h3>
				</div>
				
				<div class="andazi_back">
					<div class="sub_hero_title">
						<h3 class="inside_site_title"><img src="<?php echo base_url()?>public/images/tcl-logo.png" alt="TCL Logo" width="80"></h3>
						<span class="andazi-close icon ion-ios-close-outline"></span>
						<div class="sub_title">
							<h3>Digital Marketing</h3>
							<hr />
						</div>
					</div>
					
					<!-- Section Main Content Wrapper Start -->
					<div class="main_content_wrapper">
						<div class="container">
							<div class="row">
								<div class="content_title" style="padding-bottom:0">
									<h3>We Offer</h3>
									<hr />
								</div>
							</div>

                                    <div class="row designed-grid-box" style="padding-bottom:0px; padding-top:0">
                                        <div class="col-md-3">
                                            <ul class="list-ic vertical" style="height: 175px;">
                                                <li>
                                                    <span><i class="fa fa-comments" aria-hidden="true"></i></span>
                                                    <h4>SMS Marketing</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="list-ic vertical" style="height: 175px;">
                                                <li>
                                                    <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                                    <h4>Facebook Marketing</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="list-ic vertical" style="height: 175px;">
                                                <li>
                                                    <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                    <h4>E-mail Marketing</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="list-ic vertical" style="height: 175px;">
                                                <li>
                                                    <span><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span>
                                                    <h4>Digital Content & Creative Services</h4>
                                                </li>       
                                            </ul>		
                                        </div>
                                    </div>
                            
						</div>
                        
                        <div class="container">
							<div class="row" style="padding-bottom:90px; padding-top:0">
								<div class="content_title" >
									<h3>Some of Our Valuable Clients</h3>
									<hr />
                                    <div class="col-md-2"><img class="img-responsive" src="<?php echo base_url()?>public/images/client-logos/BURGER-N-BOOST.jpg"></div>
                                    <div class="col-md-2"><img class="img-responsive" src="<?php echo base_url()?>public/images/client-logos/peon.png"></div>
                                    <div class="col-md-2"><img class="img-responsive" src="<?php echo base_url()?>public/images/client-logos/Designage.png"></div>
                                    <div class="col-md-2"><img class="img-responsive" src="<?php echo base_url()?>public/images/client-logos/westin.jpeg"></div>
                                    <div class="col-md-2"><img class="img-responsive" src="<?php echo base_url()?>public/images/client-logos/royal wedding.jpg"></div>
                                    <div class="col-md-2"><img class="img-responsive" src="<?php echo base_url()?>public/images/client-logos/seashell.png"></div>
								</div>
							</div>
                            
						</div>
					</div>
					<!-- Section Main Content Wrapper End -->
					
					<!-- Contact Section Footer Start -->
					<div class="container-fluid">
						<div class="row">
							<div class="section_footer">
								<div class="col-sm-6">
									<div class="copyright">
										<p>&copy;  Copyright - 2018&nbsp; | &nbsp;<a href="http://techcloudltd.com/" class="highlighted tooltip tooltip-effect-2">Tech Cloud Ltd.</a>&nbsp; | &nbsp;All Rights Reserved.</p>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="float-bar">
										<div class="float-bar-inn-wrap">
											<div class="float-bar-inn">
												<!--Social network share icon-->
												<div class="float-bar-social-share">
													<button class="social-share-facebook" onclick="javascript:window.open('http://www.facebook.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></button>
													<button class="social-share-twitter" onclick="javascript:window.open('https://twitter.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></button>
													<button class="social-share-google-plus" onclick="javascript:window.open('https://plus.google.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></button>
													<button class="social-share-pinterest" onclick="javascript:window.open('http://pinterest.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></button>
													<button class="social-share-vk" onclick="javascript:window.open('http://vkontakte.ru/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-vk"></i></button>
													<button class="social-share-linkedin" onclick="javascript:window.open('http://www.linkedin.com/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin"></i></button>
												</div>
											</div>
											<!--End float inn wrap-->
										</div><!--End float inn-->
										<div class="float-bar-triggler"><i class="float-bar-triggler-inn"></i></div> 
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Contact Section Footer End -->
				</div>
			</section>
			<!-- Contact Section End -->

            <div class="andazi_panel_items" id="andazi_panel_items_view">
				<!-- Panel 01 -->
				<div data-panel="panel-1">
					<div>
						<div class="container">
							<div class="row">
								<div class="col-md-6">
                                
                                <div id="rightDisplay">
                                      <img class="img-responsive" id="currentImg1" src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_1.png','850','600')); ?>" />
                                </div>
                                
                                <div id="mainContainer">
   										<div id="leftNav">
                                        	<div class="row">

                                            	<div class="col-xs-3"><img class="img-responsive"  src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_1.png','116','82')); ?>" onclick="showImage('item_1.png');"></div>
                                                <div class="col-xs-3"><img class="img-responsive"  src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_2.jpg','116','82')); ?>" onclick="showImage('item_2.jpg');"></div>
                                                <div class="col-xs-3"><img class="img-responsive"  src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_3.png','116','82')); ?>" onclick="showImage('item_3.jpg');"></div>
                                                <div class="col-xs-3"><img class="img-responsive"  src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_4.jpg','116','82')); ?>" onclick="showImage('item_4.jpg');"></div>
                                                <div class="col-xs-3"><img class="img-responsive"  src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_5.png','116','82')); ?>" onclick="showImage('item_5.jpg');"></div>
                                                <div class="col-xs-3"><img class="img-responsive"  src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_6.jpg','116','82')); ?>" onclick="showImage('item_6.jpg');"></div>
                                                <div class="col-xs-3"><img class="img-responsive"  src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_7.jpg','116','82')); ?>" onclick="showImage('item_7.jpg');"></div>
                                                <div class="col-xs-3"><img class="img-responsive"  src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_8.jpg','116','82')); ?>" onclick="showImage('item_8.jpg');"></div>
                                                <div class="col-xs-3"><img class="img-responsive"  src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_9.jpg','116','82')); ?>" onclick="showImage('item_9.jpg');"></div>
                                                <div class="col-xs-3"><img class="img-responsive"  src="<?php echo base_url('public/images/ppd-portfolio/ghost-mannequin/'.thumb('public/images/ppd-portfolio/ghost-mannequin/item_10.jpg','116','82')); ?>" onclick="showImage('item_10.jpg');"></div>
                                            </div>
                                		</div>  
                                </div>
                                
                                
                               	
								</div>
								<div class="col-md-6">
									<div class="single_post_content">
										<h4>Ghost Mannequin</h4>
										<hr />
										<p>Merging images those are shoot on mannequin to make them look like the attached image with this post. We are expert in using 
                                        <b>liquify tools, fix shaping, make both side symmetrical, removing creases, tags or labels</b> 
                                        as required to make the web ready or print ready for your webshop or look book or catalogue.</p>
                                        <h4 style="font-size:16px">Pricing:</h4>
                                        <ul>
                                             <li>We charge per image pricing.</li>
                                             <li>Always depend on complexity of work may varies in between $1.20-2.50/image.</li>
                                        </ul>
									</div>
								</div>
							</div>
                            <div class="single_post_separator"></div>
						</div>
					</div>
				</div>
                
                <!-- Panel 02 -->
				<div data-panel="panel-2">
					<div>
						<div class="container">
							<div class="row">
								<div class="col-md-6">
                                
                                <div id="rightDisplay">
                                      <img id="currentImg2" src="<?php echo base_url('public/images/ppd-portfolio/coloring/'.thumb('public/images/ppd-portfolio/coloring/item_1.jpg','850','600')); ?>" alt="bridget_moynahan_00.jpg" title="bridget_moynahan_00.jpg" />
                                   </div>
                                
                                <div id="mainContainer">
   										<div id="leftNav">
                                        	<div class="row">
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/coloring/'.thumb('public/images/ppd-portfolio/coloring/item_1.jpg','116','82')); ?>" onclick="showImage2('item_1.jpg');"></div>
                                                <div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/coloring/'.thumb('public/images/ppd-portfolio/coloring/item_2.jpg','116','82')); ?>" onclick="showImage2('item_2.jpg');"></div>
                                                <div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/coloring/'.thumb('public/images/ppd-portfolio/coloring/item_3.jpg','116','82')); ?>" onclick="showImage2('item_3.jpg');"></div>
                                                <div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/coloring/'.thumb('public/images/ppd-portfolio/coloring/item_4.jpg','116','82')); ?>" onclick="showImage2('item_4.jpg');"></div>
                                                <div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/coloring/'.thumb('public/images/ppd-portfolio/coloring/item_5.jpg','116','82')); ?>" onclick="showImage2('item_5.jpg');"></div>
                                                <div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/coloring/'.thumb('public/images/ppd-portfolio/coloring/item_6.jpg','116','82')); ?>" onclick="showImage2('item_6.jpg');"></div>
                                                <div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/coloring/'.thumb('public/images/ppd-portfolio/coloring/item_7.jpg','116','82')); ?>" onclick="showImage2('item_7.jpg');"></div>
                                                <div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/coloring/'.thumb('public/images/ppd-portfolio/coloring/item_8.jpg','116','82')); ?>" onclick="showImage2('item_8.jpg');"></div>
                  
                                            </div>
                                		</div>
                                </div>

								</div>
								<div class="col-md-6">
									<div class="single_post_content">
										<h4>Coloring</h4>
										<hr />
										<p>Changing color of an item using the supplied color code or color swatches. We use several ways doing this including Selective color option or color range or replace color also using hue/saturation option depending on the pattern.</p>
                                        <h4 style="font-size:16px">Pricing:</h4>
                                        <ul>
                                             <li>We charge per image pricing.</li>
                                             <li>Always depend on complexity of work may varies in between $0.70-2.50/image.</li>
                                        </ul>
									</div>
								</div>
							</div>
                            <div class="single_post_separator"></div>
						</div>
					</div>
				</div>
                
                <!-- Panel 03 -->
				<div data-panel="panel-3">
					<div>
						<div class="container">
							<div class="row">
								<div class="col-md-6">
                                
                                <div id="rightDisplay">
                                      <img id="currentImg3" src="<?php echo base_url('public/images/ppd-portfolio/wrinkle-removing/'.thumb('public/images/ppd-portfolio/wrinkle-removing/item_1.jpg','850','600')); ?>" />
                                   </div>
                                
                                <div id="mainContainer">
   										<div id="leftNav">
                                            <div class="row">
                                                <div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/wrinkle-removing/'.thumb('public/images/ppd-portfolio/wrinkle-removing/item_1.jpg','116','82')); ?>" onclick="showImage3('item_1.jpg');"></div>
                                                <div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/wrinkle-removing/'.thumb('public/images/ppd-portfolio/wrinkle-removing/item_2.jpg','116','82')); ?>" onclick="showImage3('item_2.jpg');"></div>
                                                <div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/wrinkle-removing/'.thumb('public/images/ppd-portfolio/wrinkle-removing/item_3.jpg','116','82')); ?>" onclick="showImage3('item_3.jpg');"></div>
                                                <div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/wrinkle-removing/'.thumb('public/images/ppd-portfolio/wrinkle-removing/item_4.jpg','116','82')); ?>" onclick="showImage3('item_4.jpg');"></div>
                                            </div>
                                		</div>
                                </div>

								</div>
								<div class="col-md-6">
									<div class="single_post_content">
										<h4>Wrinkle Removing</h4>
										<hr />
										<p>We use different techniques to minimize the wrinkle or crease of a garment including manipulation that is selecting best source and copying that over the wrinkle area or using some curves, to darken or lighten, paint in the mask to reveal them or manually using stamp or clone tool.</p>
                                        <h4 style="font-size:16px">Pricing:</h4>
                                        <ul>
                                             <li>We charge per image pricing.</li>
                                             <li>Always depend on complexity of work may varies in between $0.50-1.50/image.</li>
                                        </ul>
									</div>
								</div>
							</div>
                            <div class="single_post_separator"></div>
						</div>
					</div>
				</div>
                
              	<!-- Panel 04 -->
				<div data-panel="panel-4">
					<div>
						<div class="container">
							<div class="row">
								<div class="col-md-6">
                                
                                <div id="rightDisplay">
                                      <img id="currentImg4" src="<?php echo base_url('public/images/ppd-portfolio/hair-masking/'.thumb('public/images/ppd-portfolio/hair-masking/item_1.jpg','850','600')); ?>"  />
                                   </div>
                                
                                <div id="mainContainer">
   										<div id="leftNav">
                                        	<div class="row">
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/hair-masking/'.thumb('public/images/ppd-portfolio/hair-masking/item_1.jpg','116','82')); ?>" onclick="showImage4('item_1.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/hair-masking/'.thumb('public/images/ppd-portfolio/hair-masking/item_2.jpg','116','82')); ?>" onclick="showImage4('item_2.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/hair-masking/'.thumb('public/images/ppd-portfolio/hair-masking/item_3.jpg','116','82')); ?>" onclick="showImage4('item_3.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/hair-masking/'.thumb('public/images/ppd-portfolio/hair-masking/item_4.jpg','116','82')); ?>" onclick="showImage4('item_4.jpg');"></div>
                                            </div>
                                		</div>
                                </div>

								</div>
								<div class="col-md-6">
									<div class="single_post_content">
										<h4>Hair Masking</h4>
										<hr />
										<p>Most of the time we use background erase tool for layer masking fuzzy contours (like hair or fur) to get the best result. We also history tool in some case to bring back the lost object and Refine edge option for soft edges and areas of fine detail.</p>
                                        <h4 style="font-size:16px">Pricing:</h4>
                                        <ul>
                                             <li>We charge per image pricing.</li>
                                             <li>Always depend on complexity of work may varies in between $0.80-2.50/image.</li>
                                        </ul>
									</div>
								</div>
							</div>
                            <div class="single_post_separator"></div>
						</div>
					</div>
				</div>
                
                <!-- Panel 05 -->
				<div data-panel="panel-5">
					<div>
						<div class="container">
							<div class="row">
								<div class="col-md-6">
                                
                                <div id="rightDisplay">
                                      <img id="currentImg5" src="<?php echo base_url('public/images/ppd-portfolio/jewelry-retouching/'.thumb('public/images/ppd-portfolio/jewelry-retouching/item_1.jpg','850','600')); ?>" />
                                   </div>
                                
                                <div id="mainContainer">
   										<div id="leftNav">
                                        	<div class="row">
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/jewelry-retouching/'.thumb('public/images/ppd-portfolio/jewelry-retouching/item_1.jpg','116','82')); ?>" onclick="showImage5('item_1.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/jewelry-retouching/'.thumb('public/images/ppd-portfolio/jewelry-retouching/item_2.jpg','116','82')); ?>" onclick="showImage5('item_2.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/jewelry-retouching/'.thumb('public/images/ppd-portfolio/jewelry-retouching/item_3.jpg','116','82')); ?>" onclick="showImage5('item_3.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/jewelry-retouching/'.thumb('public/images/ppd-portfolio/jewelry-retouching/item_4.jpg','116','82')); ?>" onclick="showImage5('item_4.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/jewelry-retouching/'.thumb('public/images/ppd-portfolio/jewelry-retouching/item_5.jpg','116','82')); ?>" onclick="showImage5('item_5.jpg');"></div>
                                            </div>
                                		</div>
                                </div>

								</div>
								<div class="col-md-6">
									<div class="single_post_content">
										<h4>Jewelry Retouching</h4>
										<hr />
										<p>We use mainly the Photo shop CS6 tools such as Brush, clone stamp and healing brush tool or filling colour with brush flow at 10-20%. we also use some simple photo shop actions for desaturation and sharpen. To isolate a specific area of an image we draws a line around it using the pen tool. </p>
                                        <h4 style="font-size:16px">Pricing:</h4>
                                        <ul>
                                             <li>We charge per image pricing.</li>
                                             <li>Always depend on complexity of work may varies in between $5.00-15.00/image.</li>
                                        </ul>
									</div>
								</div>
							</div>
                            <div class="single_post_separator"></div>
						</div>
					</div>
				</div>
                
                <!-- Panel 06 -->
				<div data-panel="panel-6">
					<div>
						<div class="container">
							<div class="row">
								<div class="col-md-6">
                                
                                <div id="rightDisplay">
                                      <img id="currentImg6" src="<?php echo base_url('public/images/ppd-portfolio/product-retouching/'.thumb('public/images/ppd-portfolio/product-retouching/item_1.jpg','850','600')); ?>"/>
                                   </div>
                                
                                <div id="mainContainer">product-retouching
   										<div id="leftNav">
                                        	<div class="row">
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/product-retouching/'.thumb('public/images/ppd-portfolio/product-retouching/item_1.jpg','116','82')); ?>" onclick="showImage6('item_1.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/product-retouching/'.thumb('public/images/ppd-portfolio/product-retouching/item_2.jpg','116','82')); ?>" onclick="showImage6('item_2.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/product-retouching/'.thumb('public/images/ppd-portfolio/product-retouching/item_3.jpg','116','82')); ?>" onclick="showImage6('item_3.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/product-retouching/'.thumb('public/images/ppd-portfolio/product-retouching/item_4.jpg','116','82')); ?>" onclick="showImage6('item_4.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/product-retouching/'.thumb('public/images/ppd-portfolio/product-retouching/item_5.jpg','116','82')); ?>" onclick="showImage6('item_5.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/product-retouching/'.thumb('public/images/ppd-portfolio/product-retouching/item_6.jpg','116','82')); ?>" onclick="showImage6('item_6.jpg');"></div>
                                            </div>
                                		</div>
                                </div>

								</div>
								<div class="col-md-6">
									<div class="single_post_content">
										<h4>Product Retouching</h4>
										<hr />
										<p>We mainly use healing tool or patch tool or clone tool or spot healing brush or stamp tool for retouching dust / scratches of a product. After clean up we sometime apply sharpness.</p>
                                        <h4 style="font-size:16px">Pricing:</h4>
                                        <ul>
                                             <li>We charge per image pricing.</li>
                                             <li>Always depend on complexity of work may varies in between $0.50-3.50/image.</li>
                                        </ul>
									</div>
								</div>
							</div>
                            <div class="single_post_separator"></div>
						</div>
					</div>
				</div>
                
                <!-- Panel 07 -->
				<div data-panel="panel-7">
					<div>
						<div class="container">
							<div class="row">
								<div class="col-md-6">
                                
                                <div id="rightDisplay">
                                      <img id="currentImg7" src="<?php echo base_url('public/images/ppd-portfolio/reflection/'.thumb('public/images/ppd-portfolio/reflection/item_1.jpg','850','600')); ?>"  />
                                   </div>
                                
                                <div id="mainContainer">
   										<div id="leftNav">
                                        	<div class="row">
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/reflection/'.thumb('public/images/ppd-portfolio/reflection/item_1.jpg','116','82')); ?>" onclick="showImage7('item_1.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/reflection/'.thumb('public/images/ppd-portfolio/reflection/item_2.jpg','116','82')); ?>" onclick="showImage7('item_2.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/reflection/'.thumb('public/images/ppd-portfolio/reflection/item_3.jpg','116','82')); ?>" onclick="showImage7('item_3.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/reflection/'.thumb('public/images/ppd-portfolio/reflection/item_4.jpg','116','82')); ?>" onclick="showImage7('item_4.jpg');"></div>
                                            </div>
                                		</div>
                                </div>

								</div>
								<div class="col-md-6">
									<div class="single_post_content">
										<h4>Reflection</h4>
										<hr />
										<p>We mainly use healing tool or patch tool or clone tool or spot healing brush or stamp tool for retouching dust / scratches of a product. After clean up we sometime apply sharpness.</p>
                                        <h4 style="font-size:16px">Pricing:</h4>
                                        <ul>
                                             <li>We charge per image pricing.</li>
                                             <li>Always depend on complexity of work may varies in between $0.50-3.50/image.</li>
                                        </ul>
									</div>
								</div>
							</div>
                            <div class="single_post_separator"></div>
						</div>
					</div>
				</div>
                
                <!-- Panel 08 -->
				<div data-panel="panel-8">
					<div>
						<div class="container">
							<div class="row">
								<div class="col-md-6">
                                
                                <div id="rightDisplay">
                                      <img id="currentImg8" src="<?php echo base_url('public/images/ppd-portfolio/shadow/'.thumb('public/images/ppd-portfolio/shadow/item_1.jpg','850','600')); ?>" />
                                   </div>
                                
                                <div id="mainContainer">
   										<div id="leftNav">
                                        	<div class="row">
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/shadow/'.thumb('public/images/ppd-portfolio/shadow/item_1.jpg','116','82')); ?>" onclick="showImage8('item_1.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/shadow/'.thumb('public/images/ppd-portfolio/shadow/item_2.jpg','116','82')); ?>" onclick="showImage8('item_2.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/shadow/'.thumb('public/images/ppd-portfolio/shadow/item_3.jpg','116','82')); ?>" onclick="showImage8('item_3.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/shadow/'.thumb('public/images/ppd-portfolio/shadow/item_4.jpg','116','82')); ?>" onclick="showImage8('item_4.jpg');"></div>
                                            </div>
                                		</div>
                                </div>

								</div>
								<div class="col-md-6">
									<div class="single_post_content">
										<h4>Shadow</h4>
										<hr />
										<p>Shadowing of an image gives it extra depth and beauty. Our outstanding Image Shadowing encompasses natural shadow, drop shadow and reflection shadow. Image shadowing imparts a dimension to flat images that fashion them alive, vibrant and intact. In the pitch of web media, advertisement media, online marketing, product photography.</p>
                                        <h4 style="font-size:16px">Pricing:</h4>
                                        <ul>
                                             <li>We charge per image pricing.</li>
                                             <li>Always depend on complexity of work may varies in between $0.50-1.20/image.</li>
                                        </ul>
									</div>
								</div>
							</div>
                            <div class="single_post_separator"></div>
						</div>
					</div>
				</div>
                
                <!-- Panel 09 -->
				<div data-panel="panel-9">
					<div>
						<div class="container">
							<div class="row">
								<div class="col-md-6">
                                
                                <div id="rightDisplay">
                                      <img id="currentImg9" src="<?php echo base_url('public/images/ppd-portfolio/skin-retouching/'.thumb('public/images/ppd-portfolio/skin-retouching/item_1.jpg','850','600')); ?>" />
                                   </div>
                                
                                <div id="mainContainer">
   										<div id="leftNav">
                                        	<div class="row">
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/skin-retouching/'.thumb('public/images/ppd-portfolio/skin-retouching/item_1.jpg','116','82')); ?>" onclick="showImage9('item_1.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/skin-retouching/'.thumb('public/images/ppd-portfolio/skin-retouching/item_2.jpg','116','82')); ?>" onclick="showImage9('item_2.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/skin-retouching/'.thumb('public/images/ppd-portfolio/skin-retouching/item_3.jpg','116','82')); ?>" onclick="showImage9('item_3.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/skin-retouching/'.thumb('public/images/ppd-portfolio/skin-retouching/item_4.jpg','116','82')); ?>" onclick="showImage9('item_4.jpg');"></div>
                                            </div>
                                		</div>
                                </div>

								</div>
								<div class="col-md-6">
									<div class="single_post_content">
										<h4>Skin Retouching</h4>
										<hr />
										<p>Retouching is to enhance the colors of your image making it more vivid and alive. This involves removing spots or blemishes or unsightly marks from any surface of the images using stamp tools maintaining skin texture, skin tone correction, layer blending modes or applying layer Screening, adjusting level or histogram and other different techniques with photo shop as situation demand.</p>
                                        <h4 style="font-size:16px">Pricing:</h4>
                                        <ul>
                                             <li>We charge per image pricing.</li>
                                             <li>Always depend on complexity of work may varies in between $1.00-2.50/image.</li>
                                        </ul>
									</div>
								</div>
							</div>
                            <div class="single_post_separator"></div>
						</div>
					</div>
				</div>
                
                <!-- Panel 10 -->
				<div data-panel="panel-10">
					<div>
						<div class="container">
							<div class="row">
								<div class="col-md-6">
                                
                                <div id="rightDisplay">
                                      <img id="currentImg10" src="<?php echo base_url('public/images/ppd-portfolio/back-ground-retouch/'.thumb('public/images/ppd-portfolio/back-ground-retouch/item_1.jpg','850','600')); ?>" />
                                   </div>
                                
                                <div id="mainContainer">
   										<div id="leftNav">
                                        	<div class="row">
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/back-ground-retouch/'.thumb('public/images/ppd-portfolio/back-ground-retouch/item_1.jpg','116','82')); ?>" onclick="showImage10('item_1.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/back-ground-retouch/'.thumb('public/images/ppd-portfolio/back-ground-retouch/item_2.jpg','116','82')); ?>" onclick="showImage10('item_2.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/back-ground-retouch/'.thumb('public/images/ppd-portfolio/back-ground-retouch/item_3.jpg','116','82')); ?>" onclick="showImage10('item_3.jpg');"></div>
                                            	<div class="col-xs-3"><img src="<?php echo base_url('public/images/ppd-portfolio/back-ground-retouch/'.thumb('public/images/ppd-portfolio/back-ground-retouch/item_4.jpg','116','82')); ?>" onclick="showImage10('item_4.jpg');"></div>
                  
                                            </div>
                                		</div>
                                </div>

								</div>
								<div class="col-md-6">
									<div class="single_post_content">
										<h4>Back Ground Retouch</h4>
										<hr />
										<p>This is basically cleaning up the dust and scratches of floor or background used during photography. Manual job using stamp tool or patch tool maintaining the texture. We don't apply any noise or dust for a quick solution. Sometime we apply sharpness after the retouching done.</p>
                                        <h4 style="font-size:16px">Pricing:</h4>
                                        <ul>
                                             <li>We charge per image pricing.</li>
                                             <li>Always depend on complexity of work may varies in between $0.30-2.50/image.</li>
                                             <li>For bulk quantity we offer flat pricing.</li>
                                        </ul>
									</div>
								</div>
							</div>
                            <div class="single_post_separator"></div>
						</div>
					</div>
				</div>
                
                <nav>
					<span class="andazi-prev layout2">previous item</span>
					<span class="andazi-close icon ion-ios-close-outline"></span>
					<span class="andazi-next layout2">Next item</span>
				</nav>
             </div>
			
		</div>
		<!-- Body Content End -->
	</div>
	<!-- Body Wrapper End -->
    

	
</body>
</html>


<script>
    function showImage(imgName) {
        var curImage = document.getElementById('currentImg1');
        var thePath = '<?php echo base_url()?>public/images/ppd-portfolio/ghost-mannequin/';
        var theSource = thePath + imgName;
        curImage.src = theSource;
        curImage.alt = imgName;
        curImage.title = imgName;


    }
</script>

<script>
    function showImage2(imgName) {
        var curImage = document.getElementById('currentImg2');
        var thePath = '<?php echo base_url()?>public/images/ppd-portfolio/coloring/';
        var theSource = thePath + imgName;
        curImage.src = theSource;
        curImage.alt = imgName;
        curImage.title = imgName;

    }
</script>

<script>
    function showImage3(imgName) {
        var curImage = document.getElementById('currentImg3');
        var thePath = '<?php echo base_url()?>public/images/ppd-portfolio/wrinkle-removing/';
        var theSource = thePath + imgName;
        curImage.src = theSource;
        curImage.alt = imgName;
        curImage.title = imgName;

    }
</script>

<script>
    function showImage4(imgName) {
        var curImage = document.getElementById('currentImg4');
        var thePath = '<?php echo base_url()?>public/images/ppd-portfolio/hair-masking/';
        var theSource = thePath + imgName;
        curImage.src = theSource;
        curImage.alt = imgName;
        curImage.title = imgName;

    }
</script>

<script>
    function showImage5(imgName) {
        var curImage = document.getElementById('currentImg5');
        var thePath = '<?php echo base_url()?>public/images/ppd-portfolio/jewelry-retouching/';
        var theSource = thePath + imgName;
        curImage.src = theSource;
        curImage.alt = imgName;
        curImage.title = imgName;

    }
</script>

<script>
    function showImage6(imgName) {
        var curImage = document.getElementById('currentImg6');
        var thePath = '<?php echo base_url()?>public/images/ppd-portfolio/product-retouching/';
        var theSource = thePath + imgName;
        curImage.src = theSource;
        curImage.alt = imgName;
        curImage.title = imgName;

    }
</script>

<script>
    function showImage7(imgName) {
        var curImage = document.getElementById('currentImg7');
        var thePath = '<?php echo base_url()?>public/images/ppd-portfolio/reflection/';
        var theSource = thePath + imgName;
        curImage.src = theSource;
        curImage.alt = imgName;
        curImage.title = imgName;

    }
</script>

<script>
    function showImage8(imgName) {
        var curImage = document.getElementById('currentImg8');
        var thePath = '<?php echo base_url()?>public/images/ppd-portfolio/shadow/';
        var theSource = thePath + imgName;
        curImage.src = theSource;
        curImage.alt = imgName;
        curImage.title = imgName;

    }
</script>

<script>
    function showImage9(imgName) {
        var curImage = document.getElementById('currentImg9');
        var thePath = '<?php echo base_url()?>public/images/ppd-portfolio/skin-retouching/';
        var theSource = thePath + imgName;
        curImage.src = theSource;
        curImage.alt = imgName;
        curImage.title = imgName;

    }
</script>

<script>
    function showImage10(imgName) {
        var curImage = document.getElementById('currentImg10');
        var thePath = '<?php echo base_url()?>public/images/ppd-portfolio/back-ground-retouch/';
        var theSource = thePath + imgName;
        curImage.src = theSource;
        curImage.alt = imgName;
        curImage.title = imgName;

    }
</script>

<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>


<!-- Required Javascript Files -->
<script src="<?php echo base_url()?>public/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.migrate.min.js"></script>
<script src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>public/js/boxlayout.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.circlechart.js"></script>
<script src="<?php echo base_url()?>public/js/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url()?>public/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.validationEngine.js"></script>
<script src="<?php echo base_url()?>public/js/jquery.validationEngine-en.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBm0uh_VRDYSFOnLewPnlmHrgiErw7GI6U"></script>
<script src="<?php echo base_url()?>public/js/mapster.js"></script>
<script src="<?php echo base_url()?>public/js/map-options.js"></script>
<script src="<?php echo base_url()?>public/js/main.js"></script>

<script type="text/javascript">
    $(document).on('ready', function () {
        $('.skills').percentcircle({
            animate: true,
            bgColor: '#ddd',
            coverBg: '#ddd',
            fillColor: '#E74E3E',
            cir: {
                'position': 'relative',
                'text-align': 'center',
                'left': '0px'
            }
        });
    });
</script>