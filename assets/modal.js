function Lbtn(){
    modal = document.getElementById("Lpopup");
    modal.style.display = "block";
    modal = document.getElementById("Rpopup");
    modal.style.display = "none";
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
