function openLoginModal(){
var modal = document.getElementById('myModal');
modal.style.display = "block";
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onbeforeunload = function() {
            return "you can not refresh the page";
        }
}

function closeLoginModal(){
var modal = document.getElementById('myModal');
modal.style.display = "none";
}