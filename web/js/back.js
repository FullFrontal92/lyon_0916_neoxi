function buttonInsertSrc(id){
    var element = document.getElementsByClassName('imgBack');
    var img = document.getElementById('srcImage');
    img.value = element[id].src;
    for (var i = 0; i < element.length; i++){
        element[i].style.opacity = ('0.6');
    }
    element[id].style.opacity = ('1');
}