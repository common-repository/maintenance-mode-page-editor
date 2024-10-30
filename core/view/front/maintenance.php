<html>
	<head>
		<title>
			<?php bloginfo('title');?>
		</title>

		<link rel="stylesheet" href="<?php echo plugins_url('/assets/css/style.css?no-cache=' . time(), MMPGA_CORE_DIR); ?>">

		<?php if(!empty($css)):?>
			<style>
				<?=$css?>
			</style>
		<?php endif?>

	</head>
	<body style="background: url(<?php echo $background; ?>) no-repeat center center;">
		<div class="m-page">
			<div class="container">

				<div class="panel-wrap">
					<div class="panel">
						<?php if(!empty($logo)): ?>
						<img class="logo" src="<?php echo $logo;?>" alt="">
						<?php endif; ?>
						<h1><?=$title?></h1>
						<div class="description">
							<?=$description?>
						</div>
						<div class="social">
							<ul>
								<?php if(!empty($twitter)):?>
								<li><a target="_BLANK" href="<?=$twitter?>" class="twitter"></a></li>
								<?php endif?>

								<?php if(!empty($facebook)):?>
								<li><a  target="_BLANK" href="<?=$facebook?>" class="facebook"></a></li>
								<?php endif?>

								<?php if(!empty($instagram)):?>
								<li><a  target="_BLANK" href="<?=$instagram?>" class="instagram"></a></li>
								<?php endif?>

							</ul>
						</div>
					</div>
				</div>


			</div>
		</div>
		<?php if(!empty($js)):?>
		<script>
			<?=stripslashes($js)?>
		</script>
		<?php endif?>
	</body>
</html>
