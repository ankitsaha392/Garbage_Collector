function fun(a){
    let addCart=document.querySelector(".Add-Cart");
    sessionStorage.setItem("cart",a);
    console.log;

}
let check=document.querySelector(".checkout1");
let cart=document.querySelector(".cart");
let cross=document.querySelector(".cross");
cart.addEventListener('click',()=>{
    
    check.style.display="block";
    cross.style.display="block";
    console.log("click");
});

cross.addEventListener('click',()=>{
    check.style.display="none";
    cross.style.display="none";
});