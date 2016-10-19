<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/html">
    <head>
        <?php include "head.php" ?>
    </head>
    <body>
        <?php include"header.php" ?>
        <div class="container-fluid globalContainer break" > <!-- home page image and text bloc -->
            <div class="row">
                <div class="col-xs-12 topImg" style="background-image: url('images/comptabilité1.jpg');">
                    <div class="col-sm-5 col-sm-offset-3 col-lg-5 col-lg-offset-6 cadre">
                        <h2 class="h2">NEOXI</h2>
                        <p class="p2">Neoxi a été créée pour les revendeurs de logiciels de gestion,
                             partenaire commercial et technique fiable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row block1 block-padding break">
                <h1 class="col-xs-offset-1 h1"> NOTRE HISTOIRE </h1>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-md-offset-1">
                        <p class="p4 justify">Co-fondateur d'un Centre de Compétence Sage PME-MGE reconnu en
                            région lyonnaise et ayant une parfaite connaissance du réseau de
                            distribution des logiciels de gestion, Jean-Luc Galvagnon, consultant
                            fonctionnel depuis 1988, créa la Société Neoxi.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-4 col-md-offset-2 center">
                        <img src="images/icone-fondator.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-md-offset-1 center">
                    <img src="images/icone-outils.png">
                </div>
                <div class="col-sm-12 col-md-4 col-md-offset-2">
                    <p class="p4 justify"> L'idée directrice de cette création est de proposer des ressources
                        humaines compétentes, de proximité et surtout expérimentées aux
                        différents revendeurs informatiques, ceci sur des applications
                        précises et en restant d'une taille permettant d'être réactifs.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid globalContainer">
            <div class="row block2">
                <h1 class="h1">TRAVAILLER AVEC NOUS</h1>
                <div class="row">
                    <?php include"caroussel.php" ?>
                </div>
            </div>
        </div>
        <?php include"getUp.php" ?>
        <?php include"footer.php" ?>
    </body>
</html>
