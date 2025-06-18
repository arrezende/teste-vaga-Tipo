window.addEventListener('load', function() {
    const btnLGPD = document.querySelector('.accept');
    const boxLGPD = document.querySelector('.lgpd');
  
    if(sessionStorage.lgpd){
        boxLGPD.style.display = 'none';
    }else{
        boxLGPD.style.display = 'block';
    }
    btnLGPD.addEventListener('click', function(){
    sessionStorage.setItem("lgpd", 'ok');
    boxLGPD.style.display = 'none';
    })
})