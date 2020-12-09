<?php if(isset($captionsText) && isset($folder)) { ?>
	<div class="container <?php if (isset($size)){ echo 'container-'.$size; } ?>">
		<?php $maxImages = count($captionsText)-1; ?>
		<?php foreach (range(1, $maxImages) as $number) { ?>
		<div class="mySlides-<?php echo $folder; ?>">
			<img src="<?php echo "images/screens/".$folder."/".$number.".jpg"; ?>" style="width:100%;">
			<span><?php echo $captionsText[$number]; ?></span>
		</div>
		<?php } ?>

		<a class="prev" onclick="plusSlides(-1, 'mySlides-<?php echo $folder; ?>')">&#10094;</a>
		<a class="next" onclick="plusSlides(1, 'mySlides-<?php echo $folder; ?>')">&#10095;</a>

		<!-- Thumbnail images
		<div class="row">
			<?php // foreach (range(1, $maxImages) as $number) { ?>
				<div class="column">
					<?php // if(isset($captionsText[$number])) { ?>
						<img class="demo cursor" src="<?php echo "images/screens/".$folder."/".$number.".jpg"; ?>" style="width:100%" onclick="currentSlide(<?php echo $number; ?>)" alt="<?php echo $captionsText[$number]; ?>">
					<?php // } ?>
				</div>
			<?php // } ?>
		</div>
		 -->
	</div>
<?php } ?>