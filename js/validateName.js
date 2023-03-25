function validateName(input, errorMessage) {
  var input = document.getElementById(input).value;
  var letters = /^[A-Za-z]+$/;
  if (!input.match(letters)) {
    alert(errorMessage);
    document.getElementById(input).value = "";
  }
}