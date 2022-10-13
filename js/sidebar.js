let conDash = document.querySelector('.container-dashboard');
let sidebar = document.querySelector('.body-dashboard');
let btnSideBar = document.querySelector('.btn-des-sidebar');
let imgBtn = document.querySelector('.img-btn');
let itemHelp = document.querySelector('.item-help');
let conHelp = document.querySelector('.con-help-center');
let imgArca = document.getElementById('arca-logo');
let estadoMenu = false;
let btnMenu = document.querySelector('.con-sidebar-a');


function despSidebar(){
    if(sidebar.clientWidth == 70){
        setTimeout(() => {
            conDash.style = "grid-template-columns: 260px 1fr";
            sidebar.style = "width: 260px";
            btnSideBar.style = "left: 245px;";
            imgBtn.src = "./assets/img/icons/angle-double-small-right-free-icon-font.svg";
            imgArca.style.width = "85.5px";
            imgArca.style.height = "35px";
            conHelp.style.display = "grid";
            itemHelp.style.display = "none";
        }, 500);
    }else{
        setTimeout(()=>{
            conDash.style = "grid-template-columns: 70px 1fr;";
            sidebar.style = "width: 70px";
            btnSideBar.style = "left: 55px;";
            imgBtn.src = "./assets/img/icons/angle-double-small-left-free-icon-font.svg";
            imgArca.style.width = "30px";
            imgArca.style.height = "35px";
            conHelp.style.display = "none";
            itemHelp.style.display = "grid";
        }, 500)
    }
}

function menu(){
    sidebar.style = "width: 260px";
    conDash.style = "grid-template-columns: 260px 1fr";
    sidebar.style = "width: 260px";
    btnSideBar.style = "left: 245px;";
    imgBtn.src = "./assets/img/icons/angle-double-small-right-free-icon-font.svg";
    imgArca.style.width = "85.5px";
    imgArca.style.height = "35px";

    if(estadoMenu){
        sidebar.style.left = "-260px";
        btnMenu.style.left = "-6000px";
        btnMenu.style.right = "auto";
        estadoMenu = !estadoMenu;
        document.body.style = "overflow-y: auto;";
    
    }else{
        sidebar.style.left = "0px";
        btnMenu.style.left = "auto";
        btnMenu.style.right = "0px";
        estadoMenu = !estadoMenu;
        document.body.style = "overflow-y: hidden;";
    }
}
