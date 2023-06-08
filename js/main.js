
$(".login-button").on("click", function () {
    $(".login-con").fadeToggle("fast", "linear");
});

$(".dark-screen").on("click", function () {
    $(".login-con").fadeToggle("fast", "linear");
});

$(".login-cancel").on("click", function () {
    $(".login-con").fadeToggle("fast", "linear");
});

$('.login-submit').on('click', function() {
    var username = $('#email').val();
    var password = $('#pass').val();

    if (username === '') {
      $('#usernameError').removeClass('hidden').text('Please fill in the username field.');
    } else {
      $('#usernameError').addClass('hidden');
    }

    if (password === '') {
      $('#passwordError').removeClass('hidden').text('Please fill in the password field.');
    } else {
      $('#passwordError').addClass('hidden');
    }

    if (username !== '' && password !== '') {
      // Perform login logic here
    }
  });
