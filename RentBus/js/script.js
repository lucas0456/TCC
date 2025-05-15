let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });

  function mascara_rg(obj) {
    if(obj.value.length == 2) {
        obj.value += "."
    }
    if(obj.value.length == 6) {
        obj.value += "."
    }
    if(obj.value.length == 10) {
        obj.value += "-"
    }
}

function mascara_cpf(obj) {
    if(obj.value.length == 3) {
        obj.value += "."
    }
    if(obj.value.length == 7) {
        obj.value += "."
    }
    if(obj.value.length == 11) {
        obj.value += "-"
    }
}

function somente_numero(e) {
    tecla = (window.event)?event.keyCode:e.which;
    if((tecla >= 48 && tecla <= 57) || (tecla >= 96 && tecla <= 105) || (tecla == 8) || (tecla == 37) || (tecla == 39)) {
        return true;
    }
    else {
        return false;
    }
}