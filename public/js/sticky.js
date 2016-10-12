$(function(){
    setInterval(test, 500);
});
function test(){
    var top = window.pageYOffset;
    var stickyDisplay = document.getElementById('stickyToHide');
    var navMargin = document.getElementById('nav');
    if (screen.width > 767) {
        if (top > 50) {
            stickyDisplay.style.display = "none";
            navMargin.style.marginTop = "0";
        } else {
            stickyDisplay.style.display = "";
            navMargin.style.marginTop = "";
        }
    }
}