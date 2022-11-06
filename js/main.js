function animationBtn(estado){
    if(estado == 1){
        alert('usuario inactivo ahora');
        estado = 0;
        console.log(estado);
        window.location.href + "?estado=" + estado;
    }else{
        alert('usuario activo ahora');
        estado = 1;
        console.log(estado);
    }
}