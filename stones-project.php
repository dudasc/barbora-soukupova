<?php
	include "includes/session.php";
?>
<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']?>">
	<head>
		<title>Barbora Soukupova - <?=$projectStonesNameTitle?></title>
		<?php include "includes/head.php" ?>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="row">
					<div class="col-sm-12">
						<h2><?=$projectStonesNameTitle?></h2>
					</div>
				</div>
			</header>
			<section>
				<div class="row">
					<div class="col-sm-11 col-sm-offset-1">
						<div class="row">					
							<div class="col-sm-12">
								<a <a href="img/stones/1.jpg" data-lightbox="example"><img data-original="img/stones/1.jpg" class="img-responsive lazy"></a>
							</div>					
						</div>
						<div class="row">
							<div class="col-sm-6 col-xs-6">
								<a href="img/stones/2.jpg" data-lightbox="example"><img data-original="img/stones/2.jpg" class="img-responsive lazy"></a>
							</div>
							<div class="col-sm-6 col-xs-6">
								<a href="img/stones/3.jpg" data-lightbox="example"><img data-original="img/stones/3.jpg" class="img-responsive lazy"></a>
							</div>							
						</div>
						<div class="row vertical-align-text">
							<div class="col-sm-6">
								<a href="img/stones/4.jpg" data-lightbox="example"><img data-original="img/stones/4.jpg" class="img-responsive lazy"></a>
							</div>
							<div class="col-sm-6 col-xs-12 padding-text-col-6">
								<?= $projectStonesDescription1?>
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