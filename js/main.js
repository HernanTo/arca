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
function selectFilePqrsf(){
    let file = document.getElementById('file').value;
    if(file === ''){
        file = 'Seleccionar archivos';
    }else{
        file = file.slice(12);
    }
    let labelFile = document.getElementById('name-file');
    labelFile.innerHTML = file;
}
setInterval(() => {
    selectFilePqrsf()
}, );