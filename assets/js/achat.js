var boxs=document.querySelectorAll(".box");
boxs.forEach((box)=>{
    box.addEventListener('click',function(){
        var num=box.getAttribute('num');
        alert(num);
    })
})