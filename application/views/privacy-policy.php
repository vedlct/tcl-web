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
                    <h3 class="inside_site_title"><img style="position:absolute; top:30px; left:30px" src="<?php echo base_url()?>public/images/tcl-logo.png" alt="TCL Logo" width="80"></h3>
                   
                    <div class="sub_title">
                        <h3>Privacy Policy</h3>
                        <hr />
                    </div>
                </div>

                <!-- Section Main Content Wrapper Start -->
                <div class="main_content_wrapper">
                    <div class="container">
                        <div class="row" style="padding-top:90px; padding-bottom:90px">
                            <p style="text-align: justify;"><strong>Declaration on Data Protection</strong></p>
                            <p style="text-align: justify;">Tech Cloud Ltd. in its role as data controller appreciates your visit on our websites and is grateful for your interest in our company, our products and our services. The protection of your privacy and personal data is an important matter for us. To ensure a high level of transparency and security, our privacy statement as set forth below will inform you about the nature, scope and purpose of any collection, use and processing of personal data recorded by us.</p>
                            <p style="text-align: justify;">Be aware that our Cloud offering, the ARIS Community and the E-Recruiting have separate privacy statements.</p>
                            <ol style="text-align: justify;">
                            <li><strong> External Links</strong></li>
                            </ol>
                            <p style="text-align: justify;">Our websites also reference and include links to third-party websites. As a rule, these are identified by stating the respective third-party Internet address or the company/product logo. Tech Cloud Ltd. has no influence whatsoever on the contents and design of websites of other providers. By referencing/linking these external websites we do not adopt their contents as our own.</p>
                            <ol style="text-align: justify;" start="2">
                            <li><strong> Cookies</strong></li>
                            </ol>
                            <p style="text-align: justify;">Information about our usage of cookies, especially for marketing purposes, can be found in our Cookie Policy.</p>
                            <ol style="text-align: justify;" start="3">
                            <li><strong> Purposes of the Data Processing</strong></li>
                            </ol>
                            <p style="text-align: justify;">Tech Cloud Ltd. collects, processes, and uses your personal data to the extent required to fulfill the respective purpose or for purposes which you have consented to; these purposes being: providing the services that you want to make use of while using our websites, including but not limited to downloads, discussion boards, online job applications, individual requests (e.g. using our contact form), blogs, registration to our courses and other offerings, the creation of statistics and the improvement of our websites and the offered services in order to ensure the security of our websites, and if you have consented to it, for marketing purposes especially sending our email newsletters. Tech Cloud Ltd. also uses the personal data provided for purposes of contract management and processing your enquiries and requests.</p>
                            <p style="text-align: justify;">Moreover, the information provided to us may be combined with data on you that has already been stored by us. Such data combination allows us to keep the data collected by us updated, in order to provide for the accuracy of the collected information and to optimize our service to you.</p>
                            <p style="text-align: justify;">Beyond these purposes, we use and process your data only if you have expressly granted your prior consent thereto and if you have been informed about such purposes. Thus, for example, you may stipulate in an online job application whether we may also review such application with respect to other positions in our company. Only if this is the case, we will use such data for the respective purpose.</p>
                            <ol style="text-align: justify;" start="4">
                            <li><strong> Categories of Personal Data</strong></li>
                            </ol>
                            <p style="text-align: justify;">Personal data means any information relating to an identified or identifiable natural person. Tech Cloud Ltd. collects, processes, or uses the following personal data, if you provide it to us:</p>
                            <ul style="text-align: justify;">
                                <li>first name, last name, date of birth, email address, postal address, country, job title, telephone number, fax number, company, products of Tech Cloud Ltd. that are in use,</li>
                                <li>other data that you have provided while contacting us, especially using the contact forms on our website,</li>
                                <li>other data that you have provided in comments on out websites, especially using the forms of the discussion boards or the comment functions of the blogs,</li>
                                <li>data that you have sent to us during an online job application, including your CV, certificates, reports, job references etc. (job application data).</li>
                            </ul>
                            <p style="text-align: justify;">For marketing purposes and to improve our websites and services we also collect the data that is sent by your web browser, e.g. information about your browser and your operating system.</p>
                            <p style="text-align: justify;">For statistical purposes and internal system specific purposes, Tech Cloud Ltd. also collects, processes, and uses your usage data in combination with your IP address and information about the amount of transmitted data stored in log files. The log files are used to statistically analyze visits on our websites. The data is being deleted after it has been analyzed for statistical purposes.</p>
                            <ol style="text-align: justify;" start="5">
                            <li><strong> Data recipients</strong></li>
                            </ol>
                            <p style="text-align: justify;">Tech Cloud Ltd. has contracted external data processing service providers to collect, process, or use personal data on behalf and according to the instructions of Tech Cloud Ltd.. Such service providers support Tech Cloud Ltd., especially relating to hosting and operating the websites and blogs, marketing purposes, statistical analysis, improving the websites and sending our email newsletters. These service providers may be located outside the European Union or the European Economic Area which means that the level of protection in respect to data protection law might differ from the level of protection provided by European data protection legislation.</p>
                            <p style="text-align: justify;">Tech Cloud Ltd. is a globally operating corporation. In order to better process your matter, it might be necessary to forward your data to local subsidiaries or to local distribution partners, whose registered office might also be located in countries outside the European Union. However, such transmission takes place only within Tech Cloud Ltd. group companies and only for the aforementioned purposes.</p>
                            <p style="text-align: justify;">Beyond that, we do not forward your data to other third parties, unless we are obliged to do so by virtue of statutory provisions or order of any judicial or other public authorities.</p>
                            <p style="text-align: justify;">In particular, your personal data shall not be sold, leased or exchanged.</p>
                            <ol style="text-align: justify;" start="6">
                            <li><strong> Information sent by Email</strong></li>
                            </ol>
                            <p style="text-align: justify;">If you have provided us with your email address for purposes of communication or promotion, we will use your data to communicate with you or send you promotional emails based on your interests. Our E-mail communication includes the possibility to revoke your consent at any time, should you no longer desire to receive such information. Please visit our Email Subscription Center to change your subscription settings.</p>
                            <ol style="text-align: justify;" start="7">
                            <li><strong> Participation in Discussion Boards and Blogs</strong></li>
                            </ol>
                            <p style="text-align: justify;">On our websites we offer you the possibility to participate in discussion boards and blogs. For these purposes we require certain personal information from you (email address, first name, last name, company, country), as we are legally obliged to uniquely identify users retroactively in case they have posted unlawful content. Please keep in mind that the texts published by you may potentially be viewed by everyone on the Internet without limitation.</p>
                            <p style="text-align: justify;">When participating in the discussion boards of the TECHcommunity your personal data is not disclosed to other participants unless you have consented thereto in your user profile. In this context, our Discussion Board Guidelines including the Terms of Use apply when registering for the TECHcommunity.</p>
                            <p style="text-align: justify;">The Tech Cloud Ltd. blog Beyond B2B – Digital Reality Check is based on technology by HubSpot, Inc.; 25 First St, 2nd Floor, Cambridge, MA 02141, USA. HubSpot is certified based on the EU-U.S. Privacy Shield Framework and the U.S.-Swiss Safe Harbor Framework. More details about privacy provisions of HubSpot and about their privacy certifications can be found here.</p>
                            <ol style="text-align: justify;" start="8">
                            <li><strong> Data Protection for Minors</strong></li>
                            </ol>
                            <p style="text-align: justify;">The offers and services on this website are not directed at children. We therefore assume that we will not become aware of any personal data pertaining to children.</p>
                            <ol style="text-align: justify;" start="9">
                            <li><strong> Technical and Organizational Data Protection</strong></li>
                            </ol>
                            <p style="text-align: justify;">Tech Cloud Ltd. implements the technical and organizational measures that are commercially reasonable in relation to the respective purpose of data protection, in order to protect the information provided by you against abuse and loss. Such data is stored in a secure operating environment that is not accessible to the public. In addition, each of our employees is instructed on data protection and obliged to enter into a confidentiality agreement.</p>
                            <ol style="text-align: justify;" start="10">
                            <li><strong> Emails sent to Tech Cloud Ltd.</strong></li>
                            </ol>
                            <p style="text-align: justify;">For tax reasons, emails sent to Tech Cloud Ltd. and other members of the Tech Cloud Ltd. group will be archived for ten years. The email systems of Tech Cloud Ltd. and other members of the Tech Cloud Ltd. group are meant to be to be used for business purposes.</p>
                            <ol style="text-align: justify;" start="11">
                            <li><strong> Records of Processing Activities</strong></li>
                            </ol>
                            <p style="text-align: justify;">You may obtain a general overview of the purposes for which and the categories of data subjects on which Tech Cloud Ltd. collects, processes, and uses personal data in the public Records of Processing Activities shown on this website.</p>
                            <ol style="text-align: justify;" start="12">
                            <li><strong> Information and Other Rights, Contact</strong></li>
                            </ol>
                            <p style="text-align: justify;">Upon request, our Data Protection Officer would be happy to provide you with information as to whether – and if so, which – personal data we store in relation to you. Should your personal data be incorrect, you may have this rectified immediately. Any such information or modification is free of charge.</p>
                            <p style="text-align: justify;">Moreover, you are entitled to revoke your consent to use your personal data in the future, in whole or in parts. Should you desire to do so, we will delete or block your relevant data. In order to assert such rights, please contact Tech Cloud Ltd.'s data protection officer.</p>


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