function value(a){
    var val = document.getElementsByClassName("txt")[a].innerHTML;
    window.location="../review page/review.php?name="+ val;
}