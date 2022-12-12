$(document).on("click", "#addtocart", function () {
  var button = $(this);
  var cart = $("#cart");
  var cartTotal = cart.attr("data-totalitems");
  var newCartTotal = parseInt(cartTotal) + 1;
  button.addClass("sendtocart");
  setTimeout(function () {
    button.removeClass("sendtocart");
    cart.addClass("shake").attr("data-totalitems", newCartTotal);
    setTimeout(function () {
      cart.removeClass("shake");
    }, 500);
  }, 900);
});

$(document).ready(function () {
  $.get("./php/mostrarProducto.php", function (response) {
    if (response == "Error" || response.includes("ERROR")) {
      // console.log(response);
      console.error("Error");
      return;
    }
    let mostrarProducto = JSON.parse(response);
    // console.log(mostrarProducto);
    var template = "";
    mostrarProducto.forEach((element) => {
      template += `
      <div class="col">
      <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="${element.imagen}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">${element.nombre}</h5>
                      <p class="card-text">${element.descripcion}</p>
                      <div class="page-wrapper">
                        <div class="row justify-content-around py-2 text-start">
                          <div class="col"><i class="far fa-eye"></i></div>
                          <div class="col text-start"><p class="h5">${element.precio}</p></div>
                          <div class="col text-end">
                            <button id="addtocart">
                            <i class="fas fa-cart-plus"></i>
                            <span class="cart-item"></span>
                          </button>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
      `;
    });
    if (template == 0) {
      console.log("NO");
    } else {
      $("#computacion").html(template);
    }
  });
});
