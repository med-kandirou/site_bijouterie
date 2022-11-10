var boxs=document.querySelectorAll(".box");
boxs.forEach((box)=>{
    box.addEventListener('click',function(e){
        alert(e.target.id);
    })
})