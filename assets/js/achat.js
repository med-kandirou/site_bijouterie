var boxs=document.querySelectorAll(".box");
boxs.forEach((box)=>{
    box.addEventListener('click',function(){
        var num=box.getAttribute('num');
        location.replace("./achat.php?id="+num+"");
    })
})


let qt=1; //quantite
$('#plus').click(function () { 
    qt++;
    $('.qt').val(qt);
});

$('#moins').click(function () { 
    if(qt>1){
        qt--;
        $('.qt').val(qt);
    }
});
