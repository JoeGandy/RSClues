<?php 
	$levels = array('Unknown', 'Easy', 'Medium', 'Hard', 'Elite', 'Master');
?>


<div class="container-fluid">
	<div class="col-xs-12">
		<h1><?php echo $type_text;?></h1><br>
		<?php if(isset($clue_text) && $clue_text){?>
			<h4><b>Clue:</b><h4>
			<p><?php echo urldecode($clue_text); ?></p>
		<?php }?>
		<?php if(isset($clue_answer_text) && $clue_answer_text){?>
			<h4><b>Solution:</b><h4>
			<p><?php echo urldecode($clue_answer_text); ?></p>
		<?php }?>
		<?php if(isset($clue_img) && $clue_img){?>
			<h4><b>Image:</b><h4>
			<p><?php echo urldecode($clue_img); ?></p>
		<?php }?>
		<?php if(isset($clue_map) && $clue_map){?>
			<h4><b>Map:</b><h4>
			<p><?php echo urldecode($clue_map); ?></p>
		<?php }?>
		<?php if(isset($clue_level) && $clue_level){?>
			<h4><b>Clue Level:</b><h4>
			<p><?php echo $levels[$clue_level] ?></p>
		<?php }?>

		<!--http://rsmap.net/#7/-59.991/19.990-->
		<?php if(isset($y_1) && $y_1){?>
		<?php }?>

		<!--<h4><b>Map:</b></h4>
		<iframe class="fit" src="<?php echo $location_url;?>"></iframe>
		<p>Credit to <a href="https://www.osrsmap.com/">OSRSMap</a> for the maps</p><br>-->

</div>