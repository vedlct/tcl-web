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

    <body>


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
        
        
        <section id="about">

            <div class="andazi_back">
                <div class="sub_hero_title" style="margin-top: -20px;">
                    <h3 class="inside_site_title" ><img style="position:absolute; top:30px; left:30px" src="<?php echo base_url()?>public/images/tcl-logo.png" alt="TCL Logo" width="80"></h3>
                   
                    <div class="sub_title">
                        <h3>Office Culture</h3>
                        <hr />
                    </div>
                </div>

                <!-- Section Main Content Wrapper Start -->
                <div class="main_content_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="content_title about_title">
                                <h3>Life @<strong style="color:#38ACEC">TechCloud</strong></h3>
                                <hr />
                                <img class="img-responsive" src="<?php echo base_url()?>public/images/team.jpg">
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

    </body>
</html>