
let qt = 1; //quantite
$('#plus').click(function () {
    qt++;
    $('.qt').val(qt);
});

$('#moins').click(function () {
    if (qt > 1) {
        qt--;
        $('.qt').val(qt);
    }
});

$('.btn_pannier').click(function () {
    var num = this.getAttribute('num');
    $.post("./includes/php/add_pannier.php", {id: num},
        function (data) {
            if (data == 'disconnect') {
                Swal.fire({
                    title: 'Merci de vous connecter !',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                }).then(() => {
                    location.replace("./connect.php");
                })
            }
            else if(data='insered') {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 2000,
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

//code pannier delete
var prods_delete=document.querySelectorAll('.delete');
prods_delete.forEach(prod => {
    prod.addEventListener('click',function(){
        let id=prod.value;

        $.post("../../includes/php/delete_prod.php", {id: id},
        function (data) {
            if(data=="deleted"){
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: 'Produit supprimé de panier'
                })
                setTimeout(function(){
                    location.replace("../../includes/user/pannier.php");
                },1000)

            }
        })

    });
});


var prods_achete=document.querySelectorAll('.achete');
prods_achete.forEach(prod => {
    prod.addEventListener('click',function(){
        let id=prod.value;

       
        
    });
});