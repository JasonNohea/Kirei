function success() {

  if (
    document.getElementById("email").value !== "" &&
    document.getElementById("company_name").value !== "" &&
    document.getElementById("first_name").value !== "" &&
    document.getElementById("last_name").value !== "" &&
    document.getElementById("password-register").value !== ""
  ) {
    document.getElementById("register-button").disabled = false;
  } else {
    document.getElementById("register-button").disabled = true;
  }
}
