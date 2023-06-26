// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
          // console.log("asd");
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

// OTP field
$(".digit-group")
  .find("input")
  .each(function () {
    $(this).attr("maxlength", 1);
    $(this).on("keyup", function (e) {
      var parent = $($(this).parent());

      if (e.keyCode === 8 || e.keyCode === 37) {
        var prev = parent.find("input#" + $(this).data("previous"));

        if (prev.length) {
          $(prev).select();
        }
      } else if (
        (e.keyCode >= 48 && e.keyCode <= 57) ||
        (e.keyCode >= 65 && e.keyCode <= 90) ||
        (e.keyCode >= 96 && e.keyCode <= 105) ||
        e.keyCode === 39
      ) {
        var next = parent.find("input#" + $(this).data("next"));

        if (next.length) {
          $(next).select();
        } else {
          if (parent.data("autosubmit")) {
            parent.submit();
          }
        }
      }
    });
  });

// OTP timer
var downloadTimer;

function startCountdown() {
  var timeleft = 20;
  var cd = document.getElementById("countdown");
  cd.classList.remove("timeout");
  cd.innerHTML = "00:20";

  downloadTimer = setInterval(function () {
    if (timeleft <= 0) {
      clearInterval(downloadTimer);
      cd.innerHTML = "Now";
      cd.classList.add("timeout");
    } else {
      if (timeleft > 9) {
        cd.innerHTML = "00:" + timeleft;
      } else {
        cd.innerHTML = "00:0" + timeleft;
      }
    }
    timeleft -= 1;
  }, 1000);
}

$("#send-otp").on("click", function () {
  clearInterval(downloadTimer);
  startCountdown();
});

$("#countdown").on("click", function (e) {
  e.preventDefault();
  if ($(this).hasClass("timeout")) {
    clearInterval(downloadTimer);
    startCountdown();
  }
});

$("#reset-otp").on("click", function () {
  clearInterval(downloadTimer);
});

function resetpass() {
  var duration = 2000; // 2 seconds
  setTimeout(function () {
    // Close the modal
    $("#loading").modal("hide");
    $("#reset-success").modal("show");
  }, duration);
}

$("textarea")
  .each(function () {
    this.setAttribute(
      "style",
      "height:" + this.scrollHeight + "px;overflow-y:hidden;"
    );
  })
  .on("input", function () {
    this.style.height = 0;
    this.style.height = this.scrollHeight + "px";
  });
