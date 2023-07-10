function success() {
  if (
    document.getElementById("email-company").value !== "" &&
    document.getElementById("company-name").value !== "" &&
    document.getElementById("first-name").value !== "" &&
    document.getElementById("last-name").value !== "" &&
    document.getElementById("password-register").value !== ""
  ) {
    document.getElementById("register-button").disabled = false;
  } else {
    document.getElementById("register-button").disabled = true;
  }
}
