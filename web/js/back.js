function buttonInsertSrc(id){
    var element = document.getElementsByClassName('imgBack');
    var img = document.getElementsByClassName('srcImage');
    img[0].value = element[id].src;
}