var boxs=document.querySelectorAll(".box");
boxs.forEach((box)=>{
    box.addEventListener('click',function(){
        var num=box.getAttribute('num');
        location.replace("achat.php?id="+num+"");
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

$('.btn_pannier').click(function () { 
    var num=this.getAttribute('num');

    $.post("./includes/php/add_pannier.php",{id:num},
        function (data) {
            if(data=='disconnect'){
                Swal.fire({
                    title: 'Merci de vous connecter !',
                    showClass: {
                      popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                      popup: 'animate__animated animate__fadeOutUp'
                    }
                }).then(()=>{
                    location.replace("./connect.php");
                })
            } 
            else{
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })
                  
                  Toast.fire({
                    icon: 'success',
                    title: 'Produit bien ajoutée'
                })
            }           
        },
    )
});
