$(document).on('click','.add', function(){

    let s = $("#adding").val();
    $("#pName").append(`<li>Type C Charger</li>`)
    $("#price").append(`<li class="tot">` + s + `</li>`)

    calculate();
})

function calculate() {
    let total = 0;
    $('.tot').each(function() {
      total = total + parseInt($(this).text());
    });
    $('#total').text(total.toFixed(1));
}

$(document).ready(function() { 
  $('body').scrollspy({ target: '#navbar' });
})

