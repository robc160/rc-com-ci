        <section class="section-main row">
					<div class=" col-xs-12 col-md-2">
					</div><!-- /col-md-2 -->
					<div class="col-xs-12 col-md-8">
						<div class="container-wide">
              <?php
                if($records && is_array($records) && count($records) >= 1){
                  foreach($records as $record){ 
                    
                    $myDateOfPost = date_format( new DateTime($record->date), 'F j, Y');?>

                    <div class="well">
                      <div class="row">
                        <div class="col-large-3 col-md-3 col-sm-3 post-thumbnail">
                        <iframe class="cover-image" src="<?php echo $record->video; ?>" frameborder="0" allowfullscreen></iframe>              
                        </div>
                        <div class="col-large-9 col-md-9 col-sm-9 post-body">
                          <h2 class="post-title"><a href="<?php echo base_url( 'tutorial/').$record->id; ?>"><?php echo $record->title; ?></a></h2>
                          <p><?php echo $record->body; ?></p>
                          <hr>
                          <small>Posted on <?php echo $myDateOfPost; ?> by <?php echo $record->author; ?></small>
                        </div>
                      </div>
                    </div><!-- /blog-post -->

            <?php } 
                }
                else{?>

                  <div class="well">
                    <div class="row">
                      <div class="col-md-7 col-sm-7">
                        <h2>No Tutorials Found</h2>
                      </div>
                    </div>
                  </div>

          <?php }?>
              <nav aria-label="Page navigation">
              <?php echo $this->pagination->create_links(); ?>
              </nav>
						</div><!-- /container -->
					</div><!-- /col-md-7 -->
					<div class="col-xs-12 col-md-2">