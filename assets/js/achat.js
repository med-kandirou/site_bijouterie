var box=document.querySelectorAll(".box");
box.forEach((box)=>{
    box.addEventListener('click',function(){
        alert("clicked");
    });
})