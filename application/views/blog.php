        <section class="section-main row">
					<div class=" col-xs-12 col-md-2">
					</div><!-- /col-md-2 -->
					<div class="col-xs-12 col-md-7">
						<div class="container">
							<div class="col-sm-8 blog-main ">
              <?php
                if($records && is_array($records) && count($records) >= 1){
                  foreach($records as $record){ 
                    
                    $myDateOfPost = date_format( new DateTime($record->date), 'F j, Y');?>

                    <div class="blog-post">
                      <h2 class="blog-post-title"><?php echo $record->title; ?></h2>
                      <p class="blog-post-meta"><?php echo $myDateOfPost; ?> by <a href="#"><?php echo $record->author; ?></a></p>
                      <p><?php echo $record->content; ?></p>
                      <hr>
            
                    </div><!-- /blog-post -->
            <?php } 
                }?>
              </div><!-- /blog-main -->
              <nav aria-label="Page navigation">
              <?php echo $this->pagination->create_links(); ?>
              </nav>
						</div><!-- /container -->
					</div><!-- /col-md-7 -->
					<div class="col-xs-12 col-md-3">