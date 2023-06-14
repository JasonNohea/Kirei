function success() {
    var comem = document.getElementById("email-company").value;
    var comname = document.getElementById("company-name").value;
    var fname = document.getElementById("first-name").value;
    var lname = document.getElementById("last-name").value;
    var pass = document.getElementById("pass-reg").value

    if ( comem.length > 5){

    }


    if (
      document.getElementById("email-company").value !== "" &&
      document.getElementById("company-name").value !== "" &&
      document.getElementById("first-name").value !== "" &&
      document.getElementById("last-name").value !== "" &&
      document.getElementById("pass-reg").value !== ""
    ) {
      document.getElementById('reg-b').disabled = false;
    } else {
      document.getElementById('reg-b').disabled = true;
    }
    
  }