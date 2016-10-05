
<!DOCTYPE html>
	
	<html>
    	
    <head>
        	
        	<meta charset="utf-8" />

        <!-- Latest compiled and minified CSS -->
			
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="index.css">
        	<title>Neoxi</title>
            <link rel="stylesheet" type="text/css" href="index.css">

    </head>
    
    <body>
   
   		<?php
			include"header.php" 
		?>

        <div class="container-fluid" id=""> <!-- image entrée accueil et bloc de texte -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12" id="homeimg">
                    <div class="bloc-texte" alt="">
                        <h3 id="title"">Neoxi</h3>
                        <p style="color:white">Spécialiste en logiciels ERP <br/>
                            Partenaire commercial et technique fiable </p>
                        <input type="button" title="cliquez" value="EN SAVOIR PLUS SUR L'ENTREPRISE" id="boutton">
                    </div>
                </div>
            </div>
            <div id="citation">
                <p> NEOXI a été créée pour les revendeurs logiciels afin d’être <br/>
                    un partenaire commercial et technique fiable. </p>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-lg-4" id="badge">
                    <img src="images/objectifs-homePage.png">
                    <h3 class="desc">OBJECTIFS</h3>
                    <p>Renforcer les équipes <br/> des revendeurs de logiciels <br/> de gestion</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-4" id="badge2">
                    <img src="images/homePage-solution.png">
                    <h3 class="desc">SOLUTIONS</h3>
                    <p> Prestation sur mesure <br/>
                        Partenariat de proximité <br/>
                        Flexibilité et savoir-faire</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-4" id="badge3">
                    <img src="images/specialist-homePage.png">
                    <h3 class="desc">SPECIALITÉS</h3>
                    <p>Logiciels de gestions du marché <br/> des P.M.E et M.G.E</p>
                </div>
            </div>

            <div class="row">
                <div class="grey">
                    <h1 id="last-news">DERNIÈRES ACTUALITÉS</h1>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-4 actu" >
                    <img src="images/actu1_home.jpg">
                    <h2>Première actualité</h2>
                    <p>Quae dum ita struuntur, indicatum est
                        apud Tyrum indumentum regale textum
                        occulte,incertum quo locante vel cuius
                        usibus apparatum. ideoque rector provinci
                        tunc pater Apollinaris eiusdem nominis ut
                        conscius [...]</p>
                    <p><img src="images/time-homePage-articles.png"> 30 Septembre 2016</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-4 actu">
                    <img src="images/actu2_home.jpg">
                    <h2>Deuxième actualité</h2>
                    <p>Quae dum ita struuntur, indicatum est
                        apud Tyrum indumentum regale textum
                        occulte,incertum quo locante vel cuius
                        usibus apparatum. ideoque rector provinci
                        tunc pater Apollinaris eiusdem nominis ut
                        conscius [...]</p>
                    <p><img src="images/time-homePage-articles.png"> 30 Octobre 2016</p>

                </div>
                <div class="col-xs-4 col-sm-4 col-lg-4 actu">
                    <img src="images/actu3_home.jpg">
                    <h2>Troisième actualité</h2>
                    <p>Quae dum ita struuntur, indicatum est
                        apud Tyrum indumentum regale textum
                        occulte,incertum quo locante vel cuius
                        usibus apparatum. ideoque rector provinci
                        tunc pater Apollinaris eiusdem nominis ut
                        conscius [...]</p>
                    <p><img src="images/time-homePage-articles.png"> 30 Novembre 2016</p>
                </div>
            </div>
        </div>

        <?php
		include"footer.php"
		?>



      
    </body>
</html>
