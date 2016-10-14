var i=0;
$(function(){
    setInterval(test, 300);
    setInterval(nextText, 8000);

});
function test(){
    var top = window.pageYOffset;
    var stickyDisplay = document.getElementById('stickyToHide');
    var navMargin = document.getElementById('nav');
    if (screen.width > 990) {
        if (top > 50) {
            stickyDisplay.style.display = "none";
            navMargin.style.marginTop = "0";
        } else {
            stickyDisplay.style.display = "";
            navMargin.style.marginTop = "";
        }
    }
}

function nextText(){
    $("#caroussel div").hide();
    $("#caroussel div:eq("+i+")").show();
    $("#titlesCaroussel div").css('color', 'white');
    $("#titlesCaroussel div:eq("+i+")").css('color', 'black');
    i= i+1;
    if(i>2){
        i=0;
    }
}
function prevText(){
    $("#caroussel div").hide();
    $("#caroussel div:eq("+i+")").show();
    $("#titlesCaroussel div").css('color', 'white');
    $("#titlesCaroussel div:eq("+i+")").css('color', 'black');
    i= i-1;
    if(i<0){
        i=2;
    }
}