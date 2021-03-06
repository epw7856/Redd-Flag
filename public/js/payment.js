var handler = StripeCheckout.configure({
  key: 'pk_live_zgpVIF3W55iH5APbrcWnZ2q8',
  image: '../img/ReddFlagLogo.png',
  token: function(token) {
    $("#stripeToken").val(token.id);
    $("#stripeEmail").val(token.email);
    $("#amountInCents").val(Math.floor($("#amountInDollars").val() * 100));
    $("#myForm").submit();
  }
});

$('#customButton').on('click', function(e) {
  var amountInCents = Math.floor($("#amountInDollars").val() * 100);
  var displayAmount = parseFloat(Math.floor($("#amountInDollars").val() * 100) / 100).toFixed(2);
  var x = document.getElementById("error_explanation")
  // Open Checkout with further options

  if (isNaN(amountInCents)) {
    $(x.style.display = "block");
  }
  else {
    $(x.style.display = "none");
    handler.open({
    name: 'Redd Flag Kickstarter',
    description: 'Donation amount of  $' + displayAmount,
    billingAddress: true,
    zipCode: true,
    amount: amountInCents,
    });
    e.preventDefault();
  }
    e.preventDefault();
});

// Close Checkout on page navigation
$(window).on('popstate', function() {
  handler.close();
});
