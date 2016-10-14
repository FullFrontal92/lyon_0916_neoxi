<!DOCTYPE html>

<html>
<head>
    <?php include "head.php" ?>
</head>
<body>
<?php include "header.php" ?>
<div class="container-fluid esp">
    <div class="row">
        <div class="col-sm-12">
            <h1 id="bloctxt">NOUS CONTACTER</h1>
        </div>
    </div>
</div>

<div class="container-fluid gmap">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
                <div class="col-xs-10 col-xs-offset-1 responsive-map">
               <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.68298448552!2d4.795324015567963!3d45.77754317910582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eb65a952861b%3A0x27dce54920c75580!2s31+Rue+Saint-Simon%2C+69009+Lyon!5e0!3m2!1sfr!2sfr!4v1476193805898"
                     width="987px" height="632px" frameborder="0" style="" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid form">
    <div class="row">
        <div class="col-xs-8 col-sm-6 ">
            <h2 id="fctxt">FORMULAIRE DE CONTACT</h2>
                <br>
            <form class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <input type="text" placeholder="NOM" class="form-control" id="lname">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" placeholder="PRÉNOM" class="form-control" id="fname">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" placeholder="E-MAIL" class="form-control" id="mail">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" placeholder="TÉLÉPHONE" class="form-control" id="tel">
                </div>
                <br>
                <div class="form-group">
                    <textarea class="form-control" placeholder="VOTRE MESSAGE" id="com"></textarea>

                    <button type="submit" class="btn btn-submit">ENVOYER</button>
                </div>


            <form/>
        </div>
        <div class="col-xs-10 col-xs-offset-1 col-sm-offset-1 col-sm-5 coorbox">
            <h3 id="coortxt" class="col-xs-8">NOS COORDONÉES</h3>
            <div class="col-xs-12">
            <p id="infocoor"><span class="num">31</span>, RUE SAINT-SIMON <br> <span class="num">69009</span> LYON <br>
                <span class="num">04.27.11.86.00</span></p>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php" ?>
</body>

</html>