/*show full actualities when we click on 'lire la suite'*/
function showActu(i) {
    var actu = document.getElementsByClassName('marginActu'); //we will change this height to show full actuality
    var button = document.getElementsByClassName('buttonActu'); //the button we want to hide when full actu is shown
    var actuHeight = document.getElementsByClassName('actuHeight'); //we need the size of the actu to return it to 'marginActu'
    for (var j = 0; j < actu.length; j++){ //we reset all actualities to default
        actu[j].style.height = "";
        button[j].style.display = "inline";
    }
    //we change properties to show the actu we want (i)
    var height = actuHeight[i].offsetHeight; // height of the actu
    actu[i].style.height = height + 'px'; //we past the height to the div that hide actu
    button[i].style.display = "none"; //we hide the button
}
/*hide and unhide buttons 'lire la suite'*/
function unhideButton(){
    document.getElementById('confirm').style.display = 'inline';
}
function hideButton(){
    document.getElementById('confirm').style.display = 'none';
}
function goToActu(id){ //this function load actualite.html with # and id corresponding to the actu we want to show
    window.location.href = '/actualite#news'+(id + 1); //onload function will be called if #newsX
}
window.onload = function(){ //this function use #newsX returned by goToActu function
    var actu = document.getElementsByClassName('marginActu'); //we will take actu.offsetTop as reference to scroll on selected actu

    if (window.location.hash === "#news1") {
        showActu(0); //we display actu of 1st actu (0)
        scrollToActu(0); //we scrolldown to 1st actu (0)
    } else if (window.location.hash === "#news2") {
        showActu(1);
        scrollToActu(1);
    } else if (window.location.hash === "#news3") {
        showActu(2);
        scrollToActu(2);
    } else{}
    function scrollToActu(id){
        window.scrollBy(0, actu[id].offsetTop - 80); //scroll down to selected actu
    }
};
