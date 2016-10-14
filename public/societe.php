<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/html">
    <head>
        <?php include"head.php" ?>
    </head>
    <body>
        <?php include"header.php" ?>
        <div class="container-fluid home" > <!-- home page image and text bloc -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12" id="societyImg">
                    <div class="bloc-texte" alt="">
                        <h2 id="title">NEOXI</h2>
                        <p class="greyBox">Neoxi a été créée pour les revendeurs de logiciels de gestion, pour être un partenaire commercial
                            et technique fiable, en renforçant leur équipe et en apportant des compétences complémentaires</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid society">
           <div class="querySociety">
               <div class="row">
                    <div class="col-xs-12 titleSociety"><h1> NOTRE HISTOIRE </h1>
                        <div class="row firstRow">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-2 col-lg-4 firstText">
                                <p>Co-fondateur d'un Centre de Compétence Sage PME-MGE reconnu en
                                région lyonnaise et ayant une parfaite connaissance du réseau de
                                distribution des logiciels de gestion, Jean-Luc Galvagnon, consultant
                                fonctionnel depuis 1988, créa la Société Neoxi.
                                </p>
                            </div>
                            <div class="col-xs-12  col-sm-12 col-md-6 col-lg-4 firstImg"><img src="images/icone-fondator.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12  col-sm-offset-3 col-sm-4 col-md-6 col-lg-offset-3 col-lg-4 firstImg">
                    <img src="images/icone-outils.png">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 firstText marginInter">
                    <p> L'idée directrice de cette création est de proposer des ressources
                                humaines compétentes, de proximité et surtout expérimentées aux
                                différents revendeurs informatiques, ceci sur des applications
                                précises et en restant ; une taille permettant d'être réactifs.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid color-g">
                <div class="row">
                    <div class="caroussel col-xs-12">
                        <div id="caroussel"  class="carousselBox">
                            <div class="carousselDiv">
                                Client.
                                <br/>
                                <br/>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                                felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum
                                semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim. Aliquam lorem
                            </div>
                            <div class="carousselDiv">
                                Partenariat.
                                <br/>
                                <br/>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                                felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum
                                semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim. Aliquam lorem
                            </div>
                            <div class="carousselDiv">
                                Methode.
                                <br/>
                                <br/>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                                felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum
                                semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                consequat vitae, eleifend ac, enim. Aliquam lorem
                            </div>
                            <span class="buttonPrev" onclick="prevText();"><</span>
                            <span class="buttonNext" onclick="nextText();">></span>
                        </div>
                        <div id="titlesCaroussel" class="titlesCaroussel">
                            <div style="color: black" class="col-xs-4 boutonCarroussel">CLIENTS</div>
                            <div class="col-xs-4 boutonCarroussel borderBoutons">PARTENARIAT</div>
                            <div class="col-xs-4 boutonCarroussel">MÉTHODES</div>
                        </div>
                    </div>
                </div>
        </div>
        <?php include"getUp.php" ?>
        <?php include"footer.php" ?>
    </body>
</html>
