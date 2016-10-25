
document.addEventListener('DOMContentLoaded', function() {


    $.ajax({
        url: 'newsRequest.php',
        type: 'GET',
        dataType: 'text',
        data : '?',
        success: insert(0)
    });

    function insert(i){

        //containers
        var insert = document.getElementsByClassName('insertActu');
        var divRow = document.createElement("div"); divRow.className = "row zoneActu";
        var divMargin = document.createElement("div"); divMargin.className = "marginActu";
        var divCol12 = document.createElement("div"); divCol12.className = "col-xs-12";
        var imgFloat = document.createElement("img"); imgFloat.className = "imgFloat";
        var p = document.createElement("p");
        var date = document.createTextNode(" "+"mardi 18 octobre 2016, 17h30");
        var h1Title = document.createElement("h1");
        var imgTime = document.createElement("img");
        var pJustify = document.createElement("p"); pJustify.className = "justify";
        var divBoutonActu = document.createElement("div"); divBoutonActu.className = "buttonActu col-xs-6 col-xs-offset-6";
        var inputButton = document.createElement("input"); inputButton.className = "button pointer";
        var divRowLine = document.createElement("div"); divRowLine.className = "row";
        var divBorderActu = document.createElement("div"); divBorderActu.className = "col-xs-10 col-xs-offset-1 border-actu";

        //contained
        var title = document.createTextNode("Fraude et sécurité : tout savoir sur la fraude aux paiements.");
        imgFloat.src = 'images/actu1_home.jpg';
        imgTime.src = 'images/time-homePage-articles.png';
        var text = document.createTextNode("Toutes les entreprises sont susceptibles d’être touchées par la fraude au paiement. La fin du fax de confirmation des paiements en EBICS T est annoncée fin 2016 par les établissements bancaires. Désormais le protocole doit être sécurisé par l’apposition d’une signature électronique. Les banques et les éditeurs de logiciels recommandent donc la signature électronique bancaire de type EBICS TS lors des échanges bancaires comme moyen de prévention des fraudes aux paiements Pour chacune de vos banques, il faudra revoir le process de vos échanges EBICS actuels. Prenez vos dispositions et anticipez pour éviter l’effet d’étranglement de cette mise en place qui aura forcément lieu sur décembre.");
        inputButton.value = 'Lire la suite';
        inputButton.onclick = suite;

        insert[i].appendChild(divRow)
            .appendChild(divMargin)
                .appendChild(divCol12);

        divCol12.appendChild(imgFloat);
        divCol12.appendChild(h1Title).appendChild(title);
        divCol12.appendChild(p)
            .appendChild(imgTime);
            p.appendChild(date);
        divCol12.appendChild(pJustify).appendChild(text);

        insert[i].appendChild(divRowLine);
            divRowLine.appendChild(divBoutonActu)
                .appendChild(inputButton);
            divRowLine.appendChild(divBorderActu);

        //fonction pour le bouton lire la suite
        function suite() {
            var actu = document.getElementsByClassName('marginActu');
            var button = document.getElementsByClassName('buttonActu');
            for (var j = 0; j < actu.length; j++){
                actu[j].style.overflow = "hidden";
                actu[j].style.height = "";
                button[j].style.display = "inline";
            }
            actu[i].style.overflow = "visible";
            actu[i].style.height = "";
            button[i].style.display = "none";
        }
    }

}, false);
