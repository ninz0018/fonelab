$(document).on('click','.add', function(){

    l = parseInt($("#qty").val());
    let s = $("#adding").val();
    v = l * s;
    $("#pName").append(`<li>Type C Charger</li>`)
    $("#price").append(`<li class="tot">` + v + `</li>`)
    $("#quantity").append(`<li>` + l + `</li>`);

    Swal.fire({
      position: "center",
      icon: "success",
      title: "Added",
      showConfirmButton: false,
      timer: 1500
    });

    calculate();

})

function calculate() {
    let total = 0;
    $('.tot').each(function() {
      total = total + parseInt($(this).text());
    });
    $('#total').text(total.toFixed(2));
}

$(document).ready(function() { 
  $('body').scrollspy({ target: '#navbar' });
})

