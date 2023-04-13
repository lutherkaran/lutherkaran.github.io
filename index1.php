<?php 
session_start();
if(isset($_POST['submit'])){
    $to = "karanluther95@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Game-Dev";
    $subject2 = "Thank you for Your submission Game-dev Contact";
    $message = $name . " " . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<script>alert('Mail Sent. Thank you " . $name . ", Connect with Game-dev.');</script>";
	
    }
?>

<!doctype html>
<html lang="zxx">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Color of address bar in mobile browser -->
    <meta name="theme-color" content="#191923">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Main -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Swiper -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Elements -->
    <link rel="stylesheet" href="css/elements.css">
    <!-- Media queries -->
    <link rel="stylesheet" href="css/media-queries.css">
    <!-- Primary color -->
    <!--<link rel="stylesheet" href="css/primary-color/red.css">-->
    <!-- red -->
    <!--<link rel="stylesheet" href="css/primary-color/green.css">-->
    <!-- green -->
    <!--<link rel="stylesheet" href="css/primary-color/orange.css">-->
    <!-- orange -->
    <link rel="stylesheet" href="css/primary-color/coral.css"> <!-- coral -->
    <!-- Overlay color -->
    <!--<link rel="stylesheet" href="css/overlay-color/violet.css">-->
    <!-- violet -->
    <link rel="stylesheet" href="css/overlay-color/blue.css"> <!-- blue -->

    <!-- Favicon  -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Page title  -->
    <title>Karan Luther - Video Game Developer</title>

    <!-- Demo css -->
    <link rel="stylesheet" href="demo/demo.css">
	
	<link rel="stylesheet" href="jquery.modally.css">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/inobounce/0.2.0/inobounce.min.js"></script>
        <script type="text/javascript" src="jquery.modally.js"></script>
		
		
		
		<style>
	
	.modally {
background:rgba(20, 20, 30, 1);


}
	
	
	</style>

</head>

