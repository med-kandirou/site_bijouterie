//enable input 
$('#update').click(function () { 
    var inputs=document.querySelectorAll("input");
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].disabled=false;               
    }
});

$('#show_mdp').click(function () { 
    var div=document.querySelector(".mdp_div");
    if(div.style.display=='none'){
        div.style.display='block';
    }
    else{
        div.style.display='none';
    }
});

$(".alert-danger").hide();
$("#update_mdp").click(function () { 
    if($("#old_mdp").val()=='' || $("#new_mdp").val()=='' || $("#Cnew_mdp").val()==''){
        $(".alert-danger").show();
        $(".alert-danger").text("*Saisir tous les champs");
    }
    else if(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/.test($('#new_mdp').val())==false){
        $(".alert-danger").show();
        $(".alert-danger").text("*le mot de passe est faible");
    }
    else if($("#new_mdp").val()!=$("#Cnew_mdp").val()){
        $(".alert-danger").show();
        $(".alert-danger").text("*Confirmation de mot de passe est faux");
    }
    else
    {
        $(".alert-danger").hide();  
        $.post("../../includes/php/update_mdp.php",{mdp:$("#old_mdp").val(),newmdp:$("#new_mdp").val()},
            function (data) {
                if(data==1){
                    Swal.fire(
                        'Succes!',
                        'Mot de passe est changé !',
                        'success'
                    ) 
                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
                else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Mot de passe incorrect',
                    })
                }
                console.log(data);
            }
        )
    }
    
});
