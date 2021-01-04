
function mozgas_0(){
    scrollTo({top,behavior: "smooth"});
}

function mozgas_1(){
    element = document.getElementById("Ismerteto");
    window.scrollTo({ top:650,behavior: "smooth"});
}

function mozgas_2(){
    element = document.getElementById("Arak");
    element.scrollIntoView({block:"center", behavior: "smooth"});
}

function mozgas_3(){
    element = document.getElementById("Elerhetoseg");
    element.scrollIntoView({block:"center", behavior: "smooth"});
}
function navopen() {
    var x = document.getElementById("mynavbar");
    if (x.className === "navbar") {
      x.className += " responsive";
    } else {
      x.className = "navbar";
    }
    var x = document.getElementById("myleft");
    if (x.className === "left") {
      x.className += " responsive";
    } else {
      x.className = "left";
    }
    var x = document.getElementById("myright");
    if (x.className === "right") {
      x.className += " responsive";
    } else {
      x.className = "right";
    }
  } 

