<?php
	include "includes/session.php";
?>
<!DOCTYPE html>
<html lang="cz">
	<head>
		<title>Barbora Soukupova - <?=$projectContraryNameTitle?></title>
		<?php include "includes/head.php" ?>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="row">
					<div class="col-sm-12">
						<h2><?=$projectContraryNameTitle?></h2>
					</div>
				</div>
			</header>
			<section>
			<div class="row">
				<div class="col-sm-11 col-sm-offset-1">
					<div class="row">							
						<div class="col-sm-12">
							<a href="img/contrary/1.jpg" data-lightbox="example"><img data-src="img/contrary/1.jpg" class="img-responsive lazy"></a>
						</div>			
					</div>
						<div class="row vertical-align-text">
							<div class="col-sm-6 col-xs-12">
								<a href="img/contrary/2.jpg" data-lightbox="example"><img data-src="img/contrary/2.jpg" class="img-responsive lazy"></a>
							</div>							
							<div class="col-sm-6 col-xs-12 padding-text-col-6">	
								<?= $projectContraryDescription1?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-xs-6">
								<a href="img/contrary/4.jpg" data-lightbox="example"><img data-src="img/contrary/4.jpg" class="img-responsive lazy"></a>
							</div>
							<div class="col-sm-6 col-xs-6">
								<a href="img/contrary/5.jpg" data-lightbox="example"><img data-src="img/contrary/5.jpg" class="img-responsive lazy"></a>
							</div>
						</div>
						<div class="row vertical-align-text">
							<div class="col-sm-6 padding-text-col-6 padding-left">
								<?= $projectContraryDescription2?>
							</div>
							<div class="col-sm-6">
								<a href="img/contrary/3.jpg" data-lightbox="example"><img data-src="img/contrary/3.jpg" class="img-responsive lazy"></a>
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