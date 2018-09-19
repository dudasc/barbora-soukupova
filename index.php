<?php
include "includes/session.php";
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']?>">
<head>
	<title>Barbora Soukupova</title>
	<?php include "includes/head.php" ?>
</head>
<body>
	<div class="container">
		<!--<div class="row">			
			<div class="col-sm-2 col-xs-6 box-abs-logo">
				<span>barbora </span><span>soukupová</span>
			</div>
		</div>-->
		<div class="row margin-top">
			<div class="col-sm-1 col-sm-offset-2 box-lang">
				<a href="index.php?lang=cs" 
				<?php if($_SESSION['lang'] == "cs") 
					echo "class='selected'"; ?>
				>cs</a>
				.
				<a href="index.php?lang=pt"
					<?php if($_SESSION['lang'] == "pt") 
					echo "class='selected'"; ?>
				>pt</a>
				.
				<a href="index.php?lang=en"
					<?php if($_SESSION['lang'] == "en") 
					echo "class='selected'"; ?>
				>en</a>
			</div>
			<div class="col-xs-12 box-logo-hide">
				<span>barbora </span><span>soukupová</span>
			</div>
			
			<div class="col-sm-6">
				<div class="row">
						<div class="col-sm-3 col-xs-6 col-sm-offset-2">
						<a href="local-project.php"><img data-original="img/cp1.jpg" class="img-responsive img-hover"></a>
					</div>
					<div class="col-sm-2 col-xs-6 align-bottom ">
						<a href="stones-project.php"><img data-original="img/cp2.jpg" class="img-responsive img-hover"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2 col-sm-offset-3 col-xs-6 ">
						<a href="cans-project.php"><img data-original="img/cp3.jpg" class="img-responsive img-hover"></a>
					</div>
					<div class="col-sm-3 col-xs-6">
						<a href="madeira-project.php"><img data-original="img/cp4.jpg" class="img-responsive img-hover"></a>
					</div>			
				</div>
				<div class="row">
					<div class="col-sm-3 col-xs-6 col-sm-offset-5">
						<a href="wire-project.php"><img data-original="img/cp5.jpg" class="img-responsive img-hover"></a>
					</div>
					<div class="col-sm-3 col-xs-6">
						<a href="contrary-project.php"><img data-original="img/cp6.jpg" class="img-responsive img-hover"></a>
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-sm-offset-1 box-abs-logo">
				<span>barbora </span><span>soukupová</span>
			</div>
		</div>
				
		<div class="row margin-top">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-4 margin-text-1 padding-text-capa">
						<h3><?= $aboutMeTitle ?></h3>
						<?= $aboutMeDescription ?>
					</div>
					<div class="col-sm-4 margin-text-2 padding-text-capa">
						<h3><?= $bioTitle?></h3>
						<?= $bioDescription?>							
					</div>
					<div class="col-sm-4 margin-text-3 padding-text-capa">
						<h3><?= $contactTitle ?></h3>
						<?= $contactDescription?>
					</div>
				</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
		<footer></footer>

	</div>
</body>
</html>