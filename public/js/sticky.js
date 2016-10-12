function test(){
    if (screen.width > 767){
        var top  = window.pageYOffset;
        var count = document.getElementsByClassName('sticky-hide').length;
        var i;

        if(top > 50) {
            for (i = 0; i < count; i++){
                document.getElementsByClassName('sticky-hide')[i].style.display = "none";
                document.getElementById('nav').style.marginTop = "0";
             }
        } else{
            for ( i = 0; i < count; i++){
                document.getElementsByClassName('sticky-hide')[i].style.display = "flex";
                if (screen.width > 931){
                    document.getElementById('nav').style.marginTop = "26px";
                } else{

                }
            }
        }
    }
}