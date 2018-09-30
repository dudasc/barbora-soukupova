<?php
	include "includes/session.php";
?>
<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']?>">
	<head>
		<title>Barbora Soukupova - SOU PROJECT</title>
		<?php include "includes/head.php" ?>
	</head>
	<body>
		<div class="container">
			<div class="row margin-top">
				<div class="col-sm-3 col-sm-offset-2 col-xs-12">
					<h1><?= $projectSouTitle ?></h1>
				</div>
				<div class="col-sm-6">
					<div class="row">
					<!--
				<div class="col-sm-2 box-abs-pais">
					<span><?=$projectSouPais?></span>
				</div>-->
						<div class="col-sm-2 col-xs-4 col-sm-offset-4 align-bottom-2">
							<a href="local-project-2.php"><img data-src="img/sou1.jpg" class="img-responsive lazy img-hover"></a>
						</div>
						<div class="col-sm-3 col-xs-4">
							<a href="local-project-1.php"><img data-src="img/sou2.jpg" class="img-responsive lazy img-hover"></a>
						</div>						
						<div class="col-sm-2 col-xs-4 col-sm-offset-6">
							<a href="local-project-3.php"><img data-src="img/sou3.jpg" class="img-responsive lazy img-hover"></a>
						</div>										
					</div>
				</div>
			</div>
			
			<div class="row margin-top">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-4 margin-text-1 padding-text-capa">
							<h3><?= $projectSouTitleIntent?></h3>
							<?= $projectSouDescriptionIntent?>
						</div>

						<div class="col-sm-4 margin-text-2 padding-text-capa">
							<h3><?= $projectSouTitleRealization?></h3>
							<?= $projectSouDescriptionRealization?>
						</div>							
						<div class="col-sm-4 margin-text-3 padding-text-capa">
							<h3><?= $projectSouTitleConclusion?></h3>
							<?= $projectSouDescriptionConclusion?>					
						</div>
					</div>
				</div>
				<div class="col-sm-1"></div>
			</div>
			<footer>
				<div class="row">
					<div class="col-sm-12 text-center">
						<a href="index.php" class="text-center"><?= $linkBack?></a>	
					</div>
				</div>
			</footer>
		</div>
	</body>
<body>