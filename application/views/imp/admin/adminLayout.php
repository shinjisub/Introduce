<!DOCTYPE html>
<html lang="ko">
<?php echo $build->head ?>
<body class="s">

<!-- skip -->
<div id="skip"><a href="#container">본문바로가기</a></div>
<!-- //skip -->

<div id="wrap" style="padding-bottom: 0;">
	<?php echo $build->header ?>

	<?php if ($build->leftNav) { ?>
		<div id="container">
			<div class="container_wrap">
				<div class="maxWidth">
					<?php echo $build->leftNav ?>
					<?php echo $build->contents ?>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<?php echo $build->contents ?>
	<?php } ?>

	<?php echo $build->footer ?>
</div>



</body>
</html>
