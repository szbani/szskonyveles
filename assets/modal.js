function Lbtn(){
    modal = document.getElementById("Lmodal");
    modal.style.display = "block";
    }

function Lclosebtn() {
    modal = document.getElementById("Lmodal");
    modal.style.display = "none";
    }

function Rbtn () {
    modal = document.getElementById("Rmodal");
    modal.style.display = "block";
    }

function Rclosebtn() {
    modal = document.getElementById("Rmodal");
    modal.style.display = "none";
    }

window.onclick = function(e){
        modal = document.getElementById("Rmodal");
        if (e.target == modal){
            modal.style.display = "none";
        }
        modal = document.getElementById("Lmodal");
        if (e.target == modal){
            modal.style.display = "none";
        }
    }
