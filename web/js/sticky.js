var g = {
    i:0,
    timer: setInterval(nextText, 6000), //for the carroussel to slide every 6 seconds
    scroll: 1 //to make sure to don't run function stick() if not needed
};
/*to reduce header when we scroll down*/
window.onscroll = function stick(){
    if (screen.width > 990) { //we dont wont to reduce the header on medium screen
        var top = window.pageYOffset; //scrolling position
        var navMargin = document.getElementById('nav'); //we will reduce margin because header will be smaller
        var height = document.getElementsByClassName('header-height'); //this div determine the height of the header
        var logo = document.getElementById('logoColors'); //we will need to change properties of the logo to fit well
        if (top > 50 && g.scroll == 1) { //we check if we are not on top of the screen and didn't have already scrolled
            for(var i =0; i < height.length; i++){ //we apply smaller height to the needed elements
                height[i].style.height = '50px';
            }
            /*we reduce size, margin of the elements accordingly*/
            logo.style.width = '80px';
            logo.style.marginLeft = '-30px';
            logo.style.marginTop = '10px';
            navMargin.style.marginTop = "0";
            g.scroll=0; //we return that we are on bottom side of the page so the function will not run till we go back top
        } else if(top <= 50 && g.scroll == 0){ //same than previously for top position we setup every elements back to default
            for(i =0; i < height.length; i++){
                height[i].style.height = '100px';
            }
            logo.style.width = '';
            logo.style.marginTop = '';
            navMargin.style.marginTop = "";
            g.scroll=1;
        }
    }
};

function nextText(){ //we display next image
    g.i= g.i+1;
    if(g.i>2){
        g.i=0;
    }
    var caroussel = document.getElementsByClassName('carousselDiv');
    var boutonCarroussel = document.getElementsByClassName('boutonCarroussel');
    hide(); //we hide all elements
    caroussel[g.i].style.display = 'inline';// we show the one we want
    move(caroussel[g.i], -100, 0);//we apply animation for sliding
    boutonCarroussel[g.i].style.color = 'black';//we change color of the button of the section
    /*we have 3 images, we make sure we go back to first if we are on last image*/
}
function prevText(){ //we display previous image
    g.i= g.i-1;
    if(g.i<0){
        g.i=2;
    }
    var caroussel = document.getElementsByClassName('carousselDiv');
    var boutonCarroussel = document.getElementsByClassName('boutonCarroussel');
    hide();
    caroussel[g.i].style.display = 'inline';
    move(caroussel[g.i], 100, 0);
    boutonCarroussel[g.i].style.color = 'black';
}
function selectText(i){ //we display the div selected when we click on button
    var caroussel = document.getElementsByClassName('carousselDiv');
    var boutonCarroussel = document.getElementsByClassName('boutonCarroussel');
    hide();
    caroussel[i].style.display = 'inline';
    move(caroussel[i], -100, 0);
    boutonCarroussel[i].style.color = 'black';
}
function hide(){ //we hide every divs
    var caroussel = document.getElementsByClassName('carousselDiv');
    var boutonCarroussel = document.getElementsByClassName('boutonCarroussel');
    for(var i=0; i < caroussel.length; i++){
        caroussel[i].style.display = 'none';
    }
    for(i=0; i < caroussel.length; i++){
        boutonCarroussel[i].style.color = '';
    }
}
function stop(){ //we stop the caroussel when mouse is on top of it function is called on societe.html.twig
    clearInterval(g.timer);
}
function play(){ //we run the caroussel function is called on societe.html.twig
    g.timer = setInterval(nextText, 6000);
}
function move(elem, initial, left) { //basic animation to slide
    /*we increment position from -100% to 0%*/
    var timer = setInterval(frame, 5);
    if (initial > left){ var inc = -1;}
    else { inc = +1;}
    function frame() {
        left += inc;
        elem.style.left = initial + left + '%';
        if (elem.style.left === '0%'){
            clearInterval(timer);
        }
    }
}
function goTop(){
    var timer = setInterval(frame, 5);
    function frame() {
        window.scrollBy(0, -30);
        if (window.pageYOffset <= 0){
            clearInterval(timer);
        }
    }
}