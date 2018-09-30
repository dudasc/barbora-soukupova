<?php
	include "includes/session.php";
?>
<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']?>">
	<head>
		<title>Barbora Soukupova - <?=$projectMadeiraNameTitle?></title>
		<?php include "includes/head.php" ?>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="row">
					<div class="col-sm-12">
						<h2><?=$projectMadeiraNameTitle?></h2>
					</div>
				</div>
			</header>
			<section>
				<div class="row">
					<div class="col-sm-11 col-xs-12 col-sm-offset-1">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<a href="img/madeira/1.jpg" data-lightbox="example"><img data-src="img/madeira/1.jpg" class="img-responsive lazy"></a>
							</div>
							<div class="col-sm-12 col-xs-12 padding-text-col-12">
								<?= $projectMadeiraDescription1?>
							</div>
						</div>
						<div class="row">				
							<div class="col-sm-4 col-xs-6">
								<a href="img/madeira/2.jpg" data-lightbox="example"><img data-src="img/madeira/2.jpg" class="img-responsive lazy"></a>
							</div>
							<div class="col-sm-4 col-xs-6">
								<a href="img/madeira/3.jpg" data-lightbox="example"><img data-src="img/madeira/3.jpg" class="img-responsive lazy"></a>
							</div>							
							<div class="col-sm-4 col-xs-12 padding-text-col-4 padding-text-top">
								<?= $projectMadeiraDescription2?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-xs-12">
								<a href="img/madeira/5.jpg" data-lightbox="example"><img data-src="img/madeira/5.jpg" class="img-responsive lazy"></a>
							</div>
							<div class="col-sm-4 col-xs-12 padding-text-col-4 padding-text-top">
								<?= $projectMadeiraDescription3?>
							</div>
							<div class="col-sm-4 col-xs-12">
								<a href="img/madeira/9.jpg" data-lightbox="example"><img data-src="img/madeira/9.jpg" class="img-responsive lazy"></a>
							</div>					
						</div>
					<div class="row vertical-align-text">					
						<div class="col-sm-4 col-xs-6">
							<a href="img/madeira/6.jpg" data-lightbox="example"><img data-src="img/madeira/6.jpg" class="img-responsive lazy"></a>
						</div>					
						<div class="col-sm-4 col-xs-6">
							<a href="img/madeira/8.jpg" data-lightbox="example"><img data-src="img/madeira/8.jpg" class="img-responsive lazy"></a>
						</div>
						<div class="col-sm-4 col-xs-12 padding-text-col-4">
							<?= $projectMadeiraDescription4?>
						</div>
					</div>
					
					<div class="row vertical-align-text">
						<div class="col-sm-4 col-xs-12 padding-text-col-4">
							<?= $projectMadeiraDescription5?>
						</div>
						<div class="col-sm-4 col-xs-6">
							<a href="img/madeira/12.jpg" data-lightbox="example">
							<img data-src="img/madeira/12.jpg" class="img-responsive lazy"></a>
						</div>
						<div class="col-sm-4 col-xs-6">
							<a href="img/madeira/13.jpg" data-lightbox="example"><img data-src="img/madeira/13.jpg" class="img-responsive lazy"></a>
						</div>
					
					</div>
					<div class="row vertical-align-text">
						<div class="col-sm-4 col-xs-12">
							<a href="img/madeira/15.jpg" data-lightbox="example"><img data-src="img/madeira/15.jpg" class="img-responsive lazy"></a>
						</div>
						<div class="col-sm-4 col-xs-6">
							<a href="img/madeira/16.jpg" data-lightbox="example"><img data-src="img/madeira/16.jpg" class="img-responsive lazy"></a>
						</div>
						<div class="col-sm-4 col-xs-6">
							<a href="img/madeira/17.jpg" data-lightbox="example"><img data-src="img/madeira/17.jpg" class="img-responsive lazy"></a>
						</div>					
					</div>
					<div class="row">
						<div class="col-sm-4 col-xs-12 padding-text-col-4 padding-text-top-2">	
							<?= $projectMadeiraDescription6?>
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