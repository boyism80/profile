<?php
	if(empty($titleSize))
		$titleSize = 'h2';
?>

<a href='#' class="work-item" data-aos="fade-up">
	<div class="work-item-thumb">
		<img src='<?php echo $src; ?>' />
	</div>
	<?php
		if(isset($title))
			echo "<{$titleSize} class='work-item-title'>{$title}</{$titleSize}>";
	?>
</a>