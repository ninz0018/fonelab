$(document).on('click','.add', function(){
    let s = 
    $("#pName").append(`<li>Type C Charger</li>`)
    $("#price").append(`<li>P ` + s + `</li>`)

    v = $("#price").each();
    s = $("#total").val(v);
    sum = v + s;
})

$( document ).ready(function() {
    total = 0;
    total = $("#price").each();

    total = total + parseInt($(this).text());
        
        $("#total").val(total);

    });
    


