<?php
	include "includes/session.php";
?>
<!DOCTYPE html>
<html lang="cz">
	<head>
		<title>Barbora Soukupova - <?=$projectCansNameTitle?></title>
		<?php include "includes/head.php" ?>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="row">
					<div class="col-sm-12">
						<h2><?=$projectCansNameTitle?></h2>
					</div>
				</div>
			</header>
			<section>
				<div class="row">
					<div class="col-sm-11 col-sm-offset-1">
						<div class="row vertical-align-text">
							<div class="col-sm-12">
								<a href="img/cans/1.jpg" data-lightbox="example" data-title="sdf sg sergt sert"><img data-original="img/cans/1.jpg"  class="img-responsive lazy"></a>
							</div>					
						</div>
						<div class="row">
							<div class="col-sm-6 col-xs-6">
								<a href="img/cans/2.jpg" data-lightbox="example"><img data-original="img/cans/2.jpg" class="img-responsive lazy"></a>
							</div>
							<div class="col-sm-6 col-xs-6">
								<a href="img/cans/3.jpg" data-lightbox="example"><img data-original="img/cans/3.jpg" class="img-responsive lazy"></a>
							</div>
						</div>
						<div class="row vertical-align-text">
							<div class="col-sm-6">
								<a href="img/cans/4.jpg" data-lightbox="example"><img data-original="img/cans/4.jpg" class="img-responsive lazy"></a>
							</div>
							<div class="col-sm-6 padding-text-col-6">
								<?= $projectCansDescription1?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<footer>
				<div class="row">
					<div class="col-sm-12 text-center">
						<a href="index.php" class="text-center"><?= $linkBack?></a>	
					</div>
				</div>
			</footer>
		</div>
		<script src="js/lightbox.js"></script>
	</body>
</html>