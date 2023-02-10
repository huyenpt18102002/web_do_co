/*----------------------header.sticky----------------------------*/ 
const header = document.querySelector("header")
window.addEventListener("scroll",function(){
    x = window.pageYOffset
    if(x>0){
       header.classList.add("sticky")
    }else{
        header.classList.remove.add("sticky")
    }
})
/*----------------------menu. CATERGORY----------------------------*/ 
const itemsliderbar = document.querySelectorAll(".catergory-left-li")
itemsliderbar.forEach(function(menu,index){
   menu.addEventListener("click", function(){
    menu.classList.toggle("block")
   })
})

/*----------------------PRODUCT----------------------------*/ 


/*const baoquan = querySelector(".baoquan")
const chitiet = querySelector(".chitiet")
if (baoquan){
    baoquan.addEventListener("click",function(){
        document.getElementById(".product-content-right-bottom-content-chitiet").style.display="none"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display="block"
    })
}
if (chitiet){
    chitiet.addEventListener("click",function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display="block"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display="none"
    })
}
const button = document.querySelector(".product-content-right-bottom-top")
if (button){
    button.addEventListener("click",function(){
        document.querySelector(".product-content-right-bottom-content-big").class.toggle("active")
    })
}*/
