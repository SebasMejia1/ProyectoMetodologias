$("#addtocart").on("click", function () {
  var button = $("#addtocart");
  var cart = $("#cart");
  var cartTotal = cart.attr("data-totalitems");
  var newCartTotal = parseInt(cartTotal) + 1;

  $("#addtocart").addClass("sendtocart");
  setTimeout(function () {
    button.removeClass("sendtocart");
    cart.addClass("shake").attr("data-totalitems", newCartTotal);
    setTimeout(function () {
      cart.removeClass("shake");
    }, 500);
  }, 1000);
});
