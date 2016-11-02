function buttonInsertSrc(id){ //we return src of selected image to 'image' field value
    var element = document.getElementsByClassName('imgBack');
    var img = document.getElementById('srcImage');
    img.value = element[id].src;
    for (var i = 0; i < element.length; i++){ //we change opacity of none selected images
        element[i].style.opacity = ('0.6');
    }
    element[id].style.opacity = ('1'); //we change opacity of selected image
}