<body>
    <!-- Frame -->
    <div class="frame">
        <!--- DEMO (delete it) -->
        <!--- DEMO (delete it) end -->
        <!-- Custom cursor -->
        <div class='cursor'></div>
        <div class='cursor pet'></div>
        <!-- Custom cursor end -->
        <!-- Preloader -->
        <!-- Preloader end -->
        <!-- Sidebar -->
        
        <!-- Sidebar end -->
        <!-- Page wrapper -->
        <div id="page-wrapper" class="page-wrapper">
            <!-- Header -->
            <header id="header" class="header">
                <!-- Top panel -->
                <div class="top-panel">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html">
                            <!-- Image logo -->
                            <!--<img style="width: 100px;" src="img/your_logo.png" alt="logo">-->
                            <!-- Text logo -->
                            <p class="logo-text new-page">K<span class="color logo-fix">A</span>RAN LUTHER</p>
                        </a>
                    </div>
                    <!-- Logo end -->
                    <!-- Page navigation -->
                    <ul class="navigation">
                        <!-- Navigation link -->
                        <li><a class="default-link smooth-scroll" href="#anchor-1">Portfolio</a></li>
                        <!-- Navigation link -->
                        <li><a class="default-link smooth-scroll" href="#anchor-4">Resume</a></li>
                        <!-- Navigation link -->
                        <li><a class="default-link smooth-scroll" href="#anchor-3">Contact</a></li>
                    </ul>
                    <!-- Page navigation end -->
                </div>
                <!-- Top panel end -->
                <!-- header video -->
                <video playsinline autoplay muted loop>
                    <source src="img/video/video-bg.mp4">
                </video>
                <!-- header video end -->
                <!-- Gradient overlay -->
                <div class="overlay"></div>
                <!-- header background end -->
                <div class="container header-content">
                    <div class="main-title text-center">
                        <!-- Main-title -->
                        <h1 class="bold a-f mb-20">Adventure<span class="color"> Games</span> <br> and Fun </h1>
                        <div class="main-title-buttons a-f">
                            <!-- Button -->
                            <a href="#anchor-3" class="button button-1 margin-sm-bottom">Contact us <i class="fas fa-chevron-right"></i></a>
                            <!-- Button -->
                            <a href="#anchor-1" class="button smooth-scroll">Discover now <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!-- Scroll hint -->
                    <div class="scroll-hint">
                        <a href="#anchor-1" class="smooth-scroll">
                            <!-- Mouse -->
                            <div class="mouse">
                                <!-- Finger -->
                                <div class="finger"></div>
                            </div>
                            <!-- Mouse end -->
                            <!-- Hint text -->
                            <p>scroll down</p>
                        </a>
                    </div>
                    <!-- Scroll hint end -->
                </div>
            </header>
            <!-- Header end -->
            <!-- Portfolio -->
            <section id="portfolio" class="portfolio p-60-0-0 a-f">
                <div class="container-fluid">
                    <!-- Grid -->
                    <div id="anchor-1" class="grid grid-3">
                        <!-- Case -->
                        <div class="grid-item digital-art photography objects mb-30">
                            <!-- Card -->
                            <div class="project-card tilt md" data-tilt>
                                <!-- Case cover -->
                                <img src="img/portfolio/sm/1.jpg" alt="project">
                                <!-- Case description -->
                                <div class="project-title">
                                    <!-- Title -->
                                    <h3 class="title bold">MOVOLIT</h3>
                                    <!-- More button -->
                                    <a href="#MOVOLIT" target="_modal" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                                <!-- Case description end -->
                            </div>
                            <!-- Card end -->
                        </div>
                        <!-- Case end -->
                    <div id="anchor-1" class="grid grid-3">
                        <!-- Case -->
                        <div class="grid-item digital-art photography objects mb-30">
                            <!-- Card -->
                            <div class="project-card tilt md" data-tilt>
                                <!-- Case cover -->
                                <img src="img/portfolio/sm/1.jpg" alt="project">
                                <!-- Case description -->
                                <div class="project-title">
                                    <!-- Title -->
                                    <h3 class="title bold">MOVOLIT</h3>
                                    <!-- More button -->
                                    <a href="#MOVOLIT" target="_modal" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                                <!-- Case description end -->
                            </div>
                            <!-- Card end -->
                        </div>
                        <!-- Case end -->
                        <!-- Case -->
                        <div class="grid-item digital-art advertising mb-30">
                            <!-- Card -->
                            <div class="project-card tilt sm" data-tilt>
                                <!-- Case cover -->
                                <img src="img/portfolio/sm/2.jpg" alt="project">
                                <!-- Case description -->
                                <div class="project-title">
                                    <!-- Title -->
                                    <h3 class="bold">GRAPPLU</h3>
                                    <!-- More button -->
                                    <a href="#GRAPPLU" target="_modal" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                                <!-- Case description end -->
                            </div>
                            <!-- Card end -->
                        </div>
                        <!-- Case end -->
                        <!-- Case -->
                        <div class="grid-item art-direction mb-30">
                            <!-- Card -->
                            <div class="project-card tilt md" data-tilt>
                                <!-- Case cover -->
                                <img src="img/portfolio/sm/3.jpg" alt="project">
                                <!-- Case description -->
                                <div class="project-title">
                                    <!-- Title -->
                                    <h3 class="bold">UN-REPAIRABLE TOWER</h3>
                                    <!-- More button -->
                                    <a href="#UN-REPAIRABLE TOWER" target="_modal" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                                <!-- Case description end -->
                            </div>
                            <!-- Card end -->
                        </div>
                        <!-- Case end -->
                        <!-- Case -->
                        <div class="grid-item advertising photography mb-30">
                            <!-- Card -->
                            <div class="project-card tilt md" data-tilt>
                                <!-- Case cover -->
                                <img src="img/portfolio/sm/5.jpg" alt="project">
                                <!-- Case description -->
                                <div class="project-title">
                                    <!-- Title -->
                                    <h3 class="title bold">AIR RAID</h3>
                                    <!-- More button -->
                                    <a href="#AIR RAID" target="_modal" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                                <!-- Case description end -->
                            </div>
                            <!-- Card end -->
                        </div>
                        <!-- Case end -->
                        <!-- Case -->
                        <div class="grid-item art-direction digital-art photography mb-30">
                            <!-- Card -->
                            <div class="project-card tilt lg" data-tilt>
                                <!-- Case cover -->
                                <img src="img/portfolio/sm/4.jpg" alt="project">
                                <!-- Case description -->
                                <div class="project-title">
                                    <!-- Title -->
                                    <h3 class="title bold">SPINELESS</h3>
                                    <!-- More button -->
                                    <a href="#SPINELESS" target="_modal" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                                <!-- Case description end -->
                            </div>
                            <!-- Card end -->
                        </div>
                        <!-- Case end -->
                        <!-- Case -->
                        <div class="grid-item photography digital-art mb-30">
                            <!-- Card -->
                            <div class="project-card tilt lg" data-tilt>
                                <!-- Case cover -->
                                <img src="img/portfolio/sm/6.jpg" alt="project">
                                <!-- Case description -->
                                <div class="project-title">
                                    <!-- Title -->
                                    <h3 class="title bold">ASTROIDS</h3>
                                    <!-- More button -->
                                    <a href="#ASTROIDS" target="_modal" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                                <!-- Case description end -->
                            </div>
                        </div>
                        <!-- Case end -->
                        <!-- Case -->
                        <div class="grid-item photography digital-art mb-30">
                            <!-- Card -->
                            <div class="project-card tilt sm" data-tilt>
                                <!-- Case cover -->
                                <img src="img/portfolio/sm/7.jpg" alt="project">
                                <!-- Case description -->
                                <div class="project-title">
                                    <!-- Title -->
                                    <h3 class="bold">The Verge</h3>
                                    <!-- More button -->
                                    <a href="#The Verge" target="_modal" class="more"><i class="fas fa-chevron-right"></i></a>
                                </div>
                                <!-- Case description end -->
                            </div>
                        </div>
                        <!-- Case end -->
                    </div>
                    <!-- Grid end -->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 align-self-center mb-30">
                            <!-- Call to action -->
                            <p class="opas light">Make your business easier and start with us, <br>Start Now and get 20% offer for a limited time</p>
                        </div>
                        <div class="col-12 col-md-6 text-left text-md-right mb-30">
                            <!-- Button -->
                            <a href="#anchor-3" class="button button-1 ">Connect Us <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Portfolio end -->
            <!--popup-->
			
            <div id="MOVOLIT" style="display:none" class="modally-init" modally-max-width="800">
			
					<div class="row">
						<div class="col-md-6">
							<h1 class="modal-title"style= "color:#fff;font-size: 30px;">MOVOLIT <p style="color:#fff">year(2020)</p></h1>
							<h5 style="color:#fff">Technology used C#/Unity</h5>
							
							<p style= "color:#fff;">Top-Down Architecture is used for an easy game flow.
								A Strategy based multi-Level 2D puzzle Game.
								Consist of a dark and Challenging Environment.
								Player needs a torch to move around.
								2D Dynamic Lights and Shaders have been used in real time environment.
							</p>
						</div>
						<div class="col-md-6">
						    
						    <div class="playstore">
						        <a href="https://itch.io/embed-upload/3247209?color=000000" target="_blank"><img src="./img/gplay.png"/></a>
						    </div>
							<img style="width:100%; margin-top:20px;" src="./img/Movolit.gif"/>
						</div>
					</div>
			
                   
            </div>

			<div id="MOVOLIT" style="display:none" class="modally-init" modally-max-width="800">
			
					<div class="row">
						<div class="col-md-6">
							<h1 class="modal-title"style= "color:#fff;font-size: 30px;">MOVOLIT <p style="color:#fff">year(2020)</p></h1>
							<h5 style="color:#fff">Technology used C#/Unity</h5>
							
							<p style= "color:#fff;">Top-Down Architecture is used for an easy game flow.
								A Strategy based multi-Level 2D puzzle Game.
								Consist of a dark and Challenging Environment.
								Player needs a torch to move around.
								2D Dynamic Lights and Shaders have been used in real time environment.
							</p>
						</div>
						<div class="col-md-6">
						    
						    <div class="playstore">
						        <a href="https://itch.io/embed-upload/3247209?color=000000" target="_blank"><img src="./img/gplay.png"/></a>
						    </div>
							<img style="width:100%; margin-top:20px;" src="./img/Movolit.gif"/>
						</div>
					</div>
			
                   
            </div>

			<div id="GRAPPLU" style="display:none" class="modally-init" modally-max-width="800">
			<button  class="modally-close modally-close-button" onclick="pauseVid()">×</button>
					<div class="row">
						<div class="col-md-6">
							<h1 class="modal-title"style= "color:#fff;font-size: 30px;">GRAPPLU <p style="color:#fff">year(2020)</p></h1>
							<h5 style="color:#fff">Technology used C#/Unity</h5>
							
							<p style= "color:#fff;">
								This Game is an action-platformer, where you can manipulate the flow of time in strange and unusual ways and 
								use grappling hook to grapple onto specific objects in level. 
								Journey to a series of levels and solve puzzles and challenges to rescue an abduct.
								2 Challenging Levels consists of several in game blockers
								Tile-Map Grid is Used to Create Levels
								Top Down Architecture for an easy game flow
								The Game features a player that has a special ability to manipulate the time which can 
								regenerate the health and makes the player to survive longer against SMART AI Enemies 
								and BOSSES while solving the puzzles in the game.
							</p>
						</div>
						<div class="col-md-6">
						    <div class="playstore">
						        <a href="https://itch.io/embed-upload/3247621?color=161212" target="_blank"><img src="./img/gplay.png"/></a>
						    </div>
						  
							<video  controls="controls" id="myVideo">
							<source src="videos/Grapplu.mp4" type="video/mp4">
							
					
							</video>
						</div>
					</div>
			
                   
                </div>
				
				<div id="UN-REPAIRABLE TOWER" style="display:none" class="modally-init" modally-max-width="800">
			<button  class="modally-close modally-close-button" onclick="pauseVid()" >×</button>
			 
					<div class="row">
						<div class="col-md-6">
							<h1 class="modal-title"style= "color:#fff;font-size: 30px;">UN-REPAIRABLE TOWER <p style="color:#fff">year(2020)</p></h1>
							<h5 style="color:#fff">Technology used C#/Unity,Adobe Illustrartor</h5>
							
							<p style= "color:#fff;" >
								Worked with a team to develop this game in 48 hours Global Game Jam 2020, Montreal.
								Worked specifically for the user experience and UI of the game.

							</p>
						</div>
						<div class="col-md-6">
						    
						    <div class="playstore">
						        <a href="#" target="_blank"><img src="./img/gplay.png"/></a>
						    </div>
							<video  controls="controls" id="myVideo">
							<source src="videos/4.mp4" type="video/mp4">
							<source src="movie.ogg" type="video/ogg">
							
							</video>
						</div>
					</div>
			
                   
                </div>
				
				<div id="AIR RAID" style="display:none" class="modally-init" modally-max-width="800">
			<button tabindex="1" class="modally-close modally-close-button" onclick="pauseVid()">×</button>
					<div class="row">
						<div class="col-md-6">
							<h1 class="modal-title"style= "color:#fff;font-size: 30px;">AIR RAID <p style="color:#fff">year(2019)</p></h1>
							<h5 style="color:#fff">Technology used C#/Unity</h5>
							
							<p style= "color:#fff;"> 
								3D Airplane Simulator Game where you have to save the city flooded by enemies using a airplane that has a different types of abilities such as shooting, throwing Bombs, Turrets, Missiles and much more.

								Worked specifically to develop the Turret. A feature of the AirRaid that can spot the enemies and shoot them.

								Having a life span for each turret spawned in the game and cool down while firing bullets.

							</p>
						</div>
						<div class="col-md-6">
						    
						    <div class="playstore">
						        <a href="#" target="_blank"><img src="./img/gplay.png"/></a>
						    </div>
							<video  controls="controls" id="myVideo">
							<source src="videos/airraid.mp4" type="video/mp4">
							<source src="movie.ogg" type="video/ogg">
							  
							</video>
						</div>
					</div>
			
                   
                </div>
				
				<div id="SPINELESS" style="display:none" class="modally-init" modally-max-width="800">
			<button tabindex="1" class="modally-close modally-close-button" onclick="pauseVid()">×</button>
					<div class="row">
						<div class="col-md-6">
							<h1 class="modal-title"style= "color:#fff;font-size: 30px;">SPINELESS<p style="color:#fff">A Blank Tale,year(2020)</p></h1>
							<h5 style="color:#fff">Technology used C#/Unity</h5>
							
							<p style= "color:#fff;">
								Virtual Reality Game made in Unity 3D, where you are on a wheelchair and you shoot enemies and kill the boss to win. It features an indoor level, ranged and melee enemies, one boss.
								stun gun, sword and pick able items and power ups.

								Object pooling is used In order to shoot the enemies while saving the performance of the game.
								Worked Specifically for the gun that a player can grab either while seating on the chair or not.

								Gun is basically used to stun the enemies for a short period of time and makes them a rag doll which can be killed by the player using other abilities.
							</p>
						</div>
						<div class="col-md-6">
						    
						    <div class="playstore">
						        <a href="#" target="_blank"><img src="./img/gplay.png"/></a>
						    </div>
							<video  controls="controls" id="myVideo">
							<source src="videos/2.mp4" type="video/mp4">
							<source src="movie.ogg" type="video/ogg">
							  
							</video>
						</div>
					</div>
			
                   
                </div>
				
				<div id="ASTROIDS" style="display:none" class="modally-init" modally-max-width="800">
			<button tabindex="1" class="modally-close modally-close-button" onclick="pauseVid()">×</button>
					<div class="row">
						<div class="col-md-6">
							<h1 class="modal-title"style= "color:#fff;font-size: 30px;">ASTROIDS<p style="color:#fff">year(2019)</p></h1>
							<h5 style="color:#fff">Technology used C#/Unity</h5>
							
							<p style= "color:#fff;">Asteroids is a space-themed multidirectional shooter arcade game designed and developed in a team of two
							The player controls a single spaceship in an asteroid 
							field which is periodically traversed by flying saucers. 
							The object of the game is to shoot and destroy the asteroids and saucers, 
							while not colliding with either, or being hit by the saucers' counter-fire.
							 The game becomes harder as the number of asteroids increases.

							</p>
						</div>
						<div class="col-md-6">
						    <div class="playstore">
						        <a href="#" target="_blank"><img src="./img/gplay.png"/></a>
						    </div>
						    
							<video  controls="controls" id="myVideo">
							<source src="videos/1.mp4" type="video/mp4">
							<source src="movie.ogg" type="video/ogg">
							
							</video>
						</div>
					</div>
			
                   
                </div>
				
				<div id="The Verge" style="display:none" class="modally-init" modally-max-width="800">
			<button tabindex="1" class="modally-close modally-close-button" onclick="pauseVid()">×</button>
					<div class="row">
						<div class="col-md-6">
							<h1 class="modal-title"style= "color:#fff;font-size: 30px;">The Verge<p style="color:#fff">year(2020)</p></h1>
							<h5 style="color:#fff">Technology used C#/Unity</h5>
							
							<p style= "color:#fff;" 
								Serve Before Self<br>Top-Down Architecture is used for an easy game flow.
								A Strategy based multi-Level 2D puzzle Game.
								Consist of a dark and Challenging Environment.
								Player needs a torch to move around.
								2D Dynamic Lights and Shaders have been used in real time environment.
							</p>
						</div>
						<div class="col-md-6">
						    
						    <div class="playstore">
						        <a href="#" target="_blank"><img src="./img/gplay.png"/></a>
						    </div>
							<video  controls="controls" id="myVideo">
							<source src="videos/3.mp4" type="video/mp4">
							<source src="movie.ogg" type="video/ogg">
							 
							</video>
						</div>
					</div>
			
                </div>
			 <!--popup-->
			<!-- Info -->
            
            <!-- Info end -->
            <!-- Brands -->
            <div id="brands" class="brands p-0-0-60">
                <div class="container">
                    <!-- Brand list -->
                    <div class="row text-center">
                        <div class="col-6 col-lg-3 mb-30">
                            <!-- brand logo -->
                            <img src="img/brand/brand-1.png" alt="brand">
                        </div>
                        <div class="col-6 col-lg-3 mb-30">
                            <!-- brand logo -->
                            <img src="img/brand/brand-2.png" alt="brand">
                        </div>
                        <div class="col-6 col-lg-3 mb-30">
                            <!-- brand logo -->
                            <img src="img/brand/brand-3.png" alt="brand">
                        </div>
                        <div class="col-6 col-lg-3 mb-30">
                            <!-- brand logo -->
                            <img src="img/brand/brand-4.png" alt="brand">
                        </div>
                    </div>
                    <!-- Brand list end -->
                </div>
            </div>
            <!-- Brands end -->
            <!-- Call to action -->
            <section class="call-to-action" id="anchor-4" style="background-image: url(img/portfolio/lg/2.jpg); background-position: center">
                <!-- Gradient overlay -->
                <div class="overlay-2 p-0-0-90">
                    <div class="container text-center">
                        <h2 class="bold mb-30">A game is a structured form of play <br> <span class="color">usually</span> undertaken <span class="color">dream</span> <br> for entertainment or fun</h2>
                        <p class="light opas mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate aliquid voluptates, cum facere. <br> Deserunt ad illum facilis numquam nobis voluptatibus repellat iure suscipit nemo voluptate. <br> Quos, ab vitae consequatur est.</p>
                        <!-- Button -->
                        <a href="#" class="button button-1 new-page mb-30"><i class="fas fa-file-pdf"></i>Resume</a>
						<a href="#" class="button button-1  mb-30"><i class="fas fa-file-pdf"></i>Project</a>
                    </div>
                </div>
                <!-- Gradient overlay end -->
            </section>
            <!-- Call to action -->
            <!-- Footer -->
            <footer class="footer p-90-0-60">
                <!-- dotted background -->
                <div class="dots"></div>
                <div class="container text-center text-md-left">
                    <div class="row text-center text-md-left footer-content mb-30">
                        <div class="col-12 col-md-12 col-lg-6 mb-30">
                            <!-- Logo -->
                            <div class="logo mb-30">
                                <a href="index.html" class="new-page">
                                    <!--<img style="width: 100px;" src="img/your_logo.png" alt="logo">-->
                                    <img src="img/github.png">
                                </a>
                            </div>
                            <!-- Logo end -->
                            <!-- Footer text -->
                            <p class="light opas mb-30">Please don't hasitate to contact for any inquiries!</p>
                            <!-- Phone -->
                            <p class="cont light mb-10"><i class="color fas fa-mobile"></i><span class="color">Email:</span>karanluther95@gmail.com</p>
                        </div>
                        
                        <div class="col-12 col-md-6 col-lg-6 mb-30">
                            <!-- Title -->
                            <!-- Footer list 2 -->
                            <!-- Contact info end -->
            <div class="get-in-touch">
                <div id="anchor-3" class="container">
                    <form action="" method="post" id="form" class="contact-form row">
                        <div class="form-field col-12 col-lg-6">
                            <input id="name" name="name" class="input-text js-input" type="text" required>
                            <label class="label" for="name">Name</label>
                        </div>
                        <div class="form-field col-12 col-lg-6">
                            <input id="email" name="email" class="input-text js-input" type="email" required>
                            <label class="label" for="email">E-mail</label>
                        </div>
                        <div class="form-field col-12">
                            <input id="message" name="message" class="input-text js-input" type="text" required>
                            <label class="label" for="message">Message</label>
                        </div>
                        <div class="form-field col-12 text-center">
                            <button class="submit hover button button-1" type="submit" value="Submit" name="submit">Send message</i></button>
                           
                        </div>
                    </form>
                </div>
            </div>
			
                            <!-- Footer list 2 end-->
                        </div>
                    </div>
                    <div class="row copy" style="margin-top: -45px;">
                        <div class="col-12 col-lg-6 align-self-center mb-30">
                            <!-- Social icons -->
                            <ul class="social">
                                <!-- Social link -->
                                <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                                <!-- Social link -->
                                <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                                <!-- Social link -->
                                <li><a href="#."><i class="fab fa-behance"></i></a></li>
                                <!-- Social link -->
                                <li><a href="#."><i class="fab fa-pinterest-p"></i></a></li>
                                <!-- Social link -->
                                <li><a href="#."><i class="fab fa-github"></i></a></li>
                            </ul>
                            <!-- Social icons end -->
                        </div>
                        <div class="col-12 col-lg-6 text-center text-md-left text-lg-right align-self-center mb-30">
                            <!-- Copyright -->
                            <p class="light"><span class="opas" >Copyright 2021. Design and developed by</span> <a class="color" href="#">WCS</a></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer end -->
        </div>
        <!-- Page end -->
    </div>
    <!-- Frame end -->

    <!-- jQuery -->
    <script src="js/plugins/jquery.min.js"></script>
    <!-- Anime -->
    <script src="js/plugins/anime.min.js"></script>
    <!-- Swiper -->
    <script src="js/plugins/swiper.min.js"></script>
    <!-- Smooth scroll -->
    <script src="js/plugins/smooth-scroll.min.js"></script>
    <!-- Howler -->
    <script src="js/plugins/howler.min.js"></script>
    <!-- Isotope -->
    <script src="js/plugins/isotope.min.js"></script>
    <!-- Tilt -->
    <script src="js/plugins/tilt.jquery.js"></script>
    <!-- Waypoints -->
    <script src="js/plugins/waypoint.js"></script>
    <!-- Bootstrap -->
    <script src="js/plugins/bootstrap.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

    <!-- Demo js -->
    <script src="demo/demo.js"></script>
	<!-- modally popup -->
	
        
        <script>
            $(function(){
                $('#myModal').modal({
                    show: false
                }).on('hidden.bs.modal', function(){
                    $(this).find('video')[0].pause();
                });
            });



            function stop_audio(){
    $('#w_oVideoFrame')[0].pause();
    $('#w_oVideoFrame')[0].src = " ";
}




 $('.modally-close').click(function(e) {

alert('e');
 }
        </script>
        
        
		<script src="https://myCDN.com/prism@v1.x/components/prism-core.min.js"></script>
		<script src="https://myCDN.com/prism@v1.x/plugins/autoloader/prism-autoloader.min.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
	
	<!-- //modally popup ASas-->
	
<script> 
var vid = document.getElementById("myVideo"); 
 

function pauseVid() { 
  vid.pause(); 
} 

</script>

</body>
</html>
