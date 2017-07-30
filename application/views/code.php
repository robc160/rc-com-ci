<?php
	if($records && is_array($records) && count($records) >= 1){
        foreach($records as $record){ 

        	echo '<h3>'. $record->id .'</h3><br>';
        	echo '<h3>'. $record->title .'</h3><br>';
        	echo '<h3>'. $record->date.'</h3><br>';
        	echo '<h3>'. $record->author.'</h3><br>';
        	echo '<h3>'. $record->video .'</h3><br>';

        }
    }