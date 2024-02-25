var hamBurger=document.querySelector(".hamburger");
hamBurger.addEventListener('click',()=>{
    let nav=document.querySelector(".NavBar-list");
    if(nav.style.display=="none"){
        nav.style.animationName="nav-in";
        nav.style.animationDuration="200ms";
        
        nav.style.display="flex";
        hamBurger.innerText="-"
    }else{
        nav.style.animationName="nav-in";
        nav.style.animationDuration="200ms";
        nav.style.display="none";
        hamBurger.innerText="+" 

    }
    
});

