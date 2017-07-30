        <section class="section-main row">
					<div class=" col-xs-12 col-md-2" style="border: 1px solid #000; margin: 0; padding:0;">
					</div><!-- /col-md-2 -->
					<div class="col-xs-12 col-md-8" style="border: 3px solid green; margin: 0;">
						<div class="container" style="min-width: 100%;">
              <?php
                if($records && is_array($records) && count($records) >= 1){
                  foreach($records as $record){ 
                    
                    $myDateOfPost = date_format( new DateTime($record->date), 'F j, Y');?>

                    <div class="well">
                      <div class="row">
                        <div class="col-large-4 col-md-4 col-sm-4 post-thumbnail" style="border: 3px solid yellow; margin: 0; padding: 0;">
                          <img src="<?php echo base_url( 'public/images/').$record->cover_image; ?>"  style="margin: 0; width: 100%">                
                        </div>
                        <div class="col-large-4 col-md-4 col-sm-4 post-body">
                          <h2 class=""><a href="<?php echo base_url( 'tutorial/').$record->id; ?>"><?php echo $record->title; ?></a></h2>
                          <p><?php echo $record->body; ?></p>
                          <br><hr><br>
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