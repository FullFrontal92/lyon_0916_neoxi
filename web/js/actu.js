function showActu(i) {
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