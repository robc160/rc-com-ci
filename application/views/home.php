<!Doctype html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css">
		<link  rel="stylesheet" href="<?php echo base_url(); ?>public/css/default.css" />
	</head>
	<body>
		<div id="page-master-container">
			<header>
				<nav class="navbar navbar-default">
      				<div class="container">
        				<div class="navbar-header">
          					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            					<span class="sr-only">Toggle navigation</span>
            					<span class="icon-bar"></span>
            					<span class="icon-bar"></span>
            					<span class="icon-bar"></span>
          					</button>
        				</div>
        				<div id="navbar" class="collapse navbar-collapse">
                  <?php include_once 'navbar.php'; ?>
        				</div><!--/nav-collapse -->
      				</div>
    			</nav>
			</header>
			<main>
				<section class="showcase">
					<div class="container">
						<h1>WELCOME!</h1>
						<p class="lead">Hello I'm Rob. I'd like to help you turn your great idea into an awesome website. If your building your first site and need a little help or just want to get some new coding skills, this site is for you. So let's get started.</p>
						<a href="<?php echo base_url();?>about" class="btn btn-primary">Read More...</a>
					</div><!-- /container -->
				</section><!-- /showcase -->
				<section class="section-a">
	        <div class="container">
	          <div class="row">
	            <div class="col-xs-12 col-md-4">
	              <img src="<?php echo base_url(); ?>public/images/tv-wamp-setup.svg" />
	            </div><!-- /col-md-4 -->
	            <div class="col-xs-12 col-md-4">
	              <img src="<?php echo base_url(); ?>public/images/coming-soon1.svg" />
	            </div><!-- /col-md-4 -->
	            <div class="col-xs-12 col-md-4">
	              <img src="<?php echo base_url(); ?>public/images/tv-frame-dark-ci.svg" />
	            </div><!-- /col-md- -->
	          </div><!-- /row -->
	        </div><!-- /container -->
	      </section><!-- /section-a -->
			</main>
			<footer>
				<div class="container">  
					<div class="row">
        		<div class="col-md-4">
              <div class="icons">
                <ul>
                  <li><a href="https://www.sublimetext.com/3" target="_blank"><img id="sublime-text-icon" src="<?php echo base_url(); ?>public/images/sublime-text-icon.png" alt="sublime text editor icon" /></a></li>
                  <li><a href="http://www.wampserver.com/en/"  target="_blank"><img id="wamp-icon" src="<?php echo base_url(); ?>public/images/wamp-icon.png" alt="wamp server icon" /></a></li>
                  <li><a href="https://nodejs.org/en/download/"  target="_blank"><img id="nodejs-icon" src="<?php echo base_url(); ?>public/images/nodejs-icon.png" alt="Node JS icon" /></a></li>
                  <li><a href="https://jquery.com/download/"  target="_blank"><img id="jquery-icon" src="<?php echo base_url(); ?>public/images/jquery-icon.png" alt="JQuery icon" /></a></li>
                  <li><a href="https://angularjs.org/"  target="_blank"><img id="angularjs-icon" src="<?php echo base_url(); ?>public/images/angularjs-icon.png" alt="Angular JS icon" /></a></li>
                  <li><a href="https://codeigniter.com/download"  target="_blank"><img id="codeigniter-icon" src="<?php echo base_url(); ?>public/images/codeigniter-icon.png" alt="Codeigniter icon" /></a></li>
                  <li><a href="http://getbootstrap.com/getting-started/"  target="_blank"><img id="bootstrap-icon" src="<?php echo base_url(); ?>public/images/bootstrap-icon.png" alt="Bootstrap icon" /></a></li>
                  <li><a href="https://desktop.github.com/"  target="_blank"><img id="git-icon" src="<?php echo base_url(); ?>public/images/git-icon.png" alt="git app icon" /></a></li>
                </ul>
                <ul>
                  <li><a href="https://wordpress.org/download/"  target="_blank"><img id="wordpress-icon" src="<?php echo base_url(); ?>public/images/wordpress-icon.png" alt="wordpress icon" /></a></li>
                  <li><a href="https://www.drupal.org/download"  target="_blank"><img id="drupal-icon" src="<?php echo base_url(); ?>public/images/drupal-icon.png" alt="drupal icon" /></a></li>
                  <li><a href="http://sass-lang.com/install"  target="_blank"><img id="sass-icon" src="<?php echo base_url(); ?>public/images/sass-icon.png" alt="sass icon" /></a></li>
                  <li><a href="http://scout-app.io/"  target="_blank"><img id="scout-icon" src="<?php echo base_url(); ?>public/images/scout-icon.png" alt="scout icon" /></a></li>
                  <li><a href="https://www.gimp.org/downloads/"  target="_blank"><img id="gimp-icon" src="<?php echo base_url(); ?>public/images/gimp-icon.png" alt="gimp icon" /></a></li>
                  <li><a href="https://inkscape.org/en/download/" target="_blank"><img id="inkscape-icon" src="<?php echo base_url(); ?>public/images/inkscape-icon.png" alt="inkscape icon" /></a></li>
                  <li><a href="https://www.virtualbox.org/wiki/Downloads"  target="_blank"><img id="viurtalbox-icon" src="<?php echo base_url(); ?>public/images/viurtalbox-icon.png" alt="vituralbox icon" /></a></li>
                  <li><a href="https://www.ubuntu.com/download/server"  target="_blank"><img id="ubuntu-icon" src="<?php echo base_url(); ?>public/images/ubuntu-icon.png" alt="ubuntu icon" /></a></li>
                </ul>
              </div><!-- /icons -->
						</div><!-- /col-md-4 -->
        		<div class="col-md-4">
        		</div><!-- /col-md-4 -->
        		<div class="right col-md-4">
        			<img src="<?php echo base_url(); ?>public/images/logo.png" />
              <small>&copy; Rob Culbertson 2017</small>
        		</div><!-- /right /col-md-4 -->
        	</div><!-- /row -->
        </div><!-- /container -->
      </footer>
		</div><!-- / #page-master-container -->
		<script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>public/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>public/js/pageEffects.js"></script>
	</body>
</html>
