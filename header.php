<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Keys -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>Unique Themes</title>
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
		<?php wp_head(); ?>
    </head>
    <body>
        
		<!-- Top Area
		==================== -->
		<div id="home"></div>
		<header class="welcome-area">
			<div class="mainmenu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="logo"><!-- Logo -->
								<a href="#"><h1>Unique Theme</h1></a>
							</div><!-- Logo End -->
						</div>
						<div class="col-md-9">
							<!-- Main Menu -->
							<nav class="navigation">
								<div class="mainmenu">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div class="collapse navbar-collapse navbar-right">
									
									<?php
                                    
                                        wp_nav_menu(array(
                                            'theme_location'    => 'primary_menu',
                                            'menu_class'        => 'nav navbar-nav'
                                        ));
                                        
                                    ?>
										
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>