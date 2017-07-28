						<div class="panel panel-default">
							<div class="panel-heading">
    						<h3 class="panel-title">Categories</h3>
  						</div>
  						<div class="panel-body">
    						<div class="list-group">
                <?php
                if($records && is_array($records) && count($records) >= 1){
                  foreach($records as $record){ ?>
  								  <a  href="#" class="list-group-item"><?php echo $record->category; ?></a>
            <?php } 
                }?>  								
							 </div>
  						</div>
						</div>