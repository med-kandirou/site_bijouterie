$(document).ready(function () {
    $(".alert").hide();
    //button inscrire
    let list_err=[];
    $("#inscrire").click(function () { 
        $(".errors").text('');
        let count=0;
        if($("#nom").val()==''){
            list_err.push('nom');
            count++;
        }
        if($("#prenom").val()==''){
            list_err.push('prenom');
            count++;
        }
        if($("#email").val()==''){
            list_err.push('email');
            count++;
        }
        if($("#phone").val()==''){
            list_err.push('phone');
            count++;
        }
        if($("#mdp").val()==''){
            list_err.push('mdp');
            count++;
        }
        if($("#Cmdp").val()==''){
            list_err.push('Cmdp');
            count++;
        }
        if(count>0){
            for (let i = 0; i < list_err.length;i++) {
                $("#"+list_err[i]+"").css("border-color", "#F2362C"); 
                $("."+list_err[i]+"").css("color", "#F2362C");  
            }
        }
        else{
            list_err=[];
            count=0;
            if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#email').val())==false){
                list_err.push("Format email invalid");
                count++;
            }
            if(/(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}/g.test($('#phone').val())==false){
                list_err.push("Format Numéro invalid");
                count++;
            }
            if(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/.test($('#mdp').val())==false){
                list_err.push("Le mot de passe est faible");
                count++;
            }
            if($('#mdp').val()!=$('#Cmdp').val()){
                list_err.push("Les deux mot de passe ne sont pas identique");
                count++;
            }
            if(count>0){
                for (let j = 0; j < list_err.length; j++) {
                    $(".alert").show();
                    document.querySelector(".errors").innerHTML+="*"+list_err[j]+"</br>";
                }
            }
            else{
                $.post("./includes/php/sendMail.php",{nom:$("#nom").val(),prenom:$("#prenom").val(),email:$("#email").val(),phone:$("#phone").val(),mdp:$("#mdp").val()},
                    function (data) {
                        if(data=='exist'){
                            $(".alert").show();
                            document.querySelector(".errors").innerHTML+="*Email déja exist";
                        }
                        else{
                            let code;
                            Swal.fire({
                            title: 'Nous vous envoyer le code de confirmation !!',
                            icon: 'question',
                            input: 'range',
                            inputLabel: 'Entrer le code ?',
                            inputAttributes: {
                                min: 0,
                                max: 100,
                                step: 1
                            },
                            inputValue: 25
                            }).then((response)=>{
                               code=response.value;
                                if(code==data){
                                    $.post("./includes/php/inscrire.php",{nom:$("#nom").val(),prenom:$("#prenom").val(),email:$("#email").val(),phone:$("#phone").val(),mdp:$("#mdp").val()},
                                        function (response) {
                                            // if(response==1){
                                            //     Swal.fire(
                                            //         'Succes!',
                                            //         'Compte a été crée !',
                                            //         'success'
                                            //     )      
                                            //     setTimeout(()=>{
                                            //         window.location.href="./connect.php";
                                            //     },2000);    
                                            // }
                                            console.log(response);
                                        },
                                    )
                                }
                                else{
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops!Le code est faux',
                                    })
                                } 
                            })
                        }
                    },
                ).fail(function(){
                    alert("une erreur est produits");
                });
            }
        }
    });

    //login
    $("#login").click(function () { 
        list_err=[];
        count=0;
        if($("#email_login").val()==''){
            list_err.push("email_login");
            count++;
        }
        if($("#pass_login").val()==''){
            list_err.push("pass_login");
            count++;
        }
        if(count>0){
            for (let j = 0; j < list_err.length; j++) {
                $("#"+list_err[j]+"").css("border-color", "#F2362C"); 
                $("."+list_err[j]+"").css("color", "#F2362C");  
            }
        }else{
            $.post("./includes/php/login.php",{email:$("#email_login").val(),mdp:$("#pass_login").val()},
                function (data) {
                    if(data==-1){
                        Swal.fire({
                            icon: 'error',
                            title: 'Email ou mot de passe incorrect !!',
                        })
                    }
                    else if(data==1){
                        Swal.fire(
                            'Succes!',
                            'Bienvennue !',
                            'success'
                        )   
                        setTimeout(()=>{
                            window.location.href="./includes/user";
                        },1700); 
                    }
                    else if(data==2){
                        Swal.fire(
                            'Succes!',
                            'admin !',
                            'success'
                        )  
                            
                    }                  
                },
            )
        }
        
    });













    
});