/* Script da janela Modal expandir Imagem*/

function clique(img){
    var modalJ=document.getElementById("janela-modal")
    var modalI=document.getElementById("img-modal")
    var modalB=document.getElementById("btn-fechar")

    modalJ.style.display="block"
    modalI.src= img
    modalB.onclick=function(){
        modalJ.style.display="none"
    }

}