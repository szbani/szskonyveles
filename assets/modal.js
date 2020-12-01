function Lbtn(){
    modal = document.getElementById("Lpopup");
    modal.style.display = "block";
    modal = document.getElementById("Rpopup");
    modal.style.display = "none";
    closeNav();
    }

function Lclosebtn() {
    modal = document.getElementById("Lpopup");
    modal.style.display = "none";
    }

function Rbtn () {
    modal = document.getElementById("Rpopup");
    modal.style.display = "block";
    modal = document.getElementById("Lpopup");
    modal.style.display = "none";
    closeNav();
    }

function Rclosebtn() {
    modal = document.getElementById("Rpopup");
    modal.style.display = "none";
    }

window.onclick = function(e){
        modal = document.getElementById("Rpopup");
        if (e.target == modal){
            modal.style.display = "none";
        }
        modal = document.getElementById("Lpopup");
        if (e.target == modal){
            modal.style.display = "none";
        }
    }
function popup_succes(){
    document.getElementById("popup_succes").style.display = "block";
            setTimeout(function () { document.getElementById("popup_succes").style.display = "none"; }, 1000);
        }

