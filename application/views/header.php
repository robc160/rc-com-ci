<!Doctype html>
<html lang="en">
	<head>
		<title><?php echo $tabTitle; ?></title>
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
                  <?php include_once 'navbar.php'; ?>
      				</div>
    			</nav>
			</header>
      <main>
        <section class="section-title">
          <div class="container">
            <h1><?php echo $tabTitle; ?></h1>
          </div><!-- /container -->
        </section><!-- /section-title -->
