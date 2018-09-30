<?php
include "includes/session.php";
?>
<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">
    <head>
        <title>Barbora Soukupova - <?= $projectSouNameTitle1 ?></title>
        <?php include "includes/head.php" ?>
    </head>
    <body>
        <div class="container">
            <header>
                <div class="row">
                    <div class="col-sm-12">
                        <h2><?= $projectSouNameTitle1 ?></h2>
                    </div>
                </div>
            </header>
            <section>
                <div class="row">
                    <div class="col-sm-11 col-sm-offset-1">
                        <div class="row vertical-align-text">                   
                            <div class="col-sm-12 col-xs-12">
                                <a href="img/sou/01/1.jpg" data-lightbox="example"><img data-src="img/sou/01/1.jpg" class="img-responsive lazy"></a>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 padding-text-col-12">
                                <?= $projectSouDescription1a ?>
                            </div>
                        </div>                                   
                        <div class="row vertical-align-text">
                            <div class="col-sm-4 col-xs-6">
                                <a href="img/sou/01/2.jpg" data-lightbox="example"><img data-src="img/sou/01/2.jpg" class="img-responsive lazy"></a>	
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <a href="img/sou/01/4.jpg" data-lightbox="example"><img data-src="img/sou/01/4.jpg" class="img-responsive lazy"></a>	
                            </div>
                            <div class="col-sm-4 col-xs-12 padding-text-col-4">
                                <?= $projectSouDescription1b ?>
                            </div>
                        </div>
                        <div class="row vertical-align-text">
                            <div class="col-sm-4 col-xs-12 padding-text-col-4">
                                <?= $projectSouDescription1c ?>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <a href="img/sou/01/5.jpg" data-lightbox="example"><img data-src="img/sou/01/5.jpg" class="img-responsive lazy"></a>	
                            </div>

                            <div class="col-sm-4 col-xs-6">
                                <a href="img/sou/01/6.jpg" data-lightbox="example"><img data-src="img/sou/01/6.jpg" class="img-responsive lazy"></a>	
                            </div>                            
                        </div>
                        <div class="row vertical-align-text">
                            <div class="col-sm-4 col-xs-12">
                                <a href="img/sou/01/8.jpg" data-lightbox="example"><img data-src="img/sou/01/8.jpg" class="img-responsive lazy"></a>	
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <a href="img/sou/01/9.jpg" data-lightbox="example"><img data-src="img/sou/01/9.jpg" class="img-responsive lazy"></a>	
                            </div>				
                            
                            <div class="col-sm-4 col-xs-12 padding-text-col-4">
                                <?= $projectSouDescription1d ?>
                            </div>
                        </div>	
                </div>
                </div>	
            </section>
            <footer>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="local-project.php" class="text-center"><?= $linkBack ?></a>	
                    </div>
                </div>
            </footer>
        </div>
        <script src="js/lightbox.js"></script>
    </body>
</html>