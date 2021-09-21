
document.addEventListener('DOMContentLoaded',function(){

listenners();
darkmode();
});



function listenners(){
const icono=document.querySelector('.menu-mobile');
      icono.addEventListener('click',menuMobile);

}

//darkmode

function darkmode(){

    const prefieredarkmode=window.matchMedia('(prefers-color-scheme:dark)');

    //console.log(prefieredarkmode.matches);
    if(prefieredarkmode){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    prefieredarkmode.addEventListener('change',function(){
        if(prefieredarkmode){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }

    });

    let dark=document.querySelector(".dark-mode-boton");
    dark.addEventListener('click',function(){
        document.body.classList.toggle('dark-mode');
    });
}

function menuMobile(){
    //console.log("Desde funcion MenuMobile");

   const menu= document.querySelector('.nav-header');
     
   if(menu.classList.contains('mostrar')){
      menu.classList.remove('mostrar')
}else{
    menu.classList.add('mostrar');
}

}