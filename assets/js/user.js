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
