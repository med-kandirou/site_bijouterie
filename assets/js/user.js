//enable input 
$('#update').click(function () { 
    var inputs=document.querySelectorAll("input");
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].disabled=false;               
    }
});


$('#show_mdp').click(function () { 
    $(".mdp_div").addClass('toggle');
});
