         				<div id="navbar" class="collapse navbar-collapse">
          				<ul class="nav navbar-nav">
          	<?php 
          					if($tabTitle == 'Home'){ ?>
											<li class="active"><a href="<?php echo base_url(); ?>index.php">Home</a></li>
          	<?php		}
          					else{ ?>
          						<li><a href="<?php echo base_url(); ?>index.php">Home</a></li>
          	<?php		} ?>
          	<?php 
          					if($tabTitle == 'About'){ ?>
											<li class="active"><a href="<?php echo base_url(); ?>about">About</a></li>
          	<?php		}
          					else{ ?>
          						<li><a href="<?php echo base_url(); ?>about">About</a></li>
          	<?php		} ?>            				
          	<?php 
          					if($tabTitle == 'Tutorials' || $tabTitle == 'Tutorial' ){ ?>
											<li class="active"><a href="<?php echo base_url(); ?>tutorials">Tutorials</a></li>
          	<?php		}
          					else{ ?>
          						<li><a href="<?php echo base_url(); ?>tutorials">Tutorials</a></li>
          	<?php	  } ?>            				
          	<?php 
          					if($tabTitle == 'Source Code'){ ?>
											<li class="active"><a href="<?php echo base_url('code'); ?>">Source Code</a></li>
          	<?php		}
          					else{ ?>
          						<li><a href="<?php echo base_url('code'); ?>">Source Code</a></li>
          	<?php		} ?> 
          	<?php 
          					if($tabTitle == 'Contact'){ ?>
											<li class="active"><a href="<?php echo base_url(); ?>contact.php">Contact</a></li>
          	<?php		}
          					else{ ?>
          						<li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
          	<?php	  } ?>          	                    
          				</ul>
          				<ul class="nav navbar-nav navbar-right">
            				<li ><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
            				<li ><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
            				<li ><a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a></li>
            				<li ><a href="https://youtube.com"><i class="fa fa-youtube"></i></a></li>
            				<li ><a href="https://github.com"><i class="fa fa-github"></i></a></li>
          				</ul>
        				</div><!--/nav-collapse -->